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

/* university/show.html.twig */
class __TwigTemplate_c4453a3f332832b24ab31aeb06308c8431244599de571d4218034f4ae4e7b36f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header_class' => [$this, 'block_header_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "university/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "university/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "university/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_header_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_class"));

        echo " site-header site-header--fluid bg-primary ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <div class=\"page-content page-content--no-b-bottom\">
  <div class=\"breadcrumbs-container\">
  <div class=\"container\">
    <ul class=\"breadcrumbs min-list inline-list\">
      <li class=\"breadcrumbs__item\">
        <a href=\"index.html\" class=\"breadcrumbs__link\">
          <span class=\"breadcrumbs__title\">Home</span>
        </a>
      </li>

      <li class=\"breadcrumbs__item\">
        <a href=\"#\" class=\"breadcrumbs__link\">
          <span class=\"breadcrumbs__title\">Pages</span>
        </a>
      </li>

      <li class=\"breadcrumbs__item\">
        <span class=\"breadcrumbs__page c-gray\">Single Listing</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>
  <section class=\"single-listing single-listing--layout-1\">
  <header class=\"listing-header\">
    <div class=\"container\">
      <div class=\"listing-header__container\">
        <div class=\"d-lg-flex justify-content-lg-between\">
          <div class=\"listing-header__main\">
            <div class=\"d-flex\">
              <div class=\"listing-header__image\">
                <img src=\"assets/images/uploads/single-listing.jpg\" alt=\"Petersham Nurseries Cafe\">
              </div><!-- .listing-header__image -->

              <div class=\"listing-header__content\">
                <div class=\"d-sm-flex align-items-sm-center\">

                  <h2 class=\"listing-header__title\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["university"]) || array_key_exists("university", $context) ? $context["university"] : (function () { throw new RuntimeError('Variable "university" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46), "html", null, true);
        echo "</h2>
                  <div>
                    <i class=\"fa fa-check-circle c-secondary\"></i>
                    <span class=\"c-dusty-gray\">Claimed</span>
                  </div>
                </div>
                
                <ul class=\"min-list listing-header__detail\">
                  <li>
                    <span class=\"listing__score t-center\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum_ratings"]) || array_key_exists("sum_ratings", $context) ? $context["sum_ratings"] : (function () { throw new RuntimeError('Variable "sum_ratings" does not exist.', 55, $this->source); })()), "overall_rating", [], "any", false, false, false, 55), 0, [], "array", false, false, false, 55), "html", null, true);
        echo "</span>
                    <span class=\"listing__review c-dusty-gray\">
                      <span class=\"stars-outer\" data-rating=\"4.5\">
                        <span class=\"stars-inner\"></span>
                      </span>
                    </span>
                  </li>
                  <li>
                    <span>Coffee & Tea</span>
                  </li>
                  <li>
                  <span>
                    <i class=\"fa fa-usd c-dove-gray\"></i>
                    <i class=\"fa fa-usd c-dusty-gray\"></i>
                    <i class=\"fa fa-usd c-dusty-gray\"></i>
                    <i class=\"fa fa-usd c-dusty-gray\"></i>
                    <span class=\"c-dusty-gray\">(Inexpensive)</span>
                  </span>
                  </li>
                </ul><!-- .listing__header-detail -->
              </div><!-- .listing-header__content -->
            </div><!-- .listing__wrapper -->
          </div><!-- .listing-header__main -->

          <ul class=\"min-list inline-list listing-actions\">
            <li class=\"t-center listing-action listing-action--favorite\">
              <a href=\"#\">
                <i class=\"fa fa-heart\"></i>
                Favorite
              </a>
            </li>
            <li class=\"t-center listing-action listing-action--report\">
              <a href=\"#\">
                <i class=\"fa fa-exclamation\"></i>
                Report
              </a>
            </li>
            <li class=\"t-center listing-action listing-action--share\">
              <a href=\"#\">
                <i class=\"fa fa-share-alt\"></i>
                Share
              </a>
            </li>
          </ul><!-- .listing-actions -->
        </div>
      </div><!-- .listing-header__container -->
    </div><!-- .container -->
  </header><!-- .listing-header -->
  <nav class=\"listing-nav bg-white\">
    <div class=\"container\">
      <ul class=\"min-list inline-list listing-tabs\">
        <li class=\"listing-tab is-active\">
          <a href=\"#about\" id=\"about-link\" class=\"listing-nav-link\">
            About
          </a>
        </li><!-- .listing-tab -->

        <li class=\"listing-tab\">
          <a href=\"#menu\" id=\"menu-link\" class=\"listing-nav-link\">
            Menu
          </a>
        </li><!-- .listing-tab -->

        <li class=\"listing-tab\">
          <a href=\"#gallery\" id=\"gallery-link\" class=\"listing-nav-link\">
            Gallery
          </a>
        </li><!-- .listing-tab -->

        <li class=\"listing-tab\">
          <a href=\"#reviews\" id=\"reviews-link\" class=\"listing-nav-link\">
            Reviews
          </a>
        </li><!-- .listing-tab -->

        <li class=\"listing-tab\">
          <a href=\"#add-review\" id=\"add-review-link\" class=\"listing-nav-link\">
            Add Review
          </a>
        </li><!-- .listing-tab -->
      </ul><!-- .listing-tabs -->
    </div>
  </nav>
  <div class=\"listing-main bg-wild-sand\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <div>
            <p>
              <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images-theme/uploads/single-listing-1.jpg"), "html", null, true);
        echo "\" alt=\"Single Listing\">
            </p>
          </div>
          <div id=\"about\" class=\"listing-section bg-white hover-effect\" data-matching-link=\"#about-link\">
           

            <div class=\"c-dove-gray\">
              <p>";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["university"]) || array_key_exists("university", $context) ? $context["university"] : (function () { throw new RuntimeError('Variable "university" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151), "html", null, true);
        echo "</p>
            </div>
            
            <p>
                <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images-theme/uploads/single-listing-2.jpg"), "html", null, true);
        echo "\" alt=\"Single Listing\">
            </p>

          </div><!-- .listing-section -->

          <div id=\"menu\" class=\"listing-section bg-white hover-effect\" data-matching-link=\"#menu-link\">
            <div class=\"listing-section__header\">
              <h3 class=\"listing-section__title\">Професионални направления</h3>
            </div><!-- .listing-section__header -->
            <ul class=\"min-list\">
            
              <div class=\"accordion-container\" class=\"container mx-auto bg-white border-grey-light border mt-20\">
