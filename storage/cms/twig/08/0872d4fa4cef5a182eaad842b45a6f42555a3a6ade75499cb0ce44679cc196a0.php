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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/signin.htm */
class __TwigTemplate_47c225cbc2c176d21ab34e97f539a4d3953ebfe6fce36f8efe27bcce4bbfde33 extends \Twig\Template
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
        echo "<form data-request=\"onSignin\" data-request-validate data-request-flash>
    <div class=\"form-group\">
        <label for=\"signin_email\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "</label>
        <input id=\"signin_email\" name=\"login\" type=\"text\"
               placeholder=\"email@example.com\" class=\"form-control\">
        <div data-validate-for=\"login\"></div>
    </div>

    <div class=\"form-group\">
        <label for=\"signin_password\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mot de passe"]);
        echo "</label>
        <input id=\"signin_password\" type=\"password\" name=\"password\"
               placeholder=\"••••••••••••\" class=\"form-control\">
        <div data-validate-for=\"password\"></div>
    </div>

    <div class=\"form-group buttons-form-group\">
        <button class=\"btn btn-primary\" type=\"submit\">
            ";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Login"]);
        echo "
        </button>

        <a class=\"forget-password-button\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reset-password");
        echo "\">
            ";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mot de passe perdu ?"]);
        echo "
        </a>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  68 => 21,  62 => 18,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/signin.htm", "");
    }
}
