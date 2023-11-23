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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/orderslist/productlist.htm */
class __TwigTemplate_addb8645511a740d37858df39830dfca85fec3a91b0a0fe287cd7f7e0ea95f69 extends \Twig\Template
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
        echo "<table class=\"table\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "        <tr>
            <td>
                ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "
                ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["product"], "service_options", [], "any", false, false, false, 6)) {
                // line 7
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "service_options", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 8
                    echo "                        <br/>
                        <span class=\"text-muted\">
                        <strong>";
                    // line 10
                    echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.common.service"]);
                    echo "</strong>:
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 11), "html", null, true);
                    echo "
                    </span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                ";
            }
            // line 15
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 15)) {
                // line 16
                echo "                    <br/>
                    <span class=\"text-muted\">
                        ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 18), "properties_description", [], "any", false, false, false, 18);
                echo "
                    </span>
                ";
            }
            // line 21
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "custom_field_values", [], "any", false, false, false, 21)) {
                // line 22
                echo "                    <br/>
                    <span class=\"text-muted\">
                        ";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "custom_field_value_description", [], "any", false, false, false, 24);
                echo "
                    </span>
                ";
            }
            // line 27
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product_file_grants", [], "any", false, false, false, 27), "count", [], "any", false, false, false, 27) > 0)) {
                // line 28
                echo "                    <br/>
                    ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "product_file_grants", [], "any", false, false, false, 29));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["grant"]) {
                    // line 30
                    echo "                        <br/>
                        <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grant"], "download_link", [], "any", false, false, false, 31), "html", null, true);
                    echo "\">
                            Download ";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grant"], "display_name", [], "any", false, false, false, 32), "html", null, true);
                    echo "
                            ";
                    // line 33
                    (((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 33) > 1)) ? (print (twig_escape_filter($this->env, ("#" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33)), "html", null, true))) : (print ("")));
                    echo "
                        </a>
                        ";
                    // line 35
                    if (twig_get_attribute($this->env, $this->source, $context["grant"], "expires_at", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "                            <br>valid until ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["grant"], "expires_at", [], "any", false, false, false, 36), "toDateString", [], "method", false, false, false, 36), "html", null, true);
                        echo "
                        ";
                    }
                    // line 38
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["grant"], "max_download_count", [], "any", false, false, false, 38)) {
                        // line 39
                        echo "                            <br>max. ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grant"], "max_download_count", [], "any", false, false, false, 39), "html", null, true);
                        echo " downloads
                        ";
                    }
                    // line 41
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                ";
            }
            // line 43
            echo "            </td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
            <td class=\"text-right\">
                ";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "pricePostTaxes", [], "method", false, false, false, 46);
            echo "
                ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["product"], "service_options", [], "any", false, false, false, 47)) {
                // line 48
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "service_options", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 49
                    echo "                        <div class=\"text-muted\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 49), "html", null, true);
                    echo "\">
                            + ";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "price_formatted", [], "any", false, false, false, 50), "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                ";
            }
            // line 54
            echo "            </td>
            <td class=\"text-right\">
                ";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["product"], "totalPostTaxes", [], "method", false, false, false, 56);
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    <tr class=\"mall-cart__total\">
        <td></td>
        <td colspan=\"2\">
            ";
        // line 63
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total"]);
        echo "
        </td>
        <td class=\"text-right\">
            ";
        // line 66
        echo twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "totalProductPostTaxes", [], "method", false, false, false, 66);
        echo "
        </td>
    </tr>
    <tr class=\"mall-cart__shipping\">
        <td></td>
        <td colspan=\"2\">
            ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipping", [], "any", false, false, false, 72), "method", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "
        </td>
        <td class=\"text-right\">
            ";
        // line 75
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipping", [], "any", false, false, false, 75), "method", [], "any", false, false, false, 75), "price_formatted", [], "any", false, false, false, 75);
        echo "
        </td>
    </tr>
    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "discounts", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 79
            echo "        <tr class=\"mall-cart__discount\">
            <td></td>
            <td colspan=\"2\">
                ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "discount", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            echo "
                ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "discount", [], "any", false, false, false, 83), "code", [], "any", false, false, false, 83)) {
                // line 84
                echo "                    (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "discount", [], "any", false, false, false, 84), "code", [], "any", false, false, false, 84), "html", null, true);
                echo ")
                ";
            }
            // line 86
            echo "            </td>
            <td class=\"text-right\">
                ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "savings_formatted", [], "any", false, false, false, 88), "html", null, true);
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 92) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 92), "total", [], "any", false, false, false, 92) > 0))) {
            // line 93
            echo "        <tr class=\"mall-cart__payment\">
            <td></td>
            <td colspan=\"2\">
                ";
            // line 96
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, true, false, 96), "fee_label", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, true, false, 96), "fee_label", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96))), "html", null, true);
            echo "
            </td>
            <td class=\"text-right\">
                ";
            // line 99
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 99), "total", [], "any", false, false, false, 99)]);
            echo "
            </td>
        </tr>
    ";
        }
        // line 103
        echo "    <tr class=\"mall-cart__grand-total\">
        <td></td>
        <td colspan=\"2\">
            ";
        // line 106
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.grand_total"]);
        echo "
        </td>
        <td class=\"text-right\">
            ";
        // line 109
        echo twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "totalPostTaxes", [], "method", false, false, false, 109);
        echo "
        </td>
    </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/orderslist/productlist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 109,  321 => 106,  316 => 103,  309 => 99,  303 => 96,  298 => 93,  295 => 92,  285 => 88,  281 => 86,  275 => 84,  273 => 83,  269 => 82,  264 => 79,  260 => 78,  254 => 75,  248 => 72,  239 => 66,  233 => 63,  228 => 60,  218 => 56,  214 => 54,  211 => 53,  202 => 50,  197 => 49,  192 => 48,  190 => 47,  186 => 46,  181 => 44,  178 => 43,  175 => 42,  161 => 41,  155 => 39,  152 => 38,  146 => 36,  144 => 35,  139 => 33,  135 => 32,  131 => 31,  128 => 30,  111 => 29,  108 => 28,  105 => 27,  99 => 24,  95 => 22,  92 => 21,  86 => 18,  82 => 16,  79 => 15,  76 => 14,  67 => 11,  63 => 10,  59 => 8,  54 => 7,  52 => 6,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/orderslist/productlist.htm", "");
    }
}
