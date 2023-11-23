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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/addressform/countrystate.htm */
class __TwigTemplate_104a3d35a30074573ab4db65c753e163156f698318075b0351e2400bb0b3e7d6 extends \Twig\Template
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
        $context["countryId"] = (((isset($context["countryId"]) || array_key_exists("countryId", $context))) ? (_twig_default_filter(($context["countryId"] ?? null), call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "country_id"]))) : (call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "country_id"])));
        // line 2
        $context["stateId"] = (((isset($context["stateId"]) || array_key_exists("stateId", $context))) ? (_twig_default_filter(($context["stateId"] ?? null), call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "state_id"]))) : (call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "state_id"])));
        // line 3
        echo "
";
        // line 5
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "countries", [], "any", false, false, false, 5)) == 1)) {
            // line 6
            echo "    ";
            $context["countryId"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "countries", [], "any", false, false, false, 6))) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        }
        // line 8
        echo "<div class=\"row\">
    <div class=\"col-lg-6\">
        ";
        // line 10
        $context["id"] = (($context["type"] ?? null) . "country_id");
        // line 11
        echo "        <div class=\"form-group\">
            <label for=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.form.country"]);
        echo "</label>
            ";
        // line 13
        echo RainLab\Location\Models\Country::formSelect(($context["id"] ?? null), ($context["countryId"] ?? null), ["id" =>         // line 14
($context["id"] ?? null), "class" => "form-control", "emptyOption" => call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.select"]), "data-request" => "onInit", "data-request-update" => [(        // line 19
($context["__SELF__"] ?? null) . "::countrystate") => "#countryState"]]);
        // line 21
        echo "
            <div data-validate-for=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "country_id\"></div>
        </div>
    </div>

    <div class=\"col-lg-6\">
        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "useState", [], "any", false, false, false, 27)) {
            // line 28
            echo "            ";
            $context["id"] = (($context["type"] ?? null) . "state_id");
            // line 29
            echo "            <div class=\"form-group\">
                <label for=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.form.state"]);
            echo "</label>
                ";
            // line 31
            echo RainLab\Location\Models\State::formSelect(($context["id"] ?? null), ($context["countryId"] ?? null), ($context["stateId"] ?? null), ["class" => "form-control", "emptyOption" => call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.select"]), "id" =>             // line 34
($context["id"] ?? null)]);
            // line 35
            echo "
                <div data-validate-for=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"></div>
            </div>
        ";
        }
        // line 39
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/addressform/countrystate.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  100 => 36,  97 => 35,  95 => 34,  94 => 31,  88 => 30,  85 => 29,  82 => 28,  80 => 27,  72 => 22,  69 => 21,  67 => 19,  66 => 14,  65 => 13,  59 => 12,  56 => 11,  54 => 10,  50 => 8,  46 => 6,  44 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/addressform/countrystate.htm", "");
    }
}
