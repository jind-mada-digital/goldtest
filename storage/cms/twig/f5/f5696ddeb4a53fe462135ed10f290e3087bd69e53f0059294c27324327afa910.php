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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/plugins/goldtest/site/components/contact/default.htm */
class __TwigTemplate_ffd14f1df42ee789121a5780de5b041901a593c6db941916c261f9ed9799635a extends \Twig\Template
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
        echo "<form id=\"contactForm\" method=\"post\" data-request=\"onSendContact\" data-request-validate>
    <div class=\"form-group\">
        <label for=\"name\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nom complet"]);
        echo "</label>
        <input name=\"name\" id=\"name\" type=\"text\" class=\"form-control\">
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"email\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "</label>
                <input name=\"email\" id=\"email\" type=\"email\" class=\"form-control\">
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"phone\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["N° de Tél"]);
        echo "</label>
                <input name=\"phone\" id=\"phone\" type=\"text\" class=\"form-control\">
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label for=\"is_a_swiss_ski_school\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Je suis"]);
        echo "</label>
        <div class=\"custom-checkbox\">
            <input type=\"checkbox\" name=\"is_member\" class=\"custom-control-input\" id=\"is_a_swiss_ski_school\" value=\"1\">
            <label class=\"custom-control-label\" for=\"is_a_swiss_ski_school\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Une école suisse de ski"]);
        echo "</label>
        </div>
    </div>

    <div class=\"form-group\">
        <label for=\"message\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Votre message"]);
        echo "</label>
        <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"5\"></textarea>
    </div>

    <div class=\"form-group d-none\">
        <label for=\"username\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Protection anti-spam, merci de garder ce champ vide"]);
        echo "</label>
        <input name=\"username\" id=\"username\" type=\"text\" class=\"form-control\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Envoyer"]);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/plugins/goldtest/site/components/contact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  92 => 36,  84 => 31,  76 => 26,  70 => 23,  60 => 16,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/plugins/goldtest/site/components/contact/default.htm", "");
    }
}
