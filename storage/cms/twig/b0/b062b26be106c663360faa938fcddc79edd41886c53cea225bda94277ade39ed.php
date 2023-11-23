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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/property.htm */
class __TwigTemplate_0e1f77e4e657eeaabff7fce8b864cb374b06592deb4ad6150a26a85ce7549c5e extends \Twig\Template
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
        $context["propertyValue"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "variantPropertyValues", [], "any", false, false, false, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1)] ?? null) : null);
        // line 2
        echo "<div class=\"mall-product__property\">

    <input type=\"hidden\"
           data-mall-property
           name=\"props[";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 6), "hashId", [], "any", false, false, false, 6), "html", null, true);
        echo "]\"
           value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["propertyValue"] ?? null), "hashId", [], "any", false, false, false, 7), "html", null, true);
        echo "\">

    ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "product", [], "any", false, false, false, 9), "group_by_property_id", [], "any", false, false, false, 9))) {
            // line 10
            echo "        ";
            $context["isColor"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 10), "slug", [], "any", false, false, false, 10) == "couleurs");
            // line 11
            echo "        ";
            $context["isSize"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 11), "slug", [], "any", false, false, false, 11) == "size");
            // line 12
            echo "        <div class=\"property-title\">
            ";
            // line 13
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)]);
            echo "

            ";
            // line 15
            if (($context["isSize"] ?? null)) {
                // line 16
                echo "                <a href=\"#\" class=\"float-right\" data-toggle=\"modal\" data-target=\"#sizeGuide\">";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Guide des tailles"]);
                echo "</a>
            ";
            }
            // line 18
            echo "        </div>

        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "values", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 21
                echo "            ";
                $context["isSelected"] = (twig_get_attribute($this->env, $this->source, ($context["propertyValue"] ?? null), "value", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 21));
                // line 22
                echo "            ";
                $context["cssClasses"] = ((($context["isSelected"] ?? null)) ? ("mall-filter__option--selected") : (""));
                // line 23
                echo "
            ";
                // line 24
                if (($context["isColor"] ?? null)) {
                    // line 25
                    echo "                ";
                    $context["cssClasses"] = (($context["cssClasses"] ?? null) . " mall-filter__option-color");
                    // line 26
                    echo "
                ";
                    // line 27
                    $context["hexaColor"] = "";
                    // line 28
                    echo "
                ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 29), "options", [], "any", false, false, false, 29));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 29) == twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 29))) {
                            // line 30
                            echo "                    ";
                            $context["hexaColor"] = twig_get_attribute($this->env, $this->source, $context["option"], "color", [], "any", false, false, false, 30);
                            // line 31
                            echo "                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "
            <a href=\"#\" data-id=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "hashId", [], "any", false, false, false, 34), "html", null, true);
                echo "\"
               class=\"js-mall-property-selector mall-filter__option ";
                // line 35
                echo twig_escape_filter($this->env, ($context["cssClasses"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 36
                if (($context["isColor"] ?? null)) {
                    // line 37
                    echo "                    <span style=\"background-color: ";
                    echo twig_escape_filter($this->env, ($context["hexaColor"] ?? null), "html", null, true);
                    echo "\"></span>
                ";
                } else {
                    // line 39
                    echo "                    ";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 39)]);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 39), "unit", [], "any", false, false, false, 39), "html", null, true);
                    echo "
                ";
                }
                // line 41
                echo "            </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
        <div class=\"clearfix\"></div>
    ";
        }
        // line 46
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/property.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 46,  160 => 43,  153 => 41,  145 => 39,  139 => 37,  137 => 36,  133 => 35,  129 => 34,  126 => 33,  123 => 32,  116 => 31,  113 => 30,  108 => 29,  105 => 28,  103 => 27,  100 => 26,  97 => 25,  95 => 24,  92 => 23,  89 => 22,  86 => 21,  82 => 20,  78 => 18,  72 => 16,  70 => 15,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  54 => 9,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/property.htm", "");
    }
}
