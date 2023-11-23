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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/entries.htm */
class __TwigTemplate_b12998727c369f12350bbd1502f53c1f8ed7471846d188dc60fb4038ff867083 extends \Twig\Template
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
        echo "<div class=\"mall-cart__wrapper\">
    <div class=\"mall-table-overflow\" style=\"overflow-y: auto\">
        <table class=\"mall-cart__table table table-striped\">
            <thead>
            ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/header")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "            </thead>
            <tbody>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['product'] = $context["product"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/entry")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['totals'] = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 12)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/total")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "            ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['discounts'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 13), "appliedDiscounts", [], "any", false, false, false, 13)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/discounts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "            ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['shipping'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 14), "shippingTotal", [], "any", false, false, false, 14)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/shipping")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "            ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['payment'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 15), "paymentTotal", [], "any", false, false, false, 15)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/payment")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "            ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['totals'] = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 16)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/grandtotal")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "            ";
        // line 18
        echo "            </tbody>
        </table>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/entries.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 18,  99 => 17,  93 => 16,  87 => 15,  81 => 14,  75 => 13,  70 => 12,  67 => 11,  61 => 10,  55 => 9,  51 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/entries.htm", "");
    }
}
