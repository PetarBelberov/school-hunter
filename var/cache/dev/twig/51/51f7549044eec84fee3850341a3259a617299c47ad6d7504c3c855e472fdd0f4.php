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

/* @Httplug/stack.html.twig */
class __TwigTemplate_76bad13350fd7a2570a51b3e506caf563d2d75c7ff4a75ddb9a213d7ddcb2f5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        // line 1
        echo "<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 1, $this->source); })()), "clientSlug", [], "any", false, false, false, 1), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "-details\">
    <div>
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 3, $this->source); })()), "failed", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <span class=\"httplug-stack-failed\">✘</span>
        ";
        } else {
            // line 6
            echo "            <span class=\"httplug-stack-success\">✔</span>
        ";
        }
        // line 8
        echo "        <span class=\"label httplug-method httplug-method-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 8, $this->source); })()), "requestMethod", [], "any", false, false, false, 8)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 8, $this->source); })()), "requestMethod", [], "any", false, false, false, 8), "html", null, true);
        echo "</span>
    </div>
    ";
        // line 10
        ob_start();
        // line 11
        echo "        <div class=\"label httplug-stack-header-target\">
            <span class=\"httplug-scheme\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 12, $this->source); })()), "requestScheme", [], "any", false, false, false, 12), "html", null, true);
        echo "://</span>
            <span class=\"httplug-host\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 13, $this->source); })()), "requestHost", [], "any", false, false, false, 13), "html", null, true);
        echo "</span>
            ";
        // line 14
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 14, $this->source); })()), "requestPort", [], "any", false, false, false, 14), [0 => null, 1 => 80, 2 => 443])) {
            // line 15
            echo "                <span class=\"httplug-port\">:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 15, $this->source); })()), "requestPort", [], "any", false, false, false, 15), "html", null, true);
            echo "</span>
            ";
        }
        // line 17
        echo "            <span class=\"httplug-target\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 17, $this->source); })()), "requestTarget", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>
        </div>
    ";
        $___internal_94fd359ec2cb1f0da8a99e6d8f47787695f909699449054b9008a72f406f0b6a_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo twig_spaceless($___internal_94fd359ec2cb1f0da8a99e6d8f47787695f909699449054b9008a72f406f0b6a_);
        // line 20
        echo "    <div>
        <span class=\"label httplug-duration\">";
        // line 21
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 21, $this->source); })()), "duration", [], "any", false, false, false, 21)), "html", null, true);
        echo " ms</span>
        ";
        // line 22
        if (((twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 22, $this->source); })()), "responseCode", [], "any", false, false, false, 22) >= 400) && (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 22, $this->source); })()), "responseCode", [], "any", false, false, false, 22) <= 599))) {
            // line 23
            echo "            <span class=\"label status-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 23, $this->source); })()), "responseCode", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
        ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 24, $this->source); })()), "responseCode", [], "any", false, false, false, 24) >= 300) && (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 24, $this->source); })()), "responseCode", [], "any", false, false, false, 24) <= 399))) {
            // line 25
            echo "            <span class=\"label status-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 25, $this->source); })()), "responseCode", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 27
            echo "            <span class=\"label status-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 27, $this->source); })()), "responseCode", [], "any", false, false, false, 27), "html", null, true);
            echo "</span>
        ";
        }
        // line 29
        echo "    </div>
