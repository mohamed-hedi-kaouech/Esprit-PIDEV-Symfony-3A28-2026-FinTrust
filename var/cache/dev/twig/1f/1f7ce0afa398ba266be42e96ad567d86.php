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

/* html/LandingPage.html.twig */
class __TwigTemplate_36b22852cd1ef75ec8e72635d04260df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/LandingPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/LandingPage.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>FinTrust — Banking Reimagined</title>
  <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Style.css"), "html", null, true);
        yield "\">
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link href=\"https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap\" rel=\"stylesheet\" />
</head>
<body>

  <!-- NAVBAR -->
  <nav class=\"navbar\" id=\"navbar\">
    <div class=\"nav-container\">
      <div class=\"logo\">
        <div class=\"logo-icon\">
          <svg viewBox=\"0 0 40 40\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <rect width=\"40\" height=\"40\" rx=\"10\" fill=\"#1560BD\"/>
            <path d=\"M10 28V18l10-8 10 8v10H24v-6h-8v6H10Z\" fill=\"white\"/>
          </svg>
        </div>
        <span class=\"logo-text\">FinTrust</span>
      </div>
      <ul class=\"nav-links\">
        <li><a href=\"#features\">Features</a></li>
        <li><a href=\"#how-it-works\">How It Works</a></li>
        <li><a href=\"#testimonials\">Reviews</a></li>
        <li><a href=\"#pricing\">Pricing</a></li>
      </ul>
      <div class=\"nav-actions\">
        <button class=\"btn-login\" id=\"loginBtn\">Log In</button>
        <button class=\"btn-signup\" id=\"signupBtn\">Get Started</button>
      </div>
      <button class=\"hamburger\" id=\"hamburger\" aria-label=\"Menu\">
        <span></span><span></span><span></span>
      </button>
    </div>
    <!-- Mobile menu -->
    <div class=\"mobile-menu\" id=\"mobileMenu\">
      <ul>
        <li><a href=\"#features\">Features</a></li>
        <li><a href=\"#how-it-works\">How It Works</a></li>
        <li><a href=\"#testimonials\">Reviews</a></li>
        <li><a href=\"#pricing\">Pricing</a></li>
      </ul>
      <div class=\"mobile-actions\">
        <button class=\"btn-login\" id=\"mobileLoginBtn\">Log In</button>
        <button class=\"btn-signup\" id=\"mobileSignupBtn\">Get Started</button>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class=\"hero\" id=\"home\">
    <div class=\"hero-bg\">
      <div class=\"blob blob-1\"></div>
      <div class=\"blob blob-2\"></div>
      <div class=\"grid-overlay\"></div>
    </div>
    <div class=\"hero-container\">
      <div class=\"hero-badge\">
        <span class=\"badge-dot\"></span>
        Trusted by 2 Million+ customers worldwide
      </div>
      <h1 class=\"hero-title\">
        Banking that<br/>
        <span class=\"highlight\">works for you</span>,<br/>
        not against you.
      </h1>
      <p class=\"hero-subtitle\">
        FinTrust brings modern banking to your fingertips — seamless transfers, real-time insights, and zero hidden fees. Your money, your control.
      </p>
      <div class=\"hero-cta\">
        <button class=\"btn-primary-lg\" id=\"heroSignupBtn\">Open Free Account</button>
        <button class=\"btn-ghost-lg\" id=\"heroLearnBtn\">
          <span class=\"play-icon\">▶</span> Watch how it works
        </button>
      </div>
      <div class=\"hero-stats\">
        <div class=\"stat\">
          <span class=\"stat-num\">\$0</span>
          <span class=\"stat-label\">Monthly Fees</span>
        </div>
        <div class=\"stat-divider\"></div>
        <div class=\"stat\">
          <span class=\"stat-num\">4.9★</span>
          <span class=\"stat-label\">App Store Rating</span>
        </div>
        <div class=\"stat-divider\"></div>
        <div class=\"stat\">
          <span class=\"stat-num\">2M+</span>
          <span class=\"stat-label\">Happy Members</span>
        </div>
      </div>
    </div>
    <div class=\"hero-visual\">
      <div class=\"card-mockup\">
        <div class=\"mockup-card main-card\">
          <div class=\"card-chip\"></div>
          <div class=\"card-brand\">FinTrust</div>
          <div class=\"card-number\">•••• •••• •••• 4821</div>
          <div class=\"card-footer\">
            <span>JAMES CARTER</span>
            <span>08/28</span>
          </div>
        </div>
        <div class=\"mockup-card secondary-card\">
          <div class=\"card-chip\"></div>
          <div class=\"card-brand\">FinTrust</div>
          <div class=\"card-number\">•••• •••• •••• 7734</div>
          <div class=\"card-footer\">
            <span>SARAH WELLS</span>
            <span>03/29</span>
          </div>
        </div>
        <div class=\"floating-widget widget-balance\">
          <div class=\"widget-icon\">💰</div>
          <div class=\"widget-text\">
            <span class=\"widget-label\">Total Balance</span>
            <span class=\"widget-value\">\$24,830.00</span>
          </div>
        </div>
        <div class=\"floating-widget widget-sent\">
          <div class=\"widget-icon\">✅</div>
          <div class=\"widget-text\">
            <span class=\"widget-label\">Payment Sent</span>
            <span class=\"widget-value\">−\$120.00</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class=\"features\" id=\"features\">
    <div class=\"section-container\">
      <div class=\"section-header\">
        <div class=\"section-tag\">Why FinTrust</div>
        <h2 class=\"section-title\">Everything you need,<br/>nothing you don't</h2>
        <p class=\"section-sub\">We've stripped away the complexity to give you a banking experience that's powerful yet simple.</p>
      </div>
      <div class=\"features-grid\">
        <div class=\"feature-card feature-large\">
          <div class=\"feature-icon\">🔒</div>
          <h3>Bank-Grade Security</h3>
          <p>256-bit AES encryption, biometric authentication, and real-time fraud detection keep your funds safe around the clock.</p>
          <div class=\"feature-badge\">256-bit AES</div>
        </div>
        <div class=\"feature-card\">
          <div class=\"feature-icon\">⚡</div>
          <h3>Instant Transfers</h3>
          <p>Send money to anyone, anywhere in seconds. No delays, no waiting days for funds to clear.</p>
        </div>
        <div class=\"feature-card\">
          <div class=\"feature-icon\">📊</div>
          <h3>Smart Analytics</h3>
          <p>Understand your spending with beautiful, AI-powered breakdowns and personalized savings tips.</p>
        </div>
        <div class=\"feature-card feature-blue\">
          <div class=\"feature-icon\">🌍</div>
          <h3>Global Payments</h3>
          <p>Pay and get paid in 50+ currencies with real exchange rates — never hidden markups.</p>
          <div class=\"currency-flags\">🇺🇸 🇪🇺 🇬🇧 🇯🇵 🇨🇦</div>
        </div>
        <div class=\"feature-card\">
          <div class=\"feature-icon\">📱</div>
          <h3>Mobile-First Design</h3>
          <p>A flawlessly designed app for iOS and Android. Manage everything from your pocket.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class=\"how-it-works\" id=\"how-it-works\">
    <div class=\"section-container\">
      <div class=\"section-header\">
        <div class=\"section-tag\">Simple Process</div>
        <h2 class=\"section-title\">Up and running in<br/>under 5 minutes</h2>
      </div>
      <div class=\"steps\">
        <div class=\"step\">
          <div class=\"step-num\">01</div>
          <div class=\"step-content\">
            <h3>Create Your Account</h3>
            <p>Sign up with just your email. No paperwork, no branch visits, no waiting in line.</p>
          </div>
        </div>
        <div class=\"step-connector\"></div>
        <div class=\"step\">
          <div class=\"step-num\">02</div>
          <div class=\"step-content\">
            <h3>Verify Your Identity</h3>
            <p>A quick, secure ID check powered by AI. Usually done in under 2 minutes.</p>
          </div>
        </div>
        <div class=\"step-connector\"></div>
        <div class=\"step\">
          <div class=\"step-num\">03</div>
          <div class=\"step-content\">
            <h3>Fund Your Account</h3>
            <p>Link your existing bank or deposit cash. Start using your account immediately.</p>
          </div>
        </div>
        <div class=\"step-connector\"></div>
        <div class=\"step\">
          <div class=\"step-num\">04</div>
          <div class=\"step-content\">
            <h3>Banking, Reimagined</h3>
            <p>Send, save, invest, and manage your finances with full confidence.</p>
          </div>
        </div>
      </div>
      <div class=\"steps-cta\">
        <button class=\"btn-primary-lg\" id=\"stepsSignupBtn\">Start in 5 Minutes →</button>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class=\"testimonials\" id=\"testimonials\">
    <div class=\"section-container\">
      <div class=\"section-header\">
        <div class=\"section-tag\">Real Reviews</div>
        <h2 class=\"section-title\">Loved by people<br/>just like you</h2>
      </div>
      <div class=\"testimonials-grid\">
        <div class=\"testimonial-card t-featured\">
          <div class=\"stars\">★★★★★</div>
          <p>\"FinTrust changed how I think about banking. The interface is stunning, transfers are instant, and I've never paid a hidden fee. It's the bank I always wanted.\"</p>
          <div class=\"testimonial-author\">
            <div class=\"author-avatar av1\">MR</div>
            <div>
              <strong>Marcus Reynolds</strong>
              <span>Entrepreneur, New York</span>
            </div>
          </div>
        </div>
        <div class=\"testimonial-card\">
          <div class=\"stars\">★★★★★</div>
          <p>\"Switched from my old bank and the difference is night and day. Setup took 4 minutes. Incredible.\"</p>
          <div class=\"testimonial-author\">
            <div class=\"author-avatar av2\">LP</div>
            <div>
              <strong>Laura Patel</strong>
              <span>Designer, London</span>
            </div>
          </div>
        </div>
        <div class=\"testimonial-card\">
          <div class=\"stars\">★★★★★</div>
          <p>\"The analytics feature alone is worth it. I finally understand where my money is going every month.\"</p>
          <div class=\"testimonial-author\">
            <div class=\"author-avatar av3\">TK</div>
            <div>
              <strong>Tom Kobayashi</strong>
              <span>Developer, Tokyo</span>
            </div>
          </div>
        </div>
        <div class=\"testimonial-card\">
          <div class=\"stars\">★★★★★</div>
          <p>\"Customer support is fast, helpful, and human. Not a single bot response. Unheard of in banking.\"</p>
          <div class=\"testimonial-author\">
            <div class=\"author-avatar av4\">AN</div>
            <div>
              <strong>Amara Nwosu</strong>
              <span>Teacher, Lagos</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section class=\"pricing\" id=\"pricing\">
    <div class=\"section-container\">
      <div class=\"section-header\">
        <div class=\"section-tag\">Pricing</div>
        <h2 class=\"section-title\">Transparent pricing.<br/>No surprises.</h2>
      </div>
      <div class=\"pricing-grid\">
        <div class=\"pricing-card\">
          <div class=\"plan-name\">Starter</div>
          <div class=\"plan-price\"><span>\$0</span>/mo</div>
          <ul class=\"plan-features\">
            <li>✓ Free checking account</li>
            <li>✓ Instant transfers (up to \$500/day)</li>
            <li>✓ Mobile app access</li>
            <li>✓ Spending analytics</li>
            <li class=\"disabled\">✗ Virtual debit card</li>
            <li class=\"disabled\">✗ International payments</li>
          </ul>
          <button class=\"btn-plan\" id=\"starterBtn\">Get Started Free</button>
        </div>
        <div class=\"pricing-card pricing-featured\">
          <div class=\"plan-badge\">Most Popular</div>
          <div class=\"plan-name\">Pro</div>
          <div class=\"plan-price\"><span>\$9</span>/mo</div>
          <ul class=\"plan-features\">
            <li>✓ Everything in Starter</li>
            <li>✓ Unlimited transfers</li>
            <li>✓ Virtual & physical debit card</li>
            <li>✓ International payments (50+ currencies)</li>
            <li>✓ Priority support</li>
            <li>✓ Advanced analytics</li>
          </ul>
          <button class=\"btn-plan btn-plan-featured\" id=\"proBtn\">Start Free Trial</button>
        </div>
        <div class=\"pricing-card\">
          <div class=\"plan-name\">Business</div>
          <div class=\"plan-price\"><span>\$29</span>/mo</div>
          <ul class=\"plan-features\">
            <li>✓ Everything in Pro</li>
            <li>✓ Up to 10 team accounts</li>
            <li>✓ Business analytics dashboard</li>
            <li>✓ Payroll integrations</li>
            <li>✓ Dedicated account manager</li>
            <li>✓ Custom API access</li>
          </ul>
          <button class=\"btn-plan\" id=\"businessBtn\">Contact Sales</button>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class=\"cta-section\">
    <div class=\"cta-bg\">
      <div class=\"cta-blob\"></div>
    </div>
    <div class=\"cta-container\">
      <h2>Ready to take control<br/>of your finances?</h2>
      <p>Join over 2 million people who trust FinTrust with their money. It's free to start.</p>
      <div class=\"cta-buttons\">
        <button class=\"btn-primary-lg\" id=\"ctaSignupBtn\">Open Your Free Account</button>
        <button class=\"btn-login cta-login\" id=\"ctaLoginBtn\">Already a member? Log In</button>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class=\"footer\">
    <div class=\"footer-container\">
      <div class=\"footer-brand\">
        <div class=\"logo\">
          <div class=\"logo-icon\">
            <svg viewBox=\"0 0 40 40\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <rect width=\"40\" height=\"40\" rx=\"10\" fill=\"#1560BD\"/>
              <path d=\"M10 28V18l10-8 10 8v10H24v-6h-8v6H10Z\" fill=\"white\"/>
            </svg>
          </div>
          <span class=\"logo-text\">FinTrust</span>
        </div>
        <p>Modern banking built on trust, transparency, and technology.</p>
        <div class=\"social-links\">
          <a href=\"#\" aria-label=\"Twitter\">𝕏</a>
          <a href=\"#\" aria-label=\"LinkedIn\">in</a>
          <a href=\"#\" aria-label=\"Instagram\">▣</a>
        </div>
      </div>
      <div class=\"footer-links\">
        <div class=\"footer-col\">
          <h4>Product</h4>
          <ul>
            <li><a href=\"#\">Features</a></li>
            <li><a href=\"#\">Pricing</a></li>
            <li><a href=\"#\">Security</a></li>
            <li><a href=\"#\">Mobile App</a></li>
          </ul>
        </div>
        <div class=\"footer-col\">
          <h4>Company</h4>
          <ul>
            <li><a href=\"#\">About</a></li>
            <li><a href=\"#\">Careers</a></li>
            <li><a href=\"#\">Blog</a></li>
            <li><a href=\"#\">Press</a></li>
          </ul>
        </div>
        <div class=\"footer-col\">
          <h4>Support</h4>
          <ul>
            <li><a href=\"#\">Help Center</a></li>
            <li><a href=\"#\">Contact Us</a></li>
            <li><a href=\"#\">Privacy Policy</a></li>
            <li><a href=\"#\">Terms of Service</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-bottom\">
      <p>© 2026 FinTrust Inc. All rights reserved. FDIC Insured. Member FDIC.</p>
    </div>
  </footer>

  <!-- MODAL: LOGIN -->
  <div class=\"modal-overlay\" id=\"loginModal\">
    <div class=\"modal\">
      <button class=\"modal-close\" id=\"closeLogin\">✕</button>
      <div class=\"modal-logo\">
        <svg viewBox=\"0 0 40 40\" fill=\"none\"><rect width=\"40\" height=\"40\" rx=\"10\" fill=\"#1560BD\"/><path d=\"M10 28V18l10-8 10 8v10H24v-6h-8v6H10Z\" fill=\"white\"/></svg>
        <span>FinTrust</span>
      </div>
      <h2 class=\"modal-title\">Welcome back</h2>
      <p class=\"modal-sub\">Log in to your FinTrust account</p>
      <div class=\"form-group\">
        <label>Email Address</label>
        <input type=\"email\" placeholder=\"you@example.com\" class=\"form-input\" />
      </div>
      <div class=\"form-group\">
        <label>Password</label>
        <input type=\"password\" placeholder=\"••••••••\" class=\"form-input\" />
        <a href=\"#\" class=\"form-link\">Forgot password?</a>
      </div>
      <button class=\"btn-modal-primary\">Log In</button>
      <p class=\"modal-switch\">Don't have an account? <a href=\"#\" id=\"switchToSignup\">Sign Up</a></p>
    </div>
  </div>

  <!-- MODAL: SIGNUP -->
  <div class=\"modal-overlay\" id=\"signupModal\">
    <div class=\"modal\">
      <button class=\"modal-close\" id=\"closeSignup\">✕</button>
      <div class=\"modal-logo\">
        <svg viewBox=\"0 0 40 40\" fill=\"none\"><rect width=\"40\" height=\"40\" rx=\"10\" fill=\"#1560BD\"/><path d=\"M10 28V18l10-8 10 8v10H24v-6h-8v6H10Z\" fill=\"white\"/></svg>
        <span>FinTrust</span>
      </div>
      <h2 class=\"modal-title\">Create your account</h2>
      <p class=\"modal-sub\">Join 2M+ people banking smarter</p>
      <div class=\"form-row\">
        <div class=\"form-group\">
          <label>First Name</label>
          <input type=\"text\" placeholder=\"James\" class=\"form-input\" />
        </div>
        <div class=\"form-group\">
          <label>Last Name</label>
          <input type=\"text\" placeholder=\"Carter\" class=\"form-input\" />
        </div>
      </div>
      <div class=\"form-group\">
        <label>Email Address</label>
        <input type=\"email\" placeholder=\"you@example.com\" class=\"form-input\" />
      </div>
      <div class=\"form-group\">
        <label>Password</label>
        <input type=\"password\" placeholder=\"Create a strong password\" class=\"form-input\" />
      </div>
      <label class=\"checkbox-label\">
        <input type=\"checkbox\" /> I agree to the <a href=\"#\">Terms of Service</a> and <a href=\"#\">Privacy Policy</a>
      </label>
      <button class=\"btn-modal-primary\">Create Free Account</button>
      <p class=\"modal-switch\">Already a member? <a href=\"#\" id=\"switchToLogin\">Log In</a></p>
    </div>
  </div>

  <script src=\"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Script.js"), "html", null, true);
        yield "\" defer></script>
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
        return "html/LandingPage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  512 => 460,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>FinTrust — Banking Reimagined</title>
  <link rel=\"stylesheet\" href=\"{{ asset('css/Style.css') }}\">
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link href=\"https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap\" rel=\"stylesheet\" />
</head>
<body>

  <!-- NAVBAR -->
  <nav class=\"navbar\" id=\"navbar\">
    <div class=\"nav-container\">
      <div class=\"logo\">
        <div class=\"logo-icon\">
          <svg viewBox=\"0 0 40 40\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <rect width=\"40\" height=\"40\" rx=\"10\" fill=\"#1560BD\"/>
            <path d=\"M10 28V18l10-8 10 8v10H24v-6h-8v6H10Z\" fill=\"white\"/>
          </svg>
        </div>
        <span class=\"logo-text\">FinTrust</span>
      </div>
      <ul class=\"nav-links\">
        <li><a href=\"#features\">Features</a></li>
        <li><a href=\"#how-it-works\">How It Works</a></li>
        <li><a href=\"#testimonials\">Reviews</a></li>
        <li><a href=\"#pricing\">Pricing</a></li>
      </ul>
      <div class=\"nav-actions\">
        <button class=\"btn-login\" id=\"loginBtn\">Log In</button>
        <button class=\"btn-signup\" id=\"signupBtn\">Get Started</button>
      </div>
      <button class=\"hamburger\" id=\"hamburger\" aria-label=\"Menu\">
        <span></span><span></span><span></span>
      </button>
    </div>
    <!-- Mobile menu -->
    <div class=\"mobile-menu\" id=\"mobileMenu\">
      <ul>
        <li><a href=\"#features\">Features</a></li>
        <li><a href=\"#how-it-works\">How It Works</a></li>
        <li><a href=\"#testimonials\">Reviews</a></li>
        <li><a href=\"#pricing\">Pricing</a></li>
      </ul>
      <div class=\"mobile-actions\">
        <button class=\"btn-login\" id=\"mobileLoginBtn\">Log In</button>
        <button class=\"btn-signup\" id=\"mobileSignupBtn\">Get Started</button>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class=\"hero\" id=\"home\">
    <div class=\"hero-bg\">
      <div class=\"blob blob-1\"></div>
      <div class=\"blob blob-2\"></div>
      <div class=\"grid-overlay\"></div>
    </div>
    <div class=\"hero-container\">
      <div class=\"hero-badge\">
        <span class=\"badge-dot\"></span>
        Trusted by 2 Million+ customers worldwide
      </div>
      <h1 class=\"hero-title\">
        Banking that<br/>
        <span class=\"highlight\">works for you</span>,<br/>
        not against you.
      </h1>
      <p class=\"hero-subtitle\">
        FinTrust brings modern banking to your fingertips — seamless transfers, real-time insights, and zero hidden fees. Your money, your control.
      </p>
      <div class=\"hero-cta\">
        <button class=\"btn-primary-lg\" id=\"heroSignupBtn\">Open Free Account</button>
        <button class=\"btn-ghost-lg\" id=\"heroLearnBtn\">
          <span class=\"play-icon\">▶</span> Watch how it works
        </button>
      </div>
      <div class=\"hero-stats\">
        <div class=\"stat\">
          <span class=\"stat-num\">\$0</span>
          <span class=\"stat-label\">Monthly Fees</span>
        </div>
        <div class=\"stat-divider\"></div>
        <div class=\"stat\">
          <span class=\"stat-num\">4.9★</span>
          <span class=\"stat-label\">App Store Rating</span>
        </div>
        <div class=\"stat-divider\"></div>
        <div class=\"stat\">
          <span class=\"stat-num\">2M+</span>
          <span class=\"stat-label\">Happy Members</span>
        </div>
      </div>
    </div>
    <div class=\"hero-visual\">
      <div class=\"card-mockup\">
        <div class=\"mockup-card main-card\">
          <div class=\"card-chip\"></div>
          <div class=\"card-brand\">FinTrust</div>
          <div class=\"card-number\">•••• •••• •••• 4821</div>
          <div class=\"card-footer\">
            <span>JAMES CARTER</span>
            <span>08/28</span>
          </div>
        </div>
        <div class=\"mockup-card secondary-card\">
          <div class=\"card-chip\"></div>
          <div class=\"card-brand\">FinTrust</div>
          <div class=\"card-number\">•••• •••• •••• 7734</div>
          <div class=\"card-footer\">
            <span>SARAH WELLS</span>
            <span>03/29</span>
          </div>
        </div>
        <div class=\"floating-widget widget-balance\">
          <div class=\"widget-icon\">💰</div>
          <div class=\"widget-text\">
            <span class=\"widget-label\">Total Balance</span>
            <span class=\"widget-value\">\$24,830.00</span>
          </div>
        </div>
        <div class=\"floating-widget widget-sent\">
          <div class=\"widget-icon\">✅</div>
          <div class=\"widget-text\">
            <span class=\"widget-label\">Payment Sent</span>
            <span class=\"widget-value\">−\$120.00</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class=\"features\" id=\"features\">
    <div class=\"section-container\">
      <div class=\"section-header\">
        <div class=\"section-tag\">Why FinTrust</div>
        <h2 class=\"section-title\">Everything you need,<br/>nothing you don't</h2>
        <p class=\"section-sub\">We've stripped away the complexity to give you a banking experience that's powerful yet simple.</p>
      </div>
      <div class=\"features-grid\">
        <div class=\"feature-card feature-large\">
          <div class=\"feature-icon\">🔒</div>
          <h3>Bank-Grade Security</h3>
          <p>256-bit AES encryption, biometric authentication, and real-time fraud detection keep your funds safe around the clock.</p>
          <div class=\"feature-badge\">256-bit AES</div>
        </div>
        <div class=\"feature-card\">
          <div class=\"feature-icon\">⚡</div>
          <h3>Instant Transfers</h3>
          <p>Send money to anyone, anywhere in seconds. No delays, no waiting days for funds to clear.</p>
        </div>
        <div class=\"feature-card\">
          <div class=\"feature-icon\">📊</div>
          <h3>Smart Analytics</h3>
          <p>Understand your spending with beautiful, AI-powered breakdowns and personalized savings tips.</p>
        </div>
        <div class=\"feature-card feature-blue\">
          <div class=\"feature-icon\">🌍</div>
          <h3>Global Payments</h3>
          <p>Pay and get paid in 50+ currencies with real exchange rates — never hidden markups.</p>
          <div class=\"currency-flags\">🇺🇸 🇪🇺 🇬🇧 🇯🇵 🇨🇦</div>
        </div>
        <div class=\"feature-card\">
          <div class=\"feature-icon\">📱</div>
          <h3>Mobile-First Design</h3>
          <p>A flawlessly designed app for iOS and Android. Manage everything from your pocket.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class=\"how-it-works\" id=\"how-it-works\">
    <div class=\"section-container\">
      <div class=\"section-header\">
        <div class=\"section-tag\">Simple Process</div>
        <h2 class=\"section-title\">Up and running in<br/>under 5 minutes</h2>
      </div>
      <div class=\"steps\">
        <div class=\"step\">
          <div class=\"step-num\">01</div>
          <div class=\"step-content\">
            <h3>Create Your Account</h3>
            <p>Sign up with just your email. No paperwork, no branch visits, no waiting in line.</p>
          </div>
        </div>
        <div class=\"step-connector\"></div>
        <div class=\"step\">
          <div class=\"step-num\">02</div>
          <div class=\"step-content\">
            <h3>Verify Your Identity</h3>
            <p>A quick, secure ID check powered by AI. Usually done in under 2 minutes.</p>
          </div>
        </div>
        <div class=\"step-connector\"></div>
        <div class=\"step\">
          <div class=\"step-num\">03</div>
          <div class=\"step-content\">
            <h3>Fund Your Account</h3>
            <p>Link your existing bank or deposit cash. Start using your account immediately.</p>
          </div>
        </div>
        <div class=\"step-connector\"></div>
        <div class=\"step\">
          <div class=\"step-num\">04</div>
          <div class=\"step-content\">
            <h3>Banking, Reimagined</h3>
            <p>Send, save, invest, and manage your finances with full confidence.</p>
          </div>
        </div>
      </div>
      <div class=\"steps-cta\">
        <button class=\"btn-primary-lg\" id=\"stepsSignupBtn\">Start in 5 Minutes →</button>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class=\"testimonials\" id=\"testimonials\">
    <div class=\"section-container\">
      <div class=\"section-header\">
        <div class=\"section-tag\">Real Reviews</div>
        <h2 class=\"section-title\">Loved by people<br/>just like you</h2>
      </div>
      <div class=\"testimonials-grid\">
        <div class=\"testimonial-card t-featured\">
          <div class=\"stars\">★★★★★</div>
          <p>\"FinTrust changed how I think about banking. The interface is stunning, transfers are instant, and I've never paid a hidden fee. It's the bank I always wanted.\"</p>
          <div class=\"testimonial-author\">
            <div class=\"author-avatar av1\">MR</div>
            <div>
              <strong>Marcus Reynolds</strong>
              <span>Entrepreneur, New York</span>
            </div>
          </div>
        </div>
        <div class=\"testimonial-card\">
          <div class=\"stars\">★★★★★</div>
          <p>\"Switched from my old bank and the difference is night and day. Setup took 4 minutes. Incredible.\"</p>
          <div class=\"testimonial-author\">
            <div class=\"author-avatar av2\">LP</div>
            <div>
              <strong>Laura Patel</strong>
              <span>Designer, London</span>
            </div>
          </div>
        </div>
        <div class=\"testimonial-card\">
          <div class=\"stars\">★★★★★</div>
          <p>\"The analytics feature alone is worth it. I finally understand where my money is going every month.\"</p>
          <div class=\"testimonial-author\">
            <div class=\"author-avatar av3\">TK</div>
            <div>
              <strong>Tom Kobayashi</strong>
              <span>Developer, Tokyo</span>
            </div>
          </div>
        </div>
        <div class=\"testimonial-card\">
          <div class=\"stars\">★★★★★</div>
          <p>\"Customer support is fast, helpful, and human. Not a single bot response. Unheard of in banking.\"</p>
          <div class=\"testimonial-author\">
            <div class=\"author-avatar av4\">AN</div>
            <div>
              <strong>Amara Nwosu</strong>
              <span>Teacher, Lagos</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section class=\"pricing\" id=\"pricing\">
    <div class=\"section-container\">
      <div class=\"section-header\">
        <div class=\"section-tag\">Pricing</div>
        <h2 class=\"section-title\">Transparent pricing.<br/>No surprises.</h2>
      </div>
      <div class=\"pricing-grid\">
        <div class=\"pricing-card\">
          <div class=\"plan-name\">Starter</div>
          <div class=\"plan-price\"><span>\$0</span>/mo</div>
          <ul class=\"plan-features\">
            <li>✓ Free checking account</li>
            <li>✓ Instant transfers (up to \$500/day)</li>
            <li>✓ Mobile app access</li>
            <li>✓ Spending analytics</li>
            <li class=\"disabled\">✗ Virtual debit card</li>
            <li class=\"disabled\">✗ International payments</li>
          </ul>
          <button class=\"btn-plan\" id=\"starterBtn\">Get Started Free</button>
        </div>
        <div class=\"pricing-card pricing-featured\">
          <div class=\"plan-badge\">Most Popular</div>
          <div class=\"plan-name\">Pro</div>
          <div class=\"plan-price\"><span>\$9</span>/mo</div>
          <ul class=\"plan-features\">
            <li>✓ Everything in Starter</li>
            <li>✓ Unlimited transfers</li>
            <li>✓ Virtual & physical debit card</li>
            <li>✓ International payments (50+ currencies)</li>
            <li>✓ Priority support</li>
            <li>✓ Advanced analytics</li>
          </ul>
          <button class=\"btn-plan btn-plan-featured\" id=\"proBtn\">Start Free Trial</button>
        </div>
        <div class=\"pricing-card\">
          <div class=\"plan-name\">Business</div>
          <div class=\"plan-price\"><span>\$29</span>/mo</div>
          <ul class=\"plan-features\">
            <li>✓ Everything in Pro</li>
            <li>✓ Up to 10 team accounts</li>
            <li>✓ Business analytics dashboard</li>
            <li>✓ Payroll integrations</li>
            <li>✓ Dedicated account manager</li>
            <li>✓ Custom API access</li>
          </ul>
          <button class=\"btn-plan\" id=\"businessBtn\">Contact Sales</button>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class=\"cta-section\">
    <div class=\"cta-bg\">
      <div class=\"cta-blob\"></div>
    </div>
    <div class=\"cta-container\">
      <h2>Ready to take control<br/>of your finances?</h2>
      <p>Join over 2 million people who trust FinTrust with their money. It's free to start.</p>
      <div class=\"cta-buttons\">
        <button class=\"btn-primary-lg\" id=\"ctaSignupBtn\">Open Your Free Account</button>
        <button class=\"btn-login cta-login\" id=\"ctaLoginBtn\">Already a member? Log In</button>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class=\"footer\">
    <div class=\"footer-container\">
      <div class=\"footer-brand\">
        <div class=\"logo\">
          <div class=\"logo-icon\">
            <svg viewBox=\"0 0 40 40\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <rect width=\"40\" height=\"40\" rx=\"10\" fill=\"#1560BD\"/>
              <path d=\"M10 28V18l10-8 10 8v10H24v-6h-8v6H10Z\" fill=\"white\"/>
            </svg>
          </div>
          <span class=\"logo-text\">FinTrust</span>
        </div>
        <p>Modern banking built on trust, transparency, and technology.</p>
        <div class=\"social-links\">
          <a href=\"#\" aria-label=\"Twitter\">𝕏</a>
          <a href=\"#\" aria-label=\"LinkedIn\">in</a>
          <a href=\"#\" aria-label=\"Instagram\">▣</a>
        </div>
      </div>
      <div class=\"footer-links\">
        <div class=\"footer-col\">
          <h4>Product</h4>
          <ul>
            <li><a href=\"#\">Features</a></li>
            <li><a href=\"#\">Pricing</a></li>
            <li><a href=\"#\">Security</a></li>
            <li><a href=\"#\">Mobile App</a></li>
          </ul>
        </div>
        <div class=\"footer-col\">
          <h4>Company</h4>
          <ul>
            <li><a href=\"#\">About</a></li>
            <li><a href=\"#\">Careers</a></li>
            <li><a href=\"#\">Blog</a></li>
            <li><a href=\"#\">Press</a></li>
          </ul>
        </div>
        <div class=\"footer-col\">
          <h4>Support</h4>
          <ul>
            <li><a href=\"#\">Help Center</a></li>
            <li><a href=\"#\">Contact Us</a></li>
            <li><a href=\"#\">Privacy Policy</a></li>
            <li><a href=\"#\">Terms of Service</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-bottom\">
      <p>© 2026 FinTrust Inc. All rights reserved. FDIC Insured. Member FDIC.</p>
    </div>
  </footer>

  <!-- MODAL: LOGIN -->
  <div class=\"modal-overlay\" id=\"loginModal\">
    <div class=\"modal\">
      <button class=\"modal-close\" id=\"closeLogin\">✕</button>
      <div class=\"modal-logo\">
        <svg viewBox=\"0 0 40 40\" fill=\"none\"><rect width=\"40\" height=\"40\" rx=\"10\" fill=\"#1560BD\"/><path d=\"M10 28V18l10-8 10 8v10H24v-6h-8v6H10Z\" fill=\"white\"/></svg>
        <span>FinTrust</span>
      </div>
      <h2 class=\"modal-title\">Welcome back</h2>
      <p class=\"modal-sub\">Log in to your FinTrust account</p>
      <div class=\"form-group\">
        <label>Email Address</label>
        <input type=\"email\" placeholder=\"you@example.com\" class=\"form-input\" />
      </div>
      <div class=\"form-group\">
        <label>Password</label>
        <input type=\"password\" placeholder=\"••••••••\" class=\"form-input\" />
        <a href=\"#\" class=\"form-link\">Forgot password?</a>
      </div>
      <button class=\"btn-modal-primary\">Log In</button>
      <p class=\"modal-switch\">Don't have an account? <a href=\"#\" id=\"switchToSignup\">Sign Up</a></p>
    </div>
  </div>

  <!-- MODAL: SIGNUP -->
  <div class=\"modal-overlay\" id=\"signupModal\">
    <div class=\"modal\">
      <button class=\"modal-close\" id=\"closeSignup\">✕</button>
      <div class=\"modal-logo\">
        <svg viewBox=\"0 0 40 40\" fill=\"none\"><rect width=\"40\" height=\"40\" rx=\"10\" fill=\"#1560BD\"/><path d=\"M10 28V18l10-8 10 8v10H24v-6h-8v6H10Z\" fill=\"white\"/></svg>
        <span>FinTrust</span>
      </div>
      <h2 class=\"modal-title\">Create your account</h2>
      <p class=\"modal-sub\">Join 2M+ people banking smarter</p>
      <div class=\"form-row\">
        <div class=\"form-group\">
          <label>First Name</label>
          <input type=\"text\" placeholder=\"James\" class=\"form-input\" />
        </div>
        <div class=\"form-group\">
          <label>Last Name</label>
          <input type=\"text\" placeholder=\"Carter\" class=\"form-input\" />
        </div>
      </div>
      <div class=\"form-group\">
        <label>Email Address</label>
        <input type=\"email\" placeholder=\"you@example.com\" class=\"form-input\" />
      </div>
      <div class=\"form-group\">
        <label>Password</label>
        <input type=\"password\" placeholder=\"Create a strong password\" class=\"form-input\" />
      </div>
      <label class=\"checkbox-label\">
        <input type=\"checkbox\" /> I agree to the <a href=\"#\">Terms of Service</a> and <a href=\"#\">Privacy Policy</a>
      </label>
      <button class=\"btn-modal-primary\">Create Free Account</button>
      <p class=\"modal-switch\">Already a member? <a href=\"#\" id=\"switchToLogin\">Log In</a></p>
    </div>
  </div>

  <script src=\"{{ asset('js/Script.js') }}\" defer></script>
</body>
</html>", "html/LandingPage.html.twig", "C:\\Users\\DELL\\Desktop\\PIDEV(symfony)\\Esprit-PIDEV-Symfony-3A28-2026-FinTrust\\templates\\html\\LandingPage.html.twig");
    }
}
