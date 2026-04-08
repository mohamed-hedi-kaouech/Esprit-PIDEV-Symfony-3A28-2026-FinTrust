// ─── Chart registry ───
const charts = {};
function destroyChart(id){if(charts[id]){charts[id].destroy();delete charts[id];}}

function showToast(msg,ms=3000){
    const t=document.getElementById('toast');
    t.textContent=msg;t.classList.add('show');
    setTimeout(()=>t.classList.remove('show'),ms);
}

// ─── Color palettes ───
const PALETTE_STATUS =['#1e8e3e','#d97706','#dc2626','#6b7f94'];
const PALETTE_CAT    =['#1a73e8','#0d47a1','#42a5f5','#1565c0','#90caf9','#1976d2'];
const PALETTE_TYPE   =['#7c3aed','#a855f7','#c084fc','#e879f9'];
const PALETTE_TIME   =['#1a73e8'];
const PALETTE_REV    =['#1a73e8','#d97706'];

// ─── Chart.js defaults ───
Chart.defaults.font.family="'DM Sans', sans-serif";
Chart.defaults.color='#6b7f94';

function makePie(canvasId, labels, data){
    destroyChart(canvasId);
    const ctx=document.getElementById(canvasId).getContext('2d');
    charts[canvasId]=new Chart(ctx,{
        type:'doughnut',
        data:{labels,datasets:[{data,backgroundColor:PALETTE_STATUS,borderWidth:2,borderColor:'#fff',hoverOffset:8}]},
        options:{
            responsive:true,maintainAspectRatio:false,
            plugins:{legend:{position:'bottom',labels:{padding:14,font:{size:11}}}}
        }
    });
}

function makeBar(canvasId, labels, datasets, opts={}){
    destroyChart(canvasId);
    const ctx=document.getElementById(canvasId).getContext('2d');
    charts[canvasId]=new Chart(ctx,{
        type:'bar',
        data:{labels,datasets},
        options:{
            responsive:true,maintainAspectRatio:false,
            plugins:{legend:{display:datasets.length>1,position:'top',labels:{font:{size:11}}}},
            scales:{
                x:{grid:{display:false},ticks:{font:{size:10}}},
                y:{grid:{color:'#e8edf2'},ticks:{font:{size:10}},beginAtZero:true}
            },
            ...opts
        }
    });
}

function makeLine(canvasId, labels, datasets){
    destroyChart(canvasId);
    const ctx=document.getElementById(canvasId).getContext('2d');
    charts[canvasId]=new Chart(ctx,{
        type:'line',
        data:{labels,datasets},
        options:{
            responsive:true,maintainAspectRatio:false,
            plugins:{legend:{display:false}},
            scales:{
                x:{grid:{display:false},ticks:{font:{size:10}}},
                y:{grid:{color:'#e8edf2'},ticks:{font:{size:10}},beginAtZero:true}
            }
        }
    });
}

// ─── Populate KPIs ───
function fillKPIs(d){
    document.getElementById('lblTotalProducts').textContent    = d.totalProducts ?? '—';
    document.getElementById('lblAvgPrice').textContent         = d.avgPrice != null ? d.avgPrice.toFixed(2) : '—';
    document.getElementById('lblTopCategory').textContent      = d.topCategory ?? '—';
    document.getElementById('lblTopCategoryCount').textContent = d.topCategoryCount != null ? `${d.topCategoryCount} produits` : '—';
    document.getElementById('lblPriceRange').textContent       = d.minPrice != null ? `${d.minPrice} → ${d.maxPrice}` : '—';
    document.getElementById('lblNewestProduct').textContent    = d.newestProduct ?? '—';
    document.getElementById('lblNewestDate').textContent       = d.newestDate ?? '—';

    const tot = d.totalSubs || 0;
    document.getElementById('lblTotalSubs').textContent     = tot;
    document.getElementById('lblActiveSubs').textContent    = d.activeSubs ?? '—';
    document.getElementById('lblSuspendedSubs').textContent = d.suspendedSubs ?? '—';
    document.getElementById('lblClosedSubs').textContent    = d.closedSubs ?? '—';
    document.getElementById('lblActiveRate').textContent    = tot ? `${((d.activeSubs/tot)*100).toFixed(1)}% du total` : '—';
    document.getElementById('lblSuspendedRate').textContent = tot ? `${((d.suspendedSubs/tot)*100).toFixed(1)}% du total` : '—';
    document.getElementById('lblClosedRate').textContent    = tot ? `${((d.closedSubs/tot)*100).toFixed(1)}% du total` : '—';
    document.getElementById('lblTotalRevenue').textContent  = d.totalRevenue != null ? `${d.totalRevenue.toFixed(2)} DT` : '—';
}

