<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_25ea9440ca7be59935a327fd4407a72ac17eff6705064552bf73c6133b5c3971 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'header_class' => [$this, 'block_header_class'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Cabin:400,600"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    </head>

    <body>
    ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 150
        echo "<!-- block header -->

    ";
        // line 152
        $this->displayBlock('body', $context, $blocks);
        // line 679
        echo "<!-- block body -->

    ";
        // line 681
        $this->displayBlock('footer', $context, $blocks);
        // line 757
        echo "<!-- block footer -->

    ";
        // line 759
        $this->displayBlock('javascripts', $context, $blocks);
        // line 764
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " School Hunter ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "    <header id=\"masthead\" class=\"";
        $this->displayBlock('header_class', $context, $blocks);
        echo "\">
        <div class=\"d-lg-flex justify-content-lg-between align-items-lg-center site-header__container\">
            <div class=\"d-lg-flex align-items-lg-center\">
                <div class=\"site-header__logo\">
                    <a href=\"index.html\">
                        <h1 class=\"screen-reader-text\">Listiry</h1>
                        <img src=\"build/images-theme/logo-1.png\" alt=\"Listiry\">
                    </a>
                </div><!-- .site-header__logo -->

                <form class=\"d-none d-xl-block top-search-form\" action=\"index.html\">
                    <input type=\"search\" name=\"s\" class=\"top-search-form__input\" placeholder=\"Search places or anything...\">
                </form>
            </div>

            <div class=\"d-lg-flex align-items-lg-center\">
                <ul class=\"min-list main-navigation main-navigation--white\">
                    <li>
                        <a href=\"#\">Home</a>
                        <ul class=\"min-list\">
                            <li>
                                <a href=\"index.html\">Home 1</a>
                            </li>
                            <li>
                                <a href=\"index-2.html\">Home 2</a>
                            </li>
                            <li>
                                <a href=\"index-3.html\">Home 3</a>
                            </li>
                            <li>
                                <a href=\"index-4.html\">Home 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Listings</a>
                        <ul class=\"min-list\">
                            <li>
                                <a href=\"listing-1.html\">Listings Column Map 1</a>
                            </li>
                            <li>
                                <a href=\"listing-2.html\">Listings Column Map 2</a>
                            </li>
                            <li>
                                <a href=\"listing-3.html\">Listings Column Map 3</a>
                            </li>
                            <li>
                                <a href=\"listing-5.html\">Listings Fullwidth Map</a>
                            </li>
                            <li>
                                <a href=\"listing-4.html\">Listings Without Map</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Single Listing</a>
                        <ul class=\"min-list\">
                            <li>
                                <a href=\"single-listing-1.html\">Single Listing 1</a>
                            </li>
                            <li>
                                <a href=\"single-listing-2.html\">Single Listing 2</a>
                            </li>
                            <li>
                                <a href=\"single-listing-3.html\">Single Listing 3</a>
                            </li>
                            <li>
                                <a href=\"single-listing-4.html\">Single Listing 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Pages</a>
                        <ul class=\"min-list\">
                            <li>
                                <a href=\"#\">My Account</a>
                                <ul class=\"min-list\">
                                    <li>
                                        <a href=\"profile.html\">My Profile</a>
                                    </li>
                                    <li>
                                        <a href=\"my-listings.html\">My Listings</a>
                                    </li>
                                    <li>
                                        <a href=\"bookmarked-listings.html\">Bookmarked Listings</a>
                                    </li>
                                    <li>
                                        <a href=\"change-password.html\">Change Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"contact.html\">Contact</a>
                            </li>
                            <li>
                                <a href=\"coming-soon.html\">Coming Soon</a>
                            </li>
                            <li>
                                <a href=\"404.html\">404 Page</a>
                            </li>
                            <li>
                                <a href=\"pricing-table.html\">Pricing Table</a>
                            </li>
                            <li>
                                <a href=\"login.html\">Login/Signup</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"blog.html\">Blog</a>
                    </li>
                </ul><!-- .main-navigation -->
                <div class=\"user-action\">
                    ";
        // line 130
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 131
            echo "                        <li><a href=\"#\" class=\"userNavbar c-white\"><span class=\"glyphicon glyphicon-user\"></span> Welcome ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131), "firstName", [], "any", false, false, false, 131), "html", null, true);
            echo "</a></li>
                        <button class=\"button button--small button--pill button--primary d-none d-lg-inline-block\">&plus; Add Listing</button>
                        <li id=\"logout\"><a href=\"";
            // line 133
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out c-white\"></span> Log Out</a></li>
                     ";
        } else {
            // line 135
            echo "                        <a href=\"login.html\" class=\"sign-in c-white\">
                            <i class=\"fa fa-user\"></i>
                            Sign in
                        </a>
                    ";
        }
        // line 140
        echo "                </div><!-- .user-action -->
            </div>

            <div class=\"d-lg-none nav-mobile\">
                <a href=\"#\" class=\"nav-toggle js-nav-toggle nav-toggle--white\">
                    <span></span>
                </a><!-- .nav-toggle -->
            </div><!-- .nav-mobile -->
        </div><!-- .site-header__container -->
    </header><!-- #masthead -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_header_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_class"));

        echo " site-header site-header--layout-1 site-header--fluid site-header--absolute ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 153
        echo "    <section class=\"page-banner page-banner--layout-1 parallax\">
        <div class=\"container\">
            <div class=\"page-banner__container animated fadeInUp\">
                <div class=\"page-banner__textcontent t-center\">
                    <h2 class=\"page-banner__title c-white\">Explore Your City Gems</h2>
                    <p class=\"page-banner__subtitle c-white\">Find the best places to eat, drink, or visit.</p>
                </div><!-- .page-banner__textcontent -->

                <div class=\"main-search-container\">
                    <form class=\"main-search main-search--layout-1 bg-mirage\">
                        <div class=\"main-search__group main-search__group--primary\">
                            <label for=\"main-search-name\" class=\"c-white\">What?</label>
                            <input type=\"text\" name=\"name\" id=\"main-search-name\" class=\"form-input\" placeholder=\"restaurant, hotel, club...\">
                        </div><!-- .main-search__group -->

                        <div class=\"main-search__group main-search__group--secondary\">
                            <label for=\"main-search-location\" class=\"c-white\">Where?</label>
                            <input type=\"text\" name=\"location\" id=\"main-search-location\" class=\"form-input\" placeholder=\"San Francisco\">
                        </div><!-- .main-search__group -->
                        <div class=\"main-search__group main-search__group--tertiary\">
                            <button type=\"submit\" class=\"button button--medium button--square button--primary\">
                                <i class=\"fa fa-search\"></i> Search
                            </button>
                        </div>
                    </form>
                </div><!-- .main-search-container -->

                <div class=\"locations-container t-center\">
                    <ul class=\"min-list inline-list locations locations--layout-1\">
                        <li class=\"location\">
                            <a href=\"#\" class=\"c-white\"><i class=\"fa fa-cutlery\"></i>Restaurant</a>
                        </li>
                        <li class=\"location\">
                            <a href=\"#\" class=\"c-white\"><i class=\"fa fa-glass\"></i>Nightlife</a>
                        </li>
                        <li class=\"location\">
                            <a href=\"#\" class=\"c-white\"><i class=\"fa fa-film\"></i>Cinema</a>
                        </li>
                        <li class=\"location\">
                            <a href=\"#\" class=\"c-white\"><i class=\"fa fa-wrench\"></i>Local Services</a>
                        </li>
                    </ul>
                </div>
            </div><!-- .page-banner__container -->
        </div><!-- .container -->
    </section><!-- .page-banner -->
    <section class=\"category-container page-section bg-wild-sand category--layout-1\">
        <div class=\"container\">
            <h2 class=\"page-section__title t-center\">What do you need to find?</h2>
            <div class=\"row\">
                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/restaurant.svg\" alt=\"Restaurants\">
                            </div>
                            <h3 class=\"category__title\">Restaurants</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/coffee.svg\" alt=\"Coffee\">
                            </div>
                            <h3 class=\"category__title\">Coffee</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/shopping.svg\" alt=\"Shopping\">
                            </div>
                            <h3 class=\"category__title\">Shopping</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/night-life.svg\" alt=\"Nightlife\">
                            </div>
                            <h3 class=\"category__title\">Nightlife</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/beauty-2.svg\" alt=\"Beauty & Spas\">
                            </div>
                            <h3 class=\"category__title\">Beauty &amp; Spas</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/hotel.svg\" alt=\"Hotels\">
                            </div>
                            <h3 class=\"category__title\">Hotels</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/barber.svg\" alt=\"Barbers\">
                            </div>
                            <h3 class=\"category__title\">Barbers</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/more.svg\" alt=\"More Categories\">
                            </div>
                            <h3 class=\"category__title\">More Categories</h3>
                        </a>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .category -->
    <section class=\"listing-list page-section listing-list--layout-1\">
        <div class=\"container\">
            <h2 class=\"page-section__title t-center\">Great Places</h2>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-1.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Restaurant</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-2.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Coffee</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-3.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Coffee</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-4.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Restaurant</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-5.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Coffee</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"4.5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-6.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Coffee</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"4\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->
            </div><!-- .row -->
            <div class=\"t-center load-more\">
                <button class=\"button button--primary button--medium button--pill\">View All Listing</button>
            </div>
        </div><!-- .container -->
    </section><!-- .listing-list -->
    <section class=\"instructions-container page-section bg-wild-sand instruction--layout-1\">
        <div class=\"container\">
            <h2 class=\"page-section__title t-center\">Easy to Get Services</h2>
            <div class=\"row\">
                <div class=\"col-md-4 instruction-container\">
                    <div class=\"instruction t-center\">
                        <span class=\"instruction__step c-dove-gray\">01.</span>
                        <h3 class=\"instruction__title\">Choose What to Do</h3>
                        <p class=\"instruction__detail c-boulder\">
                            Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping?
                        </p>
                    </div><!-- .instruction -->
                </div><!-- .col -->

                <div class=\"col-md-4 instruction-container\">
                    <div class=\"instruction t-center\">
                        <span class=\"instruction__step c-dove-gray\">02.</span>
                        <h3 class=\"instruction__title\">Find What You Want</h3>
                        <p class=\"instruction__detail c-boulder\">
                            Search and filter hundreds of listings, read reviews, explore photos and find the perfect spot.
                        </p>
                    </div><!-- .instruction -->
                </div><!-- .col -->

                <div class=\"col-md-4 instruction-container\">
                    <div class=\"instruction t-center\">
                        <span class=\"instruction__step c-dove-gray\">03.</span>
                        <h3 class=\"instruction__title\">Explore Amazing Places</h3>
                        <p class=\"instruction__detail c-boulder\">
                            Go and have a good time or even make a booking directly from the listing page. All of those, thanks!
                        </p>
                    </div><!-- .instruction -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .instruction-container -->
    <section class=\"page-section testimonials-container testimonial--layout-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    <div class=\"testimonials\">
                        <h2 class=\"page-section__title\">25,000+ Happy Clients</h2>
                        <div class=\"swiper-container testimonial-container\">
                            <div class=\"swiper-wrapper testimonial-wrapper\">
                                <div class=\"swiper-slide testimonial\">
                                    <p class=\"testimonial-content c-dove-gray\">
                                        Mitch and I have traveled all over but this was by far one of the best vacations I have been on.
                                        Mitch will be writing you about future trips. Make sure Mitch books business class or first class in the future.
                                    </p>
                                    <div class=\"testimonial-footer\">
                                        <div class=\"testimonial-avatar\">
                                            <img src=\"build/images-theme/uploads/testimonial-avatar.png\"
                                                 class=\"Client Avatar\"
                                                 alt=\"Testimonial Image\"
                                            >
                                        </div>

                                        <div class=\"testimonial-client\">
                                            <span class=\"testimonial-client-name\">- Roberta V</span>
                                            <span class=\"testimonial-client-location\">India</span>
                                        </div>
                                    </div><!-- .testimonial-footer -->
                                </div><!-- .testimonial -->

                                <div class=\"swiper-slide testimonial\">
                                    <p class=\"testimonial-content c-dove-gray\">
                                        Mitch and I have traveled all over but this was by far one of the best vacations I have been on.
                                        Mitch will be writing you about future trips. Make sure Mitch books business class or first class in the future.
                                    </p>
                                    <div class=\"testimonial-footer\">
                                        <div class=\"testimonial-avatar\">
                                            <img
                                                    src=\"build/images-theme/uploads/testimonial-avatar.png\"
                                                    class=\"Client Avatar\" alt=\"Testimonial Image\"
                                            >
                                        </div>

                                        <div class=\"testimonial-client\">
                                            <span class=\"testimonial-client-name\">- Roberta V</span>
                                            <span class=\"testimonial-client-location\">India</span>
                                        </div>
                                    </div><!-- .testimonial-footer -->
                                </div><!-- .testimonial -->

                                <div class=\"swiper-slide testimonial\">
                                    <p class=\"testimonial-content c-dove-gray\">
                                        Mitch and I have traveled all over but this was by far one of the best vacations I have been on.
                                        Mitch will be writing you about future trips. Make sure Mitch books business class or first class in the future.
                                    </p>
                                    <div class=\"testimonial-footer\">
                                        <div class=\"testimonial-avatar\">
                                            <img
                                                    src=\"build/images-theme/uploads/testimonial-avatar.png\"
                                                    class=\"Client Avatar\" alt=\"Testimonial Image\"
                                            >
                                        </div>

                                        <div class=\"testimonial-client\">
                                            <span class=\"testimonial-client-name\">- Roberta V</span>
                                            <span class=\"testimonial-client-location\">India</span>
                                        </div>
                                    </div><!-- .testimonial-footer -->
                                </div><!-- .testimonial -->
                            </div><!-- .testimonial-wrapper -->

                            <div class=\"testimonial-button-container\">
                                <span class=\"ion-chevron-left testimonial-button testimonial-button-left\"></span>
                                <span class=\"ion-chevron-right testimonial-button testimonial-button-right\"></span>
                            </div>
                        </div><!-- .testimonial-container -->
                    </div><!-- .testimonials -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .testimonial -->
    <section class=\"ads ads--layout-1 parallax\">
        <div class=\"t-center ads__container\">
            <div class=\"container\">
                <h2 class=\"ads__title\">Explore exciting destinations</h2>
                <p class=\"ads__subtitle\">
                    Preparing for your traveling is very important. Our book store has lots of e-books, it might be helpful for you
                </p>
            </div>
        </div>
    </section><!-- .ads -->
    <section class=\"news page-section news--layout-1\">
        <div class=\"container\">
            <h2 class=\"page-section__title t-center\">Tips &amp; Articles</h2>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"post sticky\">
                        <div class=\"post-thumbnail\">
                            <a href=\"single.html\">
                                <img src=\"build/images-theme/uploads/news-1.jpg\" alt=\"Sa Pa festival for next month\">
                            </a>
                        </div><!-- .post-thumbnail -->

                        <div class=\"post-content\">
                            <h3 class=\"post-title\">
                                <a href=\"single.html\">Sa Pa festival for next month</a>
                            </h3>
                            <p class=\"post-meta t-small\">
                                <span><a href=\"#\" class=\"c-dusty-gray\">Dec 05, 2017</a></span>
                                <span><a href=\"#\" class=\"c-dusty-gray\">Restaurant</a></span>
                            </p>
                        </div><!-- .post-content -->
                    </div><!-- .post -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"post\">
                        <div class=\"post-thumbnail\">
                            <a href=\"single.html\">
                                <img src=\"build/images-theme/uploads/news-2.jpg\" alt=\"Italy culinary festival kicks off\">
                            </a>
                        </div><!-- .post-thumbnail -->

                        <div class=\"post-content\">
                            <h3 class=\"post-title\">
                                <a href=\"single.html\">Italy culinary festival kicks off</a>
                            </h3>
                            <p class=\"post-meta t-small\">
                                <span><a href=\"#\" class=\"c-dusty-gray\">Dec 05, 2017</a></span>
                                <span><a href=\"#\" class=\"c-dusty-gray\">Travel</a></span>
                            </p>
                        </div><!-- .post-content -->
                    </div><!-- .post -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"post\">
                        <div class=\"post-thumbnail\">
                            <a href=\"single.html\">
                                <img src=\"build/images-theme/uploads/news-3.jpg\" alt=\"Best destination for travelers\">
                            </a>
                        </div><!-- .post-thumbnail -->

                        <div class=\"post-content\">
                            <h3 class=\"post-title\">
                                <a href=\"single.html\">Best destination for travelers</a>
                            </h3>
                            <p class=\"post-meta t-small\">
                                <span><a href=\"#\" class=\"c-dusty-gray\">Dec 05, 2017</a></span>
                                <span><a href=\"#\" class=\"c-dusty-gray\">Culture</a></span>
                            </p>
                        </div><!-- .post-content -->
                    </div><!-- .post -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .news -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 681
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 682
        echo "    <footer id=\"colophone\" class=\"site-footer\">
        <div class=\"t-center site-footer__primary\">
            <div class=\"container\">
                <div class=\"site-footer__logo\">
                    <a href=\"index.html\">
                        <h1 class=\"screen-reader-text\">Listiry</h1>
                        <img src=\"build/images-theme/logo-footer.png\" alt=\"Listiry\">
                    </a>
                </div>
                <p class=\"t-small\">Listiry is making finding destination faster, easier, and customized for you.</p>
                <ul class=\"min-list inline-list site-footer__links site-footer__social\">
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-facebook-f\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-pinterest\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-google-plus\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-linkedin\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-instagram\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-youtube\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- .site-footer__primary -->

        <div class=\"site-footer__secondary\">
            <div class=\"container\">
                <div class=\"site-footer__secondary-wrapper\">
                    <p class=\"site-footer__copyright\">&copy; 2018
                        <span class=\"c-secondary\">Listiry</span> by Felix. All Rights Reserved.</p>
                    <ul class=\"min-list inline-list site-footer__links site-footer__details\">
                        <li>
                            <a href=\"tel:+0987654321\">Tel: +098 765 4321</a>
                        </li>
                        <li>
                            <a href=\"#\">Get this theme</a>
                        </li>
                        <li>
                            <a href=\"#\">About</a>
                        </li>
                        <li>
                            <a href=\"#\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .site-footer__secondary -->
    </footer><!-- #colophone -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 759
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 760
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 762
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  996 => 762,  992 => 761,  987 => 760,  977 => 759,  892 => 682,  882 => 681,  346 => 153,  336 => 152,  317 => 17,  297 => 140,  290 => 135,  285 => 133,  279 => 131,  277 => 130,  160 => 17,  150 => 16,  137 => 9,  127 => 8,  108 => 7,  96 => 764,  94 => 759,  90 => 757,  88 => 681,  84 => 679,  82 => 152,  78 => 150,  76 => 16,  69 => 12,  64 => 11,  62 => 8,  58 => 7,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>{% block title %} School Hunter {% endblock %}</title>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
        <link href=\"{{ asset('assets/custom.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Cabin:400,600') }}\" rel=\"stylesheet\"/>
    </head>

    <body>
    {% block header %}
    <header id=\"masthead\" class=\"{% block header_class %} site-header site-header--layout-1 site-header--fluid site-header--absolute {% endblock %}\">
        <div class=\"d-lg-flex justify-content-lg-between align-items-lg-center site-header__container\">
            <div class=\"d-lg-flex align-items-lg-center\">
                <div class=\"site-header__logo\">
                    <a href=\"index.html\">
                        <h1 class=\"screen-reader-text\">Listiry</h1>
                        <img src=\"build/images-theme/logo-1.png\" alt=\"Listiry\">
                    </a>
                </div><!-- .site-header__logo -->

                <form class=\"d-none d-xl-block top-search-form\" action=\"index.html\">
                    <input type=\"search\" name=\"s\" class=\"top-search-form__input\" placeholder=\"Search places or anything...\">
                </form>
            </div>

            <div class=\"d-lg-flex align-items-lg-center\">
                <ul class=\"min-list main-navigation main-navigation--white\">
                    <li>
                        <a href=\"#\">Home</a>
                        <ul class=\"min-list\">
                            <li>
                                <a href=\"index.html\">Home 1</a>
                            </li>
                            <li>
                                <a href=\"index-2.html\">Home 2</a>
                            </li>
                            <li>
                                <a href=\"index-3.html\">Home 3</a>
                            </li>
                            <li>
                                <a href=\"index-4.html\">Home 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Listings</a>
                        <ul class=\"min-list\">
                            <li>
                                <a href=\"listing-1.html\">Listings Column Map 1</a>
                            </li>
                            <li>
                                <a href=\"listing-2.html\">Listings Column Map 2</a>
                            </li>
                            <li>
                                <a href=\"listing-3.html\">Listings Column Map 3</a>
                            </li>
                            <li>
                                <a href=\"listing-5.html\">Listings Fullwidth Map</a>
                            </li>
                            <li>
                                <a href=\"listing-4.html\">Listings Without Map</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Single Listing</a>
                        <ul class=\"min-list\">
                            <li>
                                <a href=\"single-listing-1.html\">Single Listing 1</a>
                            </li>
                            <li>
                                <a href=\"single-listing-2.html\">Single Listing 2</a>
                            </li>
                            <li>
                                <a href=\"single-listing-3.html\">Single Listing 3</a>
                            </li>
                            <li>
                                <a href=\"single-listing-4.html\">Single Listing 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Pages</a>
                        <ul class=\"min-list\">
                            <li>
                                <a href=\"#\">My Account</a>
                                <ul class=\"min-list\">
                                    <li>
                                        <a href=\"profile.html\">My Profile</a>
                                    </li>
                                    <li>
                                        <a href=\"my-listings.html\">My Listings</a>
                                    </li>
                                    <li>
                                        <a href=\"bookmarked-listings.html\">Bookmarked Listings</a>
                                    </li>
                                    <li>
                                        <a href=\"change-password.html\">Change Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"contact.html\">Contact</a>
                            </li>
                            <li>
                                <a href=\"coming-soon.html\">Coming Soon</a>
                            </li>
                            <li>
                                <a href=\"404.html\">404 Page</a>
                            </li>
                            <li>
                                <a href=\"pricing-table.html\">Pricing Table</a>
                            </li>
                            <li>
                                <a href=\"login.html\">Login/Signup</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"blog.html\">Blog</a>
                    </li>
                </ul><!-- .main-navigation -->
                <div class=\"user-action\">
                    {% if is_granted('ROLE_USER') %}
                        <li><a href=\"#\" class=\"userNavbar c-white\"><span class=\"glyphicon glyphicon-user\"></span> Welcome {{ app.user.firstName }}</a></li>
                        <button class=\"button button--small button--pill button--primary d-none d-lg-inline-block\">&plus; Add Listing</button>
                        <li id=\"logout\"><a href=\"{{ path('security_logout') }}\"><span class=\"glyphicon glyphicon-log-out c-white\"></span> Log Out</a></li>
                     {% else %}
                        <a href=\"login.html\" class=\"sign-in c-white\">
                            <i class=\"fa fa-user\"></i>
                            Sign in
                        </a>
                    {% endif %}
                </div><!-- .user-action -->
            </div>

            <div class=\"d-lg-none nav-mobile\">
                <a href=\"#\" class=\"nav-toggle js-nav-toggle nav-toggle--white\">
                    <span></span>
                </a><!-- .nav-toggle -->
            </div><!-- .nav-mobile -->
        </div><!-- .site-header__container -->
    </header><!-- #masthead -->
    {% endblock %}<!-- block header -->

    {% block body %}
    <section class=\"page-banner page-banner--layout-1 parallax\">
        <div class=\"container\">
            <div class=\"page-banner__container animated fadeInUp\">
                <div class=\"page-banner__textcontent t-center\">
                    <h2 class=\"page-banner__title c-white\">Explore Your City Gems</h2>
                    <p class=\"page-banner__subtitle c-white\">Find the best places to eat, drink, or visit.</p>
                </div><!-- .page-banner__textcontent -->

                <div class=\"main-search-container\">
                    <form class=\"main-search main-search--layout-1 bg-mirage\">
                        <div class=\"main-search__group main-search__group--primary\">
                            <label for=\"main-search-name\" class=\"c-white\">What?</label>
                            <input type=\"text\" name=\"name\" id=\"main-search-name\" class=\"form-input\" placeholder=\"restaurant, hotel, club...\">
                        </div><!-- .main-search__group -->

                        <div class=\"main-search__group main-search__group--secondary\">
                            <label for=\"main-search-location\" class=\"c-white\">Where?</label>
                            <input type=\"text\" name=\"location\" id=\"main-search-location\" class=\"form-input\" placeholder=\"San Francisco\">
                        </div><!-- .main-search__group -->
                        <div class=\"main-search__group main-search__group--tertiary\">
                            <button type=\"submit\" class=\"button button--medium button--square button--primary\">
                                <i class=\"fa fa-search\"></i> Search
                            </button>
                        </div>
                    </form>
                </div><!-- .main-search-container -->

                <div class=\"locations-container t-center\">
                    <ul class=\"min-list inline-list locations locations--layout-1\">
                        <li class=\"location\">
                            <a href=\"#\" class=\"c-white\"><i class=\"fa fa-cutlery\"></i>Restaurant</a>
                        </li>
                        <li class=\"location\">
                            <a href=\"#\" class=\"c-white\"><i class=\"fa fa-glass\"></i>Nightlife</a>
                        </li>
                        <li class=\"location\">
                            <a href=\"#\" class=\"c-white\"><i class=\"fa fa-film\"></i>Cinema</a>
                        </li>
                        <li class=\"location\">
                            <a href=\"#\" class=\"c-white\"><i class=\"fa fa-wrench\"></i>Local Services</a>
                        </li>
                    </ul>
                </div>
            </div><!-- .page-banner__container -->
        </div><!-- .container -->
    </section><!-- .page-banner -->
    <section class=\"category-container page-section bg-wild-sand category--layout-1\">
        <div class=\"container\">
            <h2 class=\"page-section__title t-center\">What do you need to find?</h2>
            <div class=\"row\">
                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/restaurant.svg\" alt=\"Restaurants\">
                            </div>
                            <h3 class=\"category__title\">Restaurants</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/coffee.svg\" alt=\"Coffee\">
                            </div>
                            <h3 class=\"category__title\">Coffee</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/shopping.svg\" alt=\"Shopping\">
                            </div>
                            <h3 class=\"category__title\">Shopping</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/night-life.svg\" alt=\"Nightlife\">
                            </div>
                            <h3 class=\"category__title\">Nightlife</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/beauty-2.svg\" alt=\"Beauty & Spas\">
                            </div>
                            <h3 class=\"category__title\">Beauty &amp; Spas</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/hotel.svg\" alt=\"Hotels\">
                            </div>
                            <h3 class=\"category__title\">Hotels</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/barber.svg\" alt=\"Barbers\">
                            </div>
                            <h3 class=\"category__title\">Barbers</h3>
                        </a>
                    </div>
                </div><!-- .col -->

                <div class=\"col-6 col-md-3\">
                    <div class=\"category hover-effect t-center\">
                        <a href=\"#\">
                            <div class=\"category__image\">
                                <img src=\"build/images-theme/more.svg\" alt=\"More Categories\">
                            </div>
                            <h3 class=\"category__title\">More Categories</h3>
                        </a>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .category -->
    <section class=\"listing-list page-section listing-list--layout-1\">
        <div class=\"container\">
            <h2 class=\"page-section__title t-center\">Great Places</h2>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-1.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Restaurant</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-2.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Coffee</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-3.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Coffee</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-4.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Restaurant</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-5.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Coffee</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"4.5\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"listing hover-effect\">
                        <div class=\"listing__wrapper\">
                            <div class=\"listing__thumbnail\">
                                <a href=\"single-listing-1.html\">
                                    <img src=\"build/images-theme/uploads/listing-6.jpg\" alt=\"April Boutique Coffee\">
                                    <span class=\"label label--primary\">Coffee</span>
                                    <span class=\"favorite c-white\">
                      <i class=\"fa fa-heart-o\"></i>
                    </span>
                                </a>
                            </div><!-- .listing__thumbnail -->
                            <div class=\"listing__detail\">
                                <h3 class=\"listing__title\">
                                    <a href=\"single-listing-1.html\">April Boutique Coffee</a>
                                </h3>
                                <p class=\"listing__location c-dusty-gray\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    18 Leinster Terr, Paddington
                                </p>
                                <p class=\"listing__review c-dusty-gray\">
                    <span class=\"stars-outer\" data-rating=\"4\">
                      <span class=\"stars-inner\"></span>
                    </span>
                                    <span>(5 Reviews)</span>
                                </p>
                            </div><!-- .listing__detail -->
                        </div><!-- .listing__wrapper -->
                    </div><!-- .listing -->
                </div><!-- .col -->
            </div><!-- .row -->
            <div class=\"t-center load-more\">
                <button class=\"button button--primary button--medium button--pill\">View All Listing</button>
            </div>
        </div><!-- .container -->
    </section><!-- .listing-list -->
    <section class=\"instructions-container page-section bg-wild-sand instruction--layout-1\">
        <div class=\"container\">
            <h2 class=\"page-section__title t-center\">Easy to Get Services</h2>
            <div class=\"row\">
                <div class=\"col-md-4 instruction-container\">
                    <div class=\"instruction t-center\">
                        <span class=\"instruction__step c-dove-gray\">01.</span>
                        <h3 class=\"instruction__title\">Choose What to Do</h3>
                        <p class=\"instruction__detail c-boulder\">
                            Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping?
                        </p>
                    </div><!-- .instruction -->
                </div><!-- .col -->

                <div class=\"col-md-4 instruction-container\">
                    <div class=\"instruction t-center\">
                        <span class=\"instruction__step c-dove-gray\">02.</span>
                        <h3 class=\"instruction__title\">Find What You Want</h3>
                        <p class=\"instruction__detail c-boulder\">
                            Search and filter hundreds of listings, read reviews, explore photos and find the perfect spot.
                        </p>
                    </div><!-- .instruction -->
                </div><!-- .col -->

                <div class=\"col-md-4 instruction-container\">
                    <div class=\"instruction t-center\">
                        <span class=\"instruction__step c-dove-gray\">03.</span>
                        <h3 class=\"instruction__title\">Explore Amazing Places</h3>
                        <p class=\"instruction__detail c-boulder\">
                            Go and have a good time or even make a booking directly from the listing page. All of those, thanks!
                        </p>
                    </div><!-- .instruction -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .instruction-container -->
    <section class=\"page-section testimonials-container testimonial--layout-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    <div class=\"testimonials\">
                        <h2 class=\"page-section__title\">25,000+ Happy Clients</h2>
                        <div class=\"swiper-container testimonial-container\">
                            <div class=\"swiper-wrapper testimonial-wrapper\">
                                <div class=\"swiper-slide testimonial\">
                                    <p class=\"testimonial-content c-dove-gray\">
                                        Mitch and I have traveled all over but this was by far one of the best vacations I have been on.
                                        Mitch will be writing you about future trips. Make sure Mitch books business class or first class in the future.
                                    </p>
                                    <div class=\"testimonial-footer\">
                                        <div class=\"testimonial-avatar\">
                                            <img src=\"build/images-theme/uploads/testimonial-avatar.png\"
                                                 class=\"Client Avatar\"
                                                 alt=\"Testimonial Image\"
                                            >
                                        </div>

                                        <div class=\"testimonial-client\">
                                            <span class=\"testimonial-client-name\">- Roberta V</span>
                                            <span class=\"testimonial-client-location\">India</span>
                                        </div>
                                    </div><!-- .testimonial-footer -->
                                </div><!-- .testimonial -->

                                <div class=\"swiper-slide testimonial\">
                                    <p class=\"testimonial-content c-dove-gray\">
                                        Mitch and I have traveled all over but this was by far one of the best vacations I have been on.
                                        Mitch will be writing you about future trips. Make sure Mitch books business class or first class in the future.
                                    </p>
                                    <div class=\"testimonial-footer\">
                                        <div class=\"testimonial-avatar\">
                                            <img
                                                    src=\"build/images-theme/uploads/testimonial-avatar.png\"
                                                    class=\"Client Avatar\" alt=\"Testimonial Image\"
                                            >
                                        </div>

                                        <div class=\"testimonial-client\">
                                            <span class=\"testimonial-client-name\">- Roberta V</span>
                                            <span class=\"testimonial-client-location\">India</span>
                                        </div>
                                    </div><!-- .testimonial-footer -->
                                </div><!-- .testimonial -->

                                <div class=\"swiper-slide testimonial\">
                                    <p class=\"testimonial-content c-dove-gray\">
                                        Mitch and I have traveled all over but this was by far one of the best vacations I have been on.
                                        Mitch will be writing you about future trips. Make sure Mitch books business class or first class in the future.
                                    </p>
                                    <div class=\"testimonial-footer\">
                                        <div class=\"testimonial-avatar\">
                                            <img
                                                    src=\"build/images-theme/uploads/testimonial-avatar.png\"
                                                    class=\"Client Avatar\" alt=\"Testimonial Image\"
                                            >
                                        </div>

                                        <div class=\"testimonial-client\">
                                            <span class=\"testimonial-client-name\">- Roberta V</span>
                                            <span class=\"testimonial-client-location\">India</span>
                                        </div>
                                    </div><!-- .testimonial-footer -->
                                </div><!-- .testimonial -->
                            </div><!-- .testimonial-wrapper -->

                            <div class=\"testimonial-button-container\">
                                <span class=\"ion-chevron-left testimonial-button testimonial-button-left\"></span>
                                <span class=\"ion-chevron-right testimonial-button testimonial-button-right\"></span>
                            </div>
                        </div><!-- .testimonial-container -->
                    </div><!-- .testimonials -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .testimonial -->
    <section class=\"ads ads--layout-1 parallax\">
        <div class=\"t-center ads__container\">
            <div class=\"container\">
                <h2 class=\"ads__title\">Explore exciting destinations</h2>
                <p class=\"ads__subtitle\">
                    Preparing for your traveling is very important. Our book store has lots of e-books, it might be helpful for you
                </p>
            </div>
        </div>
    </section><!-- .ads -->
    <section class=\"news page-section news--layout-1\">
        <div class=\"container\">
            <h2 class=\"page-section__title t-center\">Tips &amp; Articles</h2>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"post sticky\">
                        <div class=\"post-thumbnail\">
                            <a href=\"single.html\">
                                <img src=\"build/images-theme/uploads/news-1.jpg\" alt=\"Sa Pa festival for next month\">
                            </a>
                        </div><!-- .post-thumbnail -->

                        <div class=\"post-content\">
                            <h3 class=\"post-title\">
                                <a href=\"single.html\">Sa Pa festival for next month</a>
                            </h3>
                            <p class=\"post-meta t-small\">
                                <span><a href=\"#\" class=\"c-dusty-gray\">Dec 05, 2017</a></span>
                                <span><a href=\"#\" class=\"c-dusty-gray\">Restaurant</a></span>
                            </p>
                        </div><!-- .post-content -->
                    </div><!-- .post -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"post\">
                        <div class=\"post-thumbnail\">
                            <a href=\"single.html\">
                                <img src=\"build/images-theme/uploads/news-2.jpg\" alt=\"Italy culinary festival kicks off\">
                            </a>
                        </div><!-- .post-thumbnail -->

                        <div class=\"post-content\">
                            <h3 class=\"post-title\">
                                <a href=\"single.html\">Italy culinary festival kicks off</a>
                            </h3>
                            <p class=\"post-meta t-small\">
                                <span><a href=\"#\" class=\"c-dusty-gray\">Dec 05, 2017</a></span>
                                <span><a href=\"#\" class=\"c-dusty-gray\">Travel</a></span>
                            </p>
                        </div><!-- .post-content -->
                    </div><!-- .post -->
                </div><!-- .col -->

                <div class=\"col-md-4\">
                    <div class=\"post\">
                        <div class=\"post-thumbnail\">
                            <a href=\"single.html\">
                                <img src=\"build/images-theme/uploads/news-3.jpg\" alt=\"Best destination for travelers\">
                            </a>
                        </div><!-- .post-thumbnail -->

                        <div class=\"post-content\">
                            <h3 class=\"post-title\">
                                <a href=\"single.html\">Best destination for travelers</a>
                            </h3>
                            <p class=\"post-meta t-small\">
                                <span><a href=\"#\" class=\"c-dusty-gray\">Dec 05, 2017</a></span>
                                <span><a href=\"#\" class=\"c-dusty-gray\">Culture</a></span>
                            </p>
                        </div><!-- .post-content -->
                    </div><!-- .post -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .news -->
    {% endblock %}<!-- block body -->

    {% block footer %}
    <footer id=\"colophone\" class=\"site-footer\">
        <div class=\"t-center site-footer__primary\">
            <div class=\"container\">
                <div class=\"site-footer__logo\">
                    <a href=\"index.html\">
                        <h1 class=\"screen-reader-text\">Listiry</h1>
                        <img src=\"build/images-theme/logo-footer.png\" alt=\"Listiry\">
                    </a>
                </div>
                <p class=\"t-small\">Listiry is making finding destination faster, easier, and customized for you.</p>
                <ul class=\"min-list inline-list site-footer__links site-footer__social\">
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-facebook-f\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-pinterest\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-google-plus\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-linkedin\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-instagram\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-youtube\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- .site-footer__primary -->

        <div class=\"site-footer__secondary\">
            <div class=\"container\">
                <div class=\"site-footer__secondary-wrapper\">
                    <p class=\"site-footer__copyright\">&copy; 2018
                        <span class=\"c-secondary\">Listiry</span> by Felix. All Rights Reserved.</p>
                    <ul class=\"min-list inline-list site-footer__links site-footer__details\">
                        <li>
                            <a href=\"tel:+0987654321\">Tel: +098 765 4321</a>
                        </li>
                        <li>
                            <a href=\"#\">Get this theme</a>
                        </li>
                        <li>
                            <a href=\"#\">About</a>
                        </li>
                        <li>
                            <a href=\"#\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .site-footer__secondary -->
    </footer><!-- #colophone -->
    {% endblock %}<!-- block footer -->

    {% block javascripts %}
        <script src=\"{{ absolute_url(asset( 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4')) }}\"></script>
        <script src=\"{{ absolute_url(asset('https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js')) }}\"></script>
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/vagrant/school-hunter/templates/base.html.twig");
    }
}
