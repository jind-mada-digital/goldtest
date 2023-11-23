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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/billingaddressselector/address.htm */
class __TwigTemplate_640772b3a2211c74c82e0b583138e0c331609070f6d24e8aafdaf377883c6f59 extends \Twig\Template
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
        echo "<div class=\"mall-address\">
    <p>
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 3)) {
            // line 4
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 4), "html", null, true);
            echo "<br/>
        ";
        }
        // line 6
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "<br/>
        ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lines", [], "any", false, false, false, 7), "html", null, true);
        echo " <br/>
        ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zip", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 8), "html", null, true);
        echo "<br/>
        ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "state_id", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 9), "code", [], "any", false, false, false, 9) != "CH"))) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "state", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
            echo " <br/>
        ";
        }
        // line 12
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "
    </p>

    ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "goldtest_is_school_address", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <p class=\"mall-address__actions\">
            <a href=\"javascript:;\" class=\"js-change-address btn btn-light\" data-type=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "type", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                ";
            // line 18
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Modifier"]);
            echo "
            </a>
        </p>
    ";
        }
        // line 22
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/billingaddressselector/address.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  88 => 18,  84 => 17,  81 => 16,  79 => 15,  72 => 12,  66 => 10,  64 => 9,  58 => 8,  54 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/billingaddressselector/address.htm", "");
    }
}
