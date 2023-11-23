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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/products/item.htm */
class __TwigTemplate_42e061fddc039abf4582de71494b192cc80b5fb6aa01db52bc8b811970481420 extends \Twig\Template
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
        echo "<div class=\"col-lg-6 mall-products-item\" data-st=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "stock", [], "any", false, false, false, 1), "html", null, true);
        echo "\"

";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 3), "getPropertyValueBySlug", [0 => "couleurs"], "method", false, false, false, 3)) {
            // line 4
            echo "data-cl=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 4), "getPropertyValueBySlug", [0 => "couleurs"], "method", false, false, false, 4), "html", null, true);
            echo "\"
";
        } else {
            // line 6
            echo "data-cl=\"0\"
";
        }
        // line 8
        echo ">
    <a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 9), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 9)]);
        echo "\"
       data-mall-item-id=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
        <div class=\"mall-products-item__top-icons-left\" style=\"float:left;\">
        ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "stock", [], "any", false, false, false, 12) > 0)) {
            // line 13
            echo "            <span class=\"\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["En stock"]);
            echo "</span>
        ";
        }
        // line 15
        echo "        </div>
        <br>
       
        <div class=\"mall-products-item__top-icons\">
            <span class=\"";
        // line 19
        echo twig_escape_filter($this->env, ("category-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "category", [], "any", false, false, false, 19), "slug", [], "any", false, false, false, 19)), "html", null, true);
        echo "\"></span>
            <span class=\"";
        // line 20
        echo twig_escape_filter($this->env, ("gender-" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender_property", [], "any", false, false, false, 20)), "html", null, true);
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender_property", [], "any", false, false, false, 20)]);
        echo "\"></span>
        </div>

        <div class=\"mall-products-item__image\">
            <img srcset=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 24), "thumb", [0 => "auto", 1 => 540], "method", false, false, false, 24), "html", null, true);
        echo " 1x, ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 24), "thumb", [0 => "auto", 1 => 1080], "method", false, false, false, 24), "html", null, true);
        echo " 2x\"
                 src=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 25), "thumb", [0 => "auto", 1 => 540], "method", false, false, false, 25), "html", null, true);
        echo "\"
                 alt=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"mall-products-item__info\">
            <div class=\"mall-products-item__category\">
                ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 30), "getPropertyValueBySlug", [0 => "pre-titre-categorie"], "method", false, false, false, 30), "html", null, true);
        echo "
            </div>

            <div class=\"mall-products-item__name\">
                ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "
            </div>

            <div class=\"mall-products-item__gender\">
                ";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender_property", [], "any", false, false, false, 38)]);
        echo "
            </div>


            ";
        // line 42
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "category", [], "any", false, false, false, 42), "slug", [], "any", false, false, false, 42) != "league5") || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "goldtest_is_school_member", [], "any", false, false, false, 42))) {
            // line 43
            echo "                ";
            $context["price"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 43);
            // line 44
            echo "                ";
            $context["isReduced"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 44), "count", [], "any", false, false, false, 44) > 0);
            // line 45
            echo "                <div class=\"mall-products-item__price ";
            echo ((($context["isReduced"] ?? null)) ? ("reduced-price") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "isCustomerSpecific", [], "any", false, false, false, 45)) ? ("special") : (""));
            echo "\">
                    ";
            // line 46
            echo twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 46);
            echo "
                </div>

                ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 49) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 49), "count", [], "any", false, false, false, 49) > 0))) {
                // line 50
                echo "                    <div class=\"mall-products-item__old-price\">
                        ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                            ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 52), "string", [], "any", false, false, false, 52);
                    echo "
                        ";
                } else {
                    // line 54
                    echo "                            ";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["au lieu de"]);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 54), "string", [], "any", false, false, false, 54);
                    echo "
                        ";
                }
                // line 56
                echo "                    </div>
                ";
            }
            // line 58
            echo "
                
            ";
        } else {
            // line 61
            echo "                <div class=\"mall-products-item__cant_see_price\">
                    ";
            // line 62
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Connectez-vous pour voir le prix"]);
            echo "
                </div>
            ";
        }
        // line 65
        echo "        </div>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/products/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 65,  186 => 62,  183 => 61,  178 => 58,  174 => 56,  166 => 54,  160 => 52,  158 => 51,  155 => 50,  153 => 49,  147 => 46,  140 => 45,  137 => 44,  134 => 43,  132 => 42,  125 => 38,  118 => 34,  111 => 30,  104 => 26,  100 => 25,  94 => 24,  85 => 20,  81 => 19,  75 => 15,  69 => 13,  67 => 12,  62 => 10,  58 => 9,  55 => 8,  51 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/products/item.htm", "");
    }
}
