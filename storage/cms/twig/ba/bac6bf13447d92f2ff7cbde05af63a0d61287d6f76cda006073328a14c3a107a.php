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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/orderslist/details.htm */
class __TwigTemplate_693a885de9c6c4a078c415d0b79e4d83fa3da4f012192dd3a83dbbf5791a1010 extends \Twig\Template
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
        echo "<tr style=\"display: none\" class=\"mall-orders-list__details\">
    <td colspan=\"5\">
        <div class=\"container mall-order-details\">
            <div class=\"row mall-order-details__row\">
                <div class=\"col-lg-3 mall-order-details__detail\">
                    <h5>";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.order.order_state"]);
        echo "</h5>
                    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "order_state_label", [], "any", false, false, false, 7), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-3 mall-order-details__detail\">
                    <h5>";
        // line 10
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.order.payment_state"]);
        echo "</h5>
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_state_label", [], "any", false, false, false, 11), "html", null, true);
        echo "
                    ";
        // line 12
        if ( !twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "isPaid", [], "any", false, false, false, 12)) {
            // line 13
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 13), "instructions", [], "any", false, false, false, 13)) {
                // line 14
                echo "                            <div class=\"mall-order-details__instructions\">
                                ";
                // line 15
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 15), "renderInstructions", [0 => ($context["order"] ?? null)], "method", false, false, false, 15);
                echo "
                            </div>
                        ";
            }
            // line 18
            echo "                        <br/>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paymentLink", [], "any", false, false, false, 19), "html", null, true);
            echo "?order=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "hashId", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                            ";
            // line 20
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.payment_method.pay_now"]);
            echo "
                        </a>
                    ";
        }
        // line 23
        echo "                </div>

                <div class=\"col-lg-3 mall-order-details__detail\">
                    <h5>";
        // line 26
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_method"]);
        echo "</h5>
                    ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipping", [], "any", false, false, false, 27), "method", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-3 mall-order-details__detail\">
                    <h5>";
        // line 30
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.payment_method"]);
        echo "</h5>
                    ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "
                </div>
            </div>
            ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_number", [], "any", false, false, false, 34) || twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_url", [], "any", false, false, false, 34))) {
            // line 35
            echo "                <div class=\"mall-order-details__row\">
                    <div class=\"mall-order-details__detail\">
                        <h5>";
            // line 37
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_tracking"]);
            echo "</h5>
                        ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_url", [], "any", false, false, false, 38)) {
                // line 39
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_url", [], "any", false, false, false, 39), "html", null, true);
                echo "\" target=\"_blank\"
                               rel=\"noopener nofollow\">
                                ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_url", [], "any", false, false, false, 41), "html", null, true);
                echo "
                            </a>
                            ";
                // line 43
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_number", [], "any", false, false, false, 43)) {
                    // line 44
                    echo "                                <br/>
                            ";
                }
                // line 46
                echo "                        ";
            }
            // line 47
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_number", [], "any", false, false, false, 47)) {
                // line 48
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_number", [], "any", false, false, false, 48), "html", null, true);
                echo "
                        ";
            }
            // line 50
            echo "                    </div>
                </div>
            ";
        }
        // line 53
        echo "            <div class=\"row mall-order-details__row\">
                <div class=\"col-lg-6 mall-order-details__detail\">
                    <h5>";
        // line 55
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_address"]);
        echo "</h5>
                    ";
        // line 56
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['address'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipping_address", [], "any", false, false, false, 56)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::address")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "                </div>
                <div class=\"col-lg-6 mall-order-details__detail\">
                    <h5>";
        // line 59
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.billing_address"]);
        echo "</h5>
                    ";
        // line 60
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['address'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billing_address", [], "any", false, false, false, 60)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::address")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "                </div>
            </div>

            <div class=\"mall-order-details__product-list\">
                ";
        // line 65
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['products'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "products", [], "any", false, false, false, 65)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::productlist")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "            </div>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/orderslist/details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 66,  194 => 65,  188 => 61,  183 => 60,  179 => 59,  175 => 57,  170 => 56,  166 => 55,  162 => 53,  157 => 50,  151 => 48,  148 => 47,  145 => 46,  141 => 44,  139 => 43,  134 => 41,  128 => 39,  126 => 38,  122 => 37,  118 => 35,  116 => 34,  110 => 31,  106 => 30,  100 => 27,  96 => 26,  91 => 23,  85 => 20,  79 => 19,  76 => 18,  70 => 15,  67 => 14,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/orderslist/details.htm", "");
    }
}
