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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/plugins/offline/mall/components/shippingmethodselector/method.htm */
class __TwigTemplate_0ce5b823b8018cc57c9791acd1ada1e88c0eda86618483ba7a15ea7572e56c9e extends \Twig\Template
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
        $context["isActiveMethod"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shipping_method", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 1));
        // line 2
        echo "<div class=\"mall-shipping-method__entry js-mall-select-shipping-method
     ";
        // line 3
        echo ((($context["isActiveMethod"] ?? null)) ? ("mall-shipping-method__entry--active") : (""));
        echo "\"
     data-id=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
>
    <div class=\"mall-shipping-method__logo\">
        ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "logo", [], "any", false, false, false, 7)) {
            // line 8
            echo "            <img class=\"mall-shipping-method__logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "logo", [], "any", false, false, false, 8), "thumb", [0 => 120, 1 => "auto"], "method", false, false, false, 8), "html", null, true);
            echo "\" alt=\"\"/>
        ";
        }
        // line 10
        echo "    </div>
    <div class=\"mall-shipping-method__text\">
        <div>
            <div class=\"mall-shipping-method__heading\">
                <div class=\"mall-shipping-method__name\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</div>
                <div class=\"mall-shipping-method__meta\">
                    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "guaranteed_delivery_days", [], "any", false, false, false, 16)) {
            // line 17
            echo "                        <div class=\"mall-shipping-method__delivery-days\">
                            ";
            // line 18
            $context["days"] = twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "guaranteed_delivery_days", [], "any", false, false, false, 18);
            // line 19
            echo "                            ";
            echo call_user_func_array($this->env->getFilter('transchoice')->getCallable(), ["offline.mall::frontend.shipping_method.guaranteed_delivery_days",             // line 20
($context["days"] ?? null), ["days" => ($context["days"] ?? null)]]);
            // line 21
            echo "
                        </div>
                    ";
        }
        // line 24
        echo "                    <div class=\"mall-shipping-method__price\">
                        ";
        // line 25
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "price", [], "method", false, false, false, 25), "integer", [], "any", false, false, false, 25) > 0)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["method"] ?? null), "price", [], "method", false, false, false, 26), "string", [], "any", false, false, false, 26)) : (call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.no_additional_charges"])));
        // line 27
        echo "
                    </div>
                </div>
            </div>
            <div class=\"mall-shipping-method__toggle\"
                 style=\"";
        // line 32
        if ( !($context["isActiveMethod"] ?? null)) {
            echo "display: none";
        }
        echo "\">
                ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <div class=\"mall-shipping-method__description\">
                        ";
            // line 35
            echo twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 35);
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                <div class=\"mall-shipping-method__submit\">
                    <button class=\"mall-btn mall-btn--primary\" type=\"submit\" data-attach-loading>
                        ";
        // line 40
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_method.proceed"]);
        echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mall-shipping-method__selector\">
        ";
        // line 47
        if ( !($context["isActiveMethod"] ?? null)) {
            // line 48
            echo "            <button class=\"mall-shipping-method__select-button\"
                    data-attach-loading
                    data-request=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onChangeMethod\"
                    data-request-success=\"\$.publish('mall.cart.shippingMethodChanged', data)\"
                    data-request-data=\"id: '";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 52), "html", null, true);
            echo "'\">
                ";
            // line 53
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_method.button_label"]);
            echo "
            </button>
        ";
        }
        // line 56
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/plugins/offline/mall/components/shippingmethodselector/method.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  146 => 53,  142 => 52,  137 => 50,  133 => 48,  131 => 47,  121 => 40,  117 => 38,  111 => 35,  108 => 34,  106 => 33,  100 => 32,  93 => 27,  91 => 26,  90 => 25,  87 => 24,  82 => 21,  80 => 20,  78 => 19,  76 => 18,  73 => 17,  71 => 16,  66 => 14,  60 => 10,  54 => 8,  52 => 7,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/plugins/offline/mall/components/shippingmethodselector/method.htm", "");
    }
}
