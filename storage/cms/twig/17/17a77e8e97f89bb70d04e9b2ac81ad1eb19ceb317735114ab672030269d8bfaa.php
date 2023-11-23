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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/payment.htm */
class __TwigTemplate_6a14c8d47c28763d82d26b0b235ef762ea98bd5fb0a48a90f198f6cd507b664b extends \Twig\Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method_id", [], "any", false, false, false, 1) != null) && (twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "totalPostTaxes", [], "any", false, false, false, 1) > 0))) {
            // line 2
            echo "    <tr class=\"mall-cart__payment\">
        <td colspan=\"5\">
            ";
            // line 4
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method", [], "any", false, true, false, 4), "fee_label", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method", [], "any", false, true, false, 4), "fee_label", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4))), "html", null, true);
            echo "
        </td>
        <td class=\"text-right\">
            ";
            // line 7
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "totalPostTaxes", [], "any", false, false, false, 7)]);
            echo "
        </td>
    </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/payment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/payment.htm", "");
    }
}
