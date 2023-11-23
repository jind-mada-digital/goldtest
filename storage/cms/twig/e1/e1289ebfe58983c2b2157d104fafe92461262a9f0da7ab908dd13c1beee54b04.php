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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/entry.htm */
class __TwigTemplate_7e11bd682d849491d1fce4db608a2fdf52569cbdbe7084faba90d4c451eacbc7 extends \Twig\Template
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
        $context["url"] = $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, false, false, 1), "slug", [], "any", false, false, false, 1), "variant" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 1), "hashId", [], "any", false, false, false, 1)]);
        // line 2
        $context["image"] = ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 2)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 2), "image", [], "any", false, false, false, 2)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, false, false, 2), "image", [], "any", false, false, false, 2)));
        // line 3
        echo "<tr class=\"mall-cart__product\">
    <td width=\"210\" class=\"product-image\">
        ";
        // line 5
        if (($context["image"] ?? null)) {
            // line 6
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"product-image-link\">
                <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "thumb", [0 => 120, 1 => 120], "method", false, false, false, 7), "html", null, true);
            echo "\" alt=\"\"/>
            </a>
        ";
        }
        // line 10
        echo "    </td>
    <td class=\"product-infos\">
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" class=\"product-name\">
            ";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13))), "html", null, true);
        echo "
        </a>

        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 16)) {
            // line 17
            echo "            <div class=\"product-details\">
                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 18), "color_property", [], "any", false, false, false, 18), "html", null, true);
            echo "
                ";
            // line 19
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 19), "color_property", [], "any", false, false, false, 19) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 19), "gender_property", [], "any", false, false, false, 19))) ? ("|") : (""));
            echo "
                ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 20), "gender_property", [], "any", false, false, false, 20), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 23
        echo "
        <a href=\"javascript:;\"
           class=\"js-mall-remove-product remove-product\"
           data-id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hashId", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
            ";
        // line 27
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.remove"]);
        echo "
        </a>
    </td>
    <td class=\"size-property\">
        ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 31), "size_property", [], "any", false, false, false, 31), "html", null, true);
        echo "
    </td>
    <td class=\"quantity text-left\">
        ";
        // line 34
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['product'] = ($context["product"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/quantitydropdown")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "    </td>
    <td class=\"price text-right\">
        ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "method", false, false, false, 37);
        echo "
        ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "service_options", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38) > 0)) {
            // line 39
            echo "            <div class=\"mall-cart__price-additions\">
                + ";
            // line 40
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "servicePostTaxes", [], "any", false, false, false, 40)]);
            echo "
            </div>
        ";
        }
        // line 43
        echo "    </td>
    <td class=\"total-price text-right\">
        ";
        // line 45
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "totalPostTaxes", [], "any", false, false, false, 45)]);
        echo "
    </td>
</tr>

";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "service_options", [], "any", false, false, false, 49));
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
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 50
            echo "    <tr class=\"mall-cart__services ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 50)) ? ("mall-cart__services--first") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 50)) ? ("mall-cart__services--last") : (""));
            echo "\">
        <td></td>
        <td colspan=\"2\">
            ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "
        </td>
        <td></td>
        <td class=\"text-right\">
            ";
            // line 57
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "method", false, false, false, 57), "integer", [], "any", false, false, false, 57)]);
            echo "
        </td>
        <td></td>
    </tr>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/entry.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 57,  174 => 53,  165 => 50,  148 => 49,  141 => 45,  137 => 43,  131 => 40,  128 => 39,  126 => 38,  122 => 37,  118 => 35,  113 => 34,  107 => 31,  100 => 27,  96 => 26,  91 => 23,  85 => 20,  81 => 19,  77 => 18,  74 => 17,  72 => 16,  66 => 13,  62 => 12,  58 => 10,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/entry.htm", "");
    }
}
