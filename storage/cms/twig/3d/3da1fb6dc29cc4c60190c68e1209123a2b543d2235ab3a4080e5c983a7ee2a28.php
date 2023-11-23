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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/productsfilter/set.htm */
class __TwigTemplate_44a9266e027b99c99e51a8d95feaf52d63f63a15fc03ee6105e7e1f06a803b12 extends \Twig\Template
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
        echo "<div class=\"mall-filter mall-filter--set\">
    ";
        // line 2
        $context["selected"] = twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["filter"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "slug", [], "any", false, false, false, 2)] ?? null) : null), "values", [], "any", false, false, false, 2);
        // line 3
        echo "
    <div class=\"js-mall-filter mall-filter__select-all-option mall-filter__option ";
        // line 4
        echo (((null === ($context["selected"] ?? null))) ? ("mall-filter__option--selected") : (""));
        echo "\">
        <input type=\"checkbox\"
               aria-hidden=\"true\"
               style=\"display: none\"
               name=\"filter[";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "slug", [], "any", false, false, false, 8), "html", null, true);
        echo "][]\"
               value=\"\"
                ";
        // line 10
        echo (((null === ($context["selected"] ?? null))) ? ("checked") : (""));
        echo " >
        ";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tous"]);
        echo "
    </div>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 15
            echo "        ";
            $context["isSelected"] = twig_in_filter(twig_get_attribute($this->env, $this->source, $context["value"], "index_value", [], "any", false, false, false, 15), ($context["selected"] ?? null));
            // line 16
            echo "        ";
            $context["isColor"] = (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "slug", [], "any", false, false, false, 16) == "couleurs");
            // line 17
            echo "        ";
            $context["cssClasses"] = ((($context["isSelected"] ?? null)) ? ("mall-filter__option--selected") : (""));
            // line 18
            echo "
        ";
            // line 19
            if (($context["isColor"] ?? null)) {
                // line 20
                echo "            ";
                $context["cssClasses"] = (($context["cssClasses"] ?? null) . " mall-filter__option-color");
                // line 21
                echo "
            ";
                // line 22
                $context["hexaColor"] = "";
                // line 23
                echo "
            ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "options", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 24))) {
                        // line 25
                        echo "                ";
                        $context["hexaColor"] = twig_get_attribute($this->env, $this->source, $context["option"], "color", [], "any", false, false, false, 25);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "display_value", [], "any", false, false, false, 29) != "Sous-couches")) {
                // line 30
                echo "        <div class=\"js-mall-filter mall-filter__option ";
                echo twig_escape_filter($this->env, ($context["cssClasses"] ?? null), "html", null, true);
                echo "\">
            <input type=\"checkbox\"
                   aria-hidden=\"true\"
                   style=\"display: none\"
                   name=\"filter[";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "slug", [], "any", false, false, false, 34), "html", null, true);
                echo "][]\"
                   value=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "index_value", [], "any", false, false, false, 35), "html", null, true);
                echo "\"
                    ";
                // line 36
                echo ((($context["isSelected"] ?? null)) ? ("checked") : (""));
                echo " >

            ";
                // line 38
                if (($context["isColor"] ?? null)) {
                    // line 39
                    echo "                <span style=\"background-color: ";
                    echo twig_escape_filter($this->env, ($context["hexaColor"] ?? null), "html", null, true);
                    echo "\"></span>
            ";
                } else {
                    // line 41
                    echo "                ";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["value"], "display_value", [], "any", false, false, false, 41)]);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "unit", [], "any", false, false, false, 41), "html", null, true);
                    echo "
            ";
                }
                // line 43
                echo "        </div>
            ";
            }
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/productsfilter/set.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 46,  160 => 45,  156 => 43,  148 => 41,  142 => 39,  140 => 38,  135 => 36,  131 => 35,  127 => 34,  119 => 30,  117 => 29,  114 => 28,  111 => 27,  104 => 26,  101 => 25,  96 => 24,  93 => 23,  91 => 22,  88 => 21,  85 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  67 => 14,  61 => 11,  57 => 10,  52 => 8,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/productsfilter/set.htm", "");
    }
}