// ─── Build Charts ───
function buildCharts(d){
    // Pie: by status
    makePie('chartSubsByStatus',
        ['Actifs','Suspendus','Fermés','Brouillons'],
        [d.activeSubs||0, d.suspendedSubs||0, d.closedSubs||0, d.draftSubs||0]
    );

    // Bar: products by category
    const cats = Object.keys(d.productsByCategory || {});
    makeBar('chartProductsByCategory', cats,
        [{label:'Produits', data:cats.map(k=>d.productsByCategory[k]),
            backgroundColor:PALETTE_CAT.slice(0,cats.length), borderRadius:6, borderSkipped:false}]
    );

    // Bar: subs by type
    const types = Object.keys(d.subsByType || {});
    makeBar('chartSubsByType', types,
        [{label:'Abonnements', data:types.map(k=>d.subsByType[k]),
            backgroundColor:PALETTE_TYPE.slice(0,types.length), borderRadius:6, borderSkipped:false}]
    );

    // Line: subs over time
    const months = Object.keys(d.subsOverTime || {});
    makeLine('chartSubsOverTime', months,
        [{label:'Abonnements', data:months.map(k=>d.subsOverTime[k]),
            borderColor:'#1a73e8', backgroundColor:'rgba(26,115,232,0.08)',
            fill:true, tension:.4, pointRadius:4, pointBackgroundColor:'#1a73e8'}]
    );

    // Joint bar: revenue by category
    const rcats = Object.keys(d.revenueByCategory || {});
    makeBar('chartRevenueByCategory', rcats,[
        {label:'Revenu Estimé (DT)', data:rcats.map(k=>d.revenueByCategory[k].revenue),
            backgroundColor:'rgba(26,115,232,0.75)', borderRadius:6, borderSkipped:false, yAxisID:'y'},
        {label:'Abonnements Actifs', data:rcats.map(k=>d.revenueByCategory[k].subs),
            backgroundColor:'rgba(217,119,6,0.65)', borderRadius:6, borderSkipped:false, yAxisID:'y1'},
    ],{
        scales:{
            x:{grid:{display:false},ticks:{font:{size:10}}},
            y:{grid:{color:'#e8edf2'},ticks:{font:{size:10}},beginAtZero:true,position:'left',title:{display:true,text:'DT',font:{size:10}}},
            y1:{grid:{display:false},ticks:{font:{size:10}},beginAtZero:true,position:'right',title:{display:true,text:'Abonnements',font:{size:10}}}
        }
    });
}

// ─── Main load ───
async function loadDashboard(){
    const btn = document.getElementById('btnRefresh');
    btn.disabled = true;
    btn.textContent = '⟳  Chargement…';

    try {
        const res = await fetch('/admin/dashboard/data');
        if (!res.ok) throw new Error(`HTTP ${res.status}`);
        const d = await res.json();
        fillKPIs(d);
        buildCharts(d);
        const now = new Date().toLocaleString('fr-FR');
        document.getElementById('lblLastRefresh').textContent = `Dernière actualisation : ${now}`;
        showToast('✅ Données actualisées');
    } catch(e) {
        console.error(e);
        showToast('❌ Erreur lors du chargement', 4000);
    } finally {
        btn.disabled = false;
        btn.textContent = '⟳  Actualiser';
    }
}

async function sendEmailReport(){
    showToast('📧 Envoi du rapport PDF en cours…', 2000);
    try {
        const res = await fetch('/admin/dashboard/send-report', {method:'POST'});
        const d = await res.json();
        showToast(d.success ? '✅ Rapport envoyé par email' : '❌ Erreur lors de l\'envoi', 4000);
    } catch(e) {
        showToast('❌ Impossible d\'envoyer le rapport', 4000);
    }
}

// ─── Init ───
loadDashboard();