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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/total.htm */
class __TwigTemplate_5f99f347550fd4d681e1ab613d55dc459dc9b8c198aab0b9d8b0ed1fe31d8f15 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showShipping", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            // line 4
            echo "    <tr class=\"mall-cart__total\">
        <td colspan=\"5\">
            ";
            // line 6
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total"]);
            echo "
        </td>
        <td class=\"text-right\">
            ";
            // line 9
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "productPostTaxes", [], "any", false, false, false, 9)]);
            echo "
        </td>
    </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/total.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/total.htm", "");
    }
}
