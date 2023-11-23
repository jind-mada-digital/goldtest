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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/cart.htm */
class __TwigTemplate_6815a5c7d0a5528d4697bc9654f1f83205294e13ad45f6ce10a9fa7188358ed8 extends \Twig\Template
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
        // line 19
        echo "
";
        // line 26
        echo "

<div class=\"container\">
    <div class=\"block-simple-head\">
        <h1 class=\"small-page-heading\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Panier"]);
        echo "</h1>
    </div>
</div>

<div class=\"container\">
    ";
        // line 35
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("cart"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "</div>

";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38) > 0)) {
            // line 39
            echo "    <div class=\"container\">
        <div class=\"mall-cart-actions text-right\">
            <a href=\"";
            // line 41
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("checkout");
            echo "\" class=\"btn btn-primary\">
                ";
            // line 42
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Valider le panier"]);
            echo "
            </a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 42,  68 => 41,  64 => 39,  62 => 38,  58 => 36,  54 => 35,  46 => 30,  40 => 26,  37 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/cart.htm", "");
    }
}
