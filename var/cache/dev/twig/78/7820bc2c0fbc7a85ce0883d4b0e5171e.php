<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* LandingPage.html.twig */
class __TwigTemplate_5e41df9b5ea4c6955fc996dae809155f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LandingPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LandingPage.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>NexaBank — Admin Dashboard</title>
<link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=Syne:wght@500;600;700&display=swap\" rel=\"stylesheet\">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --blue-50: #E6F1FB;
    --blue-100: #B5D4F4;
    --blue-200: #85B7EB;
    --blue-400: #378ADD;
    --blue-600: #185FA5;
    --blue-800: #0C447C;
    --blue-900: #042C53;
    --white: #FFFFFF;
    --gray-50: #F7F9FC;
    --gray-100: #EEF2F7;
    --gray-200: #D8E0EC;
    --gray-400: #8A97AE;
    --gray-600: #4B5A72;
    --gray-900: #0F1D30;
    --success: #1D9E75;
    --warning: #BA7517;
    --danger: #E24B4A;
    --sidebar-w: 240px;
    --header-h: 62px;
    --font-display: 'Syne', sans-serif;
    --font-body: 'DM Sans', sans-serif;
    --radius-sm: 6px;
    --radius-md: 10px;
    --radius-lg: 14px;
    --radius-xl: 20px;
    --shadow-sm: 0 1px 3px rgba(15,29,48,0.08);
    --shadow-md: 0 4px 16px rgba(15,29,48,0.10);
  }

  body {
    font-family: var(--font-body);
    background: var(--gray-50);
    color: var(--gray-900);
    display: flex;
    min-height: 100vh;
    font-size: 14px;
    line-height: 1.6;
  }

  /* ─── SIDEBAR ─── */
  .sidebar {
    width: var(--sidebar-w);
    min-height: 100vh;
    background: var(--blue-900);
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 0; left: 0;
    z-index: 100;
  }

  .sidebar-logo {
    padding: 22px 24px 18px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .sidebar-logo .logo-mark {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .logo-icon {
    width: 34px; height: 34px;
    background: var(--blue-400);
    border-radius: var(--radius-sm);
    display: flex; align-items: center; justify-content: center;
  }
  .logo-icon svg { fill: #fff; width: 18px; height: 18px; }
  .logo-name {
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    letter-spacing: -0.3px;
  }
  .logo-name span { color: var(--blue-200); }

  .sidebar-role {
    padding: 12px 24px;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: var(--blue-200);
    opacity: 0.7;
  }

  .sidebar-nav { flex: 1; padding: 4px 12px; }

  .nav-section-label {
    font-size: 9px;
    font-weight: 600;
    letter-spacing: 1.3px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.3);
    padding: 14px 12px 6px;
  }

  .nav-item {
    display: flex;
    align-items: center;
    gap: 11px;
    padding: 9px 12px;
    border-radius: var(--radius-md);
    cursor: pointer;
    color: rgba(255,255,255,0.65);
    font-size: 13.5px;
    font-weight: 400;
    transition: all 0.15s;
    margin-bottom: 2px;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
  }
  .nav-item:hover { background: rgba(255,255,255,0.07); color: rgba(255,255,255,0.9); }
  .nav-item.active {
    background: var(--blue-600);
    color: #fff;
    font-weight: 500;
  }
  .nav-item .nav-icon {
    width: 20px; height: 20px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    opacity: 0.8;
  }
  .nav-item.active .nav-icon { opacity: 1; }
  .nav-badge {
    margin-left: auto;
    background: var(--blue-400);
    color: #fff;
    font-size: 10px;
    font-weight: 600;
    padding: 1px 7px;
    border-radius: 20px;
  }

  .sidebar-user {
    padding: 16px;
    border-top: 1px solid rgba(255,255,255,0.08);
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .user-avatar {
    width: 36px; height: 36px;
    border-radius: 50%;
    background: var(--blue-600);
    display: flex; align-items: center; justify-content: center;
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 600;
    color: #fff;
    flex-shrink: 0;
  }
  .user-info { flex: 1; min-width: 0; }
  .user-info .user-name {
    font-size: 13px;
    font-weight: 500;
    color: #fff;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .user-info .user-role {
    font-size: 11px;
    color: rgba(255,255,255,0.45);
  }
  .btn-logout {
    background: none; border: none; cursor: pointer;
    color: rgba(255,255,255,0.4);
    display: flex; align-items: center;
    padding: 4px;
    border-radius: 6px;
    transition: color 0.15s;
  }
  .btn-logout:hover { color: rgba(255,255,255,0.8); }

  /* ─── MAIN ─── */
  .main-wrapper {
    margin-left: var(--sidebar-w);
    flex: 1;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .topbar {
    height: var(--header-h);
    background: var(--white);
    border-bottom: 1px solid var(--gray-200);
    display: flex;
    align-items: center;
    padding: 0 32px;
    gap: 16px;
    position: sticky;
    top: 0;
    z-index: 50;
  }
  .topbar-title {
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 600;
    color: var(--gray-900);
    flex: 1;
  }
  .topbar-actions { display: flex; align-items: center; gap: 10px; }
  .search-box {
    display: flex;
    align-items: center;
    gap: 8px;
    background: var(--gray-100);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-md);
    padding: 7px 14px;
    width: 220px;
  }
  .search-box input {
    border: none;
    background: transparent;
    font-family: var(--font-body);
    font-size: 13px;
    color: var(--gray-900);
    outline: none;
    width: 100%;
  }
  .search-box input::placeholder { color: var(--gray-400); }
  .icon-btn {
    width: 36px; height: 36px;
    border-radius: var(--radius-md);
    background: var(--gray-100);
    border: 1px solid var(--gray-200);
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    color: var(--gray-600);
    transition: all 0.15s;
    position: relative;
  }
  .icon-btn:hover { background: var(--gray-200); }
  .notif-dot {
    position: absolute;
    top: 6px; right: 6px;
    width: 7px; height: 7px;
    border-radius: 50%;
    background: var(--danger);
    border: 2px solid var(--white);
  }
  .topbar-avatar {
    width: 36px; height: 36px;
    border-radius: 50%;
    background: var(--blue-800);
    display: flex; align-items: center; justify-content: center;
    font-size: 12px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
  }

  /* ─── PAGE CONTENT ─── */
  .page-content {
    padding: 28px 32px;
    flex: 1;
  }
  .page { display: none; }
  .page.active { display: block; }

  /* ─── PAGE HEADER ─── */
  .page-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 28px;
  }
  .page-header h1 {
    font-family: var(--font-display);
    font-size: 22px;
    font-weight: 600;
    color: var(--gray-900);
  }
  .page-header p {
    font-size: 13px;
    color: var(--gray-400);
    margin-top: 3px;
  }
  .btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 9px 18px;
    border-radius: var(--radius-md);
    font-family: var(--font-body);
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    transition: all 0.15s;
  }
  .btn-primary {
    background: var(--blue-600);
    color: #fff;
  }
  .btn-primary:hover { background: var(--blue-800); }
  .btn-outline {
    background: var(--white);
    color: var(--gray-600);
    border: 1px solid var(--gray-200);
  }
  .btn-outline:hover { background: var(--gray-100); }
  .btn-danger {
    background: #FEF0F0;
    color: var(--danger);
    border: 1px solid #F9C9C9;
  }
  .btn-sm { padding: 6px 12px; font-size: 12px; }

  /* ─── STAT CARDS ─── */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-bottom: 28px;
  }
  .stat-card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 20px 22px;
    position: relative;
    overflow: hidden;
  }
  .stat-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 3px;
    height: 100%;
  }
  .stat-card.blue::before { background: var(--blue-400); }
  .stat-card.green::before { background: var(--success); }
  .stat-card.amber::before { background: var(--warning); }
  .stat-card.red::before { background: var(--danger); }
  .stat-label {
    font-size: 11.5px;
    font-weight: 500;
    color: var(--gray-400);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 8px;
  }
  .stat-value {
    font-family: var(--font-display);
    font-size: 26px;
    font-weight: 600;
    color: var(--gray-900);
    line-height: 1;
    margin-bottom: 8px;
  }
  .stat-change {
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .stat-change.up { color: var(--success); }
  .stat-change.down { color: var(--danger); }
  .stat-icon {
    position: absolute;
    right: 18px; top: 18px;
    width: 38px; height: 38px;
    border-radius: var(--radius-md);
    display: flex; align-items: center; justify-content: center;
  }
  .stat-icon.blue { background: var(--blue-50); color: var(--blue-600); }
  .stat-icon.green { background: #E1F5EE; color: var(--success); }
  .stat-icon.amber { background: #FAEEDA; color: var(--warning); }
  .stat-icon.red { background: #FCEBEB; color: var(--danger); }

  /* ─── CARD ─── */
  .card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    overflow: hidden;
  }
  .card-header {
    padding: 18px 22px;
    border-bottom: 1px solid var(--gray-100);
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .card-title {
    font-family: var(--font-display);
    font-size: 14.5px;
    font-weight: 600;
    color: var(--gray-900);
  }
  .card-body { padding: 22px; }

  /* ─── TABLE ─── */
  .table-wrap { overflow-x: auto; }
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13.5px;
  }
  th {
    background: var(--gray-50);
    padding: 11px 16px;
    text-align: left;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    color: var(--gray-400);
    border-bottom: 1px solid var(--gray-200);
    white-space: nowrap;
  }
  td {
    padding: 13px 16px;
    border-bottom: 1px solid var(--gray-100);
    color: var(--gray-900);
    vertical-align: middle;
  }
  tr:last-child td { border-bottom: none; }
  tr:hover td { background: var(--gray-50); }
  .td-muted { color: var(--gray-400); font-size: 12.5px; }
  .avatar-cell {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .mini-avatar {
    width: 32px; height: 32px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 11px;
    font-weight: 600;
    color: #fff;
    flex-shrink: 0;
  }
  .bg-blue { background: var(--blue-600); }
  .bg-teal { background: #0F6E56; }
  .bg-coral { background: #993C1D; }
  .bg-purple { background: #534AB7; }
  .bg-amber { background: #854F0B; }

  /* ─── BADGES ─── */
  .badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 11.5px;
    font-weight: 600;
    white-space: nowrap;
  }
  .badge-dot { width: 6px; height: 6px; border-radius: 50%; }
  .badge-success { background: #E1F5EE; color: #085041; }
  .badge-success .badge-dot { background: var(--success); }
  .badge-warning { background: #FAEEDA; color: #633806; }
  .badge-warning .badge-dot { background: var(--warning); }
  .badge-danger { background: #FCEBEB; color: #501313; }
  .badge-danger .badge-dot { background: var(--danger); }
  .badge-blue { background: var(--blue-50); color: var(--blue-800); }
  .badge-blue .badge-dot { background: var(--blue-400); }
  .badge-gray { background: var(--gray-100); color: var(--gray-600); }
  .badge-gray .badge-dot { background: var(--gray-400); }

  /* ─── GRID LAYOUTS ─── */
  .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
  .three-col { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; }
  .col-7-5 { display: grid; grid-template-columns: 1.4fr 1fr; gap: 20px; }

  /* ─── FORM ELEMENTS ─── */
  .form-group { margin-bottom: 18px; }
  .form-label {
    display: block;
    font-size: 12.5px;
    font-weight: 500;
    color: var(--gray-600);
    margin-bottom: 6px;
  }
  .form-control {
    width: 100%;
    padding: 9px 14px;
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-md);
    font-family: var(--font-body);
    font-size: 13.5px;
    color: var(--gray-900);
    background: var(--white);
    outline: none;
    transition: border-color 0.15s;
  }
  .form-control:focus { border-color: var(--blue-400); box-shadow: 0 0 0 3px rgba(55,138,221,0.12); }
  select.form-control { cursor: pointer; }
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

  /* ─── TABS ─── */
  .tabs {
    display: flex;
    gap: 4px;
    background: var(--gray-100);
    padding: 4px;
    border-radius: var(--radius-md);
    margin-bottom: 24px;
    width: fit-content;
  }
  .tab-btn {
    padding: 7px 20px;
    border-radius: var(--radius-sm);
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    background: none;
    color: var(--gray-400);
    transition: all 0.15s;
    font-family: var(--font-body);
  }
  .tab-btn.active {
    background: var(--white);
    color: var(--blue-800);
    box-shadow: var(--shadow-sm);
  }

  /* ─── MINI CHART BARS ─── */
  .mini-bars {
    display: flex;
    align-items: flex-end;
    gap: 3px;
    height: 40px;
  }
  .mini-bar {
    flex: 1;
    background: var(--blue-100);
    border-radius: 3px 3px 0 0;
    transition: background 0.15s;
  }
  .mini-bar.active { background: var(--blue-400); }
  .mini-bar:hover { background: var(--blue-200); }

  /* ─── PROGRESS ─── */
  .progress-bar {
    height: 6px;
    background: var(--gray-200);
    border-radius: 10px;
    overflow: hidden;
  }
  .progress-fill {
    height: 100%;
    border-radius: 10px;
    background: var(--blue-400);
  }
  .progress-fill.green { background: var(--success); }
  .progress-fill.amber { background: var(--warning); }
  .progress-fill.red { background: var(--danger); }

  /* ─── TRANSACTION ITEM ─── */
  .txn-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 13px 0;
    border-bottom: 1px solid var(--gray-100);
  }
  .txn-item:last-child { border-bottom: none; }
  .txn-icon {
    width: 38px; height: 38px;
    border-radius: var(--radius-md);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .txn-info { flex: 1; min-width: 0; }
  .txn-name { font-size: 13.5px; font-weight: 500; color: var(--gray-900); }
  .txn-date { font-size: 12px; color: var(--gray-400); }
  .txn-amount { font-size: 14px; font-weight: 600; }
  .txn-amount.credit { color: var(--success); }
  .txn-amount.debit { color: var(--danger); }

  /* ─── LOAN CARD ─── */
  .loan-card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 20px;
    position: relative;
  }
  .loan-card .loan-type {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    color: var(--blue-600);
    margin-bottom: 6px;
  }
  .loan-card .loan-amount {
    font-family: var(--font-display);
    font-size: 22px;
    font-weight: 600;
    color: var(--gray-900);
    margin-bottom: 12px;
  }
  .loan-meta {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-bottom: 16px;
  }
  .loan-meta-item .label { font-size: 11px; color: var(--gray-400); margin-bottom: 2px; }
  .loan-meta-item .value { font-size: 13px; font-weight: 500; color: var(--gray-900); }

  /* ─── WALLET CARD ─── */
  .wallet-card-display {
    background: linear-gradient(135deg, var(--blue-800) 0%, var(--blue-600) 60%, var(--blue-400) 100%);
    border-radius: var(--radius-xl);
    padding: 28px;
    color: #fff;
    position: relative;
    overflow: hidden;
  }
  .wallet-card-display::before {
    content: '';
    position: absolute;
    width: 200px; height: 200px;
    border-radius: 50%;
    background: rgba(255,255,255,0.06);
    top: -60px; right: -40px;
  }
  .wallet-card-display::after {
    content: '';
    position: absolute;
    width: 140px; height: 140px;
    border-radius: 50%;
    background: rgba(255,255,255,0.04);
    bottom: -40px; right: 80px;
  }
  .wallet-bank-name {
    font-family: var(--font-display);
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1px;
    opacity: 0.9;
    margin-bottom: 24px;
  }
  .wallet-balance-label { font-size: 11px; opacity: 0.65; margin-bottom: 4px; letter-spacing: 0.5px; }
  .wallet-balance {
    font-family: var(--font-display);
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 28px;
    letter-spacing: -0.5px;
  }
  .wallet-card-footer { display: flex; justify-content: space-between; align-items: flex-end; }
  .wallet-holder-name { font-size: 13px; font-weight: 500; letter-spacing: 0.5px; }
  .wallet-card-number { font-size: 13px; opacity: 0.6; letter-spacing: 1px; }

  /* ─── PUBLICATION CARD ─── */
  .pub-card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    overflow: hidden;
  }
  .pub-card-img {
    height: 130px;
    background: var(--blue-50);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .pub-card-body { padding: 16px; }
  .pub-tag {
    display: inline-block;
    background: var(--blue-50);
    color: var(--blue-800);
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    padding: 3px 8px;
    border-radius: 4px;
    margin-bottom: 8px;
  }
  .pub-title {
    font-family: var(--font-display);
    font-size: 14px;
    font-weight: 600;
    color: var(--gray-900);
    margin-bottom: 8px;
    line-height: 1.4;
  }
  .pub-excerpt { font-size: 12.5px; color: var(--gray-400); line-height: 1.6; margin-bottom: 12px; }
  .pub-footer { display: flex; justify-content: space-between; align-items: center; }
  .pub-author { font-size: 12px; color: var(--gray-600); }
  .pub-date { font-size: 11.5px; color: var(--gray-400); }

  /* ─── RESPONSIVE ─── */
  @media (max-width: 1100px) {
    .stats-grid { grid-template-columns: 1fr 1fr; }
    .col-7-5 { grid-template-columns: 1fr; }
  }
  @media (max-width: 768px) {
    :root { --sidebar-w: 200px; }
    .stats-grid { grid-template-columns: 1fr 1fr; }
    .three-col { grid-template-columns: 1fr 1fr; }
  }

  /* Utility */
  .mb-20 { margin-bottom: 20px; }
  .mb-24 { margin-bottom: 24px; }
  .flex { display: flex; }
  .items-center { align-items: center; }
  .justify-between { justify-content: space-between; }
  .gap-8 { gap: 8px; }
  .gap-12 { gap: 12px; }
  .gap-16 { gap: 16px; }
  .text-sm { font-size: 12.5px; color: var(--gray-400); }
  .font-medium { font-weight: 500; }
</style>
</head>
<body>

<!-- ═══════════ SIDEBAR ═══════════ -->
<aside class=\"sidebar\">
  <div class=\"sidebar-logo\">
    <div class=\"logo-mark\">
      <div class=\"logo-icon\">
        <svg viewBox=\"0 0 24 24\"><path d=\"M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5\"/></svg>
      </div>
      <span class=\"logo-name\">Nexa<span>Bank</span></span>
    </div>
  </div>

  <div class=\"sidebar-role\">Administrator Portal</div>

  <nav class=\"sidebar-nav\">
    <div class=\"nav-section-label\">Overview</div>
    <button class=\"nav-item active\" onclick=\"showPage('dashboard', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/></svg>
      </span>
      Dashboard
    </button>

    <div class=\"nav-section-label\">User Management</div>
    <button class=\"nav-item\" onclick=\"showPage('clients', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
      </span>
      Clients
      <span class=\"nav-badge\">248</span>
    </button>
    <button class=\"nav-item\" onclick=\"showPage('admins', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/></svg>
      </span>
      Admins
    </button>

    <div class=\"nav-section-label\">Banking</div>
    <button class=\"nav-item\" onclick=\"showPage('products', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"2\" y=\"3\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M8 21h8M12 17v4\"/></svg>
      </span>
      Products
    </button>
    <button class=\"nav-item\" onclick=\"showPage('loans', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/></svg>
      </span>
      Loans
      <span class=\"nav-badge\">12</span>
    </button>
    <button class=\"nav-item\" onclick=\"showPage('wallet', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 12V7H5a2 2 0 0 1 0-4h14v4\"/><path d=\"M3 5v14a2 2 0 0 0 2 2h16v-5\"/><path d=\"M18 12a2 2 0 0 0 0 4h4v-4z\"/></svg>
      </span>
      Wallet
    </button>

    <div class=\"nav-section-label\">Content</div>
    <button class=\"nav-item\" onclick=\"showPage('publications', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/><path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/></svg>
      </span>
      Publications
    </button>
  </nav>

  <div class=\"sidebar-user\">
    <div class=\"user-avatar\">AD</div>
    <div class=\"user-info\">
      <div class=\"user-name\">Adam Diallo</div>
      <div class=\"user-role\">Super Admin</div>
    </div>
    <button class=\"btn-logout\" title=\"Logout\">
      <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><polyline points=\"16 17 21 12 16 7\"/><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/></svg>
    </button>
  </div>
</aside>

<!-- ═══════════ MAIN ═══════════ -->
<div class=\"main-wrapper\">
  <header class=\"topbar\">
    <div class=\"topbar-title\" id=\"page-title\">Dashboard</div>
    <div class=\"topbar-actions\">
      <div class=\"search-box\">
        <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#8A97AE\" stroke-width=\"2\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"M21 21l-4.35-4.35\"/></svg>
        <input type=\"text\" placeholder=\"Search…\">
      </div>
      <button class=\"icon-btn\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/></svg>
        <span class=\"notif-dot\"></span>
      </button>
      <button class=\"icon-btn\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><circle cx=\"12\" cy=\"12\" r=\"3\"/><path d=\"M19.07 4.93l-1.41 1.41M19.07 19.07l-1.41-1.41M4.93 4.93l1.41 1.41M4.93 19.07l1.41-1.41M12 2v2M12 20v2M2 12h2M20 12h2\"/></svg>
      </button>
      <div class=\"topbar-avatar\">AD</div>
    </div>
  </header>

  <main class=\"page-content\">

    <!-- ═══ PAGE: DASHBOARD ═══ -->
    <div class=\"page active\" id=\"page-dashboard\">
      <div class=\"page-header\">
        <div>
          <h1>Good morning, Adam 👋</h1>
          <p>Here's what's happening with NexaBank today.</p>
        </div>
        <div class=\"flex gap-8\">
          <button class=\"btn btn-outline\">
            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/></svg>
            April 2026
          </button>
          <button class=\"btn btn-primary\">
            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"/><polyline points=\"7 10 12 15 17 10\"/><line x1=\"12\" y1=\"15\" x2=\"12\" y2=\"3\"/></svg>
            Export Report
          </button>
        </div>
      </div>

      <div class=\"stats-grid\">
        <div class=\"stat-card blue\">
          <div class=\"stat-icon blue\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
          </div>
          <div class=\"stat-label\">Total Clients</div>
          <div class=\"stat-value\">2,481</div>
          <div class=\"stat-change up\">
            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>
            +14.2% this month
          </div>
        </div>
        <div class=\"stat-card green\">
          <div class=\"stat-icon green\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/></svg>
          </div>
          <div class=\"stat-label\">Assets Under Mgmt</div>
          <div class=\"stat-value\">\$84.3M</div>
          <div class=\"stat-change up\">
            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>
            +8.7% this month
          </div>
        </div>
        <div class=\"stat-card amber\">
          <div class=\"stat-icon amber\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 12V7H5a2 2 0 0 1 0-4h14v4\"/><path d=\"M3 5v14a2 2 0 0 0 2 2h16v-5\"/><path d=\"M18 12a2 2 0 0 0 0 4h4v-4z\"/></svg>
          </div>
          <div class=\"stat-label\">Active Loans</div>
          <div class=\"stat-value\">347</div>
          <div class=\"stat-change down\">
            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"6 9 12 15 18 9\"/></svg>
            −2.1% this month
          </div>
        </div>
        <div class=\"stat-card red\">
          <div class=\"stat-icon red\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"/><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"/><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"/></svg>
          </div>
          <div class=\"stat-label\">Pending Approvals</div>
          <div class=\"stat-value\">12</div>
          <div class=\"stat-change up\">
            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>
            Needs action
          </div>
        </div>
      </div>

      <div class=\"col-7-5 mb-24\">
        <!-- Recent Transactions -->
        <div class=\"card\">
          <div class=\"card-header\">
            <span class=\"card-title\">Recent Transactions</span>
            <button class=\"btn btn-outline btn-sm\">View All</button>
          </div>
          <div class=\"card-body\" style=\"padding:0;\">
            <div style=\"padding: 0 22px;\">
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#E1F5EE;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">Wire Transfer Received</div>
                  <div class=\"txn-date\">Apr 4, 2026 · 09:41 AM</div>
                </div>
                <div class=\"txn-amount credit\">+\$12,400.00</div>
              </div>
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#FCEBEB;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#E24B4A\" stroke-width=\"2\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">Loan Disbursement</div>
                  <div class=\"txn-date\">Apr 4, 2026 · 08:15 AM</div>
                </div>
                <div class=\"txn-amount debit\">−\$8,500.00</div>
              </div>
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#E1F5EE;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">Deposit — Savings Account</div>
                  <div class=\"txn-date\">Apr 3, 2026 · 04:30 PM</div>
                </div>
                <div class=\"txn-amount credit\">+\$3,200.00</div>
              </div>
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#FCEBEB;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#E24B4A\" stroke-width=\"2\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">ATM Withdrawal</div>
                  <div class=\"txn-date\">Apr 3, 2026 · 01:22 PM</div>
                </div>
                <div class=\"txn-amount debit\">−\$500.00</div>
              </div>
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#E1F5EE;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">Card Payment Received</div>
                  <div class=\"txn-date\">Apr 3, 2026 · 10:05 AM</div>
                </div>
                <div class=\"txn-amount credit\">+\$670.50</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right column -->
        <div style=\"display:flex; flex-direction:column; gap:20px;\">
          <!-- Revenue mini chart -->
          <div class=\"card\">
            <div class=\"card-header\">
              <span class=\"card-title\">Monthly Revenue</span>
              <span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Live</span>
            </div>
            <div class=\"card-body\">
              <div style=\"font-family:var(--font-display); font-size:28px; font-weight:600; color:var(--gray-900); margin-bottom:4px;\">\$1.24M</div>
              <div class=\"text-sm\" style=\"margin-bottom:16px;\">April 2026 · 4 days in</div>
              <div class=\"mini-bars\">
                <div class=\"mini-bar\" style=\"height:45%;\"></div>
                <div class=\"mini-bar\" style=\"height:60%;\"></div>
                <div class=\"mini-bar\" style=\"height:40%;\"></div>
                <div class=\"mini-bar\" style=\"height:70%;\"></div>
                <div class=\"mini-bar\" style=\"height:55%;\"></div>
                <div class=\"mini-bar\" style=\"height:80%;\"></div>
                <div class=\"mini-bar\" style=\"height:65%;\"></div>
                <div class=\"mini-bar\" style=\"height:90%;\"></div>
                <div class=\"mini-bar\" style=\"height:75%;\"></div>
                <div class=\"mini-bar active\" style=\"height:100%;\"></div>
              </div>
            </div>
          </div>
          <!-- Loan distribution -->
          <div class=\"card\">
            <div class=\"card-header\"><span class=\"card-title\">Loan Portfolio</span></div>
            <div class=\"card-body\">
              <div style=\"margin-bottom:12px;\">
                <div class=\"flex justify-between items-center\" style=\"margin-bottom:6px;\">
                  <span style=\"font-size:13px;\">Personal Loans</span>
                  <span style=\"font-size:13px; font-weight:500;\">48%</span>
                </div>
                <div class=\"progress-bar\"><div class=\"progress-fill\" style=\"width:48%;\"></div></div>
              </div>
              <div style=\"margin-bottom:12px;\">
                <div class=\"flex justify-between items-center\" style=\"margin-bottom:6px;\">
                  <span style=\"font-size:13px;\">Mortgage</span>
                  <span style=\"font-size:13px; font-weight:500;\">31%</span>
                </div>
                <div class=\"progress-bar\"><div class=\"progress-fill green\" style=\"width:31%;\"></div></div>
              </div>
              <div>
                <div class=\"flex justify-between items-center\" style=\"margin-bottom:6px;\">
                  <span style=\"font-size:13px;\">Business Loans</span>
                  <span style=\"font-size:13px; font-weight:500;\">21%</span>
                </div>
                <div class=\"progress-bar\"><div class=\"progress-fill amber\" style=\"width:21%;\"></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: CLIENTS ═══ -->
    <div class=\"page\" id=\"page-clients\">
      <div class=\"page-header\">
        <div>
          <h1>Clients</h1>
          <p>Manage and monitor all client accounts.</p>
        </div>
        <button class=\"btn btn-primary\">
          <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
          Add Client
        </button>
      </div>
      <div class=\"stats-grid mb-24\">
        <div class=\"stat-card blue\"><div class=\"stat-label\">Total Clients</div><div class=\"stat-value\">2,481</div><div class=\"stat-change up\"><svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>+14.2%</div></div>
        <div class=\"stat-card green\"><div class=\"stat-label\">Active</div><div class=\"stat-value\">2,140</div><div class=\"stat-change up\"><svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>+6.1%</div></div>
        <div class=\"stat-card amber\"><div class=\"stat-label\">Pending KYC</div><div class=\"stat-value\">84</div><div class=\"stat-change up\"><svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>Needs review</div></div>
        <div class=\"stat-card red\"><div class=\"stat-label\">Suspended</div><div class=\"stat-value\">17</div><div class=\"stat-change down\"><svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"6 9 12 15 18 9\"/></svg>−3 this week</div></div>
      </div>
      <div class=\"card\">
        <div class=\"card-header\">
          <span class=\"card-title\">Client Directory</span>
          <div class=\"flex gap-8\">
            <select class=\"form-control\" style=\"width:140px; padding:7px 12px; font-size:13px;\">
              <option>All Status</option>
              <option>Active</option>
              <option>Pending</option>
              <option>Suspended</option>
            </select>
            <button class=\"btn btn-outline btn-sm\">
              <svg width=\"13\" height=\"13\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\"/><line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\"/><line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\"/><line x1=\"3\" y1=\"6\" x2=\"3.01\" y2=\"6\"/><line x1=\"3\" y1=\"12\" x2=\"3.01\" y2=\"12\"/><line x1=\"3\" y1=\"18\" x2=\"3.01\" y2=\"18\"/></svg>
              Filter
            </button>
          </div>
        </div>
        <div class=\"table-wrap\">
          <table>
            <thead>
              <tr>
                <th>Client</th>
                <th>Account No.</th>
                <th>Account Type</th>
                <th>Balance</th>
                <th>Status</th>
                <th>Joined</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-blue\">SM</div><div><div class=\"font-medium\">Sophia Martin</div><div class=\"td-muted\">sophia.m@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-2891</td>
                <td><span class=\"badge badge-blue\">Premium</span></td>
                <td class=\"font-medium\">\$42,810.00</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td class=\"td-muted\">Jan 12, 2023</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-teal\">JR</div><div><div class=\"font-medium\">James Rowe</div><div class=\"td-muted\">j.rowe@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-3312</td>
                <td><span class=\"badge badge-gray\">Standard</span></td>
                <td class=\"font-medium\">\$8,200.00</td>
                <td><span class=\"badge badge-warning\"><span class=\"badge-dot\"></span>KYC Pending</span></td>
                <td class=\"td-muted\">Mar 5, 2024</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-coral\">AL</div><div><div class=\"font-medium\">Aïcha Lebreton</div><div class=\"td-muted\">a.lebreton@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-4480</td>
                <td><span class=\"badge badge-blue\">Premium</span></td>
                <td class=\"font-medium\">\$97,540.00</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td class=\"td-muted\">Jun 20, 2022</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-purple\">KT</div><div><div class=\"font-medium\">Kofi Tawiah</div><div class=\"td-muted\">k.tawiah@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-5601</td>
                <td><span class=\"badge badge-gray\">Standard</span></td>
                <td class=\"font-medium\">\$1,390.00</td>
                <td><span class=\"badge badge-danger\"><span class=\"badge-dot\"></span>Suspended</span></td>
                <td class=\"td-muted\">Aug 11, 2024</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-amber\">NP</div><div><div class=\"font-medium\">Nadia Petit</div><div class=\"td-muted\">nadia.p@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-6024</td>
                <td><span class=\"badge badge-blue\">Business</span></td>
                <td class=\"font-medium\">\$214,000.00</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td class=\"td-muted\">Feb 2, 2021</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: ADMINS ═══ -->
    <div class=\"page\" id=\"page-admins\">
      <div class=\"page-header\">
        <div><h1>Administrators</h1><p>Manage admin roles and permissions.</p></div>
        <button class=\"btn btn-primary\">
          <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
          Add Admin
        </button>
      </div>
      <div class=\"card\">
        <div class=\"card-header\"><span class=\"card-title\">Admin Accounts</span></div>
        <div class=\"table-wrap\">
          <table>
            <thead>
              <tr><th>Admin</th><th>Role</th><th>Permissions</th><th>Last Active</th><th>Status</th><th>Actions</th></tr>
            </thead>
            <tbody>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-blue\">AD</div><div><div class=\"font-medium\">Adam Diallo</div><div class=\"td-muted\">a.diallo@nexabank.com</div></div></div></td>
                <td><span class=\"badge badge-blue\">Super Admin</span></td>
                <td class=\"td-muted\">Full Access</td>
                <td class=\"td-muted\">Now</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td><button class=\"btn btn-outline btn-sm\" disabled>You</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-teal\">MB</div><div><div class=\"font-medium\">Marie Bouchard</div><div class=\"td-muted\">m.bouchard@nexabank.com</div></div></div></td>
                <td><span class=\"badge badge-gray\">Loan Manager</span></td>
                <td class=\"td-muted\">Loans, Clients</td>
                <td class=\"td-muted\">2 hours ago</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td><button class=\"btn btn-outline btn-sm\">Edit</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-purple\">YS</div><div><div class=\"font-medium\">Yannick Sarr</div><div class=\"td-muted\">y.sarr@nexabank.com</div></div></div></td>
                <td><span class=\"badge badge-gray\">Content Editor</span></td>
                <td class=\"td-muted\">Publications</td>
                <td class=\"td-muted\">Yesterday</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td><button class=\"btn btn-outline btn-sm\">Edit</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: PRODUCTS ═══ -->
    <div class=\"page\" id=\"page-products\">
      <div class=\"page-header\">
        <div><h1>Products</h1><p>Banking products and service offerings.</p></div>
        <button class=\"btn btn-primary\">
          <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
          New Product
        </button>
      </div>
      <div class=\"three-col mb-24\" style=\"grid-template-columns:repeat(3,1fr);\">
        <div class=\"card\">
          <div style=\"background:var(--blue-50); padding:20px; display:flex; justify-content:center;\">
            <div style=\"width:56px;height:56px;background:var(--blue-600);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;\">
              <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1.8\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><line x1=\"2\" y1=\"10\" x2=\"22\" y2=\"10\"/></svg>
            </div>
          </div>
          <div class=\"card-body\">
            <div style=\"font-family:var(--font-display);font-size:15px;font-weight:600;margin-bottom:6px;\">Checking Account</div>
            <div class=\"text-sm\" style=\"margin-bottom:16px;\">Everyday banking with zero fees and instant transfers.</div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:10px;\">
              <span class=\"td-muted\">Interest Rate</span><span class=\"font-medium\">0.05% p.a.</span>
            </div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:16px;\">
              <span class=\"td-muted\">Subscribers</span><span class=\"font-medium\">1,842</span>
            </div>
            <div class=\"flex gap-8\">
              <span class=\"badge badge-success\" style=\"flex:1;justify-content:center;\"><span class=\"badge-dot\"></span>Active</span>
              <button class=\"btn btn-outline btn-sm\">Edit</button>
            </div>
          </div>
        </div>
        <div class=\"card\">
          <div style=\"background:#E1F5EE; padding:20px; display:flex; justify-content:center;\">
            <div style=\"width:56px;height:56px;background:var(--success);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;\">
              <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1.8\"><path d=\"M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0H5m0 0H3m2 0H7m0-16h4m0 0V3m0 2v0m3 14v-6a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v6\"/></svg>
            </div>
          </div>
          <div class=\"card-body\">
            <div style=\"font-family:var(--font-display);font-size:15px;font-weight:600;margin-bottom:6px;\">Savings Account</div>
            <div class=\"text-sm\" style=\"margin-bottom:16px;\">High-yield savings with flexible withdrawal terms.</div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:10px;\">
              <span class=\"td-muted\">Interest Rate</span><span class=\"font-medium\">4.20% p.a.</span>
            </div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:16px;\">
              <span class=\"td-muted\">Subscribers</span><span class=\"font-medium\">912</span>
            </div>
            <div class=\"flex gap-8\">
              <span class=\"badge badge-success\" style=\"flex:1;justify-content:center;\"><span class=\"badge-dot\"></span>Active</span>
              <button class=\"btn btn-outline btn-sm\">Edit</button>
            </div>
          </div>
        </div>
        <div class=\"card\">
          <div style=\"background:#FAEEDA; padding:20px; display:flex; justify-content:center;\">
            <div style=\"width:56px;height:56px;background:var(--warning);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;\">
              <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1.8\"><rect x=\"1\" y=\"4\" width=\"22\" height=\"16\" rx=\"2\"/><line x1=\"1\" y1=\"10\" x2=\"23\" y2=\"10\"/></svg>
            </div>
          </div>
          <div class=\"card-body\">
            <div style=\"font-family:var(--font-display);font-size:15px;font-weight:600;margin-bottom:6px;\">Premium Debit Card</div>
            <div class=\"text-sm\" style=\"margin-bottom:16px;\">Contactless payments, cashback rewards, and travel perks.</div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:10px;\">
              <span class=\"td-muted\">Annual Fee</span><span class=\"font-medium\">\$49 / year</span>
            </div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:16px;\">
              <span class=\"td-muted\">Subscribers</span><span class=\"font-medium\">584</span>
            </div>
            <div class=\"flex gap-8\">
              <span class=\"badge badge-warning\" style=\"flex:1;justify-content:center;\"><span class=\"badge-dot\"></span>Beta</span>
              <button class=\"btn btn-outline btn-sm\">Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: LOANS ═══ -->
    <div class=\"page\" id=\"page-loans\">
      <div class=\"page-header\">
        <div><h1>Loans</h1><p>Review and manage loan applications.</p></div>
        <button class=\"btn btn-primary\">New Application</button>
      </div>

      <div class=\"tabs\">
        <button class=\"tab-btn active\" onclick=\"switchTab(this, 'tab-pending')\">Pending (12)</button>
        <button class=\"tab-btn\" onclick=\"switchTab(this, 'tab-active')\">Active (335)</button>
        <button class=\"tab-btn\" onclick=\"switchTab(this, 'tab-closed')\">Closed</button>
      </div>

      <div id=\"tab-pending\">
        <div style=\"display:grid; grid-template-columns:repeat(3,1fr); gap:18px;\">
          <div class=\"loan-card\">
            <div class=\"loan-type\">Personal Loan · Application</div>
            <div class=\"loan-amount\">\$15,000</div>
            <div class=\"loan-meta\">
              <div class=\"loan-meta-item\"><div class=\"label\">Applicant</div><div class=\"value\">Sophia Martin</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Duration</div><div class=\"value\">36 months</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Rate</div><div class=\"value\">7.4% p.a.</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Monthly</div><div class=\"value\">\$464.53</div></div>
            </div>
            <div class=\"progress-bar\" style=\"margin-bottom:14px;\"><div class=\"progress-fill\" style=\"width:60%;\"></div></div>
            <div class=\"text-sm\" style=\"margin-bottom:14px;\">Credit score: 720 · Risk: Low</div>
            <div class=\"flex gap-8\">
              <button class=\"btn btn-primary btn-sm\" style=\"flex:1;\">Approve</button>
              <button class=\"btn btn-danger btn-sm\">Reject</button>
            </div>
          </div>
          <div class=\"loan-card\">
            <div class=\"loan-type\">Mortgage · Application</div>
            <div class=\"loan-amount\">\$280,000</div>
            <div class=\"loan-meta\">
              <div class=\"loan-meta-item\"><div class=\"label\">Applicant</div><div class=\"value\">James Rowe</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Duration</div><div class=\"value\">240 months</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Rate</div><div class=\"value\">5.1% p.a.</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Monthly</div><div class=\"value\">\$1,870.00</div></div>
            </div>
            <div class=\"progress-bar\" style=\"margin-bottom:14px;\"><div class=\"progress-fill amber\" style=\"width:35%;\"></div></div>
            <div class=\"text-sm\" style=\"margin-bottom:14px;\">Credit score: 680 · Risk: Medium</div>
            <div class=\"flex gap-8\">
              <button class=\"btn btn-primary btn-sm\" style=\"flex:1;\">Approve</button>
              <button class=\"btn btn-danger btn-sm\">Reject</button>
            </div>
          </div>
          <div class=\"loan-card\">
            <div class=\"loan-type\">Business Loan · Application</div>
            <div class=\"loan-amount\">\$80,000</div>
            <div class=\"loan-meta\">
              <div class=\"loan-meta-item\"><div class=\"label\">Applicant</div><div class=\"value\">Nadia Petit</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Duration</div><div class=\"value\">60 months</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Rate</div><div class=\"value\">6.8% p.a.</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Monthly</div><div class=\"value\">\$1,573.20</div></div>
            </div>
            <div class=\"progress-bar\" style=\"margin-bottom:14px;\"><div class=\"progress-fill green\" style=\"width:80%;\"></div></div>
            <div class=\"text-sm\" style=\"margin-bottom:14px;\">Credit score: 760 · Risk: Low</div>
            <div class=\"flex gap-8\">
              <button class=\"btn btn-primary btn-sm\" style=\"flex:1;\">Approve</button>
              <button class=\"btn btn-danger btn-sm\">Reject</button>
            </div>
          </div>
        </div>
      </div>

      <div id=\"tab-active\" style=\"display:none;\">
        <div class=\"card\">
          <div class=\"table-wrap\">
            <table>
              <thead><tr><th>Client</th><th>Type</th><th>Amount</th><th>Rate</th><th>Progress</th><th>Next Payment</th><th>Status</th></tr></thead>
              <tbody>
                <tr>
                  <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-blue\">AL</div><div class=\"font-medium\">Aïcha Lebreton</div></div></td>
                  <td class=\"td-muted\">Personal</td>
                  <td class=\"font-medium\">\$20,000</td>
                  <td class=\"td-muted\">7.2%</td>
                  <td style=\"width:140px;\"><div class=\"progress-bar\"><div class=\"progress-fill green\" style=\"width:65%;\"></div></div><div class=\"td-muted\" style=\"margin-top:4px; font-size:11px;\">65% repaid</div></td>
                  <td class=\"td-muted\">May 1, 2026</td>
                  <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>On track</span></td>
                </tr>
                <tr>
                  <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-teal\">KT</div><div class=\"font-medium\">Kofi Tawiah</div></div></td>
                  <td class=\"td-muted\">Mortgage</td>
                  <td class=\"font-medium\">\$195,000</td>
                  <td class=\"td-muted\">5.5%</td>
                  <td style=\"width:140px;\"><div class=\"progress-bar\"><div class=\"progress-fill amber\" style=\"width:20%;\"></div></div><div class=\"td-muted\" style=\"margin-top:4px; font-size:11px;\">20% repaid</div></td>
                  <td class=\"td-muted\">May 1, 2026</td>
                  <td><span class=\"badge badge-warning\"><span class=\"badge-dot\"></span>Late</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div id=\"tab-closed\" style=\"display:none;\">
        <div class=\"card card-body\" style=\"text-align:center; color:var(--gray-400); padding:40px;\">No closed loans found.</div>
      </div>
    </div>

    <!-- ═══ PAGE: WALLET ═══ -->
    <div class=\"page\" id=\"page-wallet\">
      <div class=\"page-header\">
        <div><h1>Wallet</h1><p>Client wallet balances and transactions.</p></div>
        <button class=\"btn btn-primary\">Fund Wallet</button>
      </div>
      <div class=\"two-col mb-24\">
        <div>
          <div class=\"wallet-card-display\" style=\"margin-bottom:20px;\">
            <div class=\"wallet-bank-name\">NEXABANK</div>
            <div class=\"wallet-balance-label\">AVAILABLE BALANCE</div>
            <div class=\"wallet-balance\">\$42,810.00</div>
            <div class=\"wallet-card-footer\">
              <div>
                <div class=\"wallet-holder-name\">SOPHIA MARTIN</div>
                <div class=\"wallet-card-number\">**** **** **** 4821</div>
              </div>
              <svg width=\"40\" height=\"28\" viewBox=\"0 0 40 28\" fill=\"none\"><circle cx=\"14\" cy=\"14\" r=\"14\" fill=\"rgba(255,255,255,0.25)\"/><circle cx=\"26\" cy=\"14\" r=\"14\" fill=\"rgba(255,255,255,0.15)\"/></svg>
            </div>
          </div>
          <div class=\"card\">
            <div class=\"card-header\"><span class=\"card-title\">Quick Actions</span></div>
            <div class=\"card-body\" style=\"display:grid; grid-template-columns:1fr 1fr; gap:10px;\">
              <button class=\"btn btn-primary\" style=\"justify-content:center;\">Transfer</button>
              <button class=\"btn btn-outline\" style=\"justify-content:center;\">Withdraw</button>
              <button class=\"btn btn-outline\" style=\"justify-content:center;\">Top Up</button>
              <button class=\"btn btn-outline\" style=\"justify-content:center;\">Statement</button>
            </div>
          </div>
        </div>
        <div class=\"card\">
          <div class=\"card-header\"><span class=\"card-title\">Recent Activity</span></div>
          <div style=\"padding: 0 22px;\">
            <div class=\"txn-item\"><div class=\"txn-icon\" style=\"background:#E1F5EE;\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg></div><div class=\"txn-info\"><div class=\"txn-name\">Bank Transfer In</div><div class=\"txn-date\">Apr 4 · 09:41 AM</div></div><div class=\"txn-amount credit\">+\$5,000</div></div>
            <div class=\"txn-item\"><div class=\"txn-icon\" style=\"background:#FCEBEB;\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#E24B4A\" stroke-width=\"2\"><polyline points=\"6 9 12 15 18 9\"/></svg></div><div class=\"txn-info\"><div class=\"txn-name\">Online Purchase</div><div class=\"txn-date\">Apr 3 · 02:15 PM</div></div><div class=\"txn-amount debit\">−\$249</div></div>
            <div class=\"txn-item\"><div class=\"txn-icon\" style=\"background:#FCEBEB;\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#E24B4A\" stroke-width=\"2\"><polyline points=\"6 9 12 15 18 9\"/></svg></div><div class=\"txn-info\"><div class=\"txn-name\">Loan Repayment</div><div class=\"txn-date\">Apr 1 · 12:00 AM</div></div><div class=\"txn-amount debit\">−\$464</div></div>
            <div class=\"txn-item\"><div class=\"txn-icon\" style=\"background:#E1F5EE;\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg></div><div class=\"txn-info\"><div class=\"txn-name\">Salary Deposit</div><div class=\"txn-date\">Apr 1 · 08:00 AM</div></div><div class=\"txn-amount credit\">+\$3,800</div></div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header\"><span class=\"card-title\">All Wallets</span><button class=\"btn btn-outline btn-sm\">Export</button></div>
        <div class=\"table-wrap\">
          <table>
            <thead><tr><th>Client</th><th>Wallet ID</th><th>Currency</th><th>Balance</th><th>Last Transaction</th><th>Status</th></tr></thead>
            <tbody>
              <tr><td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-blue\">SM</div><div class=\"font-medium\">Sophia Martin</div></div></td><td class=\"td-muted\">WLT-0041-SM</td><td class=\"td-muted\">USD</td><td class=\"font-medium\">\$42,810.00</td><td class=\"td-muted\">Apr 4, 2026</td><td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td></tr>
              <tr><td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-teal\">JR</div><div class=\"font-medium\">James Rowe</div></div></td><td class=\"td-muted\">WLT-0041-JR</td><td class=\"td-muted\">USD</td><td class=\"font-medium\">\$8,200.00</td><td class=\"td-muted\">Apr 3, 2026</td><td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td></tr>
              <tr><td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-coral\">AL</div><div class=\"font-medium\">Aïcha Lebreton</div></div></td><td class=\"td-muted\">WLT-0041-AL</td><td class=\"td-muted\">EUR</td><td class=\"font-medium\">€97,540.00</td><td class=\"td-muted\">Apr 2, 2026</td><td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td></tr>
              <tr><td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-purple\">KT</div><div class=\"font-medium\">Kofi Tawiah</div></div></td><td class=\"td-muted\">WLT-0041-KT</td><td class=\"td-muted\">USD</td><td class=\"font-medium\">\$1,390.00</td><td class=\"td-muted\">Mar 28, 2026</td><td><span class=\"badge badge-danger\"><span class=\"badge-dot\"></span>Frozen</span></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: PUBLICATIONS ═══ -->
    <div class=\"page\" id=\"page-publications\">
      <div class=\"page-header\">
        <div><h1>Publications</h1><p>Manage financial content, announcements and articles.</p></div>
        <button class=\"btn btn-primary\">
          <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
          New Article
        </button>
      </div>

      <div class=\"tabs\">
        <button class=\"tab-btn active\">All (24)</button>
        <button class=\"tab-btn\">Published (18)</button>
        <button class=\"tab-btn\">Draft (6)</button>
      </div>

      <div style=\"display:grid; grid-template-columns:repeat(3,1fr); gap:20px;\">
        <div class=\"pub-card\">
          <div class=\"pub-card-img\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--blue-400)\" stroke-width=\"1.5\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"/><polyline points=\"14 2 14 8 20 8\"/><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"/><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"/><polyline points=\"10 9 9 9 8 9\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\">Rates Update</span>
            <div class=\"pub-title\">Q2 2026 Interest Rate Adjustments</div>
            <div class=\"pub-excerpt\">Changes to savings account rates effective May 1st, 2026. Read the full announcement for details.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">Y. Sarr</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-success\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Published</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\">
          <div class=\"pub-card-img\" style=\"background:#E1F5EE;\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--success)\" stroke-width=\"1.5\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\">Security</span>
            <div class=\"pub-title\">New 2-Factor Authentication Feature</div>
            <div class=\"pub-excerpt\">We've launched biometric and OTP-based 2FA for all NexaBank accounts. Learn how to enable it.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">A. Diallo</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-success\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Published</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\">
          <div class=\"pub-card-img\" style=\"background:#FAEEDA;\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--warning)\" stroke-width=\"1.5\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\" style=\"background:#FAEEDA;color:#633806;\">Loan Guide</span>
            <div class=\"pub-title\">Understanding Your Loan Terms</div>
            <div class=\"pub-excerpt\">A comprehensive guide to reading your loan agreement, APR calculation and repayment schedules.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">M. Bouchard</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-warning\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Draft</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\">
          <div class=\"pub-card-img\" style=\"background:var(--blue-50);\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--blue-600)\" stroke-width=\"1.5\"><rect x=\"2\" y=\"3\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M8 21h8M12 17v4\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\">Product Launch</span>
            <div class=\"pub-title\">Introducing NexaBank Premium Card</div>
            <div class=\"pub-excerpt\">Unlimited cashback, airport lounges and zero forex fees. Apply now for early access.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">Y. Sarr</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-success\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Published</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\">
          <div class=\"pub-card-img\" style=\"background:#FCEBEB;\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--danger)\" stroke-width=\"1.5\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"/><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"/><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\" style=\"background:#FCEBEB;color:#501313;\">Notice</span>
            <div class=\"pub-title\">System Maintenance — May 3rd, 2026</div>
            <div class=\"pub-excerpt\">Scheduled maintenance from 02:00–04:00 AM UTC. Online banking services will be temporarily unavailable.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">A. Diallo</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-warning\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Draft</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\" style=\"border:2px dashed var(--gray-200); background:transparent; display:flex; align-items:center; justify-content:center; min-height:220px; cursor:pointer;\" onclick=\"\">
          <div style=\"text-align:center; color:var(--gray-400);\">
            <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" style=\"margin:0 auto 10px;\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
            <div style=\"font-size:13px; font-weight:500;\">New Publication</div>
          </div>
        </div>
      </div>
    </div>

  </main>
</div>

<script>
  const pages = {
    dashboard: 'Dashboard',
    clients: 'Clients',
    admins: 'Administrators',
    products: 'Products',
    loans: 'Loans',
    wallet: 'Wallet',
    publications: 'Publications'
  };

  function showPage(id, btn) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    document.getElementById('page-' + id).classList.add('active');
    document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
    if (btn) btn.classList.add('active');
    document.getElementById('page-title').textContent = pages[id] || id;
  }

  function switchTab(btn, tabId) {
    const tabs = ['tab-pending','tab-active','tab-closed'];
    tabs.forEach(t => {
      const el = document.getElementById(t);
      if (el) el.style.display = t === tabId ? 'block' : 'none';
    });
    btn.parentElement.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  }
</script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "LandingPage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>NexaBank — Admin Dashboard</title>
<link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=Syne:wght@500;600;700&display=swap\" rel=\"stylesheet\">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --blue-50: #E6F1FB;
    --blue-100: #B5D4F4;
    --blue-200: #85B7EB;
    --blue-400: #378ADD;
    --blue-600: #185FA5;
    --blue-800: #0C447C;
    --blue-900: #042C53;
    --white: #FFFFFF;
    --gray-50: #F7F9FC;
    --gray-100: #EEF2F7;
    --gray-200: #D8E0EC;
    --gray-400: #8A97AE;
    --gray-600: #4B5A72;
    --gray-900: #0F1D30;
    --success: #1D9E75;
    --warning: #BA7517;
    --danger: #E24B4A;
    --sidebar-w: 240px;
    --header-h: 62px;
    --font-display: 'Syne', sans-serif;
    --font-body: 'DM Sans', sans-serif;
    --radius-sm: 6px;
    --radius-md: 10px;
    --radius-lg: 14px;
    --radius-xl: 20px;
    --shadow-sm: 0 1px 3px rgba(15,29,48,0.08);
    --shadow-md: 0 4px 16px rgba(15,29,48,0.10);
  }

  body {
    font-family: var(--font-body);
    background: var(--gray-50);
    color: var(--gray-900);
    display: flex;
    min-height: 100vh;
    font-size: 14px;
    line-height: 1.6;
  }

  /* ─── SIDEBAR ─── */
  .sidebar {
    width: var(--sidebar-w);
    min-height: 100vh;
    background: var(--blue-900);
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 0; left: 0;
    z-index: 100;
  }

  .sidebar-logo {
    padding: 22px 24px 18px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .sidebar-logo .logo-mark {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .logo-icon {
    width: 34px; height: 34px;
    background: var(--blue-400);
    border-radius: var(--radius-sm);
    display: flex; align-items: center; justify-content: center;
  }
  .logo-icon svg { fill: #fff; width: 18px; height: 18px; }
  .logo-name {
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    letter-spacing: -0.3px;
  }
  .logo-name span { color: var(--blue-200); }

  .sidebar-role {
    padding: 12px 24px;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: var(--blue-200);
    opacity: 0.7;
  }

  .sidebar-nav { flex: 1; padding: 4px 12px; }

  .nav-section-label {
    font-size: 9px;
    font-weight: 600;
    letter-spacing: 1.3px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.3);
    padding: 14px 12px 6px;
  }

  .nav-item {
    display: flex;
    align-items: center;
    gap: 11px;
    padding: 9px 12px;
    border-radius: var(--radius-md);
    cursor: pointer;
    color: rgba(255,255,255,0.65);
    font-size: 13.5px;
    font-weight: 400;
    transition: all 0.15s;
    margin-bottom: 2px;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
  }
  .nav-item:hover { background: rgba(255,255,255,0.07); color: rgba(255,255,255,0.9); }
  .nav-item.active {
    background: var(--blue-600);
    color: #fff;
    font-weight: 500;
  }
  .nav-item .nav-icon {
    width: 20px; height: 20px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    opacity: 0.8;
  }
  .nav-item.active .nav-icon { opacity: 1; }
  .nav-badge {
    margin-left: auto;
    background: var(--blue-400);
    color: #fff;
    font-size: 10px;
    font-weight: 600;
    padding: 1px 7px;
    border-radius: 20px;
  }

  .sidebar-user {
    padding: 16px;
    border-top: 1px solid rgba(255,255,255,0.08);
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .user-avatar {
    width: 36px; height: 36px;
    border-radius: 50%;
    background: var(--blue-600);
    display: flex; align-items: center; justify-content: center;
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 600;
    color: #fff;
    flex-shrink: 0;
  }
  .user-info { flex: 1; min-width: 0; }
  .user-info .user-name {
    font-size: 13px;
    font-weight: 500;
    color: #fff;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .user-info .user-role {
    font-size: 11px;
    color: rgba(255,255,255,0.45);
  }
  .btn-logout {
    background: none; border: none; cursor: pointer;
    color: rgba(255,255,255,0.4);
    display: flex; align-items: center;
    padding: 4px;
    border-radius: 6px;
    transition: color 0.15s;
  }
  .btn-logout:hover { color: rgba(255,255,255,0.8); }

  /* ─── MAIN ─── */
  .main-wrapper {
    margin-left: var(--sidebar-w);
    flex: 1;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .topbar {
    height: var(--header-h);
    background: var(--white);
    border-bottom: 1px solid var(--gray-200);
    display: flex;
    align-items: center;
    padding: 0 32px;
    gap: 16px;
    position: sticky;
    top: 0;
    z-index: 50;
  }
  .topbar-title {
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 600;
    color: var(--gray-900);
    flex: 1;
  }
  .topbar-actions { display: flex; align-items: center; gap: 10px; }
  .search-box {
    display: flex;
    align-items: center;
    gap: 8px;
    background: var(--gray-100);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-md);
    padding: 7px 14px;
    width: 220px;
  }
  .search-box input {
    border: none;
    background: transparent;
    font-family: var(--font-body);
    font-size: 13px;
    color: var(--gray-900);
    outline: none;
    width: 100%;
  }
  .search-box input::placeholder { color: var(--gray-400); }
  .icon-btn {
    width: 36px; height: 36px;
    border-radius: var(--radius-md);
    background: var(--gray-100);
    border: 1px solid var(--gray-200);
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    color: var(--gray-600);
    transition: all 0.15s;
    position: relative;
  }
  .icon-btn:hover { background: var(--gray-200); }
  .notif-dot {
    position: absolute;
    top: 6px; right: 6px;
    width: 7px; height: 7px;
    border-radius: 50%;
    background: var(--danger);
    border: 2px solid var(--white);
  }
  .topbar-avatar {
    width: 36px; height: 36px;
    border-radius: 50%;
    background: var(--blue-800);
    display: flex; align-items: center; justify-content: center;
    font-size: 12px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
  }

  /* ─── PAGE CONTENT ─── */
  .page-content {
    padding: 28px 32px;
    flex: 1;
  }
  .page { display: none; }
  .page.active { display: block; }

  /* ─── PAGE HEADER ─── */
  .page-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 28px;
  }
  .page-header h1 {
    font-family: var(--font-display);
    font-size: 22px;
    font-weight: 600;
    color: var(--gray-900);
  }
  .page-header p {
    font-size: 13px;
    color: var(--gray-400);
    margin-top: 3px;
  }
  .btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 9px 18px;
    border-radius: var(--radius-md);
    font-family: var(--font-body);
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    transition: all 0.15s;
  }
  .btn-primary {
    background: var(--blue-600);
    color: #fff;
  }
  .btn-primary:hover { background: var(--blue-800); }
  .btn-outline {
    background: var(--white);
    color: var(--gray-600);
    border: 1px solid var(--gray-200);
  }
  .btn-outline:hover { background: var(--gray-100); }
  .btn-danger {
    background: #FEF0F0;
    color: var(--danger);
    border: 1px solid #F9C9C9;
  }
  .btn-sm { padding: 6px 12px; font-size: 12px; }

  /* ─── STAT CARDS ─── */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-bottom: 28px;
  }
  .stat-card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 20px 22px;
    position: relative;
    overflow: hidden;
  }
  .stat-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 3px;
    height: 100%;
  }
  .stat-card.blue::before { background: var(--blue-400); }
  .stat-card.green::before { background: var(--success); }
  .stat-card.amber::before { background: var(--warning); }
  .stat-card.red::before { background: var(--danger); }
  .stat-label {
    font-size: 11.5px;
    font-weight: 500;
    color: var(--gray-400);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 8px;
  }
  .stat-value {
    font-family: var(--font-display);
    font-size: 26px;
    font-weight: 600;
    color: var(--gray-900);
    line-height: 1;
    margin-bottom: 8px;
  }
  .stat-change {
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .stat-change.up { color: var(--success); }
  .stat-change.down { color: var(--danger); }
  .stat-icon {
    position: absolute;
    right: 18px; top: 18px;
    width: 38px; height: 38px;
    border-radius: var(--radius-md);
    display: flex; align-items: center; justify-content: center;
  }
  .stat-icon.blue { background: var(--blue-50); color: var(--blue-600); }
  .stat-icon.green { background: #E1F5EE; color: var(--success); }
  .stat-icon.amber { background: #FAEEDA; color: var(--warning); }
  .stat-icon.red { background: #FCEBEB; color: var(--danger); }

  /* ─── CARD ─── */
  .card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    overflow: hidden;
  }
  .card-header {
    padding: 18px 22px;
    border-bottom: 1px solid var(--gray-100);
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .card-title {
    font-family: var(--font-display);
    font-size: 14.5px;
    font-weight: 600;
    color: var(--gray-900);
  }
  .card-body { padding: 22px; }

  /* ─── TABLE ─── */
  .table-wrap { overflow-x: auto; }
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13.5px;
  }
  th {
    background: var(--gray-50);
    padding: 11px 16px;
    text-align: left;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    color: var(--gray-400);
    border-bottom: 1px solid var(--gray-200);
    white-space: nowrap;
  }
  td {
    padding: 13px 16px;
    border-bottom: 1px solid var(--gray-100);
    color: var(--gray-900);
    vertical-align: middle;
  }
  tr:last-child td { border-bottom: none; }
  tr:hover td { background: var(--gray-50); }
  .td-muted { color: var(--gray-400); font-size: 12.5px; }
  .avatar-cell {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .mini-avatar {
    width: 32px; height: 32px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 11px;
    font-weight: 600;
    color: #fff;
    flex-shrink: 0;
  }
  .bg-blue { background: var(--blue-600); }
  .bg-teal { background: #0F6E56; }
  .bg-coral { background: #993C1D; }
  .bg-purple { background: #534AB7; }
  .bg-amber { background: #854F0B; }

  /* ─── BADGES ─── */
  .badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 11.5px;
    font-weight: 600;
    white-space: nowrap;
  }
  .badge-dot { width: 6px; height: 6px; border-radius: 50%; }
  .badge-success { background: #E1F5EE; color: #085041; }
  .badge-success .badge-dot { background: var(--success); }
  .badge-warning { background: #FAEEDA; color: #633806; }
  .badge-warning .badge-dot { background: var(--warning); }
  .badge-danger { background: #FCEBEB; color: #501313; }
  .badge-danger .badge-dot { background: var(--danger); }
  .badge-blue { background: var(--blue-50); color: var(--blue-800); }
  .badge-blue .badge-dot { background: var(--blue-400); }
  .badge-gray { background: var(--gray-100); color: var(--gray-600); }
  .badge-gray .badge-dot { background: var(--gray-400); }

  /* ─── GRID LAYOUTS ─── */
  .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
  .three-col { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; }
  .col-7-5 { display: grid; grid-template-columns: 1.4fr 1fr; gap: 20px; }

  /* ─── FORM ELEMENTS ─── */
  .form-group { margin-bottom: 18px; }
  .form-label {
    display: block;
    font-size: 12.5px;
    font-weight: 500;
    color: var(--gray-600);
    margin-bottom: 6px;
  }
  .form-control {
    width: 100%;
    padding: 9px 14px;
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-md);
    font-family: var(--font-body);
    font-size: 13.5px;
    color: var(--gray-900);
    background: var(--white);
    outline: none;
    transition: border-color 0.15s;
  }
  .form-control:focus { border-color: var(--blue-400); box-shadow: 0 0 0 3px rgba(55,138,221,0.12); }
  select.form-control { cursor: pointer; }
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

  /* ─── TABS ─── */
  .tabs {
    display: flex;
    gap: 4px;
    background: var(--gray-100);
    padding: 4px;
    border-radius: var(--radius-md);
    margin-bottom: 24px;
    width: fit-content;
  }
  .tab-btn {
    padding: 7px 20px;
    border-radius: var(--radius-sm);
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    background: none;
    color: var(--gray-400);
    transition: all 0.15s;
    font-family: var(--font-body);
  }
  .tab-btn.active {
    background: var(--white);
    color: var(--blue-800);
    box-shadow: var(--shadow-sm);
  }

  /* ─── MINI CHART BARS ─── */
  .mini-bars {
    display: flex;
    align-items: flex-end;
    gap: 3px;
    height: 40px;
  }
  .mini-bar {
    flex: 1;
    background: var(--blue-100);
    border-radius: 3px 3px 0 0;
    transition: background 0.15s;
  }
  .mini-bar.active { background: var(--blue-400); }
  .mini-bar:hover { background: var(--blue-200); }

  /* ─── PROGRESS ─── */
  .progress-bar {
    height: 6px;
    background: var(--gray-200);
    border-radius: 10px;
    overflow: hidden;
  }
  .progress-fill {
    height: 100%;
    border-radius: 10px;
    background: var(--blue-400);
  }
  .progress-fill.green { background: var(--success); }
  .progress-fill.amber { background: var(--warning); }
  .progress-fill.red { background: var(--danger); }

  /* ─── TRANSACTION ITEM ─── */
  .txn-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 13px 0;
    border-bottom: 1px solid var(--gray-100);
  }
  .txn-item:last-child { border-bottom: none; }
  .txn-icon {
    width: 38px; height: 38px;
    border-radius: var(--radius-md);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .txn-info { flex: 1; min-width: 0; }
  .txn-name { font-size: 13.5px; font-weight: 500; color: var(--gray-900); }
  .txn-date { font-size: 12px; color: var(--gray-400); }
  .txn-amount { font-size: 14px; font-weight: 600; }
  .txn-amount.credit { color: var(--success); }
  .txn-amount.debit { color: var(--danger); }

  /* ─── LOAN CARD ─── */
  .loan-card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 20px;
    position: relative;
  }
  .loan-card .loan-type {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    color: var(--blue-600);
    margin-bottom: 6px;
  }
  .loan-card .loan-amount {
    font-family: var(--font-display);
    font-size: 22px;
    font-weight: 600;
    color: var(--gray-900);
    margin-bottom: 12px;
  }
  .loan-meta {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-bottom: 16px;
  }
  .loan-meta-item .label { font-size: 11px; color: var(--gray-400); margin-bottom: 2px; }
  .loan-meta-item .value { font-size: 13px; font-weight: 500; color: var(--gray-900); }

  /* ─── WALLET CARD ─── */
  .wallet-card-display {
    background: linear-gradient(135deg, var(--blue-800) 0%, var(--blue-600) 60%, var(--blue-400) 100%);
    border-radius: var(--radius-xl);
    padding: 28px;
    color: #fff;
    position: relative;
    overflow: hidden;
  }
  .wallet-card-display::before {
    content: '';
    position: absolute;
    width: 200px; height: 200px;
    border-radius: 50%;
    background: rgba(255,255,255,0.06);
    top: -60px; right: -40px;
  }
  .wallet-card-display::after {
    content: '';
    position: absolute;
    width: 140px; height: 140px;
    border-radius: 50%;
    background: rgba(255,255,255,0.04);
    bottom: -40px; right: 80px;
  }
  .wallet-bank-name {
    font-family: var(--font-display);
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1px;
    opacity: 0.9;
    margin-bottom: 24px;
  }
  .wallet-balance-label { font-size: 11px; opacity: 0.65; margin-bottom: 4px; letter-spacing: 0.5px; }
  .wallet-balance {
    font-family: var(--font-display);
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 28px;
    letter-spacing: -0.5px;
  }
  .wallet-card-footer { display: flex; justify-content: space-between; align-items: flex-end; }
  .wallet-holder-name { font-size: 13px; font-weight: 500; letter-spacing: 0.5px; }
  .wallet-card-number { font-size: 13px; opacity: 0.6; letter-spacing: 1px; }

  /* ─── PUBLICATION CARD ─── */
  .pub-card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    overflow: hidden;
  }
  .pub-card-img {
    height: 130px;
    background: var(--blue-50);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .pub-card-body { padding: 16px; }
  .pub-tag {
    display: inline-block;
    background: var(--blue-50);
    color: var(--blue-800);
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    padding: 3px 8px;
    border-radius: 4px;
    margin-bottom: 8px;
  }
  .pub-title {
    font-family: var(--font-display);
    font-size: 14px;
    font-weight: 600;
    color: var(--gray-900);
    margin-bottom: 8px;
    line-height: 1.4;
  }
  .pub-excerpt { font-size: 12.5px; color: var(--gray-400); line-height: 1.6; margin-bottom: 12px; }
  .pub-footer { display: flex; justify-content: space-between; align-items: center; }
  .pub-author { font-size: 12px; color: var(--gray-600); }
  .pub-date { font-size: 11.5px; color: var(--gray-400); }

  /* ─── RESPONSIVE ─── */
  @media (max-width: 1100px) {
    .stats-grid { grid-template-columns: 1fr 1fr; }
    .col-7-5 { grid-template-columns: 1fr; }
  }
  @media (max-width: 768px) {
    :root { --sidebar-w: 200px; }
    .stats-grid { grid-template-columns: 1fr 1fr; }
    .three-col { grid-template-columns: 1fr 1fr; }
  }

  /* Utility */
  .mb-20 { margin-bottom: 20px; }
  .mb-24 { margin-bottom: 24px; }
  .flex { display: flex; }
  .items-center { align-items: center; }
  .justify-between { justify-content: space-between; }
  .gap-8 { gap: 8px; }
  .gap-12 { gap: 12px; }
  .gap-16 { gap: 16px; }
  .text-sm { font-size: 12.5px; color: var(--gray-400); }
  .font-medium { font-weight: 500; }
</style>
</head>
<body>

<!-- ═══════════ SIDEBAR ═══════════ -->
<aside class=\"sidebar\">
  <div class=\"sidebar-logo\">
    <div class=\"logo-mark\">
      <div class=\"logo-icon\">
        <svg viewBox=\"0 0 24 24\"><path d=\"M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5\"/></svg>
      </div>
      <span class=\"logo-name\">Nexa<span>Bank</span></span>
    </div>
  </div>

  <div class=\"sidebar-role\">Administrator Portal</div>

  <nav class=\"sidebar-nav\">
    <div class=\"nav-section-label\">Overview</div>
    <button class=\"nav-item active\" onclick=\"showPage('dashboard', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/></svg>
      </span>
      Dashboard
    </button>

    <div class=\"nav-section-label\">User Management</div>
    <button class=\"nav-item\" onclick=\"showPage('clients', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
      </span>
      Clients
      <span class=\"nav-badge\">248</span>
    </button>
    <button class=\"nav-item\" onclick=\"showPage('admins', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/></svg>
      </span>
      Admins
    </button>

    <div class=\"nav-section-label\">Banking</div>
    <button class=\"nav-item\" onclick=\"showPage('products', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"2\" y=\"3\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M8 21h8M12 17v4\"/></svg>
      </span>
      Products
    </button>
    <button class=\"nav-item\" onclick=\"showPage('loans', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/></svg>
      </span>
      Loans
      <span class=\"nav-badge\">12</span>
    </button>
    <button class=\"nav-item\" onclick=\"showPage('wallet', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 12V7H5a2 2 0 0 1 0-4h14v4\"/><path d=\"M3 5v14a2 2 0 0 0 2 2h16v-5\"/><path d=\"M18 12a2 2 0 0 0 0 4h4v-4z\"/></svg>
      </span>
      Wallet
    </button>

    <div class=\"nav-section-label\">Content</div>
    <button class=\"nav-item\" onclick=\"showPage('publications', this)\">
      <span class=\"nav-icon\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/><path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/></svg>
      </span>
      Publications
    </button>
  </nav>

  <div class=\"sidebar-user\">
    <div class=\"user-avatar\">AD</div>
    <div class=\"user-info\">
      <div class=\"user-name\">Adam Diallo</div>
      <div class=\"user-role\">Super Admin</div>
    </div>
    <button class=\"btn-logout\" title=\"Logout\">
      <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><polyline points=\"16 17 21 12 16 7\"/><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/></svg>
    </button>
  </div>
</aside>

<!-- ═══════════ MAIN ═══════════ -->
<div class=\"main-wrapper\">
  <header class=\"topbar\">
    <div class=\"topbar-title\" id=\"page-title\">Dashboard</div>
    <div class=\"topbar-actions\">
      <div class=\"search-box\">
        <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#8A97AE\" stroke-width=\"2\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"M21 21l-4.35-4.35\"/></svg>
        <input type=\"text\" placeholder=\"Search…\">
      </div>
      <button class=\"icon-btn\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/></svg>
        <span class=\"notif-dot\"></span>
      </button>
      <button class=\"icon-btn\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><circle cx=\"12\" cy=\"12\" r=\"3\"/><path d=\"M19.07 4.93l-1.41 1.41M19.07 19.07l-1.41-1.41M4.93 4.93l1.41 1.41M4.93 19.07l1.41-1.41M12 2v2M12 20v2M2 12h2M20 12h2\"/></svg>
      </button>
      <div class=\"topbar-avatar\">AD</div>
    </div>
  </header>

  <main class=\"page-content\">

    <!-- ═══ PAGE: DASHBOARD ═══ -->
    <div class=\"page active\" id=\"page-dashboard\">
      <div class=\"page-header\">
        <div>
          <h1>Good morning, Adam 👋</h1>
          <p>Here's what's happening with NexaBank today.</p>
        </div>
        <div class=\"flex gap-8\">
          <button class=\"btn btn-outline\">
            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/></svg>
            April 2026
          </button>
          <button class=\"btn btn-primary\">
            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"/><polyline points=\"7 10 12 15 17 10\"/><line x1=\"12\" y1=\"15\" x2=\"12\" y2=\"3\"/></svg>
            Export Report
          </button>
        </div>
      </div>

      <div class=\"stats-grid\">
        <div class=\"stat-card blue\">
          <div class=\"stat-icon blue\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
          </div>
          <div class=\"stat-label\">Total Clients</div>
          <div class=\"stat-value\">2,481</div>
          <div class=\"stat-change up\">
            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>
            +14.2% this month
          </div>
        </div>
        <div class=\"stat-card green\">
          <div class=\"stat-icon green\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/></svg>
          </div>
          <div class=\"stat-label\">Assets Under Mgmt</div>
          <div class=\"stat-value\">\$84.3M</div>
          <div class=\"stat-change up\">
            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>
            +8.7% this month
          </div>
        </div>
        <div class=\"stat-card amber\">
          <div class=\"stat-icon amber\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M21 12V7H5a2 2 0 0 1 0-4h14v4\"/><path d=\"M3 5v14a2 2 0 0 0 2 2h16v-5\"/><path d=\"M18 12a2 2 0 0 0 0 4h4v-4z\"/></svg>
          </div>
          <div class=\"stat-label\">Active Loans</div>
          <div class=\"stat-value\">347</div>
          <div class=\"stat-change down\">
            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"6 9 12 15 18 9\"/></svg>
            −2.1% this month
          </div>
        </div>
        <div class=\"stat-card red\">
          <div class=\"stat-icon red\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"/><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"/><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"/></svg>
          </div>
          <div class=\"stat-label\">Pending Approvals</div>
          <div class=\"stat-value\">12</div>
          <div class=\"stat-change up\">
            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>
            Needs action
          </div>
        </div>
      </div>

      <div class=\"col-7-5 mb-24\">
        <!-- Recent Transactions -->
        <div class=\"card\">
          <div class=\"card-header\">
            <span class=\"card-title\">Recent Transactions</span>
            <button class=\"btn btn-outline btn-sm\">View All</button>
          </div>
          <div class=\"card-body\" style=\"padding:0;\">
            <div style=\"padding: 0 22px;\">
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#E1F5EE;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">Wire Transfer Received</div>
                  <div class=\"txn-date\">Apr 4, 2026 · 09:41 AM</div>
                </div>
                <div class=\"txn-amount credit\">+\$12,400.00</div>
              </div>
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#FCEBEB;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#E24B4A\" stroke-width=\"2\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">Loan Disbursement</div>
                  <div class=\"txn-date\">Apr 4, 2026 · 08:15 AM</div>
                </div>
                <div class=\"txn-amount debit\">−\$8,500.00</div>
              </div>
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#E1F5EE;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">Deposit — Savings Account</div>
                  <div class=\"txn-date\">Apr 3, 2026 · 04:30 PM</div>
                </div>
                <div class=\"txn-amount credit\">+\$3,200.00</div>
              </div>
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#FCEBEB;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#E24B4A\" stroke-width=\"2\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">ATM Withdrawal</div>
                  <div class=\"txn-date\">Apr 3, 2026 · 01:22 PM</div>
                </div>
                <div class=\"txn-amount debit\">−\$500.00</div>
              </div>
              <div class=\"txn-item\">
                <div class=\"txn-icon\" style=\"background:#E1F5EE;\">
                  <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg>
                </div>
                <div class=\"txn-info\">
                  <div class=\"txn-name\">Card Payment Received</div>
                  <div class=\"txn-date\">Apr 3, 2026 · 10:05 AM</div>
                </div>
                <div class=\"txn-amount credit\">+\$670.50</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right column -->
        <div style=\"display:flex; flex-direction:column; gap:20px;\">
          <!-- Revenue mini chart -->
          <div class=\"card\">
            <div class=\"card-header\">
              <span class=\"card-title\">Monthly Revenue</span>
              <span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Live</span>
            </div>
            <div class=\"card-body\">
              <div style=\"font-family:var(--font-display); font-size:28px; font-weight:600; color:var(--gray-900); margin-bottom:4px;\">\$1.24M</div>
              <div class=\"text-sm\" style=\"margin-bottom:16px;\">April 2026 · 4 days in</div>
              <div class=\"mini-bars\">
                <div class=\"mini-bar\" style=\"height:45%;\"></div>
                <div class=\"mini-bar\" style=\"height:60%;\"></div>
                <div class=\"mini-bar\" style=\"height:40%;\"></div>
                <div class=\"mini-bar\" style=\"height:70%;\"></div>
                <div class=\"mini-bar\" style=\"height:55%;\"></div>
                <div class=\"mini-bar\" style=\"height:80%;\"></div>
                <div class=\"mini-bar\" style=\"height:65%;\"></div>
                <div class=\"mini-bar\" style=\"height:90%;\"></div>
                <div class=\"mini-bar\" style=\"height:75%;\"></div>
                <div class=\"mini-bar active\" style=\"height:100%;\"></div>
              </div>
            </div>
          </div>
          <!-- Loan distribution -->
          <div class=\"card\">
            <div class=\"card-header\"><span class=\"card-title\">Loan Portfolio</span></div>
            <div class=\"card-body\">
              <div style=\"margin-bottom:12px;\">
                <div class=\"flex justify-between items-center\" style=\"margin-bottom:6px;\">
                  <span style=\"font-size:13px;\">Personal Loans</span>
                  <span style=\"font-size:13px; font-weight:500;\">48%</span>
                </div>
                <div class=\"progress-bar\"><div class=\"progress-fill\" style=\"width:48%;\"></div></div>
              </div>
              <div style=\"margin-bottom:12px;\">
                <div class=\"flex justify-between items-center\" style=\"margin-bottom:6px;\">
                  <span style=\"font-size:13px;\">Mortgage</span>
                  <span style=\"font-size:13px; font-weight:500;\">31%</span>
                </div>
                <div class=\"progress-bar\"><div class=\"progress-fill green\" style=\"width:31%;\"></div></div>
              </div>
              <div>
                <div class=\"flex justify-between items-center\" style=\"margin-bottom:6px;\">
                  <span style=\"font-size:13px;\">Business Loans</span>
                  <span style=\"font-size:13px; font-weight:500;\">21%</span>
                </div>
                <div class=\"progress-bar\"><div class=\"progress-fill amber\" style=\"width:21%;\"></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: CLIENTS ═══ -->
    <div class=\"page\" id=\"page-clients\">
      <div class=\"page-header\">
        <div>
          <h1>Clients</h1>
          <p>Manage and monitor all client accounts.</p>
        </div>
        <button class=\"btn btn-primary\">
          <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
          Add Client
        </button>
      </div>
      <div class=\"stats-grid mb-24\">
        <div class=\"stat-card blue\"><div class=\"stat-label\">Total Clients</div><div class=\"stat-value\">2,481</div><div class=\"stat-change up\"><svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>+14.2%</div></div>
        <div class=\"stat-card green\"><div class=\"stat-label\">Active</div><div class=\"stat-value\">2,140</div><div class=\"stat-change up\"><svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>+6.1%</div></div>
        <div class=\"stat-card amber\"><div class=\"stat-label\">Pending KYC</div><div class=\"stat-value\">84</div><div class=\"stat-change up\"><svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"18 15 12 9 6 15\"/></svg>Needs review</div></div>
        <div class=\"stat-card red\"><div class=\"stat-label\">Suspended</div><div class=\"stat-value\">17</div><div class=\"stat-change down\"><svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><polyline points=\"6 9 12 15 18 9\"/></svg>−3 this week</div></div>
      </div>
      <div class=\"card\">
        <div class=\"card-header\">
          <span class=\"card-title\">Client Directory</span>
          <div class=\"flex gap-8\">
            <select class=\"form-control\" style=\"width:140px; padding:7px 12px; font-size:13px;\">
              <option>All Status</option>
              <option>Active</option>
              <option>Pending</option>
              <option>Suspended</option>
            </select>
            <button class=\"btn btn-outline btn-sm\">
              <svg width=\"13\" height=\"13\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\"/><line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\"/><line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\"/><line x1=\"3\" y1=\"6\" x2=\"3.01\" y2=\"6\"/><line x1=\"3\" y1=\"12\" x2=\"3.01\" y2=\"12\"/><line x1=\"3\" y1=\"18\" x2=\"3.01\" y2=\"18\"/></svg>
              Filter
            </button>
          </div>
        </div>
        <div class=\"table-wrap\">
          <table>
            <thead>
              <tr>
                <th>Client</th>
                <th>Account No.</th>
                <th>Account Type</th>
                <th>Balance</th>
                <th>Status</th>
                <th>Joined</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-blue\">SM</div><div><div class=\"font-medium\">Sophia Martin</div><div class=\"td-muted\">sophia.m@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-2891</td>
                <td><span class=\"badge badge-blue\">Premium</span></td>
                <td class=\"font-medium\">\$42,810.00</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td class=\"td-muted\">Jan 12, 2023</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-teal\">JR</div><div><div class=\"font-medium\">James Rowe</div><div class=\"td-muted\">j.rowe@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-3312</td>
                <td><span class=\"badge badge-gray\">Standard</span></td>
                <td class=\"font-medium\">\$8,200.00</td>
                <td><span class=\"badge badge-warning\"><span class=\"badge-dot\"></span>KYC Pending</span></td>
                <td class=\"td-muted\">Mar 5, 2024</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-coral\">AL</div><div><div class=\"font-medium\">Aïcha Lebreton</div><div class=\"td-muted\">a.lebreton@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-4480</td>
                <td><span class=\"badge badge-blue\">Premium</span></td>
                <td class=\"font-medium\">\$97,540.00</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td class=\"td-muted\">Jun 20, 2022</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-purple\">KT</div><div><div class=\"font-medium\">Kofi Tawiah</div><div class=\"td-muted\">k.tawiah@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-5601</td>
                <td><span class=\"badge badge-gray\">Standard</span></td>
                <td class=\"font-medium\">\$1,390.00</td>
                <td><span class=\"badge badge-danger\"><span class=\"badge-dot\"></span>Suspended</span></td>
                <td class=\"td-muted\">Aug 11, 2024</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-amber\">NP</div><div><div class=\"font-medium\">Nadia Petit</div><div class=\"td-muted\">nadia.p@email.com</div></div></div></td>
                <td class=\"td-muted\">NX-0041-6024</td>
                <td><span class=\"badge badge-blue\">Business</span></td>
                <td class=\"font-medium\">\$214,000.00</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td class=\"td-muted\">Feb 2, 2021</td>
                <td><button class=\"btn btn-outline btn-sm\">View</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: ADMINS ═══ -->
    <div class=\"page\" id=\"page-admins\">
      <div class=\"page-header\">
        <div><h1>Administrators</h1><p>Manage admin roles and permissions.</p></div>
        <button class=\"btn btn-primary\">
          <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
          Add Admin
        </button>
      </div>
      <div class=\"card\">
        <div class=\"card-header\"><span class=\"card-title\">Admin Accounts</span></div>
        <div class=\"table-wrap\">
          <table>
            <thead>
              <tr><th>Admin</th><th>Role</th><th>Permissions</th><th>Last Active</th><th>Status</th><th>Actions</th></tr>
            </thead>
            <tbody>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-blue\">AD</div><div><div class=\"font-medium\">Adam Diallo</div><div class=\"td-muted\">a.diallo@nexabank.com</div></div></div></td>
                <td><span class=\"badge badge-blue\">Super Admin</span></td>
                <td class=\"td-muted\">Full Access</td>
                <td class=\"td-muted\">Now</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td><button class=\"btn btn-outline btn-sm\" disabled>You</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-teal\">MB</div><div><div class=\"font-medium\">Marie Bouchard</div><div class=\"td-muted\">m.bouchard@nexabank.com</div></div></div></td>
                <td><span class=\"badge badge-gray\">Loan Manager</span></td>
                <td class=\"td-muted\">Loans, Clients</td>
                <td class=\"td-muted\">2 hours ago</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td><button class=\"btn btn-outline btn-sm\">Edit</button></td>
              </tr>
              <tr>
                <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-purple\">YS</div><div><div class=\"font-medium\">Yannick Sarr</div><div class=\"td-muted\">y.sarr@nexabank.com</div></div></div></td>
                <td><span class=\"badge badge-gray\">Content Editor</span></td>
                <td class=\"td-muted\">Publications</td>
                <td class=\"td-muted\">Yesterday</td>
                <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td>
                <td><button class=\"btn btn-outline btn-sm\">Edit</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: PRODUCTS ═══ -->
    <div class=\"page\" id=\"page-products\">
      <div class=\"page-header\">
        <div><h1>Products</h1><p>Banking products and service offerings.</p></div>
        <button class=\"btn btn-primary\">
          <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
          New Product
        </button>
      </div>
      <div class=\"three-col mb-24\" style=\"grid-template-columns:repeat(3,1fr);\">
        <div class=\"card\">
          <div style=\"background:var(--blue-50); padding:20px; display:flex; justify-content:center;\">
            <div style=\"width:56px;height:56px;background:var(--blue-600);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;\">
              <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1.8\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><line x1=\"2\" y1=\"10\" x2=\"22\" y2=\"10\"/></svg>
            </div>
          </div>
          <div class=\"card-body\">
            <div style=\"font-family:var(--font-display);font-size:15px;font-weight:600;margin-bottom:6px;\">Checking Account</div>
            <div class=\"text-sm\" style=\"margin-bottom:16px;\">Everyday banking with zero fees and instant transfers.</div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:10px;\">
              <span class=\"td-muted\">Interest Rate</span><span class=\"font-medium\">0.05% p.a.</span>
            </div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:16px;\">
              <span class=\"td-muted\">Subscribers</span><span class=\"font-medium\">1,842</span>
            </div>
            <div class=\"flex gap-8\">
              <span class=\"badge badge-success\" style=\"flex:1;justify-content:center;\"><span class=\"badge-dot\"></span>Active</span>
              <button class=\"btn btn-outline btn-sm\">Edit</button>
            </div>
          </div>
        </div>
        <div class=\"card\">
          <div style=\"background:#E1F5EE; padding:20px; display:flex; justify-content:center;\">
            <div style=\"width:56px;height:56px;background:var(--success);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;\">
              <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1.8\"><path d=\"M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0H5m0 0H3m2 0H7m0-16h4m0 0V3m0 2v0m3 14v-6a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v6\"/></svg>
            </div>
          </div>
          <div class=\"card-body\">
            <div style=\"font-family:var(--font-display);font-size:15px;font-weight:600;margin-bottom:6px;\">Savings Account</div>
            <div class=\"text-sm\" style=\"margin-bottom:16px;\">High-yield savings with flexible withdrawal terms.</div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:10px;\">
              <span class=\"td-muted\">Interest Rate</span><span class=\"font-medium\">4.20% p.a.</span>
            </div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:16px;\">
              <span class=\"td-muted\">Subscribers</span><span class=\"font-medium\">912</span>
            </div>
            <div class=\"flex gap-8\">
              <span class=\"badge badge-success\" style=\"flex:1;justify-content:center;\"><span class=\"badge-dot\"></span>Active</span>
              <button class=\"btn btn-outline btn-sm\">Edit</button>
            </div>
          </div>
        </div>
        <div class=\"card\">
          <div style=\"background:#FAEEDA; padding:20px; display:flex; justify-content:center;\">
            <div style=\"width:56px;height:56px;background:var(--warning);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;\">
              <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1.8\"><rect x=\"1\" y=\"4\" width=\"22\" height=\"16\" rx=\"2\"/><line x1=\"1\" y1=\"10\" x2=\"23\" y2=\"10\"/></svg>
            </div>
          </div>
          <div class=\"card-body\">
            <div style=\"font-family:var(--font-display);font-size:15px;font-weight:600;margin-bottom:6px;\">Premium Debit Card</div>
            <div class=\"text-sm\" style=\"margin-bottom:16px;\">Contactless payments, cashback rewards, and travel perks.</div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:10px;\">
              <span class=\"td-muted\">Annual Fee</span><span class=\"font-medium\">\$49 / year</span>
            </div>
            <div class=\"flex justify-between\" style=\"font-size:13px;margin-bottom:16px;\">
              <span class=\"td-muted\">Subscribers</span><span class=\"font-medium\">584</span>
            </div>
            <div class=\"flex gap-8\">
              <span class=\"badge badge-warning\" style=\"flex:1;justify-content:center;\"><span class=\"badge-dot\"></span>Beta</span>
              <button class=\"btn btn-outline btn-sm\">Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: LOANS ═══ -->
    <div class=\"page\" id=\"page-loans\">
      <div class=\"page-header\">
        <div><h1>Loans</h1><p>Review and manage loan applications.</p></div>
        <button class=\"btn btn-primary\">New Application</button>
      </div>

      <div class=\"tabs\">
        <button class=\"tab-btn active\" onclick=\"switchTab(this, 'tab-pending')\">Pending (12)</button>
        <button class=\"tab-btn\" onclick=\"switchTab(this, 'tab-active')\">Active (335)</button>
        <button class=\"tab-btn\" onclick=\"switchTab(this, 'tab-closed')\">Closed</button>
      </div>

      <div id=\"tab-pending\">
        <div style=\"display:grid; grid-template-columns:repeat(3,1fr); gap:18px;\">
          <div class=\"loan-card\">
            <div class=\"loan-type\">Personal Loan · Application</div>
            <div class=\"loan-amount\">\$15,000</div>
            <div class=\"loan-meta\">
              <div class=\"loan-meta-item\"><div class=\"label\">Applicant</div><div class=\"value\">Sophia Martin</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Duration</div><div class=\"value\">36 months</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Rate</div><div class=\"value\">7.4% p.a.</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Monthly</div><div class=\"value\">\$464.53</div></div>
            </div>
            <div class=\"progress-bar\" style=\"margin-bottom:14px;\"><div class=\"progress-fill\" style=\"width:60%;\"></div></div>
            <div class=\"text-sm\" style=\"margin-bottom:14px;\">Credit score: 720 · Risk: Low</div>
            <div class=\"flex gap-8\">
              <button class=\"btn btn-primary btn-sm\" style=\"flex:1;\">Approve</button>
              <button class=\"btn btn-danger btn-sm\">Reject</button>
            </div>
          </div>
          <div class=\"loan-card\">
            <div class=\"loan-type\">Mortgage · Application</div>
            <div class=\"loan-amount\">\$280,000</div>
            <div class=\"loan-meta\">
              <div class=\"loan-meta-item\"><div class=\"label\">Applicant</div><div class=\"value\">James Rowe</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Duration</div><div class=\"value\">240 months</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Rate</div><div class=\"value\">5.1% p.a.</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Monthly</div><div class=\"value\">\$1,870.00</div></div>
            </div>
            <div class=\"progress-bar\" style=\"margin-bottom:14px;\"><div class=\"progress-fill amber\" style=\"width:35%;\"></div></div>
            <div class=\"text-sm\" style=\"margin-bottom:14px;\">Credit score: 680 · Risk: Medium</div>
            <div class=\"flex gap-8\">
              <button class=\"btn btn-primary btn-sm\" style=\"flex:1;\">Approve</button>
              <button class=\"btn btn-danger btn-sm\">Reject</button>
            </div>
          </div>
          <div class=\"loan-card\">
            <div class=\"loan-type\">Business Loan · Application</div>
            <div class=\"loan-amount\">\$80,000</div>
            <div class=\"loan-meta\">
              <div class=\"loan-meta-item\"><div class=\"label\">Applicant</div><div class=\"value\">Nadia Petit</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Duration</div><div class=\"value\">60 months</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Rate</div><div class=\"value\">6.8% p.a.</div></div>
              <div class=\"loan-meta-item\"><div class=\"label\">Monthly</div><div class=\"value\">\$1,573.20</div></div>
            </div>
            <div class=\"progress-bar\" style=\"margin-bottom:14px;\"><div class=\"progress-fill green\" style=\"width:80%;\"></div></div>
            <div class=\"text-sm\" style=\"margin-bottom:14px;\">Credit score: 760 · Risk: Low</div>
            <div class=\"flex gap-8\">
              <button class=\"btn btn-primary btn-sm\" style=\"flex:1;\">Approve</button>
              <button class=\"btn btn-danger btn-sm\">Reject</button>
            </div>
          </div>
        </div>
      </div>

      <div id=\"tab-active\" style=\"display:none;\">
        <div class=\"card\">
          <div class=\"table-wrap\">
            <table>
              <thead><tr><th>Client</th><th>Type</th><th>Amount</th><th>Rate</th><th>Progress</th><th>Next Payment</th><th>Status</th></tr></thead>
              <tbody>
                <tr>
                  <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-blue\">AL</div><div class=\"font-medium\">Aïcha Lebreton</div></div></td>
                  <td class=\"td-muted\">Personal</td>
                  <td class=\"font-medium\">\$20,000</td>
                  <td class=\"td-muted\">7.2%</td>
                  <td style=\"width:140px;\"><div class=\"progress-bar\"><div class=\"progress-fill green\" style=\"width:65%;\"></div></div><div class=\"td-muted\" style=\"margin-top:4px; font-size:11px;\">65% repaid</div></td>
                  <td class=\"td-muted\">May 1, 2026</td>
                  <td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>On track</span></td>
                </tr>
                <tr>
                  <td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-teal\">KT</div><div class=\"font-medium\">Kofi Tawiah</div></div></td>
                  <td class=\"td-muted\">Mortgage</td>
                  <td class=\"font-medium\">\$195,000</td>
                  <td class=\"td-muted\">5.5%</td>
                  <td style=\"width:140px;\"><div class=\"progress-bar\"><div class=\"progress-fill amber\" style=\"width:20%;\"></div></div><div class=\"td-muted\" style=\"margin-top:4px; font-size:11px;\">20% repaid</div></td>
                  <td class=\"td-muted\">May 1, 2026</td>
                  <td><span class=\"badge badge-warning\"><span class=\"badge-dot\"></span>Late</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div id=\"tab-closed\" style=\"display:none;\">
        <div class=\"card card-body\" style=\"text-align:center; color:var(--gray-400); padding:40px;\">No closed loans found.</div>
      </div>
    </div>

    <!-- ═══ PAGE: WALLET ═══ -->
    <div class=\"page\" id=\"page-wallet\">
      <div class=\"page-header\">
        <div><h1>Wallet</h1><p>Client wallet balances and transactions.</p></div>
        <button class=\"btn btn-primary\">Fund Wallet</button>
      </div>
      <div class=\"two-col mb-24\">
        <div>
          <div class=\"wallet-card-display\" style=\"margin-bottom:20px;\">
            <div class=\"wallet-bank-name\">NEXABANK</div>
            <div class=\"wallet-balance-label\">AVAILABLE BALANCE</div>
            <div class=\"wallet-balance\">\$42,810.00</div>
            <div class=\"wallet-card-footer\">
              <div>
                <div class=\"wallet-holder-name\">SOPHIA MARTIN</div>
                <div class=\"wallet-card-number\">**** **** **** 4821</div>
              </div>
              <svg width=\"40\" height=\"28\" viewBox=\"0 0 40 28\" fill=\"none\"><circle cx=\"14\" cy=\"14\" r=\"14\" fill=\"rgba(255,255,255,0.25)\"/><circle cx=\"26\" cy=\"14\" r=\"14\" fill=\"rgba(255,255,255,0.15)\"/></svg>
            </div>
          </div>
          <div class=\"card\">
            <div class=\"card-header\"><span class=\"card-title\">Quick Actions</span></div>
            <div class=\"card-body\" style=\"display:grid; grid-template-columns:1fr 1fr; gap:10px;\">
              <button class=\"btn btn-primary\" style=\"justify-content:center;\">Transfer</button>
              <button class=\"btn btn-outline\" style=\"justify-content:center;\">Withdraw</button>
              <button class=\"btn btn-outline\" style=\"justify-content:center;\">Top Up</button>
              <button class=\"btn btn-outline\" style=\"justify-content:center;\">Statement</button>
            </div>
          </div>
        </div>
        <div class=\"card\">
          <div class=\"card-header\"><span class=\"card-title\">Recent Activity</span></div>
          <div style=\"padding: 0 22px;\">
            <div class=\"txn-item\"><div class=\"txn-icon\" style=\"background:#E1F5EE;\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg></div><div class=\"txn-info\"><div class=\"txn-name\">Bank Transfer In</div><div class=\"txn-date\">Apr 4 · 09:41 AM</div></div><div class=\"txn-amount credit\">+\$5,000</div></div>
            <div class=\"txn-item\"><div class=\"txn-icon\" style=\"background:#FCEBEB;\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#E24B4A\" stroke-width=\"2\"><polyline points=\"6 9 12 15 18 9\"/></svg></div><div class=\"txn-info\"><div class=\"txn-name\">Online Purchase</div><div class=\"txn-date\">Apr 3 · 02:15 PM</div></div><div class=\"txn-amount debit\">−\$249</div></div>
            <div class=\"txn-item\"><div class=\"txn-icon\" style=\"background:#FCEBEB;\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#E24B4A\" stroke-width=\"2\"><polyline points=\"6 9 12 15 18 9\"/></svg></div><div class=\"txn-info\"><div class=\"txn-name\">Loan Repayment</div><div class=\"txn-date\">Apr 1 · 12:00 AM</div></div><div class=\"txn-amount debit\">−\$464</div></div>
            <div class=\"txn-item\"><div class=\"txn-icon\" style=\"background:#E1F5EE;\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#1D9E75\" stroke-width=\"2\"><polyline points=\"18 15 12 9 6 15\"/></svg></div><div class=\"txn-info\"><div class=\"txn-name\">Salary Deposit</div><div class=\"txn-date\">Apr 1 · 08:00 AM</div></div><div class=\"txn-amount credit\">+\$3,800</div></div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header\"><span class=\"card-title\">All Wallets</span><button class=\"btn btn-outline btn-sm\">Export</button></div>
        <div class=\"table-wrap\">
          <table>
            <thead><tr><th>Client</th><th>Wallet ID</th><th>Currency</th><th>Balance</th><th>Last Transaction</th><th>Status</th></tr></thead>
            <tbody>
              <tr><td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-blue\">SM</div><div class=\"font-medium\">Sophia Martin</div></div></td><td class=\"td-muted\">WLT-0041-SM</td><td class=\"td-muted\">USD</td><td class=\"font-medium\">\$42,810.00</td><td class=\"td-muted\">Apr 4, 2026</td><td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td></tr>
              <tr><td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-teal\">JR</div><div class=\"font-medium\">James Rowe</div></div></td><td class=\"td-muted\">WLT-0041-JR</td><td class=\"td-muted\">USD</td><td class=\"font-medium\">\$8,200.00</td><td class=\"td-muted\">Apr 3, 2026</td><td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td></tr>
              <tr><td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-coral\">AL</div><div class=\"font-medium\">Aïcha Lebreton</div></div></td><td class=\"td-muted\">WLT-0041-AL</td><td class=\"td-muted\">EUR</td><td class=\"font-medium\">€97,540.00</td><td class=\"td-muted\">Apr 2, 2026</td><td><span class=\"badge badge-success\"><span class=\"badge-dot\"></span>Active</span></td></tr>
              <tr><td><div class=\"avatar-cell\"><div class=\"mini-avatar bg-purple\">KT</div><div class=\"font-medium\">Kofi Tawiah</div></div></td><td class=\"td-muted\">WLT-0041-KT</td><td class=\"td-muted\">USD</td><td class=\"font-medium\">\$1,390.00</td><td class=\"td-muted\">Mar 28, 2026</td><td><span class=\"badge badge-danger\"><span class=\"badge-dot\"></span>Frozen</span></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- ═══ PAGE: PUBLICATIONS ═══ -->
    <div class=\"page\" id=\"page-publications\">
      <div class=\"page-header\">
        <div><h1>Publications</h1><p>Manage financial content, announcements and articles.</p></div>
        <button class=\"btn btn-primary\">
          <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
          New Article
        </button>
      </div>

      <div class=\"tabs\">
        <button class=\"tab-btn active\">All (24)</button>
        <button class=\"tab-btn\">Published (18)</button>
        <button class=\"tab-btn\">Draft (6)</button>
      </div>

      <div style=\"display:grid; grid-template-columns:repeat(3,1fr); gap:20px;\">
        <div class=\"pub-card\">
          <div class=\"pub-card-img\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--blue-400)\" stroke-width=\"1.5\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"/><polyline points=\"14 2 14 8 20 8\"/><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"/><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"/><polyline points=\"10 9 9 9 8 9\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\">Rates Update</span>
            <div class=\"pub-title\">Q2 2026 Interest Rate Adjustments</div>
            <div class=\"pub-excerpt\">Changes to savings account rates effective May 1st, 2026. Read the full announcement for details.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">Y. Sarr</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-success\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Published</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\">
          <div class=\"pub-card-img\" style=\"background:#E1F5EE;\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--success)\" stroke-width=\"1.5\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\">Security</span>
            <div class=\"pub-title\">New 2-Factor Authentication Feature</div>
            <div class=\"pub-excerpt\">We've launched biometric and OTP-based 2FA for all NexaBank accounts. Learn how to enable it.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">A. Diallo</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-success\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Published</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\">
          <div class=\"pub-card-img\" style=\"background:#FAEEDA;\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--warning)\" stroke-width=\"1.5\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\" style=\"background:#FAEEDA;color:#633806;\">Loan Guide</span>
            <div class=\"pub-title\">Understanding Your Loan Terms</div>
            <div class=\"pub-excerpt\">A comprehensive guide to reading your loan agreement, APR calculation and repayment schedules.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">M. Bouchard</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-warning\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Draft</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\">
          <div class=\"pub-card-img\" style=\"background:var(--blue-50);\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--blue-600)\" stroke-width=\"1.5\"><rect x=\"2\" y=\"3\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M8 21h8M12 17v4\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\">Product Launch</span>
            <div class=\"pub-title\">Introducing NexaBank Premium Card</div>
            <div class=\"pub-excerpt\">Unlimited cashback, airport lounges and zero forex fees. Apply now for early access.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">Y. Sarr</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-success\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Published</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\">
          <div class=\"pub-card-img\" style=\"background:#FCEBEB;\">
            <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--danger)\" stroke-width=\"1.5\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"/><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"/><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"/></svg>
          </div>
          <div class=\"pub-card-body\">
            <span class=\"pub-tag\" style=\"background:#FCEBEB;color:#501313;\">Notice</span>
            <div class=\"pub-title\">System Maintenance — May 3rd, 2026</div>
            <div class=\"pub-excerpt\">Scheduled maintenance from 02:00–04:00 AM UTC. Online banking services will be temporarily unavailable.</div>
            <div class=\"pub-footer\">
              <span class=\"pub-author\">A. Diallo</span>
              <div class=\"flex gap-8 items-center\">
                <span class=\"badge badge-warning\" style=\"padding:2px 8px;\"><span class=\"badge-dot\"></span>Draft</span>
                <button class=\"btn btn-outline btn-sm\">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"pub-card\" style=\"border:2px dashed var(--gray-200); background:transparent; display:flex; align-items:center; justify-content:center; min-height:220px; cursor:pointer;\" onclick=\"\">
          <div style=\"text-align:center; color:var(--gray-400);\">
            <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" style=\"margin:0 auto 10px;\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/></svg>
            <div style=\"font-size:13px; font-weight:500;\">New Publication</div>
          </div>
        </div>
      </div>
    </div>

  </main>
</div>

<script>
  const pages = {
    dashboard: 'Dashboard',
    clients: 'Clients',
    admins: 'Administrators',
    products: 'Products',
    loans: 'Loans',
    wallet: 'Wallet',
    publications: 'Publications'
  };

  function showPage(id, btn) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    document.getElementById('page-' + id).classList.add('active');
    document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
    if (btn) btn.classList.add('active');
    document.getElementById('page-title').textContent = pages[id] || id;
  }

  function switchTab(btn, tabId) {
    const tabs = ['tab-pending','tab-active','tab-closed'];
    tabs.forEach(t => {
      const el = document.getElementById(t);
      if (el) el.style.display = t === tabId ? 'block' : 'none';
    });
    btn.parentElement.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  }
</script>
</body>
</html>", "LandingPage.html.twig", "C:\\Users\\Lenovo\\Desktop\\Hedi\\Esprit-PIDEV-Symfony-3A28-2026-FinTrust\\templates\\LandingPage.html.twig");
    }
}
