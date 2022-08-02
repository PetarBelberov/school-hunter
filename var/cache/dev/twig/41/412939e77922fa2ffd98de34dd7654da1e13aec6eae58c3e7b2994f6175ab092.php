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

/* security/login.html.twig */
class __TwigTemplate_2e749efcc35d97d43550c0c11b2634ec9f2e0572954ebe9e1d25371bd33cfc43 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

  <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "facebook"]);
        echo "\">
    <span>Login with Facebook</span>
  </a>
  <br>
  <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "google"]);
        echo "\">
    <span>Login with Google</span>
  </a>

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
        // line 51
        echo "          <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
            ";
        // line 52
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "              <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageKey", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageData", [], "any", false, false, false, 53), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 55
        echo "
            ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "              <div class=\"mb-3\">
                  You are logged in as ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "username", [], "any", false, false, false, 58), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Logout</a>
              </div>
            ";
        }
        // line 61
        echo "          ";
        // line 62
        echo "            <div class=\"form-container\">
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
        // line 100
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 100, $this->source); })()), "html", null, true);
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
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "request", [], "any", false, false, false, 128), "get", [0 => "redirect_to"], "method", false, false, false, 128), "html", null, true);
        echo "\"/>
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 129
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
              Don't have an account? <a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
        echo "\" class=\"c-secondary t-underline js-block-trigger\">Register</a>
            </span>
              </div>
            </div><!-- .form-container -->
          </form><!-- .signin -->
          ";
        // line 148
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 148,  293 => 142,  277 => 129,  273 => 128,  242 => 100,  202 => 62,  200 => 61,  192 => 58,  189 => 57,  187 => 56,  184 => 55,  178 => 53,  176 => 52,  171 => 51,  137 => 19,  130 => 15,  125 => 12,  116 => 10,  112 => 9,  102 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
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

  <a href=\"{{ path('hwi_oauth_service_redirect', {'service': 'facebook' }) }}\">
    <span>Login with Facebook</span>
  </a>
  <br>
  <a href=\"{{ path('hwi_oauth_service_redirect', {'service': 'google' }) }}\">
    <span>Login with Google</span>
  </a>

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
            {% if error %}
              <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            {% if app.user %}
              <div class=\"mb-3\">
                  You are logged in as {{ app.user.username }}, <a href=\"{{ path('security_logout') }}\">Logout</a>
              </div>
            {% endif %}
          {# <form action=\"/\" method=\"post\"> #}
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
              Don't have an account? <a href=\"{{ path('user_registration') }}\" class=\"c-secondary t-underline js-block-trigger\">Register</a>
            </span>
              </div>
            </div><!-- .form-container -->
          </form><!-- .signin -->
          {# Login form #}
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
{% endblock %}", "security/login.html.twig", "/home/vagrant/school-hunter/templates/security/login.html.twig");
    }
}
