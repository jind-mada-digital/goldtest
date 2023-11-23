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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/paymentmethodselector/methods.htm */
class __TwigTemplate_f72af00ba174d821cfad607f83082d2a2afbf3ece39d6c83114d58dee4db96eb extends \Twig\Template
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
        echo "<h4>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Méthode de paiement"]);
        echo "</h4>

<form id=\"mall-payment-form\" data-request-validate>
    <div class=\"mall-payment-method\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "methods", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 6
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 6) == "invoice") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "billing_address", [], "any", false, false, false, 6), "country", [], "any", false, false, false, 6), "code", [], "any", false, false, false, 6) != "CH"))) {
                // line 7
                echo "                ";
                // line 8
                echo "            ";
            } else {
                // line 9
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['method'] = $context["method"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::method")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 10
                echo "            ";
            }
            // line 11
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/paymentmethodselector/methods.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  66 => 11,  63 => 10,  57 => 9,  54 => 8,  52 => 7,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/paymentmethodselector/methods.htm", "");
    }
}