</div>
<div id=\"httplug-";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 31, $this->source); })()), "clientSlug", [], "any", false, false, false, 31), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 34, $this->source); })()), "curlCommand", [], "any", false, false, false, 34), "html", null, true);
        echo "\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 37, $this->source); })()), "clientSlug", [], "any", false, false, false, 37), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 38, $this->source); })()), "clientSlug", [], "any", false, false, false, 38), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            ";
        // line 42
        echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 42, $this->source); })()), "clientRequest", [], "any", false, false, false, 42), "header" => "Request"], false);
        echo "
        </div>
        <div class=\"httplug-message card\">
            ";
        // line 45
        echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 45, $this->source); })()), "clientResponse", [], "any", false, false, false, 45), "header" => "Response"], false);
        echo "
        </div>
    </div>
    ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 48, $this->source); })()), "profiles", [], "any", false, false, false, 48)) {
            // line 49
            echo "        <div id=\"httplug-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 49, $this->source); })()), "clientSlug", [], "any", false, false, false, 49), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "-stack\" class=\"httplug-hidden card\">
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 50, $this->source); })()), "profiles", [], "any", false, false, false, 50));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 51
                echo "                <h3 class=\"httplug-plugin-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "plugin", [], "any", false, false, false, 51), "html", null, true);
                echo "</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        ";
                // line 54
                echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, $context["profile"], "request", [], "any", false, false, false, 54), "header" => "Request"], false);
                echo "
                    </div>
                    <div class=\"httplug-message\">
                        ";
                // line 57
                echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, $context["profile"], "response", [], "any", false, false, false, 57), "header" => "Response"], false);
                echo "
                    </div>
                </div>
                ";
                // line 60
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                    <hr />
                ";
                }
                // line 63
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "</div>
";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "childrenStacks", [0 => (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 67, $this->source); })())], "method", false, false, false, 67));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 68
            echo "    <div class=\"httplug-stack\">
        ";
            // line 69
            echo twig_include($this->env, $context, "@Httplug/stack.html.twig", ["collector" =>             // line 70
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "client" =>             // line 71
(isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 71, $this->source); })()), "stack" =>             // line 72
$context["child"], "id" => ((            // line 73
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 73, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73))], false);
            // line 74
            echo "
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/stack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 74,  268 => 73,  267 => 72,  266 => 71,  265 => 70,  264 => 69,  261 => 68,  244 => 67,  241 => 66,  237 => 64,  223 => 63,  219 => 61,  217 => 60,  211 => 57,  205 => 54,  198 => 51,  181 => 50,  174 => 49,  172 => 48,  166 => 45,  160 => 42,  151 => 38,  145 => 37,  139 => 34,  131 => 31,  127 => 29,  121 => 27,  115 => 25,  113 => 24,  108 => 23,  106 => 22,  102 => 21,  99 => 20,  97 => 10,  90 => 17,  84 => 15,  82 => 14,  78 => 13,  74 => 12,  71 => 11,  69 => 10,  61 => 8,  57 => 6,  53 => 4,  51 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-details\">
    <div>
        {% if stack.failed %}
            <span class=\"httplug-stack-failed\">✘</span>
        {% else %}
            <span class=\"httplug-stack-success\">✔</span>
        {% endif %}
        <span class=\"label httplug-method httplug-method-{{ stack.requestMethod|lower }}\">{{ stack.requestMethod }}</span>
    </div>
    {% apply spaceless %}
        <div class=\"label httplug-stack-header-target\">
            <span class=\"httplug-scheme\">{{ stack.requestScheme }}://</span>
            <span class=\"httplug-host\">{{ stack.requestHost }}</span>
            {% if stack.requestPort not in [null, 80, 443] %}
                <span class=\"httplug-port\">:{{ stack.requestPort }}</span>
            {% endif %}
            <span class=\"httplug-target\">{{ stack.requestTarget }}</span>
        </div>
    {% endapply %}
    <div>
        <span class=\"label httplug-duration\">{{ stack.duration|number_format }} ms</span>
        {% if stack.responseCode >= 400 and stack.responseCode <= 599 %}
            <span class=\"label status-error\">{{ stack.responseCode }}</span>
        {% elseif stack.responseCode >= 300 and stack.responseCode <= 399 %}
            <span class=\"label status-warning\">{{ stack.responseCode }}</span>
        {% else %}
            <span class=\"label status-success\">{{ stack.responseCode }}</span>
        {% endif %}
    </div>
</div>
<div id=\"httplug-{{ stack.clientSlug }}-{{ id }}-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"{{ stack.curlCommand }}\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            {{ include('@Httplug/http_message.html.twig', { data: stack.clientRequest, header: 'Request' }, with_context=false) }}
        </div>
        <div class=\"httplug-message card\">
            {{ include('@Httplug/http_message.html.twig', { data: stack.clientResponse, header: 'Response' }, with_context=false) }}
        </div>
    </div>
    {% if stack.profiles %}
        <div id=\"httplug-{{ stack.clientSlug }}-{{ id }}-stack\" class=\"httplug-hidden card\">
            {% for profile in stack.profiles %}
                <h3 class=\"httplug-plugin-name\">{{ profile.plugin }}</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        {{ include('@Httplug/http_message.html.twig', { data: profile.request, header: 'Request' }, with_context=false) }}
                    </div>
                    <div class=\"httplug-message\">
                        {{ include('@Httplug/http_message.html.twig', { data: profile.response, header: 'Response' }, with_context=false) }}
                    </div>
                </div>
                {% if not loop.last %}
                    <hr />
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
</div>
{% for child in collector.childrenStacks(stack) %}
    <div class=\"httplug-stack\">
        {{ include('@Httplug/stack.html.twig', {
            'collector': collector,
            'client': client,
            'stack': child,
            'id': id ~ '-' ~ loop.index
        }, with_context=false) }}
    </div>
{% endfor %}
", "@Httplug/stack.html.twig", "/home/vagrant/school-hunter/vendor/php-http/httplug-bundle/src/Resources/views/stack.html.twig");
    }
}
