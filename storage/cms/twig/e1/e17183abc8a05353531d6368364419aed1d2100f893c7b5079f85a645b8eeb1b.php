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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/discounts.htm */
class __TwigTemplate_b1d534b5c938c132986662003796bf6c51ca09498c8e9e55832c0f82cd4a7920 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 2
            echo "    <tr class=\"mall-cart__discount\">
        <td colspan=\"5\">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "discount", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
            echo "
            ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "discount", [], "any", false, false, false, 5), "code", [], "any", false, false, false, 5)) {
                // line 6
                echo "                (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "discount", [], "any", false, false, false, 6), "code", [], "any", false, false, false, 6), "html", null, true);
                echo ")
            ";
            }
            // line 8
            echo "        </td>
        <td class=\"text-right\">
            ";
            // line 10
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["entry"], "savings", [], "any", false, false, false, 10)]);
            echo "
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/discounts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  57 => 8,  51 => 6,  49 => 5,  45 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/discounts.htm", "");
    }
}
