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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/addressform/form.htm */
class __TwigTemplate_23f294cc2d250567573106d3e8169953dac8563d8d2b40808935ed97cb2651b1 extends \Twig\Template
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
        // line 1
        if (($context["type"] ?? null)) {
            // line 2
            echo "    ";
            $context["type"] = (($context["type"] ?? null) . "_");
        }
        // line 4
        echo "<div class=\"form-group\">
    <label for=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "company\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Entreprise"]);
        echo "</label>
    <input id=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "company\" type=\"text\" class=\"form-control\"
           value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 7), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "company\">
    <div data-validate-for=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "company\"></div>
</div>
<div class=\"form-group\">
    <label for=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "address_name\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.form.recipient"]);
        echo "</label>
    <input id=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "address_name\" type=\"text\" class=\"form-control\"
           value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
           placeholder=\"";
        // line 14
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.form.recipient_placeholder"]);
        echo "\"
           name=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "address_name\">
    <div data-validate-for=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "address_name\"></div>
</div>
<div class=\"form-group\">
    <label for=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "lines\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.form.address_lines"]);
        echo "</label>
    <textarea id=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "lines\" type=\"text\" name=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "lines\"
              class=\"form-control\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lines", [], "any", false, false, false, 21), "html", null, true);
        echo "</textarea>
    <div data-validate-for=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "lines\"></div>
</div>

<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"form-group\">
            <label for=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "zip\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NPA"]);
        echo "</label>
            <input id=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "zip\" name=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "zip\" type=\"text\" class=\"form-control\"
                   value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zip", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
            <div data-validate-for=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "zip\"></div>
        </div>
    </div>
    <div class=\"col-lg-6\">
        <div class=\"form-group\">
            <label for=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "city\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.form.city"]);
        echo "</label>
            <input id=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "city\" name=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "city\" type=\"text\" class=\"form-control\"
                   value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
            <div data-validate-for=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "city\"></div>
        </div>
    </div>
</div>

<div class=\"";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "useState", [], "any", false, false, false, 44)) ? ("mall-two-fields") : (""));
        echo "\" id=\"countryState\">
    ";
        // line 45
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['type'] = ($context["type"] ?? null)        ;
        $context['__cms_partial_params']['countryId'] = twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country_id", [], "any", false, false, false, 45)        ;
        $context['__cms_partial_params']['stateId'] = twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "state_id", [], "any", false, false, false, 45)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::countrystate")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/addressform/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 46,  173 => 45,  169 => 44,  161 => 39,  157 => 38,  151 => 37,  145 => 36,  137 => 31,  133 => 30,  127 => 29,  121 => 28,  112 => 22,  108 => 21,  102 => 20,  96 => 19,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  68 => 11,  62 => 8,  56 => 7,  52 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/addressform/form.htm", "");
    }
}
