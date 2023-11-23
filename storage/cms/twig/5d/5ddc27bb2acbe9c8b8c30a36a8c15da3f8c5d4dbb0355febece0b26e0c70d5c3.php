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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/signup.htm */
class __TwigTemplate_6dcf7f1cf9ec98be4eb6fc1bfa250943f2c38d7f3d61b740507fdeeb4506dd01 extends \Twig\Template
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
        echo "<form data-request=\"onSignup\" data-request-validate data-request-flash>

    <div class=\"form-group\">
        <label for=\"civilite\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Civilité"]);
        echo "</label>
        <select id=\"civilite\" class=\"custom-select\" name=\"goldtest_civility\">
            <option value=\"Madame\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Madame"]);
        echo "</option>
            <option value=\"Monsieur\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monsieur"]);
        echo "</option>
        </select>
    </div>

    <div class=\"form-group\">
        <label for=\"signup_email\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "</label>
        <input id=\"signup_email\" type=\"email\" placeholder=\"email@email.com\" name=\"email\" class=\"form-control\">
        <div data-validate-for=\"email\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"firstname\">";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Prénom"]);
        echo "</label>
                <input id=\"firstname\" type=\"text\" name=\"firstname\" class=\"form-control\">
                <div data-validate-for=\"firstname\"></div>
            </div>
        </div>

        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"lastname\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nom"]);
        echo "</label>
                <input id=\"lastname\" type=\"text\" name=\"lastname\" class=\"form-control\">
                <div data-validate-for=\"lastname\"></div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"height\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Taille (cm)"]);
        echo "</label>
                <input id=\"height\" type=\"text\" name=\"height\" class=\"form-control\">
                <div data-validate-for=\"height\"></div>
            </div>
        </div>

        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"weight\">";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Poids (kg)"]);
        echo "</label>
                <input id=\"weight\" type=\"text\" name=\"weight\" class=\"form-control\">
                <div data-validate-for=\"weight\"></div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"signup_password\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mot de passe"]);
        echo "</label>
                <input id=\"signup_password\" type=\"password\" name=\"password\" class=\"form-control\">
                <div data-validate-for=\"password\"></div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"password_repeat\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Répéter le mot de passe"]);
        echo "</label>
                <input id=\"password_repeat\" type=\"password\" name=\"password_repeat\" class=\"form-control\">
                <div data-validate-for=\"password_repeat\"></div>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"custom-checkbox\">
            <input type=\"checkbox\" name=\"goldtest_is_school_member\" value=\"1\"
                   class=\"custom-control-input js-toggle-school\" id=\"is_school_member\">
            <label class=\"custom-control-label\" for=\"is_school_member\">
                ";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Je travaille pour école de ski"]);
        echo "
            </label>
        </div>
    </div>

    <div class=\"school-block\" style=\"display: none\">
        <div class=\"form-group\">
            <label for=\"school\">";
        // line 82
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ecole/Association/office"]);
        echo "</label>
            <select id=\"school\" name=\"goldtest_school_id\" class=\"custom-select\">
                <option value=\"\">-</option>
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 86
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "name", [], "any", false, false, false, 86), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </select>
            <div data-validate-for=\"goldtest_school_id\"></div>
        </div>

        <div class=\"form-group\">
            <label for=\"goldtest_school_title\">";
        // line 93
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Titre"]);
        echo "</label>
            <select name=\"goldtest_school_title\" id=\"goldtest_school_title\" class=\"custom-select\">
                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools_titles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 96
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["title"], "name", [], "any", false, false, false, 96), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["title"], "name", [], "any", false, false, false, 96)]);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                <option value=\"CUSTOM\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Autre"]);
        echo "</option>
            </select>
        </div>

        <div class=\"form-group school-title-other-block\" style=\"display: none\">
            <label for=\"goldtest_school_title_other\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Autre titre (merci de préciser)"]);
        echo "</label>
            <input name=\"goldtest_school_title_other\" id=\"goldtest_school_title_other\" type=\"text\" class=\"form-control\">
        </div>
    </div>

    <div class=\"form-group\">
        <label for=\"phone\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Numéro de téléphone"]);
        echo "</label>
        <input id=\"phone\" type=\"text\" name=\"goldtest_phone\" class=\"form-control\">
        <div data-validate-for=\"goldtest_phone\"></div>
    </div>

    <div class=\"mall-signup__billing-address\">
        <h4 class=\"mall-signup__subheading\">
            ";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adresse"]);
        echo "
        </h4>

        ";
        // line 119
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['type'] = "billing"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::addressform")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 120
        echo "
        <div class=\"mall-signup__shipping-address-option form-group\">
            <div class=\"custom-checkbox\">
                <input class=\"custom-control-input js-mall-toggle-shipping-address\"
                       type=\"checkbox\"
                       name=\"use_different_shipping\" value=\"1\"
                       id=\"use_different_shipping\">
                <label class=\"custom-control-label\" for=\"use_different_shipping\">
                    ";
        // line 128
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Utiliser une autre adresse de livraison"]);
        echo "
                </label>
            </div>
        </div>
    </div>

    <div class=\"mall-shipping-address\" style=\"display: none\">
        <h3 class=\"mall-signup__subheading\">
            ";
        // line 136
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adresse de livraison"]);
        echo "
        </h3>
        ";
        // line 138
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['type'] = "shipping"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::addressform")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 139
        echo "    </div>

    ";
        // line 141
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::terms")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 142
        echo "
    <div class=\"mall-form-actions\">
        <button class=\"btn btn-primary btn-block mall-btn-signup\" type=\"submit\">
            ";
        // line 145
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["S'inscrire"]);
        echo "
        </button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/signup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 145,  279 => 142,  275 => 141,  271 => 139,  266 => 138,  261 => 136,  250 => 128,  240 => 120,  235 => 119,  229 => 116,  219 => 109,  210 => 103,  201 => 98,  190 => 96,  186 => 95,  181 => 93,  174 => 88,  163 => 86,  159 => 85,  153 => 82,  143 => 75,  128 => 63,  118 => 56,  105 => 46,  94 => 38,  81 => 28,  70 => 20,  59 => 12,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/signup.htm", "");
    }
}
