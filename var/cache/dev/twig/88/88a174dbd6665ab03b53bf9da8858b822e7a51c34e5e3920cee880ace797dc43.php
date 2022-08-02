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

/* university/degrees.html.twig */
class __TwigTemplate_139ea6f0ba81d8af235319739d3832f739305a6870d6bfce85accca4fb119735 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'degrees' => [$this, 'block_degrees'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "university/degrees.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "university/degrees.html.twig"));

        // line 1
        $this->displayBlock('degrees', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_degrees($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "degrees"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "degrees"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["major"]) || array_key_exists("major", $context) ? $context["major"] : (function () { throw new RuntimeError('Variable "major" does not exist.', 3, $this->source); })()), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 3, $this->source); })()), [], "array", false, false, false, 3) == "Администрация и управление")) {
            // line 4
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 4, $this->source); })()), "2588_bachelors", [], "array", false, false, false, 4))) {
                // line 5
                echo "            ";
                // line 6
                echo "            <subaccordion title=\"";
                echo "Бакалавър";
                echo "\">
            ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 7, $this->source); })()), "2588_bachelors", [], "array", false, false, false, 7));
                foreach ($context['_seq'] as $context["key"] => $context["degree"]) {
                    // line 8
                    echo "                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "name", [], "array", false, false, false, 9), "html", null, true);
                    echo "</h4>
                <p class=\"c-gray listing-menu__item-gradients\">";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "eduForms", [], "array", false, false, false, 10), "html", null, true);
                    echo "</p>
                </p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['degree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "            </subaccordion>
        ";
            }
            // line 15
            echo "
        ";
            // line 16
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 16, $this->source); })()), "2588_masters", [], "array", false, false, false, 16))) {
                // line 17
                echo "            ";
                // line 18
                echo "            <subaccordion title=\"";
                echo "Магистър";
                echo "\">
            ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 19, $this->source); })()), "2588_masters", [], "array", false, false, false, 19));
                foreach ($context['_seq'] as $context["key"] => $context["degree"]) {
                    // line 20
                    echo "                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "name", [], "array", false, false, false, 21), "html", null, true);
                    echo "</h4>
                <p class=\"c-gray listing-menu__item-gradients\">";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "eduForms", [], "array", false, false, false, 22), "html", null, true);
                    echo "</p>
                </p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['degree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            </subaccordion>
        ";
            }
            // line 27
            echo "
        ";
            // line 28
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 28, $this->source); })()), "2588_phd", [], "array", false, false, false, 28))) {
                // line 29
                echo "            ";
                // line 30
                echo "            <subaccordion title=\"";
                echo "Доктор";
                echo "\">
                ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 31, $this->source); })()), "2588_phd", [], "array", false, false, false, 31));
                foreach ($context['_seq'] as $context["key"] => $context["degree"]) {
                    // line 32
                    echo "                <p class=\"pb-5\">
                    <h4 class=\"listing-menu__item-name\">";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "name", [], "array", false, false, false, 33), "html", null, true);
                    echo "</h4>
                    <p class=\"c-gray listing-menu__item-gradients\">";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "eduForms", [], "array", false, false, false, 34), "html", null, true);
                    echo "</p>
                </p>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['degree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            </subaccordion>
        ";
            }
            // line 39
            echo "    ";
        }
        echo "    

    ";
        // line 42
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["major"]) || array_key_exists("major", $context) ? $context["major"] : (function () { throw new RuntimeError('Variable "major" does not exist.', 42, $this->source); })()), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 42, $this->source); })()), [], "array", false, false, false, 42) == "Икономика")) {
            // line 43
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 43, $this->source); })()), "2592_bachelors", [], "array", false, false, false, 43))) {
                // line 44
                echo "            ";
                // line 45
                echo "            <subaccordion title=\"";
                echo "Бакалавър";
                echo "\">
            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 46, $this->source); })()), "2592_bachelors", [], "array", false, false, false, 46));
                foreach ($context['_seq'] as $context["key"] => $context["degree"]) {
                    // line 47
                    echo "                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "name", [], "array", false, false, false, 48), "html", null, true);
                    echo "</h4>
                <p class=\"c-gray listing-menu__item-gradients\">";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "eduForms", [], "array", false, false, false, 49), "html", null, true);
                    echo "</p>
                </p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['degree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            </subaccordion>
        ";
            }
            // line 54
            echo "
        ";
            // line 55
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 55, $this->source); })()), "2592_masters", [], "array", false, false, false, 55))) {
                // line 56
                echo "            ";
                // line 57
                echo "            <subaccordion title=\"";
                echo "Магистър";
                echo "\">
            ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 58, $this->source); })()), "2592_masters", [], "array", false, false, false, 58));
                foreach ($context['_seq'] as $context["key"] => $context["degree"]) {
                    // line 59
                    echo "                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "name", [], "array", false, false, false, 60), "html", null, true);
                    echo "</h4>
                <p class=\"c-gray listing-menu__item-gradients\">";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "eduForms", [], "array", false, false, false, 61), "html", null, true);
                    echo "</p>
                </p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['degree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "            </subaccordion>
        ";
            }
            // line 66
            echo "
        ";
            // line 67
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 67, $this->source); })()), "2592_phd", [], "array", false, false, false, 67))) {
                // line 68
                echo "            ";
                // line 69
                echo "            <subaccordion title=\"";
                echo "Доктор";
                echo "\">
                ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 70, $this->source); })()), "2592_phd", [], "array", false, false, false, 70));
                foreach ($context['_seq'] as $context["key"] => $context["degree"]) {
                    // line 71
                    echo "                <p class=\"pb-5\">
                    <h4 class=\"listing-menu__item-name\">";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "name", [], "array", false, false, false, 72), "html", null, true);
                    echo "</h4>
                    <p class=\"c-gray listing-menu__item-gradients\">";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "eduForms", [], "array", false, false, false, 73), "html", null, true);
                    echo "</p>
                </p>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['degree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "            </subaccordion>
        ";
            }
            // line 78
            echo "    ";
        }
        // line 79
        echo "
   ";
        // line 81
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["major"]) || array_key_exists("major", $context) ? $context["major"] : (function () { throw new RuntimeError('Variable "major" does not exist.', 81, $this->source); })()), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 81, $this->source); })()), [], "array", false, false, false, 81) == "История и археология")) {
            // line 82
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 82, $this->source); })()), "2531_bachelors", [], "array", false, false, false, 82))) {
                // line 83
                echo "            ";
                // line 84
                echo "            <subaccordion title=\"";
                echo "Бакалавър";
                echo "\">
            ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 85, $this->source); })()), "2531_bachelors", [], "array", false, false, false, 85));
                foreach ($context['_seq'] as $context["key"] => $context["degree"]) {
                    // line 86
                    echo "                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "name", [], "array", false, false, false, 87), "html", null, true);
                    echo "</h4>
                <p class=\"c-gray listing-menu__item-gradients\">";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "eduForms", [], "array", false, false, false, 88), "html", null, true);
                    echo "</p>
                </p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['degree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "            </subaccordion>
        ";
            }
            // line 93
            echo "
        ";
            // line 94
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 94, $this->source); })()), "2531_masters", [], "array", false, false, false, 94))) {
                // line 95
                echo "            ";
                // line 96
                echo "            <subaccordion title=\"";
                echo "Магистър";
                echo "\">
            ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 97, $this->source); })()), "2531_masters", [], "array", false, false, false, 97));
                foreach ($context['_seq'] as $context["key"] => $context["degree"]) {
                    // line 98
                    echo "                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "name", [], "array", false, false, false, 99), "html", null, true);
                    echo "</h4>
                <p class=\"c-gray listing-menu__item-gradients\">";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "eduForms", [], "array", false, false, false, 100), "html", null, true);
                    echo "</p>
                </p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['degree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "            </subaccordion>
        ";
            }
            // line 105
            echo "
        ";
            // line 106
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 106, $this->source); })()), "2531_phd", [], "array", false, false, false, 106))) {
                // line 107
                echo "            ";
                // line 108
                echo "            <subaccordion title=\"";
                echo "Доктор";
                echo "\">
                ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["degrees"]) || array_key_exists("degrees", $context) ? $context["degrees"] : (function () { throw new RuntimeError('Variable "degrees" does not exist.', 109, $this->source); })()), "2531_phd", [], "array", false, false, false, 109));
                foreach ($context['_seq'] as $context["key"] => $context["degree"]) {
                    // line 110
                    echo "                <p class=\"pb-5\">
                    <h4 class=\"listing-menu__item-name\">";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "name", [], "array", false, false, false, 111), "html", null, true);
                    echo "</h4>
                    <p class=\"c-gray listing-menu__item-gradients\">";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["degree"], "eduForms", [], "array", false, false, false, 112), "html", null, true);
                    echo "</p>
                </p>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['degree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "            </subaccordion>
        ";
            }
            // line 117
            echo "    ";
        }
        // line 118
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "university/degrees.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  407 => 118,  404 => 117,  400 => 115,  391 => 112,  387 => 111,  384 => 110,  380 => 109,  375 => 108,  373 => 107,  371 => 106,  368 => 105,  364 => 103,  355 => 100,  351 => 99,  348 => 98,  344 => 97,  339 => 96,  337 => 95,  335 => 94,  332 => 93,  328 => 91,  319 => 88,  315 => 87,  312 => 86,  308 => 85,  303 => 84,  301 => 83,  298 => 82,  295 => 81,  292 => 79,  289 => 78,  285 => 76,  276 => 73,  272 => 72,  269 => 71,  265 => 70,  260 => 69,  258 => 68,  256 => 67,  253 => 66,  249 => 64,  240 => 61,  236 => 60,  233 => 59,  229 => 58,  224 => 57,  222 => 56,  220 => 55,  217 => 54,  213 => 52,  204 => 49,  200 => 48,  197 => 47,  193 => 46,  188 => 45,  186 => 44,  183 => 43,  180 => 42,  174 => 39,  170 => 37,  161 => 34,  157 => 33,  154 => 32,  150 => 31,  145 => 30,  143 => 29,  141 => 28,  138 => 27,  134 => 25,  125 => 22,  121 => 21,  118 => 20,  114 => 19,  109 => 18,  107 => 17,  105 => 16,  102 => 15,  98 => 13,  89 => 10,  85 => 9,  82 => 8,  78 => 7,  73 => 6,  71 => 5,  68 => 4,  65 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block degrees %}
    {# 2588 #}
    {% if major[key] == 'Администрация и управление' %}
        {% if (degrees['2588_bachelors'] is not empty) %}
            {# subaccordion #}
            <subaccordion title=\"{{ 'Бакалавър' }}\">
            {% for key, degree in degrees['2588_bachelors'] %}
                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">{{ degree['name'] }}</h4>
                <p class=\"c-gray listing-menu__item-gradients\">{{ degree['eduForms'] }}</p>
                </p>
            {% endfor %}
            </subaccordion>
        {% endif %}

        {% if (degrees['2588_masters'] is not empty) %}
            {# subaccordion #}
            <subaccordion title=\"{{ 'Магистър' }}\">
            {% for key, degree in degrees['2588_masters'] %}
                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">{{ degree['name'] }}</h4>
                <p class=\"c-gray listing-menu__item-gradients\">{{ degree['eduForms'] }}</p>
                </p>
            {% endfor %}
            </subaccordion>
        {% endif %}

        {% if (degrees['2588_phd'] is not empty) %}
            {# subaccordion #}
            <subaccordion title=\"{{ 'Доктор' }}\">
                {% for key, degree in degrees['2588_phd'] %}
                <p class=\"pb-5\">
                    <h4 class=\"listing-menu__item-name\">{{ degree['name'] }}</h4>
                    <p class=\"c-gray listing-menu__item-gradients\">{{ degree['eduForms'] }}</p>
                </p>
                {% endfor %}
            </subaccordion>
        {% endif %}
    {% endif %}    

    {# 2592 #}
    {% if major[key] == 'Икономика' %}
        {% if (degrees['2592_bachelors'] is not empty) %}
            {# subaccordion #}
            <subaccordion title=\"{{ 'Бакалавър' }}\">
            {% for key, degree in degrees['2592_bachelors'] %}
                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">{{ degree['name'] }}</h4>
                <p class=\"c-gray listing-menu__item-gradients\">{{ degree['eduForms'] }}</p>
                </p>
            {% endfor %}
            </subaccordion>
        {% endif %}

        {% if (degrees['2592_masters'] is not empty) %}
            {# subaccordion #}
            <subaccordion title=\"{{ 'Магистър' }}\">
            {% for key, degree in degrees['2592_masters'] %}
                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">{{ degree['name'] }}</h4>
                <p class=\"c-gray listing-menu__item-gradients\">{{ degree['eduForms'] }}</p>
                </p>
            {% endfor %}
            </subaccordion>
        {% endif %}

        {% if (degrees['2592_phd'] is not empty) %}
            {# subaccordion #}
            <subaccordion title=\"{{ 'Доктор' }}\">
                {% for key, degree in degrees['2592_phd'] %}
                <p class=\"pb-5\">
                    <h4 class=\"listing-menu__item-name\">{{ degree['name'] }}</h4>
                    <p class=\"c-gray listing-menu__item-gradients\">{{ degree['eduForms'] }}</p>
                </p>
                {% endfor %}
            </subaccordion>
        {% endif %}
    {% endif %}

   {# 2531 #}
    {% if major[key] == 'История и археология' %}
        {% if (degrees['2531_bachelors'] is not empty) %}
            {# subaccordion #}
            <subaccordion title=\"{{ 'Бакалавър' }}\">
            {% for key, degree in degrees['2531_bachelors'] %}
                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">{{ degree['name'] }}</h4>
                <p class=\"c-gray listing-menu__item-gradients\">{{ degree['eduForms'] }}</p>
                </p>
            {% endfor %}
            </subaccordion>
        {% endif %}

        {% if (degrees['2531_masters'] is not empty) %}
            {# subaccordion #}
            <subaccordion title=\"{{ 'Магистър' }}\">
            {% for key, degree in degrees['2531_masters'] %}
                <p class=\"pb-5\">
                <h4 class=\"listing-menu__item-name\">{{ degree['name'] }}</h4>
                <p class=\"c-gray listing-menu__item-gradients\">{{ degree['eduForms'] }}</p>
                </p>
            {% endfor %}
            </subaccordion>
        {% endif %}

        {% if (degrees['2531_phd'] is not empty) %}
            {# subaccordion #}
            <subaccordion title=\"{{ 'Доктор' }}\">
                {% for key, degree in degrees['2531_phd'] %}
                <p class=\"pb-5\">
                    <h4 class=\"listing-menu__item-name\">{{ degree['name'] }}</h4>
                    <p class=\"c-gray listing-menu__item-gradients\">{{ degree['eduForms'] }}</p>
                </p>
                {% endfor %}
            </subaccordion>
        {% endif %}
    {% endif %}
    
{% endblock %}", "university/degrees.html.twig", "/home/vagrant/school-hunter/templates/university/degrees.html.twig");
    }
}
