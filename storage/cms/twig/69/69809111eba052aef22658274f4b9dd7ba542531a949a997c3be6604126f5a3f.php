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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/accessories-item.htm */
class __TwigTemplate_0573f52aba9f07382649e407fca7644ef1e4d5bf3d61fb13a3cf1e18a14ed4d5 extends \Twig\Template
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
        echo "<div class=\"col-lg-6 mall-products-item  \">
    <a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "fileName", [], "any", false, false, false, 2), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 2), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 2)]);
        echo "\"
       data-mall-item-id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
        <div class=\"mall-products-item__top-icons\">
            <span class=\"";
        // line 5
        echo twig_escape_filter($this->env, ("category-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 5), "first", [], "any", false, false, false, 5), "slug", [], "any", false, false, false, 5)), "html", null, true);
        echo "\"></span>
            <span class=\"";
        // line 6
        echo twig_escape_filter($this->env, ("gender-" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender_property", [], "any", false, false, false, 6)), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender_property", [], "any", false, false, false, 6), "html", null, true);
        echo "\"></span>
        </div>

        <div class=\"mall-products-item__image\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 10), "thumb", [0 => "auto", 1 => 540], "method", false, false, false, 10), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"mall-products-item__info\">
            <div class=\"mall-products-item__category\">
                ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 14), "getPropertyValueBySlug", [0 => "pre-titre-categorie"], "method", false, false, false, 14), "html", null, true);
        echo "
            </div>

            <div class=\"mall-products-item__name\">
                ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "
            </div>

            <div class=\"mall-products-item__gender\">
                ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gender_property", [], "any", false, false, false, 22), "html", null, true);
        echo "
            </div>

            ";
        // line 25
        $context["price"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 25);
        // line 26
        echo "            ";
        $context["isReduced"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 26), "count", [], "any", false, false, false, 26) > 0);
        // line 27
        echo "            <div class=\"mall-products-item__price ";
        echo ((($context["isReduced"] ?? null)) ? ("reduced-price") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "isCustomerSpecific", [], "any", false, false, false, 27)) ? ("special") : (""));
        echo "\">
                ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 28);
        echo "
            </div>

            ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 31) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 31), "count", [], "any", false, false, false, 31) > 0))) {
            // line 32
            echo "                <div class=\"mall-products-item__old-price\">
                    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 33)) {
                // line 34
                echo "                        ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 34), "string", [], "any", false, false, false, 34);
                echo "
                    ";
            } else {
                // line 36
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["au lieu de"]);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 36), "string", [], "any", false, false, false, 36);
                echo "
                    ";
            }
            // line 38
            echo "                </div>
            ";
        }
        // line 40
        echo "        </div>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/accessories-item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 40,  130 => 38,  122 => 36,  116 => 34,  114 => 33,  111 => 32,  109 => 31,  103 => 28,  96 => 27,  93 => 26,  91 => 25,  85 => 22,  78 => 18,  71 => 14,  62 => 10,  53 => 6,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/accessories-item.htm", "");
    }
}
