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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/addresslist/list.htm */
class __TwigTemplate_a38dff656b32832ee97f057a8aa7f15219aca5921257ff3bd8b2d912658c3598 extends \Twig\Template
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
        echo "<table class=\"table mall-address-list__table\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "addresses", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "goldtest_is_school_address", [], "any", false, false, false, 2) != true)) {
                // line 3
                echo "        <tr>
            <td>
                ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 6), "html", null, true);
                    echo "<br/>
                ";
                }
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 8), "html", null, true);
                echo "<br/>
            </td>
            <td>
                ";
                // line 11
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lines", [], "any", false, false, false, 11), "html", null, true));
                echo "<br/>
                ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "zip", [], "any", false, false, false, 12), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 12), "html", null, true);
                echo "<br/>
                ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["address"], "state_id", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
                    echo "<br/>
                ";
                }
                // line 16
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
                echo "
            </td>
            <td class=\"mall-address-list__table-actions\">
                <a href=\"";
                // line 19
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "addressPage", [], "any", false, false, false, 19), ["address" => twig_get_attribute($this->env, $this->source, $context["address"], "hashId", [], "any", false, false, false, 19), "redirect" => "account"]);
                echo "\"
                   class=\"btn btn-link\">
                    ";
                // line 21
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.edit"]);
                echo "
                </a>
                ";
                // line 23
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "addresses", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23) > 1)) {
                    // line 24
                    echo "                    <a href=\"javascript:;\" data-request=\"onDelete\" data-request-data=\"id: '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "hashId", [], "any", false, false, false, 24), "html", null, true);
                    echo "'\"
                       data-request-confirm=\"";
                    // line 25
                    echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.are_you_sure"]);
                    echo "\"
                       class=\"btn btn-link\">
                        ";
                    // line 27
                    echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.delete"]);
                    echo "
                    </a>
                ";
                }
                // line 30
                echo "            </td>
        </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/addresslist/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  117 => 30,  111 => 27,  106 => 25,  101 => 24,  99 => 23,  94 => 21,  89 => 19,  82 => 16,  76 => 14,  74 => 13,  68 => 12,  64 => 11,  57 => 8,  51 => 6,  49 => 5,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/addresslist/list.htm", "");
    }
}
