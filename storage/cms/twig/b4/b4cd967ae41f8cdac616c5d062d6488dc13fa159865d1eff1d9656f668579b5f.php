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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/resetpassword/restore.htm */
class __TwigTemplate_2815aa2cce31084f4956594985dca20910434237931afc105e39c7e7a1a8df59 extends \Twig\Template
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
        echo "<p>
    ";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mot de passe perdu ? Aucun problème! Entrez votre adresse email pour valider votre compte."]);
        echo "
</p>

<form data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRestorePassword\"
      data-request-update=\"'";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\"
      data-request-validate
      data-request-flash>
    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div class=\"form-group\">
        <label for=\"userRestoreEmail\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\">
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Réinitialiser le mot de passe"]);
        echo "</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/resetpassword/restore.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  62 => 12,  56 => 9,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/resetpassword/restore.htm", "");
    }
}
