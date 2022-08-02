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

/* user/account.html.twig */
class __TwigTemplate_2a52257e8672eb042cef2e90bd8b17575fcd7def4438aa12527c798be294b676 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/account.html.twig", 1);
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

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 10
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
<div class=\"page-content\">
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
        <span class=\"breadcrumbs__page c-gray\">Login/Signup</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>
  <div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-4 offset-md-4\">
      <div class=\"form-login js-login-form\">
        <div class=\"form-login__block js-form-block is-selected\" id=\"signin\">

          ";
        // line 42
        echo "          <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
          <form action=\"/\" method=\"post\">
            <div class=\"form-container\">
              <h3 class=\"form-title t-center\">Sign In</h3>
              <div class=\"form-social\">
                <div class=\"form-group\">
                  <div class=\"form-group__wrapper\">
                    <button
                      class=\"button button--social button--twitter button--pill button--large button--block\"
                      type=\"button\"
                    >
                      Connect to Twitter
                    </button>
                    <span class=\"form-group__icon form-group__icon--social\">
                  <i class=\"fa fa-twitter c-white\"></i>
                </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->

                <div class=\"form-group\">
                  <div class=\"form-group__wrapper\">
                    <button
                      class=\"button button--social button--facebook button--pill button--large button--block\"
                      type=\"button\"
                    >
                      Connect to Facebook
                    </button>
                    <span class=\"form-group__icon form-group__icon--social\">
                  <i class=\"fa fa-facebook-f c-white\"></i>
                </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->
              </div><!-- .form-social -->
              <div class=\"form-group\">
                <label for=\"login-user\">Username or Email</label>
                <input
                  type=\"text\"
                  name=\"_username\"
                  id=\"login-user\"
                  class=\"form-input form-input--pill form-input--border-c-gallery\"
                  value=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "\"
                  required
                  placeholder=\"johndoe\"
                >
              </div><!-- .form-group -->

              <div class=\"form-group\">
                <label for=\"login-password\">Password</label>
                <input
                  type=\"password\"
                  name=\"_password\"
                  id=\"login-password\"
                  class=\"form-input form-input--pill form-input--border-c-gallery\"
                  required
                  placeholder=\"******\"
                >
              </div><!-- .form-group -->

              <div class=\"form-group\">
                <div class=\"form-group__container\">
                  <label for=\"remember-me\" class=\"icheck_label\">
                    <input type=\"checkbox\" id=\"remember-me\" name=\"iCheck\">
                    Remember Me
                  </label>
                  <a href=\"#reset\" class=\"c-gray js-block-trigger\">Forgot Password?</a>
                </div><!-- .form-group__container -->
              </div><!-- .form-group -->

              <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "get", [0 => "redirect_to"], "method", false, false, false, 110), "html", null, true);
        echo "\"/>
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
              
              <div class=\"form-group--submit\">
                <button
                  class=\"button button--primary button--pill button--large button--block button--submit\"
                  type=\"submit\"
                >
                  Log In
                </button>
              </div>

              <div class=\"form-group--footer\">
            <span class=\"c-gray\">
              Don't have an account? <a href=\"#signup\" class=\"c-secondary t-underline js-block-trigger\">Register</a>
            </span>
              </div>
            </div><!-- .form-container -->
          </form><!-- .signin -->
          ";
        // line 130
        echo "        </div><!-- .form-login__block -->

        <div class=\"form-login__block js-form-block\" id=\"signup\">
        ";
        // line 134
        echo "        ";
        // line 135
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new RuntimeError('Variable "form_registration" does not exist.', 135, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"form-container\">
              <h3 class=\"form-title t-center\">Регистрация</h3>
              <div class=\"form-social\">
                <div class=\"form-group\">
                  <div class=\"form-group__wrapper\">
                    <button
                      class=\"button button--social button--twitter button--pill button--large button--block\"
                      type=\"button\"
                    >
                      Connect to Twitter
                    </button>
                    <span class=\"form-group__icon form-group__icon--social\">
                    <i class=\"fa fa-twitter c-white\"></i>
                  </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->

                <div class=\"form-group\">
                  <div class=\"form-group__wrapper\">
                    <button
                      class=\"button button--social button--facebook button--pill button--large button--block\"
                      type=\"button\"
                    >
                      Connect to Facebook
                    </button>
                    <span class=\"form-group__icon form-group__icon--social\">
                    <i class=\"fa fa-facebook-f c-white\"></i>
                  </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->
              </div><!-- .form-social -->

              <div class=\"form-group\">
               ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new RuntimeError('Variable "form_registration" does not exist.', 169, $this->source); })()), "firstName", [], "any", false, false, false, 169), 'row', ["label" => "Имe *", "attr" => ["type" => "text", "class" => "form-input form-input--pill form-input--border-c-gallery", "placeholder" => "John"], "id" => "signup_first_name"]);
        // line 177
        echo "
              </div><!-- .form-group -->

              <div class=\"form-group\">
               ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new RuntimeError('Variable "form_registration" does not exist.', 181, $this->source); })()), "lastName", [], "any", false, false, false, 181), 'row', ["label" => "Фамилия *", "attr" => ["type" => "text", "class" => "form-input form-input--pill form-input--border-c-gallery", "placeholder" => "Doe"], "id" => "signup_last_name"]);
        // line 189
        echo "
              </div><!-- .form-group -->

              <div class=\"form-group\">
               ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new RuntimeError('Variable "form_registration" does not exist.', 193, $this->source); })()), "email", [], "any", false, false, false, 193), 'row', ["label" => "Имейл *", "attr" => ["type" => "email", "class" => "form-input form-input--pill form-input--border-c-gallery", "placeholder" => "johndoe@gmail.com"], "id" => "signup_email"]);
        // line 201
        echo "
              </div><!-- .form-group -->

              <div class=\"form-group\">
               ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new RuntimeError('Variable "form_registration" does not exist.', 205, $this->source); })()), "password", [], "any", false, false, false, 205), "first", [], "any", false, false, false, 205), 'row', ["label" => "Парола *", "attr" => ["type" => "password", "class" => "form-input form-input--pill form-input--border-c-gallery", "placeholder" => "******"], "id" => "signup_password"]);
        // line 213
        echo "
              </div><!-- .form-group -->

              <div class=\"form-group\">
               ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new RuntimeError('Variable "form_registration" does not exist.', 217, $this->source); })()), "password", [], "any", false, false, false, 217), "second", [], "any", false, false, false, 217), 'row', ["label" => "Потвърдете паролата *", "attr" => ["type" => "password", "class" => "form-input form-input--pill form-input--border-c-gallery", "placeholder" => "******"], "id" => "signup_password_confirm"]);
        // line 225
        echo "
              </div><!-- .form-group -->


              <div class=\"form-group\">
               ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new RuntimeError('Variable "form_registration" does not exist.', 230, $this->source); })()), "agreeTerms", [], "any", false, false, false, 230), 'row', ["label" => "Съгласявам се с условията", "attr" => ["type" => "checkbox", "class" => "form-input form-input--pill form-input--border-c-gallery", "placeholder" => "******"], "id" => "signup_terms", "required" => true]);
        // line 239
        echo "
              </div><!-- .form-group -->
             
              <div class=\"form-group\">
              <span class=\"c-gray\">
                Създавайки акаунт, вие се съгласявате с нашите <a href=\"#\" class=\"t-underline\">Общи условия</a>
                и нашата <a href=\"#\" class=\"t-underline\">Политика за поверителност</a>
              </span>
              </div><!-- .form-group -->

              <div class=\"form-group--submit\">
                <button
                  class=\"button button--primary button--pill button--large button--block button--submit\"
                  type=\"submit\"
                >
                  Sign Up
                </button>
              </div>

              <div class=\"form-group--footer\">
              <span class=\"c-gray\">
                Вече имате акаунт?
                <a href=\"#signin\" class=\"c-secondary t-underline js-block-trigger\">Вход за потребители</a>
              </span>
              </div>
            </div><!-- .form-container -->
            ";
        // line 265
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new RuntimeError('Variable "form_registration" does not exist.', 265, $this->source); })()), 'form_end');
        echo "
            ";
        // line 267
        echo "          ";
        // line 268
        echo "        </div><!-- .form-login__block -->

        <div class=\"form-login__block js-form-block\" id=\"reset\">
          <form action=\"/\" method=\"post\">
            <div class=\"form-container\">
              <div class=\"form-group\">
                <label for=\"reset-password\">Email</label>
                <input
                  type=\"email\"
                  name=\"reset-password\"
                  id=\"reset-password\"
                  class=\"form-input form-input--pill form-input--border-c-gallery\"
                  placeholder=\"johndoe@gmail.com\"
                  required
                >
              </div><!-- .form-group -->

              <div class=\"form-group--submit\">
                <button
                  class=\"button button--primary button--pill button--large button--block button--submit\"
                  type=\"submit\"
                >
                  Reset Password
                </button>
              </div>

              <div class=\"form-group--footer\">
                <a href=\"#signin\" class=\"c-secondary t-underline js-block-trigger\">Back to Sign in</a>
              </div>
            </div><!-- .form-container -->
          </form><!-- .reset -->
        </div><!-- .form-login__block -->
      </div><!-- .form-login -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container -->
