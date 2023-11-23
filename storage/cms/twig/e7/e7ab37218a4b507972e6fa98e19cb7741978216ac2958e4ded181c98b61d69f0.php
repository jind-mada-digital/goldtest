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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/paymentmethodselector/method.htm */
class __TwigTemplate_24b3f766522ffbeb8cfca87cb69a55753ff933e0a64f7b73a4edc7909549c36a extends \Twig\Template
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
        $context["isActiveMethod"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeMethod", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 1));
        // line 2
        echo "<div class=\"mall-payment-method__entry js-mall-select-payment-method
     ";
        // line 3
        echo ((($context["isActiveMethod"] ?? null)) ? ("mall-payment-method__entry--active") : (""));
        echo "\"
     data-id=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
    <div class=\"mall-payment-method__text\">
        <div>
            <div class=\"mall-payment-method__heading\">
                <div class=\"mall-payment-method__name\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</div>
            </div>
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 10)) {
            // line 11
            echo "                <div class=\"mall-payment-method__description\">
                    ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 12);
            echo "
                </div>
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if (($context["isActiveMethod"] ?? null)) {
            // line 17
            echo "                <div class=\"mall-payment-method__instructions\">
                    ";
            // line 18
            echo twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "renderInstructions", [0 => twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "order", [], "any", false, false, false, 18), 1 => twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 18)], "method", false, false, false, 18);
            echo "
                </div>
                <div class=\"mall-payment-method__toggle\"
                     style=\"";
            // line 21
            if ( !($context["isActiveMethod"] ?? null)) {
                echo "display: none";
            }
            echo "\">
                    <div class=\"mall-payment-method__data\">
                        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "payment_provider", [], "any", false, false, false, 23)) {
                // line 24
                echo "                            ";
                $context["path"] = ((($context["__SELF__"] ?? null) . "::gateways/") . twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "payment_provider", [], "any", false, false, false, 24));
                // line 25
                echo "                            ";
                if ($this->extensions['Cms\Twig\Extension']->partialFunction(($context["path"] ?? null))) {
                    // line 26
                    echo "                                ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(($context["path"] ?? null)                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 27
                    echo "                            ";
                }
                // line 28
                echo "                        ";
            }
            // line 29
            echo "                    </div>

                    ";
            // line 31
            $context["customerMethods"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "customerMethods", [], "any", false, false, false, 31)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 31)] ?? null) : null);
            // line 32
            echo "                    ";
            if (($context["customerMethods"] ?? null)) {
                // line 33
                echo "                        <div class=\"mall-payment-method__customer-methods\">
                            ";
                // line 34
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['methods'] = ($context["customerMethods"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::customermethods")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 35
                echo "                        </div>
                    ";
            }
            // line 37
            echo "                </div>
            ";
        }
        // line 39
        echo "        </div>
    </div>
    <div class=\"mall-payment-method__actions\">
        ";
        // line 42
        if (($context["isActiveMethod"] ?? null)) {
            // line 43
            echo "            ";
            $context["label"] = ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "order", [], "any", false, false, false, 43)) ? ("offline.mall::frontend.payment_method.pay_now") : ("offline.mall::frontend.payment_method.proceed"));
            // line 46
            echo "
            ";
            // line 47
            $context["mobileLabel"] = ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "order", [], "any", false, false, false, 47)) ? ("Payer") : ("Continuer"));
            // line 50
            echo "
            <button class=\"btn btn-primary\" type=\"submit\" data-attach-loading>
                <span class=\"d-none d-lg-inline\">";
            // line 52
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [($context["label"] ?? null)]);
            echo "</span>
                <span class=\"d-inline d-lg-none\">";
            // line 53
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [($context["mobileLabel"] ?? null)]);
            echo "</span>
            </button>
        ";
        } else {
            // line 56
            echo "            <button class=\"mall-payment-method__select-button btn btn-secondary\"
                    data-attach-loading
                    data-request=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onChangeMethod\"
                    data-request-success=\"\$.publish('mall.cart.paymentMethodChanged', data)\"
                    data-request-data=\"id: '";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
            echo "'\">
                ";
            // line 61
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Choisir"]);
            echo "
            </button>
        ";
        }
        // line 64
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/paymentmethodselector/method.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  176 => 61,  172 => 60,  167 => 58,  163 => 56,  157 => 53,  153 => 52,  149 => 50,  147 => 47,  144 => 46,  141 => 43,  139 => 42,  134 => 39,  130 => 37,  126 => 35,  121 => 34,  118 => 33,  115 => 32,  113 => 31,  109 => 29,  106 => 28,  103 => 27,  98 => 26,  95 => 25,  92 => 24,  90 => 23,  83 => 21,  77 => 18,  74 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  53 => 8,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/paymentmethodselector/method.htm", "");
    }
}
