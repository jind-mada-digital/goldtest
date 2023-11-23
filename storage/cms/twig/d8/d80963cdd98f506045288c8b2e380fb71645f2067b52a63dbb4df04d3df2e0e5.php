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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/customerprofile/default.htm */
class __TwigTemplate_2ee6ab2317681a0c5b00741855b50146ff05e6b0bb5facd8bc6f99832ab165a0 extends \Twig\Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSubmit\" data-request-validate data-request-flash>

    <div class=\"form-group\">
        <label for=\"civilite\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Civilité"]);
        echo "</label>
        <select id=\"civilite\" class=\"custom-select\" name=\"goldtest_civility\">
            <option value=\"Madame\" ";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 6), "goldtest_civility", [], "any", false, false, false, 6) == "Madame")) ? ("selected") : (""));
        echo ">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Madame"]);
        echo "</option>
            <option value=\"Monsieur\" ";
        // line 7
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 7), "goldtest_civility", [], "any", false, false, false, 7) == "Monsieur")) ? ("selected") : (""));
        echo ">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monsieur"]);
        echo "</option>
        </select>
    </div>

    <div class=\"form-group\">
        <label for=\"email\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "</label>
        <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"email@email.com\" name=\"email\"
               value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 14), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
        <div data-validate-for=\"email\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"firstname\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Prénom"]);
        echo "</label>
                <input class=\"form-control\" id=\"firstname\" type=\"text\" name=\"firstname\"
                       value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 23), "customer", [], "any", false, false, false, 23), "firstname", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
                <div data-validate-for=\"firstname\"></div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"lastname\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nom"]);
        echo "</label>
                <input class=\"form-control\" id=\"lastname\" type=\"text\" name=\"lastname\"
                       value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 31), "customer", [], "any", false, false, false, 31), "lastname", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                <div data-validate-for=\"lastname\"></div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"height\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Taille (cm)"]);
        echo "</label>
                <input class=\"form-control\" id=\"height\" type=\"text\" name=\"height\"
                       value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 42), "customer", [], "any", false, false, false, 42), "height", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                <div data-validate-for=\"height\"></div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"weight\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Poids (kg)"]);
        echo "</label>
                <input class=\"form-control\" id=\"weight\" type=\"text\" name=\"weight\"
                       value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 50), "customer", [], "any", false, false, false, 50), "weight", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
                <div data-validate-for=\"weight\"></div>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"custom-checkbox\">
            <input type=\"checkbox\" name=\"goldtest_is_school_member\" value=\"1\" ";
        // line 58
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 58), "goldtest_is_school_member", [], "any", false, false, false, 58) == 1)) ? ("checked") : (""));
        echo "
                   class=\"custom-control-input js-toggle-school\" id=\"is_school_member\">
            <label class=\"custom-control-label\" for=\"is_school_member\">
                ";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Je travaille pour école de ski"]);
        echo "
            </label>
        </div>
    </div>

    <div class=\"school-block\" style=\"";
        // line 66
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 66), "goldtest_is_school_member", [], "any", false, false, false, 66) == 1)) ? ("") : ("display: none"));
        echo "\">
        <div class=\"form-group\">
            <label for=\"goldtest_school_id\">";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ecole/Association/office"]);
        echo "</label>
            <select id=\"goldtest_school_id\" name=\"goldtest_school_id\" class=\"custom-select\">
                <option value=\"\">-</option>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 72
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 72), "goldtest_school_id", [], "any", false, false, false, 72) == twig_get_attribute($this->env, $this->source, $context["school"], "id", [], "any", false, false, false, 72))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "name", [], "any", false, false, false, 72), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </select>
            <div data-validate-for=\"goldtest_school_id\"></div>
        </div>

        <div class=\"form-group\">
            <label for=\"goldtest_school_title\">";
        // line 79
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Titre"]);
        echo "</label>
            <select name=\"goldtest_school_title\" id=\"goldtest_school_title\" class=\"custom-select\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools_titles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 82
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["title"], "name", [], "any", false, false, false, 82), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 82), "goldtest_school_title", [], "any", false, false, false, 82) == twig_get_attribute($this->env, $this->source, $context["title"], "name", [], "any", false, false, false, 82))) ? ("selected") : (""));
            echo " >";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["title"], "name", [], "any", false, false, false, 82)]);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                <option value=\"CUSTOM\" ";
        echo (((($context["isCustomTitle"] ?? null) == 1)) ? ("selected") : (""));
        echo ">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Autre"]);
        echo "</option>
            </select>
        </div>

        <div class=\"form-group school-title-other-block\" style=\"";
        // line 88
        echo (((($context["isCustomTitle"] ?? null) == 1)) ? ("") : ("display: none"));
        echo "\">
            <label for=\"goldtest_school_title_other\">";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Autre titre (merci de préciser)"]);
        echo "</label>
            <input name=\"goldtest_school_title_other\" id=\"goldtest_school_title_other\" type=\"text\" class=\"form-control\"
                value=\"";
        // line 91
        ((($context["isCustomTitle"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 91), "goldtest_school_title", [], "any", false, false, false, 91), "html", null, true))) : (print ("")));
        echo "\">
        </div>
    </div>

    <div class=\"form-group\">
        <label for=\"phone\">";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Numéro de téléphone"]);
        echo "</label>
        <input id=\"phone\" type=\"text\" name=\"goldtest_phone\" class=\"form-control\"
               value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "user", [], "any", false, false, false, 98), "goldtest_phone", [], "any", false, false, false, 98), "html", null, true);
        echo "\">
        <div data-validate-for=\"goldtest_phone\"></div>
    </div>

    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "customer", [], "any", false, false, false, 102), "is_guest", [], "any", false, false, false, 102)) {
            // line 103
            echo "        <div class=\"mall-callout\">
            ";
            // line 104
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.guest_upgrade.callout"]);
            echo "
        </div>
    ";
        }
        // line 107
        echo "
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"password\">";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mot de passe"]);
        echo "</label>
                <input autocomplete=\"false\" class=\"form-control\" id=\"password\" type=\"text\" name=\"password\">
                <div data-validate-for=\"password\"></div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"password_repeat\">";
        // line 118
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Répéter le mot de passe"]);
        echo "</label>
                <input class=\"form-control\" id=\"password_repeat\" type=\"text\" name=\"password_repeat\">
                <div data-validate-for=\"password_repeat\"></div>
            </div>
        </div>
    </div>

    <div class=\"mall-form-actions mb-5\">
        <button class=\"btn btn-primary\" type=\"submit\" data-attach-loading>
            ";
        // line 127
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.save"]);
        echo "
        </button>
    </div>
</form>
";
        // line 131
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scripts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/customerprofile/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 131,  290 => 127,  278 => 118,  268 => 111,  262 => 107,  256 => 104,  253 => 103,  251 => 102,  244 => 98,  239 => 96,  231 => 91,  226 => 89,  222 => 88,  212 => 84,  199 => 82,  195 => 81,  190 => 79,  183 => 74,  170 => 72,  166 => 71,  160 => 68,  155 => 66,  147 => 61,  141 => 58,  130 => 50,  125 => 48,  116 => 42,  111 => 40,  99 => 31,  94 => 29,  85 => 23,  80 => 21,  70 => 14,  65 => 12,  55 => 7,  49 => 6,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/customerprofile/default.htm", "");
    }
}
