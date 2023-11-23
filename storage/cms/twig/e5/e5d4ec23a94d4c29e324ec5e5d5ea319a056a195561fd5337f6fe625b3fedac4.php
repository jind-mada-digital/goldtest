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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/shippingmethod.htm */
class __TwigTemplate_c7f8d84b6e44de5b83b4ac629e52437f870825179f52d40773c42ab040cdf45d extends \Twig\Template
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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 2), "is_virtual", [], "any", false, false, false, 2)) {
            // line 3
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 3), "shipping_method", [], "any", false, false, false, 3), "logo", [], "any", false, false, false, 3)) {
                // line 4
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 4), "shipping_method", [], "any", false, false, false, 4), "logo", [], "any", false, false, false, 4), "thumb", [0 => 150, 1 => "auto"], "method", false, false, false, 4), "html", null, true);
                echo "\" alt=\"\"/>
        ";
            } else {
                // line 6
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 6), "shipping_method", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
                echo "
        ";
            }
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        <p>";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.shipping_method.not_required_name"]);
            echo "</p>
    ";
        }
        // line 11
        echo "</div>

";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 13), "is_virtual", [], "any", false, false, false, 13)) {
            // line 14
            echo "    <p class=\"mall-cart-summary__action\">
        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "stepUrl", [0 => "shipping"], "method", false, false, false, 15), "html", null, true);
            echo "\" class=\"btn btn-light\">
            ";
            // line 16
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Modifier"]);
            echo "
        </a>
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/shippingmethod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  75 => 15,  72 => 14,  70 => 13,  66 => 11,  60 => 9,  57 => 8,  51 => 6,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/shippingmethod.htm", "");
    }
}
