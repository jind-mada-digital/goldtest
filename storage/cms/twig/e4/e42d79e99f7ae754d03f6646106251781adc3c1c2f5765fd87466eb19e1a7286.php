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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/summary.htm */
class __TwigTemplate_7014c12647731a5ceabd6d41c3748c49772aa4737c7d9e6ef26e98c6952635d4 extends \Twig\Template
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
        echo "<div class=\"mall-cart-summary\">
    <div class=\"row mall-cart-summary__info\">
        <div class=\"col-lg-3 mall-cart-summary__billing-address\">
            <h4 class=\"mall-cart-summary__heading\">
                ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adresse de facturation"]);
        echo "
            </h4>
            ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("billingAddressSelector"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "        </div>

        <div class=\"col-lg-3 mall-cart-summary__shipping-address\">
            <h4 class=\"mall-cart-summary__heading\">
                ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adresse de livraison"]);
        echo "
            </h4>
            ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("shippingAddressSelector"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "        </div>

        <div class=\"col-lg-3 mall-cart-summary__payment-method\">
            <h4 class=\"mall-cart-summary__heading\">
                ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Moyen de paiement"]);
        echo "
            </h4>
            <div>
                ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::paymentmethod")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "            </div>
        </div>

        <div class=\"col-lg-3 mall-cart-summary__shipping-method\">
            <h4 class=\"mall-cart-summary__heading\">
                ";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Livraison"]);
        echo "
            </h4>
            <div>
                ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::shippingmethod")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/summary.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  96 => 31,  90 => 28,  83 => 23,  79 => 22,  73 => 19,  67 => 15,  63 => 14,  58 => 12,  52 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/summary.htm", "");
    }
}
