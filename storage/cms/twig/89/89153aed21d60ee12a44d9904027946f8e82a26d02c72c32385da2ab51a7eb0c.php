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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/plugins/goldtest/mall/components/initcheckout/default.htm */
class __TwigTemplate_77690487c0d12df947ad8d6bf536fcf705cf3b28b1c18fbe4cada1446274da8b extends \Twig\Template
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
        echo "<div class=\"mall-order-type__entry\">
    <div class=\"mall-order-type__text\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Commande groupée."]);
        echo "<br>
        ";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mon association gère le paiement. La livraison se fait à l’association."]);
        echo "
    </div>
    <div class=\"mall-order-type__actions\">
        <button class=\"btn btn-secondary\" data-request=\"onGroupOrder\" data-attach-loading>
            ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Choisir"]);
        echo "
        </button>
    </div>
</div>

<div class=\"mall-order-type__entry mall-order-type__entry--active\">
    <div class=\"mall-order-type__text\">
        ";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Commande privée."]);
        echo "<br>
        ";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Je paie et choisis l’adresse de livraison."]);
        echo "
    </div>
    <div class=\"mall-order-type__actions\">
        <button class=\"btn btn-primary\" data-request=\"onPrivateOrder\" data-attach-loading>
            ";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Choisir"]);
        echo "
        </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/plugins/goldtest/mall/components/initcheckout/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  66 => 16,  62 => 15,  52 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/plugins/goldtest/mall/components/initcheckout/default.htm", "");
    }
}
