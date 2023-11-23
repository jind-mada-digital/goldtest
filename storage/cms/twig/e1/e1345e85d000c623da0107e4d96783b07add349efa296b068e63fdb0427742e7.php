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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/countrystate.htm */
class __TwigTemplate_07a5312a3dd6ad79d1dfd7c642119a8a38226185f003b1b54b5c52f14b0340c5 extends \Twig\Template
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
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "type"]))) : (call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "type"])));
        // line 2
        $context["countryId"] = call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", (($context["type"] ?? null) . "_country_id")]);
        // line 3
        $context["stateId"] = call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", (($context["type"] ?? null) . "_state_id")]);
        // line 4
        echo "
";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "countries", [], "any", false, false, false, 6)) == 1)) {
            // line 7
            echo "    ";
            $context["countryId"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "countries", [], "any", false, false, false, 7))) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        }
        // line 9
        echo "
";
        // line 10
        $context["id"] = (($context["type"] ?? null) . "_country_id");
        // line 11
        echo "<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"form-group\">
            <label for=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pays"]);
        echo "</label>
            ";
        // line 15
        echo RainLab\Location\Models\Country::formSelect(($context["id"] ?? null), ($context["countryId"] ?? null), ["id" =>         // line 16
($context["id"] ?? null), "class" => "form-control", "emptyOption" => call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.select"]), "data-request" => "onInit", "data-request-data" => (("type: '" .         // line 20
($context["type"] ?? null)) . "'"), "data-request-update" => [(        // line 22
($context["__SELF__"] ?? null) . "::countrystate") => ("#countryState_" . ($context["type"] ?? null))]]);
        // line 24
        echo "
            <div data-validate-for=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"></div>
        </div>
    </div>
    <div class=\"col-lg-6\">

        ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "useState", [], "any", false, false, false, 30)) {
            // line 31
            echo "            ";
            $context["id"] = (($context["type"] ?? null) . "_state_id");
            // line 32
            echo "            <div class=\"form-group\">
                <label for=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.form.state"]);
            echo "</label>
                ";
            // line 34
            echo RainLab\Location\Models\State::formSelect(($context["id"] ?? null), ($context["countryId"] ?? null), ($context["stateId"] ?? null), ["id" =>             // line 35
($context["id"] ?? null), "class" => "form-control", "emptyOption" => call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.select"])]);
            // line 38
            echo "
                <div data-validate-for=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"></div>
            </div>
        ";
        }
        // line 42
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/countrystate.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  104 => 39,  101 => 38,  99 => 35,  98 => 34,  92 => 33,  89 => 32,  86 => 31,  84 => 30,  76 => 25,  73 => 24,  71 => 22,  70 => 20,  69 => 16,  68 => 15,  62 => 14,  57 => 11,  55 => 10,  52 => 9,  48 => 7,  46 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/countrystate.htm", "");
    }
}
