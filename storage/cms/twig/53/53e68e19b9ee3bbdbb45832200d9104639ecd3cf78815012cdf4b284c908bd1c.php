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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/default.htm */
class __TwigTemplate_00f351879785646e233f94bcd7cb1b944a159625dcdacf1ca4bd2d7067b87c4d extends \Twig\Template
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
        echo "<div class=\"mall-cart\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 2), "count", [], "any", false, false, false, 2) < 1)) {
            // line 3
            echo "        <div class=\"mall-cart__empty\">
            ";
            // line 4
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart.empty"]);
            echo "
        </div>
    ";
        } else {
            // line 7
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/base")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showDiscountApplier", [], "any", false, false, false, 9)) {
                // line 10
                echo "            ";
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("discountApplier"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 11
                echo "        ";
            }
            // line 12
            echo "    ";
        }
        // line 13
        echo "</div>

";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scripts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  72 => 13,  69 => 12,  66 => 11,  61 => 10,  59 => 9,  56 => 8,  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/default.htm", "");
    }
}
