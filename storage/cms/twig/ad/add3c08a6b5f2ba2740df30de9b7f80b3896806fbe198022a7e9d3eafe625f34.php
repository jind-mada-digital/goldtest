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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/header.htm */
class __TwigTemplate_857117f91aab810be191ce8bcbd387f6ed2019b07a4745388119d77798f76a82 extends \Twig\Template
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
        echo "<tr class=\"mall-cart__header\">
    <th colspan=\"2\">
        <span class=\"h4\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Produit(s)"]);
        echo "</span>
    </th>
    <th>
        <span class=\"h4\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Taille"]);
        echo "</span>
    </th>
    <th class=\"h4\" width=\"200\">
        ";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Quantité(s)"]);
        echo "
    </th>
    <th class=\"text-right\">
        <span class=\"h4 pr-4\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Prix"]);
        echo "</span>
    </th>
    <th class=\"text-right h4\">
        <span class=\"pr-2\">";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Total"]);
        echo "</span>
    </th>
</tr>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  59 => 12,  53 => 9,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/table/header.htm", "");
    }
}