";
        // line 168
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 168, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["major"]) {
            // line 169
            echo "                  ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, $context["major"], "university", [], "any", false, false, false, 169));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['major'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                ";
        // line 172
        echo "                  <div class=\"accordion-container\">
                    ";
        // line 174
        echo "                    ";
        // line 177
        echo "                    <!-- accordion -->
                  </div><!-- .accordion-container -->
                ";
        // line 180
        echo "              </div><!-- .accordion-container -->

            </ul><!-- .listing-menu -->
          </div><!-- .listing-section -->

          <div id=\"gallery\" class=\"listing-section bg-white hover-effect\" data-matching-link=\"#gallery-link\">
            <div class=\"listing-section__header\">
              <h3 class=\"listing-section__title\">Галерия</h3>
            </div><!-- .listing-section__header -->

            <div class=\"swiper-container listing-gallery-top\">
              <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-1.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-2.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-3.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-4.jpg\" alt=\"Listing Image\">
                </div>
              </div><!-- .swiper-wrapper -->
              <span class=\"ion-chevron-left c-white listing-button listing-button-prev\"></span>
              <span class=\"ion-chevron-right c-white listing-button listing-button-next\"></span>
            </div><!-- .listing-gallery-top -->

            <div class=\"swiper-container listing-gallery-thumb\">
              <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide is-selected\">
                  <img src=\"assets/images/uploads/listing-1.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-2.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-3.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-4.jpg\" alt=\"Listing Image\">
                </div>
              </div><!-- .swiper-wrapper -->
            </div><!-- .listing-gallery-thumb -->
          </div><!-- .listing-section -->

          <div id=\"reviews\" class=\"listing-section bg-white hover-effect\" data-matching-link=\"#reviews-link\">
            <div class=\"listing-section__header\">
              <h3 class=\"listing-section__title\">Reviews</h3>
            </div><!-- .listing-section__header -->

            <table class=\"listing-ratings\">

              <tr class=\"listing-rating\">
                <th>Обучение</th>
                <td>
                  <span>";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum_ratings"]) || array_key_exists("sum_ratings", $context) ? $context["sum_ratings"] : (function () { throw new RuntimeError('Variable "sum_ratings" does not exist.', 237, $this->source); })()), "academics", [], "any", false, false, false, 237), 0, [], "array", false, false, false, 237), "html", null, true);
        echo "</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Преподаватели</th>
                <td>
                  <span>";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum_ratings"]) || array_key_exists("sum_ratings", $context) ? $context["sum_ratings"] : (function () { throw new RuntimeError('Variable "sum_ratings" does not exist.', 244, $this->source); })()), "professors", [], "any", false, false, false, 244), 0, [], "array", false, false, false, 244), "html", null, true);
        echo "</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Университетска база</th>
                <td>
                  <span>";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum_ratings"]) || array_key_exists("sum_ratings", $context) ? $context["sum_ratings"] : (function () { throw new RuntimeError('Variable "sum_ratings" does not exist.', 251, $this->source); })()), "campus", [], "any", false, false, false, 251), 0, [], "array", false, false, false, 251), "html", null, true);
        echo "</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Местоположение</th>
                <td>
                  <span>";
        // line 258
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum_ratings"]) || array_key_exists("sum_ratings", $context) ? $context["sum_ratings"] : (function () { throw new RuntimeError('Variable "sum_ratings" does not exist.', 258, $this->source); })()), "location", [], "any", false, false, false, 258), 0, [], "array", false, false, false, 258), "html", null, true);
        echo "</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Спортна база</th>
                <td>
                  <span>";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum_ratings"]) || array_key_exists("sum_ratings", $context) ? $context["sum_ratings"] : (function () { throw new RuntimeError('Variable "sum_ratings" does not exist.', 265, $this->source); })()), "athletics", [], "any", false, false, false, 265), 0, [], "array", false, false, false, 265), "html", null, true);
        echo "</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Храна</th>
                <td>
                  <span>";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum_ratings"]) || array_key_exists("sum_ratings", $context) ? $context["sum_ratings"] : (function () { throw new RuntimeError('Variable "sum_ratings" does not exist.', 272, $this->source); })()), "food", [], "any", false, false, false, 272), 0, [], "array", false, false, false, 272), "html", null, true);
        echo "</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Общежития</th>
                <td>
                  <span>";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum_ratings"]) || array_key_exists("sum_ratings", $context) ? $context["sum_ratings"] : (function () { throw new RuntimeError('Variable "sum_ratings" does not exist.', 279, $this->source); })()), "dorms", [], "any", false, false, false, 279), 0, [], "array", false, false, false, 279), "html", null, true);
        echo "</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Перспективи за работа</th>
                <td>
                  <span>";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum_ratings"]) || array_key_exists("sum_ratings", $context) ? $context["sum_ratings"] : (function () { throw new RuntimeError('Variable "sum_ratings" does not exist.', 286, $this->source); })()), "jobProspects", [], "any", false, false, false, 286), 0, [], "array", false, false, false, 286), "html", null, true);
        echo "</span>
                </td>
              </tr><!-- .listing-rating -->
            </table><!-- .listing-ratings -->

            <ul class=\"min-list listing-review-list\">
              ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ratings"]) || array_key_exists("ratings", $context) ? $context["ratings"] : (function () { throw new RuntimeError('Variable "ratings" does not exist.', 292, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 293
            echo "                <li id=\"comment_\" class=\"listing-review\">
                  <div class=\"d-flex\">
                    <div class=\"listing-review__avatar\">
                      <img src=\"#\" alt=\"Avatar\">
                    </div><!-- .listing-review__avatar -->

                    <div class=\"listing-review__content\">
                      <header class=\"listing-review__header\">
                        <div class=\"d-sm-flex justify-content-sm-between c-silver-charlice\">
                          <div>
                            <span class=\"stars-outer\" data-rating=\"";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "getOverallRating", [], "any", false, false, false, 303), "html", null, true);
            echo "\">
                              <span class=\"stars-inner\"></span>
                            </span>
                            <span></span>
                          </div>
                          
                          ";
            // line 310
            echo "                        </div>
                      </header><!-- .listing-review__header -->

                      <div class=\"listing-review__review\">
                        <p>";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "getOverallReview", [], "any", false, false, false, 314), "html", null, true);
            echo "</p>
                      </div>

                      <footer class=\"listing-review__footer\">
                        <button class=\"button button--like c-white\">
                          <i class=\"fa fa-thumbs-up\"></i>
                        </button>
                      </footer>
                    </div><!-- .listing-review__content -->
                  </div>
                </li><!-- .listing-review -->
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "            </ul><!-- .listing-review-list -->

          ";
        // line 329
        echo "            <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center listing-pagination\">
              <div class=\"page-navigation\">
                <span aria-current=\"page\" class=\"page-numbers current\">1</span>
                <a href=\"#\" class=\"page-numbers\">2</a>
                <a href=\"#\" class=\"page-numbers\">3</a>
                <a href=\"#\" class=\"page-numbers next\">Next &raquo;</a>
              </div><!-- .page-navigation -->

              <span>Page 1 of 8</span>
            </div>
          </div><!-- .listing-section -->
          ";
        // line 341
        echo "          
        </div><!-- .col-lg-8 -->

        <div class=\"col-lg-4\">
          <div class=\"listing-widget bg-white hover-effect\">
            <div class=\"listing-map-container\">
              <div id=\"contact-map\" class=\"map\"></div>
            </div><!-- .listing-map-container -->

            <ul class=\"min-list listing-contact-list\">
              <li class=\"d-flex align-items-center c-silver-charlice listing-contact\">
                <i class=\"fa fa-compass listing-contact__icon\"></i>
                <span class=\"c-primary\">";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["university"]) || array_key_exists("university", $context) ? $context["university"] : (function () { throw new RuntimeError('Variable "university" does not exist.', 353, $this->source); })()), "address", [], "any", false, false, false, 353), "html", null, true);
        echo "</span>
              </li>

              <li class=\"d-flex align-items-center c-silver-charlice listing-contact\">
                <i class=\"fa fa-phone listing-contact__icon\"></i>
                <a href=\"tel:+442077391628\">";
        // line 358
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["university"]) || array_key_exists("university", $context) ? $context["university"] : (function () { throw new RuntimeError('Variable "university" does not exist.', 358, $this->source); })()), "phone", [], "any", false, false, false, 358), "html", null, true);
        echo "</a>
              </li>

              <li class=\"d-flex align-items-center c-silver-charlice listing-contact\">
                <i class=\"fa fa-envelope listing-contact__icon\"></i>
                <a href=\"#\">";
        // line 363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["university"]) || array_key_exists("university", $context) ? $context["university"] : (function () { throw new RuntimeError('Variable "university" does not exist.', 363, $this->source); })()), "email", [], "any", false, false, false, 363), "html", null, true);
        echo "</a>
              </li>

              <li class=\"d-flex align-items-center c-silver-charlice listing-contact\">
                <i class=\"fa fa-globe listing-contact__icon\"></i>
                <a href=\"#\">";
        // line 368
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["university"]) || array_key_exists("university", $context) ? $context["university"] : (function () { throw new RuntimeError('Variable "university" does not exist.', 368, $this->source); })()), "website", [], "any", false, false, false, 368), "html", null, true);
        echo "</a>
              </li>
            </ul><!-- .listing-contact-list -->

            <div class=\"listing-social\">
              <span class=\"c-dove-gray\">Our Social</span>
              <ul class=\"min-list inline-list social-list\">
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-facebook-f c-facebook\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-twitter c-twitter\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-pinterest c-pinterest\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-google-plus c-google-plus\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-linkedin c-linkedin\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-instagram c-instagram\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-youtube c-youtube\"></i>
                  </a>
                </li>
              </ul><!-- .social-list -->
            </div><!-- .listing-social -->

            <button
              class=\"button button--primary button--block button--pill button--large\"
            >Make Reservation
            </button>
          </div><!-- .listing-widget -->

          <div class=\"listing-widget bg-white hover-effect\">
            <h3 class=\"listing-widget__title\">Opening Time</h3>
            <table class=\"listing-timetable\">
              <tr>
                <th><strong>Mon</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\"></td>
              </tr>
              <tr>
                <th><strong>Tue</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                  Open Now
                </td>
              </tr>
              <tr>
                <th><strong>Wed</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
              <tr>
                <th><strong>Thur</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
              <tr>
                <th><strong>Fri</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
              <tr>
                <th><strong>Sat</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
              <tr>
                <th><strong>Sun</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
            </table>
          </div><!-- .listing-widget -->

          <div class=\"listing-widget bg-white hover-effect\">
            <h3 class=\"listing-widget__title\">Contact</h3>
            <form action=\"/\" method=\"post\">
              <div class=\"form-group\">
                <label for=\"name\">Name *</label>
                <input
                  type=\"text\"
                  name=\"name\"
                  id=\"name\"
                  required
                  class=\"form-input form-input--large form-input--border-c-gallery\"
                >
              </div><!-- .form-group -->

              <div class=\"form-group\">
                <label for=\"email\">Email *</label>
                <input
                  type=\"email\"
                  name=\"email\"
                  id=\"email\"
                  required
                  class=\"form-input form-input--large form-input--border-c-gallery\"
                >
              </div><!-- .form-group -->

              <div class=\"form-group\">
                <label for=\"message\">Message</label>
                <textarea
                  name=\"message\"
                  id=\"message\"
                  rows=\"8\"
                  class=\"form-input form-input--large form-input--border-c-gallery\"
                ></textarea>
              </div><!-- .form-group -->

              <div class=\"form-group--submit\">
                <button class=\"button button--primary button--large button--pill\" type=\"submit\">Send Message</button>
              </div>
            </form>
          </div><!-- .listing-widget -->

          <div class=\"listing-widget bg-white hover-effect\">
            <h3 class=\"listing-widget__title\">Latest Listings</h3>
            <ul class=\"min-list latest-listings\">
              <li class=\"latest-listing\">
                <div class=\"d-flex\">
                  <div class=\"latest-listing__thumbnail\">
                    <a href=\"#\">
                      <img src=\"assets/images/uploads/latest-listing-1.jpg\" alt=\"Latest Listing\">
                    </a>
                  </div><!-- .latest-listing__thumbnail -->

                  <div class=\"latest-listing__content\">
                    <h5 class=\"latest-listing__name\"><a href=\"#\">Monmouth Restaurant</a></h5>
                    <div class=\"latest-listing__review c-gray\">
                      <span class=\"stars-outer\" data-rating=\"4.5\">
                        <span class=\"stars-inner\"></span>
                      </span>
                      <span class=\"t-small\">(03 reviews)</span>
                    </div>
                    <p class=\"c-gray latest-listing__desc\">It is totally true that Monmouth...</p>
                  </div><!-- .latest-listing__content -->
                </div>
              </li><!-- .latest-listing -->

              <li class=\"latest-listing\">
                <div class=\"d-flex\">
                  <div class=\"latest-listing__thumbnail\">
                    <a href=\"#\">
                      <img src=\"assets/images/uploads/latest-listing-2.jpg\" alt=\"Latest Listing\">
                    </a>
                  </div><!-- .latest-listing__thumbnail -->

                  <div class=\"latest-listing__content\">
                    <h5 class=\"latest-listing__name\"><a href=\"#\">Broadway Coffee Shop</a></h5>
                    <div class=\"latest-listing__review c-gray\">
                      <span class=\"stars-outer\" data-rating=\"4.5\">
                        <span class=\"stars-inner\"></span>
                      </span>
                      <span class=\"t-small\">(03 reviews)</span>
                    </div>
                    <p class=\"c-gray latest-listing__desc\">The Vietnamese iced coffee...</p>
                  </div><!-- .latest-listing__content -->
                </div>
              </li><!-- .latest-listing -->

              <li class=\"latest-listing\">
                <div class=\"d-flex\">
                  <div class=\"latest-listing__thumbnail\">
                    <a href=\"#\">
                      <img src=\"assets/images/uploads/latest-listing-3.jpg\" alt=\"Latest Listing\">
                    </a>
                  </div><!-- .latest-listing__thumbnail -->

                  <div class=\"latest-listing__content\">
                    <h5 class=\"latest-listing__name\"><a href=\"#\">Books for Cooks</a></h5>
                    <div class=\"latest-listing__review c-gray\">
                      <span class=\"stars-outer\" data-rating=\"3.5\">
                        <span class=\"stars-inner\"></span>
                      </span>
                      <span class=\"t-small\">(03 reviews)</span>
                    </div>
                    <p class=\"c-gray latest-listing__desc\">When I walked in the door...</p>
                  </div><!-- .latest-listing__content -->
                </div>
              </li><!-- .latest-listing -->
            </ul><!-- .latest-listings -->
          </div><!-- .listing-widget -->
          <p class=\"c-dusty-gray listing-cta\">Is this your business?
            <a href=\"#\" class=\"t-underline\">Claim it now.</a></p>
        </div><!-- .col-lg-4 -->
      </div><!-- .row -->
    </div>
  </div>
