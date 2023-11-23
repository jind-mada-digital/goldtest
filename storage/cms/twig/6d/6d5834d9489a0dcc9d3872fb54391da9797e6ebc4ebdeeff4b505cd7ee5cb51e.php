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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/grandtotal.htm */
class __TwigTemplate_b60e2ae4d32d7cdd951031293350e5175ce7bf8b5562759cae82c57e4f36fa34 extends \Twig\Template
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
        echo "<tr class=\"mall-cart__grand-total\">
    <td colspan=\"5\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showShipping", [], "any", false, false, false, 3)) {
            // line 4
            echo "            ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.grand_total"]);
            echo "
        ";
        } else {
            // line 6
            echo "            ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total"]);
            echo "
        ";
        }
        // line 8
        echo "    </td>
    <td class=\"text-right\">
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showShipping", [], "any", false, false, false, 10)) {
            // line 11
            echo "            ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "totalPostTaxes", [], "any", false, false, false, 11)]);
            echo "
        ";
        } else {
            // line 13
            echo "            ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "productPostTaxes", [], "any", false, false, false, 13)]);
            echo "
        ";
        }
        // line 15
        echo "    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/grandtotal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  67 => 13,  61 => 11,  59 => 10,  55 => 8,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/grandtotal.htm", "");
    }
}
