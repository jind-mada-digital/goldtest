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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/default.htm */
class __TwigTemplate_ec9463e85531ce52ab064e25a11704e85074676546b6e8beda036c6b63b92b74 extends \Twig\Template
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
        echo "<div class=\"container mall-signup\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"card mall-signup__signin\">
                <div class=\"card-header\">
                    <h1>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Login"]);
        echo "</h1>
                </div>
                <div class=\"card-body\">
                    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::signin")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"card mall-signup__signup mall-signup-form\">
                <div class=\"card-header\">
                    <h1>";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Inscription"]);
        echo "</h1>
                </div>
                <div class=\"card-body\">
                    ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::signup")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scripts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  72 => 20,  68 => 19,  62 => 16,  54 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/default.htm", "");
    }
}