</section><!-- .single-listing -->
</div><!-- .page-content -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "university/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 368,  545 => 363,  537 => 358,  529 => 353,  515 => 341,  502 => 329,  498 => 326,  480 => 314,  474 => 310,  465 => 303,  453 => 293,  449 => 292,  440 => 286,  430 => 279,  420 => 272,  410 => 265,  400 => 258,  390 => 251,  380 => 244,  370 => 237,  311 => 180,  307 => 177,  305 => 174,  302 => 172,  300 => 171,  291 => 169,  286 => 168,  271 => 155,  264 => 151,  254 => 144,  162 => 55,  150 => 46,  112 => 10,  102 => 9,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
{% endblock %}

{% block header_class %} site-header site-header--fluid bg-primary {% endblock %}

{% block body %}
  <div class=\"page-content page-content--no-b-bottom\">
  <div class=\"breadcrumbs-container\">
  <div class=\"container\">
    <ul class=\"breadcrumbs min-list inline-list\">
      <li class=\"breadcrumbs__item\">
        <a href=\"index.html\" class=\"breadcrumbs__link\">
          <span class=\"breadcrumbs__title\">Home</span>
        </a>
      </li>

      <li class=\"breadcrumbs__item\">
        <a href=\"#\" class=\"breadcrumbs__link\">
          <span class=\"breadcrumbs__title\">Pages</span>
        </a>
      </li>

      <li class=\"breadcrumbs__item\">
        <span class=\"breadcrumbs__page c-gray\">Single Listing</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>
  <section class=\"single-listing single-listing--layout-1\">
  <header class=\"listing-header\">
    <div class=\"container\">
      <div class=\"listing-header__container\">
        <div class=\"d-lg-flex justify-content-lg-between\">
          <div class=\"listing-header__main\">
            <div class=\"d-flex\">
              <div class=\"listing-header__image\">
                <img src=\"assets/images/uploads/single-listing.jpg\" alt=\"Petersham Nurseries Cafe\">
              </div><!-- .listing-header__image -->

              <div class=\"listing-header__content\">
                <div class=\"d-sm-flex align-items-sm-center\">

                  <h2 class=\"listing-header__title\">{{ university.title }}</h2>
                  <div>
                    <i class=\"fa fa-check-circle c-secondary\"></i>
                    <span class=\"c-dusty-gray\">Claimed</span>
                  </div>
                </div>
                
                <ul class=\"min-list listing-header__detail\">
                  <li>
                    <span class=\"listing__score t-center\">{{ sum_ratings.overall_rating[0] }}</span>
                    <span class=\"listing__review c-dusty-gray\">
                      <span class=\"stars-outer\" data-rating=\"4.5\">
                        <span class=\"stars-inner\"></span>
                      </span>
                    </span>
                  </li>
                  <li>
                    <span>Coffee & Tea</span>
                  </li>
                  <li>
                  <span>
                    <i class=\"fa fa-usd c-dove-gray\"></i>
                    <i class=\"fa fa-usd c-dusty-gray\"></i>
                    <i class=\"fa fa-usd c-dusty-gray\"></i>
                    <i class=\"fa fa-usd c-dusty-gray\"></i>
                    <span class=\"c-dusty-gray\">(Inexpensive)</span>
                  </span>
                  </li>
                </ul><!-- .listing__header-detail -->
              </div><!-- .listing-header__content -->
            </div><!-- .listing__wrapper -->
          </div><!-- .listing-header__main -->

          <ul class=\"min-list inline-list listing-actions\">
            <li class=\"t-center listing-action listing-action--favorite\">
              <a href=\"#\">
                <i class=\"fa fa-heart\"></i>
                Favorite
              </a>
            </li>
            <li class=\"t-center listing-action listing-action--report\">
              <a href=\"#\">
                <i class=\"fa fa-exclamation\"></i>
                Report
              </a>
            </li>
            <li class=\"t-center listing-action listing-action--share\">
              <a href=\"#\">
                <i class=\"fa fa-share-alt\"></i>
                Share
              </a>
            </li>
          </ul><!-- .listing-actions -->
        </div>
      </div><!-- .listing-header__container -->
    </div><!-- .container -->
  </header><!-- .listing-header -->
  <nav class=\"listing-nav bg-white\">
    <div class=\"container\">
      <ul class=\"min-list inline-list listing-tabs\">
        <li class=\"listing-tab is-active\">
          <a href=\"#about\" id=\"about-link\" class=\"listing-nav-link\">
            About
          </a>
        </li><!-- .listing-tab -->

        <li class=\"listing-tab\">
          <a href=\"#menu\" id=\"menu-link\" class=\"listing-nav-link\">
            Menu
          </a>
        </li><!-- .listing-tab -->

        <li class=\"listing-tab\">
          <a href=\"#gallery\" id=\"gallery-link\" class=\"listing-nav-link\">
            Gallery
          </a>
        </li><!-- .listing-tab -->

        <li class=\"listing-tab\">
          <a href=\"#reviews\" id=\"reviews-link\" class=\"listing-nav-link\">
            Reviews
          </a>
        </li><!-- .listing-tab -->

        <li class=\"listing-tab\">
          <a href=\"#add-review\" id=\"add-review-link\" class=\"listing-nav-link\">
            Add Review
          </a>
        </li><!-- .listing-tab -->
      </ul><!-- .listing-tabs -->
    </div>
  </nav>
  <div class=\"listing-main bg-wild-sand\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <div>
            <p>
              <img src=\"{{ asset('build/images-theme/uploads/single-listing-1.jpg') }}\" alt=\"Single Listing\">
            </p>
          </div>
          <div id=\"about\" class=\"listing-section bg-white hover-effect\" data-matching-link=\"#about-link\">
           

            <div class=\"c-dove-gray\">
              <p>{{ university.description }}</p>
            </div>
            
            <p>
                <img src=\"{{ asset('build/images-theme/uploads/single-listing-2.jpg') }}\" alt=\"Single Listing\">
            </p>

          </div><!-- .listing-section -->

          <div id=\"menu\" class=\"listing-section bg-white hover-effect\" data-matching-link=\"#menu-link\">
            <div class=\"listing-section__header\">
              <h3 class=\"listing-section__title\">Професионални направления</h3>
            </div><!-- .listing-section__header -->
            <ul class=\"min-list\">
            
              <div class=\"accordion-container\" class=\"container mx-auto bg-white border-grey-light border mt-20\">
{#               {{ dump(majors) }}#}
                {% for key, major in majors %}
                  {{ dump(major.university) }}
                {% endfor %}
                {# {% for key, major in majors %} #}
                  <div class=\"accordion-container\">
                    {# accordion #}
                    {# <accordion title=\"{{ major['name'] }}\">
                       {% include 'university/degrees.html.twig' %}
                    </accordion> #}
                    <!-- accordion -->
                  </div><!-- .accordion-container -->
                {# {% endfor %} #}
              </div><!-- .accordion-container -->

            </ul><!-- .listing-menu -->
          </div><!-- .listing-section -->

          <div id=\"gallery\" class=\"listing-section bg-white hover-effect\" data-matching-link=\"#gallery-link\">
            <div class=\"listing-section__header\">
              <h3 class=\"listing-section__title\">Галерия</h3>
            </div><!-- .listing-section__header -->

            <div class=\"swiper-container listing-gallery-top\">
              <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-1.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-2.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-3.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-4.jpg\" alt=\"Listing Image\">
                </div>
              </div><!-- .swiper-wrapper -->
              <span class=\"ion-chevron-left c-white listing-button listing-button-prev\"></span>
              <span class=\"ion-chevron-right c-white listing-button listing-button-next\"></span>
            </div><!-- .listing-gallery-top -->

            <div class=\"swiper-container listing-gallery-thumb\">
              <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide is-selected\">
                  <img src=\"assets/images/uploads/listing-1.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-2.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-3.jpg\" alt=\"Listing Image\">
                </div>
                <div class=\"swiper-slide\">
                  <img src=\"assets/images/uploads/listing-4.jpg\" alt=\"Listing Image\">
                </div>
              </div><!-- .swiper-wrapper -->
            </div><!-- .listing-gallery-thumb -->
          </div><!-- .listing-section -->

          <div id=\"reviews\" class=\"listing-section bg-white hover-effect\" data-matching-link=\"#reviews-link\">
            <div class=\"listing-section__header\">
              <h3 class=\"listing-section__title\">Reviews</h3>
            </div><!-- .listing-section__header -->

            <table class=\"listing-ratings\">

              <tr class=\"listing-rating\">
                <th>Обучение</th>
                <td>
                  <span>{{ sum_ratings.academics[0] }}</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Преподаватели</th>
                <td>
                  <span>{{ sum_ratings.professors[0] }}</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Университетска база</th>
                <td>
                  <span>{{ sum_ratings.campus[0] }}</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Местоположение</th>
                <td>
                  <span>{{ sum_ratings.location[0] }}</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Спортна база</th>
                <td>
                  <span>{{ sum_ratings.athletics[0] }}</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Храна</th>
                <td>
                  <span>{{ sum_ratings.food[0] }}</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Общежития</th>
                <td>
                  <span>{{ sum_ratings.dorms[0] }}</span>
                </td>
              </tr><!-- .listing-rating -->

              <tr class=\"listing-rating\">
                <th>Перспективи за работа</th>
                <td>
                  <span>{{ sum_ratings.jobProspects[0] }}</span>
                </td>
              </tr><!-- .listing-rating -->
            </table><!-- .listing-ratings -->

            <ul class=\"min-list listing-review-list\">
              {% for rating in ratings %}
                <li id=\"comment_\" class=\"listing-review\">
                  <div class=\"d-flex\">
                    <div class=\"listing-review__avatar\">
                      <img src=\"#\" alt=\"Avatar\">
                    </div><!-- .listing-review__avatar -->

                    <div class=\"listing-review__content\">
                      <header class=\"listing-review__header\">
                        <div class=\"d-sm-flex justify-content-sm-between c-silver-charlice\">
                          <div>
                            <span class=\"stars-outer\" data-rating=\"{{ rating.getOverallRating }}\">
                              <span class=\"stars-inner\"></span>
                            </span>
                            <span></span>
                          </div>
                          
                          {# <span>{{ 'Written on'|trans }} {{ rating.publishedAt|date(\"m/d/Y\") }}</span> #}
                        </div>
                      </header><!-- .listing-review__header -->

                      <div class=\"listing-review__review\">
                        <p>{{ rating.getOverallReview }}</p>
                      </div>

                      <footer class=\"listing-review__footer\">
                        <button class=\"button button--like c-white\">
                          <i class=\"fa fa-thumbs-up\"></i>
                        </button>
                      </footer>
                    </div><!-- .listing-review__content -->
                  </div>
                </li><!-- .listing-review -->
              {% endfor %}
            </ul><!-- .listing-review-list -->

          {# Pagination TO DO #}
            <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center listing-pagination\">
              <div class=\"page-navigation\">
                <span aria-current=\"page\" class=\"page-numbers current\">1</span>
                <a href=\"#\" class=\"page-numbers\">2</a>
                <a href=\"#\" class=\"page-numbers\">3</a>
                <a href=\"#\" class=\"page-numbers next\">Next &raquo;</a>
              </div><!-- .page-navigation -->

              <span>Page 1 of 8</span>
            </div>
          </div><!-- .listing-section -->
          {# Pagination TO DO #}
          
        </div><!-- .col-lg-8 -->

        <div class=\"col-lg-4\">
          <div class=\"listing-widget bg-white hover-effect\">
            <div class=\"listing-map-container\">
              <div id=\"contact-map\" class=\"map\"></div>
            </div><!-- .listing-map-container -->

            <ul class=\"min-list listing-contact-list\">
              <li class=\"d-flex align-items-center c-silver-charlice listing-contact\">
                <i class=\"fa fa-compass listing-contact__icon\"></i>
                <span class=\"c-primary\">{{ university.address }}</span>
              </li>

              <li class=\"d-flex align-items-center c-silver-charlice listing-contact\">
                <i class=\"fa fa-phone listing-contact__icon\"></i>
                <a href=\"tel:+442077391628\">{{ university.phone }}</a>
              </li>

              <li class=\"d-flex align-items-center c-silver-charlice listing-contact\">
                <i class=\"fa fa-envelope listing-contact__icon\"></i>
                <a href=\"#\">{{ university.email }}</a>
              </li>

              <li class=\"d-flex align-items-center c-silver-charlice listing-contact\">
                <i class=\"fa fa-globe listing-contact__icon\"></i>
                <a href=\"#\">{{ university.website }}</a>
              </li>
            </ul><!-- .listing-contact-list -->

            <div class=\"listing-social\">
              <span class=\"c-dove-gray\">Our Social</span>
              <ul class=\"min-list inline-list social-list\">
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-facebook-f c-facebook\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-twitter c-twitter\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-pinterest c-pinterest\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-google-plus c-google-plus\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-linkedin c-linkedin\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-instagram c-instagram\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"#\">
                    <i class=\"fa fa-youtube c-youtube\"></i>
                  </a>
                </li>
              </ul><!-- .social-list -->
            </div><!-- .listing-social -->

            <button
              class=\"button button--primary button--block button--pill button--large\"
            >Make Reservation
            </button>
          </div><!-- .listing-widget -->

          <div class=\"listing-widget bg-white hover-effect\">
            <h3 class=\"listing-widget__title\">Opening Time</h3>
            <table class=\"listing-timetable\">
              <tr>
                <th><strong>Mon</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\"></td>
              </tr>
              <tr>
                <th><strong>Tue</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                  Open Now
                </td>
              </tr>
              <tr>
                <th><strong>Wed</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
              <tr>
                <th><strong>Thur</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
              <tr>
                <th><strong>Fri</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
              <tr>
                <th><strong>Sat</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
              <tr>
                <th><strong>Sun</strong></th>
                <td>8:00 AM - 5:00 PM</td>
                <td class=\"c-secondary\">
                </td>
              </tr>
            </table>
          </div><!-- .listing-widget -->

          <div class=\"listing-widget bg-white hover-effect\">
            <h3 class=\"listing-widget__title\">Contact</h3>
            <form action=\"/\" method=\"post\">
              <div class=\"form-group\">
                <label for=\"name\">Name *</label>
                <input
                  type=\"text\"
                  name=\"name\"
                  id=\"name\"
                  required
                  class=\"form-input form-input--large form-input--border-c-gallery\"
                >
              </div><!-- .form-group -->

              <div class=\"form-group\">
                <label for=\"email\">Email *</label>
                <input
                  type=\"email\"
                  name=\"email\"
                  id=\"email\"
                  required
                  class=\"form-input form-input--large form-input--border-c-gallery\"
                >
              </div><!-- .form-group -->

              <div class=\"form-group\">
                <label for=\"message\">Message</label>
                <textarea
                  name=\"message\"
                  id=\"message\"
                  rows=\"8\"
                  class=\"form-input form-input--large form-input--border-c-gallery\"
                ></textarea>
              </div><!-- .form-group -->

              <div class=\"form-group--submit\">
                <button class=\"button button--primary button--large button--pill\" type=\"submit\">Send Message</button>
              </div>
            </form>
          </div><!-- .listing-widget -->

          <div class=\"listing-widget bg-white hover-effect\">
            <h3 class=\"listing-widget__title\">Latest Listings</h3>
            <ul class=\"min-list latest-listings\">
              <li class=\"latest-listing\">
                <div class=\"d-flex\">
                  <div class=\"latest-listing__thumbnail\">
                    <a href=\"#\">
                      <img src=\"assets/images/uploads/latest-listing-1.jpg\" alt=\"Latest Listing\">
                    </a>
                  </div><!-- .latest-listing__thumbnail -->

                  <div class=\"latest-listing__content\">
                    <h5 class=\"latest-listing__name\"><a href=\"#\">Monmouth Restaurant</a></h5>
                    <div class=\"latest-listing__review c-gray\">
                      <span class=\"stars-outer\" data-rating=\"4.5\">
                        <span class=\"stars-inner\"></span>
                      </span>
                      <span class=\"t-small\">(03 reviews)</span>
                    </div>
                    <p class=\"c-gray latest-listing__desc\">It is totally true that Monmouth...</p>
                  </div><!-- .latest-listing__content -->
                </div>
              </li><!-- .latest-listing -->

              <li class=\"latest-listing\">
                <div class=\"d-flex\">
                  <div class=\"latest-listing__thumbnail\">
                    <a href=\"#\">
                      <img src=\"assets/images/uploads/latest-listing-2.jpg\" alt=\"Latest Listing\">
                    </a>
                  </div><!-- .latest-listing__thumbnail -->

                  <div class=\"latest-listing__content\">
                    <h5 class=\"latest-listing__name\"><a href=\"#\">Broadway Coffee Shop</a></h5>
                    <div class=\"latest-listing__review c-gray\">
                      <span class=\"stars-outer\" data-rating=\"4.5\">
                        <span class=\"stars-inner\"></span>
                      </span>
                      <span class=\"t-small\">(03 reviews)</span>
                    </div>
                    <p class=\"c-gray latest-listing__desc\">The Vietnamese iced coffee...</p>
                  </div><!-- .latest-listing__content -->
                </div>
              </li><!-- .latest-listing -->

              <li class=\"latest-listing\">
                <div class=\"d-flex\">
                  <div class=\"latest-listing__thumbnail\">
                    <a href=\"#\">
                      <img src=\"assets/images/uploads/latest-listing-3.jpg\" alt=\"Latest Listing\">
                    </a>
                  </div><!-- .latest-listing__thumbnail -->

                  <div class=\"latest-listing__content\">
                    <h5 class=\"latest-listing__name\"><a href=\"#\">Books for Cooks</a></h5>
                    <div class=\"latest-listing__review c-gray\">
                      <span class=\"stars-outer\" data-rating=\"3.5\">
                        <span class=\"stars-inner\"></span>
                      </span>
                      <span class=\"t-small\">(03 reviews)</span>
                    </div>
                    <p class=\"c-gray latest-listing__desc\">When I walked in the door...</p>
                  </div><!-- .latest-listing__content -->
                </div>
              </li><!-- .latest-listing -->
            </ul><!-- .latest-listings -->
          </div><!-- .listing-widget -->
          <p class=\"c-dusty-gray listing-cta\">Is this your business?
            <a href=\"#\" class=\"t-underline\">Claim it now.</a></p>
        </div><!-- .col-lg-4 -->
      </div><!-- .row -->
    </div>
  </div>
</section><!-- .single-listing -->
</div><!-- .page-content -->

{% endblock %}
", "university/show.html.twig", "/home/vagrant/school-hunter/templates/university/show.html.twig");
    }
}
