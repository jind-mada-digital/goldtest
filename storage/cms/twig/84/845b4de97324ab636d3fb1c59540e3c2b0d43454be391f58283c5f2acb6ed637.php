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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/paymentmethod.htm */
class __TwigTemplate_1d797f0154e67282cca19e6c49e130fbed45e3cc106742de13f527d3258b2a21 extends \Twig\Template
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
        echo "<div class=\"mall-cart-summary__method-logo\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 2), "payment_method", [], "any", false, false, false, 2), "logo", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 3), "payment_method", [], "any", false, false, false, 3), "logo", [], "any", false, false, false, 3), "thumb", [0 => 150, 1 => "auto"], "method", false, false, false, 3), "html", null, true);
            echo "\" alt=\"\"/>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 5), "payment_method", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</div>

<p class=\"mall-cart-summary__action\">
    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "stepUrl", [0 => "payment", 1 => ["via" => "confirm"]], "method", false, false, false, 10), "html", null, true);
        echo "\" class=\"btn btn-light\">
        ";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Modifier"]);
        echo "
    </a>
</p>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/paymentmethod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  54 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/paymentmethod.htm", "");
    }
}
