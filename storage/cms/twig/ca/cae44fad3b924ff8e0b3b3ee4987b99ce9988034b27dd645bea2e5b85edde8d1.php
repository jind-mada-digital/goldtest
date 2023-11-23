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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/addtocart.htm */
class __TwigTemplate_1832b02d804cd6ca0c804c65d1045a7e2c9d6451d704ffd381cb7c25cd6765eb extends \Twig\Template
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
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "allow_out_of_stock_purchases", [], "any", false, false, false, 1) && (($context["stock"] ?? null) < 1))) {
            // line 2
            echo "    <div class=\"mall-product__property-stock text-red\">
        ";
            // line 3
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.unavailable"]);
            echo "
    </div>
";
        }
        // line 6
        echo "
";
        // line 7
        if (((($context["stock"] ?? null) > 0) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "allow_out_of_stock_purchases", [], "any", false, false, false, 7))) {
            // line 8
            echo "    <div class=\"mall-product__add-to-cart-form\">
        <div class=\"mall-product__property mall-product__quantity\">
            <label for=\"quantity\" class=\"property-title\">";
            // line 10
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Quantité"]);
            echo "</label>

            <button class=\"btn-quantity less\" ";
            // line 12
            echo (((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_default", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_default", [], "any", false, false, false, 12), 1)) : (1)) < 2)) ? ("disabled") : (""));
            echo "></button>

            <input type=\"number\" id=\"quantity\" name=\"quantity\"
                   min=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_min", [], "any", false, false, false, 15), "html", null, true);
            echo "\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_max", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
                   value=\"";
            // line 16
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_default", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_default", [], "any", false, false, false, 16), 1)) : (1)), "html", null, true);
            echo "\">

            <button class=\"btn-quantity more\"></button>

            <div class=\"clearfix\"></div>

            <div data-validate-for=\"quantity\"></div>
        </div>

        ";
            // line 25
            if ((($context["stock"] ?? null) < 1)) {
                // line 26
                echo "            <div class=\"mall-product__quantity--not-in-stock text-red\">
                ";
                // line 27
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Les délais de livraison pour ce produit peuvent être plus long"]);
                echo "
            </div>
        ";
            }
            // line 30
            echo "
        <button type=\"submit\" class=\"btn btn-primary mall-add-to-cart-button\" data-attach-loading>
            ";
            // line 32
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart.add"]);
            echo "
        </button>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/addtocart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  97 => 30,  91 => 27,  88 => 26,  86 => 25,  74 => 16,  68 => 15,  62 => 12,  57 => 10,  53 => 8,  51 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/addtocart.htm", "");
    }
}
