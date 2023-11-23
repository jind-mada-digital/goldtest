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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/productsfilter/default.htm */
class __TwigTemplate_82eaa02d324739d1e1582c147be13ee0acd96be76dbd88aecb7f6a643fafabcd extends \Twig\Template
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
        echo "<form class=\"mall-products-filter\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["sortOrder"] ?? null), "html", null, true);
        echo "\">

    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "propertyGroups", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "slug", [], "any", false, false, false, 6) == "filtres")) {
                // line 7
                echo "
                ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "filterable_properties", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                    // line 9
                    echo "                    <div class=\"col-lg-auto\">
                        <h4>";
                    // line 10
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 10)]);
                    echo "</h4>

                        ";
                    // line 12
                    $context["values"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "values", [], "any", false, false, false, 12)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 12)] ?? null) : null);
                    // line 13
                    echo "                        
                        ";
                    // line 14
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['filter'] = twig_get_attribute($this->env, $this->source,                     // line 15
($context["__SELF__"] ?? null), "filter", [], "any", false, false, false, 15)                    ;
                    $context['__cms_partial_params']['property'] =                     // line 16
$context["property"]                    ;
                    $context['__cms_partial_params']['values'] =                     // line 17
($context["values"] ?? null)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((                    // line 14
($context["__SELF__"] ?? null) . "::set")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 18
                    echo "                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "

                <div class=\"col-lg-auto\">
                    <h4>";
                // line 23
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["En stock"]);
                echo "</h4>
                    <div class=\"double\">
                        ";
                // line 26
                echo "
                    </div>
                    <div class=\"double-x\">
                        <label class=\"stock-filter \">
                        <input type=\"radio\" aria-hidden=\"true\" style=\"display: none\" name=\"stockV\" checked value=\"1\">
                            ";
                // line 31
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Oui"]);
                echo "
                        </label>
                        <label class=\"stock-filter\">
                        <input type=\"radio\" aria-hidden=\"true\" style=\"display: none\" name=\"stockV\" value=\"0\">
                            ";
                // line 35
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tous"]);
                echo "
                        </label>
                    </div>
                </div>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>
    </div>
</form>

";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scripts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/productsfilter/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  126 => 40,  114 => 35,  107 => 31,  100 => 26,  95 => 23,  90 => 20,  83 => 18,  80 => 14,  78 => 17,  76 => 16,  74 => 15,  72 => 14,  69 => 13,  67 => 12,  62 => 10,  59 => 9,  55 => 8,  52 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/productsfilter/default.htm", "");
    }
}
