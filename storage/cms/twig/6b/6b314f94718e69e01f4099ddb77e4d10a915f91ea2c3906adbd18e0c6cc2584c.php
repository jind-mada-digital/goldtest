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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/cart.htm */
class __TwigTemplate_d2a20bfc89a033c63e9a42f561000b947ac8c4df7e31fc36b65034991d6bb200 extends \Twig\Template
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
        echo "<form data-request=\"onAddToCart\"
      data-request-success=\"data.added && \$.publish('mall.cart.productAdded', data)\"
      data-request-validate
      data-request-flash
      id=\"mall-add-to-cart\">

    <div class=\"mall-product__price\">
        ";
        // line 8
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['item'] = ($context["item"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::price")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "    </div>

    <div class=\"mall-product__tax-info\">
        ";
        // line 12
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['item'] = ($context["item"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::tax-info")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    </div>

    ";
        // line 15
        if (((twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "count", [], "any", false, false, false, 15) > 0) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "inventory_management_method", [], "any", false, false, false, 15) == "variant"))) {
            // line 16
            echo "        <div class=\"mall-product__variant-properties\">
            ";
            // line 17
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "get", [0 => 7], "method", false, false, false, 17)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::property")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "get", [0 => 4], "method", false, false, false, 18)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::property")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "get", [0 => 5], "method", false, false, false, 19)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::property")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "        </div>
    ";
        }
        // line 22
        echo "
    <div class=\"mall-product__add-to-cart\">
        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "allow_out_of_stock_purchases", [], "any", false, false, false, 24)) {
            // line 25
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = ($context["item"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::addtocart")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "        ";
        } else {
            // line 27
            echo "            <div class=\"mall-product__property-stock mall-product__property-stock--checking\">
                ";
            // line 28
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.checking"]);
            echo "
            </div>
        ";
        }
        // line 31
        echo "    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  109 => 28,  106 => 27,  103 => 26,  97 => 25,  95 => 24,  91 => 22,  87 => 20,  81 => 19,  75 => 18,  70 => 17,  67 => 16,  65 => 15,  61 => 13,  56 => 12,  51 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/cart.htm", "");
    }
}