</div><!-- .page-content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 268,  376 => 267,  372 => 265,  344 => 239,  342 => 230,  335 => 225,  333 => 217,  327 => 213,  325 => 205,  319 => 201,  317 => 193,  311 => 189,  309 => 181,  303 => 177,  301 => 169,  263 => 135,  261 => 134,  256 => 130,  235 => 111,  231 => 110,  200 => 82,  156 => 42,  125 => 12,  116 => 10,  112 => 9,  102 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
{% endblock %}

{% block header_class %} site-header site-header--fluid bg-primary {% endblock %}
{% block body %}
{% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
{% endfor %}
    
<div class=\"page-content\">
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
        <span class=\"breadcrumbs__page c-gray\">Login/Signup</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>
  <div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-4 offset-md-4\">
      <div class=\"form-login js-login-form\">
        <div class=\"form-login__block js-form-block is-selected\" id=\"signin\">

          {# Login form #}
          <form action=\"{{ path('security_login') }}\" method=\"post\">
          <form action=\"/\" method=\"post\">
            <div class=\"form-container\">
              <h3 class=\"form-title t-center\">Sign In</h3>
              <div class=\"form-social\">
                <div class=\"form-group\">
                  <div class=\"form-group__wrapper\">
                    <button
                      class=\"button button--social button--twitter button--pill button--large button--block\"
                      type=\"button\"
                    >
                      Connect to Twitter
                    </button>
                    <span class=\"form-group__icon form-group__icon--social\">
                  <i class=\"fa fa-twitter c-white\"></i>
                </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->

                <div class=\"form-group\">
                  <div class=\"form-group__wrapper\">
                    <button
                      class=\"button button--social button--facebook button--pill button--large button--block\"
                      type=\"button\"
                    >
                      Connect to Facebook
                    </button>
                    <span class=\"form-group__icon form-group__icon--social\">
                  <i class=\"fa fa-facebook-f c-white\"></i>
                </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->
              </div><!-- .form-social -->
              <div class=\"form-group\">
                <label for=\"login-user\">Username or Email</label>
                <input
                  type=\"text\"
                  name=\"_username\"
                  id=\"login-user\"
                  class=\"form-input form-input--pill form-input--border-c-gallery\"
                  value=\"{{ last_username }}\"
                  required
                  placeholder=\"johndoe\"
                >
              </div><!-- .form-group -->

              <div class=\"form-group\">
                <label for=\"login-password\">Password</label>
                <input
                  type=\"password\"
                  name=\"_password\"
                  id=\"login-password\"
                  class=\"form-input form-input--pill form-input--border-c-gallery\"
                  required
                  placeholder=\"******\"
                >
              </div><!-- .form-group -->

              <div class=\"form-group\">
                <div class=\"form-group__container\">
                  <label for=\"remember-me\" class=\"icheck_label\">
                    <input type=\"checkbox\" id=\"remember-me\" name=\"iCheck\">
                    Remember Me
                  </label>
                  <a href=\"#reset\" class=\"c-gray js-block-trigger\">Forgot Password?</a>
                </div><!-- .form-group__container -->
              </div><!-- .form-group -->

              <input type=\"hidden\" name=\"_target_path\" value=\"{{ app.request.get('redirect_to') }}\"/>
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
              
              <div class=\"form-group--submit\">
                <button
                  class=\"button button--primary button--pill button--large button--block button--submit\"
                  type=\"submit\"
                >
                  Log In
                </button>
              </div>

              <div class=\"form-group--footer\">
            <span class=\"c-gray\">
              Don't have an account? <a href=\"#signup\" class=\"c-secondary t-underline js-block-trigger\">Register</a>
            </span>
              </div>
            </div><!-- .form-container -->
          </form><!-- .signin -->
          {# Login form #}
        </div><!-- .form-login__block -->

        <div class=\"form-login__block js-form-block\" id=\"signup\">
        {# {% if  form_registration is defined %} #}
        {# Registration form #}
        {{ form_start(form_registration, {'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"form-container\">
              <h3 class=\"form-title t-center\">Регистрация</h3>
              <div class=\"form-social\">
                <div class=\"form-group\">
                  <div class=\"form-group__wrapper\">
                    <button
                      class=\"button button--social button--twitter button--pill button--large button--block\"
                      type=\"button\"
                    >
                      Connect to Twitter
                    </button>
                    <span class=\"form-group__icon form-group__icon--social\">
                    <i class=\"fa fa-twitter c-white\"></i>
                  </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->

                <div class=\"form-group\">
                  <div class=\"form-group__wrapper\">
                    <button
                      class=\"button button--social button--facebook button--pill button--large button--block\"
                      type=\"button\"
                    >
                      Connect to Facebook
                    </button>
                    <span class=\"form-group__icon form-group__icon--social\">
                    <i class=\"fa fa-facebook-f c-white\"></i>
                  </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->
              </div><!-- .form-social -->

              <div class=\"form-group\">
               {{ form_row(form_registration.firstName, {
                  label: 'Имe *',
                  attr: {
                    'type': 'text',
                    'class': 'form-input form-input--pill form-input--border-c-gallery',
                    'placeholder': 'John'
                  },
                  id: 'signup_first_name'
                }) }}
              </div><!-- .form-group -->

              <div class=\"form-group\">
               {{ form_row(form_registration.lastName, {
                  label: 'Фамилия *',
                  attr: {
                    'type': 'text',
                    'class': 'form-input form-input--pill form-input--border-c-gallery',
                    'placeholder': 'Doe'
                  },
                  id: 'signup_last_name'
                }) }}
              </div><!-- .form-group -->

              <div class=\"form-group\">
               {{ form_row(form_registration.email, {
                  label: 'Имейл *',
                  attr: {
                    'type': 'email',
                    'class': 'form-input form-input--pill form-input--border-c-gallery',
                    'placeholder': 'johndoe@gmail.com'
                  },
                  id: 'signup_email'
                }) }}
              </div><!-- .form-group -->

              <div class=\"form-group\">
               {{ form_row(form_registration.password.first, {
                  label: 'Парола *',
                  attr: {
                    'type': 'password',
                    'class': 'form-input form-input--pill form-input--border-c-gallery',
                    'placeholder': '******'
                  },
                  id: 'signup_password'
                }) }}
              </div><!-- .form-group -->

              <div class=\"form-group\">
               {{ form_row(form_registration.password.second, {
                  label: 'Потвърдете паролата *',
                  attr: {
                    'type': 'password',
                    'class': 'form-input form-input--pill form-input--border-c-gallery',
                    'placeholder': '******'
                  },
                  id: 'signup_password_confirm'
                }) }}
              </div><!-- .form-group -->


              <div class=\"form-group\">
               {{ form_row(form_registration.agreeTerms, {
                  label: 'Съгласявам се с условията',
                  attr: {
                    'type': 'checkbox',
                    'class': 'form-input form-input--pill form-input--border-c-gallery',
                    'placeholder': '******'
                  },
                  id: 'signup_terms',
                  required: true
                }) }}
              </div><!-- .form-group -->
             
              <div class=\"form-group\">
              <span class=\"c-gray\">
                Създавайки акаунт, вие се съгласявате с нашите <a href=\"#\" class=\"t-underline\">Общи условия</a>
                и нашата <a href=\"#\" class=\"t-underline\">Политика за поверителност</a>
              </span>
              </div><!-- .form-group -->

              <div class=\"form-group--submit\">
                <button
                  class=\"button button--primary button--pill button--large button--block button--submit\"
                  type=\"submit\"
                >
                  Sign Up
                </button>
              </div>

              <div class=\"form-group--footer\">
              <span class=\"c-gray\">
                Вече имате акаунт?
                <a href=\"#signin\" class=\"c-secondary t-underline js-block-trigger\">Вход за потребители</a>
              </span>
              </div>
            </div><!-- .form-container -->
            {{ form_end(form_registration) }}
            {# Registration form #}
          {# {% endif %} #}
        </div><!-- .form-login__block -->

        <div class=\"form-login__block js-form-block\" id=\"reset\">
          <form action=\"/\" method=\"post\">
            <div class=\"form-container\">
              <div class=\"form-group\">
                <label for=\"reset-password\">Email</label>
                <input
                  type=\"email\"
                  name=\"reset-password\"
                  id=\"reset-password\"
                  class=\"form-input form-input--pill form-input--border-c-gallery\"
                  placeholder=\"johndoe@gmail.com\"
                  required
                >
              </div><!-- .form-group -->

              <div class=\"form-group--submit\">
                <button
                  class=\"button button--primary button--pill button--large button--block button--submit\"
                  type=\"submit\"
                >
                  Reset Password
                </button>
              </div>

              <div class=\"form-group--footer\">
                <a href=\"#signin\" class=\"c-secondary t-underline js-block-trigger\">Back to Sign in</a>
              </div>
            </div><!-- .form-container -->
          </form><!-- .reset -->
        </div><!-- .form-login__block -->
      </div><!-- .form-login -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container -->
</div><!-- .page-content -->
{% endblock %}", "user/account.html.twig", "/home/vagrant/school-hunter/templates/user/account.html.twig");
    }
}
