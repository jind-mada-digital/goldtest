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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/myaccount/default.htm */
class __TwigTemplate_7b727928b17566f7f681a15e70852ba5991b867d7fa42d981e825fb148ca3870 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"mall-my-account\">
        <nav class=\"mall-my-account__nav\">
            <div class=\"mall-my-account__nav-item
                ";
        // line 5
        echo (((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", [], "any", false, false, false, 5) == "orders")) ? ("mall-my-account__nav-item--active") : (""));
        echo "\">
                <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageUrl", [0 => "orders"], "method", false, false, false, 6), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.orders"]);
        echo "</a>
            </div>
            <div class=\"mall-my-account__nav-item
                ";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", [], "any", false, false, false, 9) == "profile")) ? ("mall-my-account__nav-item--active") : (""));
        echo "\">
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageUrl", [0 => "profile"], "method", false, false, false, 10), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.profile"]);
        echo "</a>
            </div>
            <div class=\"mall-my-account__nav-item
                ";
        // line 13
        echo (((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", [], "any", false, false, false, 13) == "addresses")) ? ("mall-my-account__nav-item--active") : (""));
        echo "\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageUrl", [0 => "addresses"], "method", false, false, false, 14), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.addresses"]);
        echo "</a>
            </div>
            <div class=\"mall-my-account__nav-item\">
                <a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                    ";
        // line 18
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.session.logout"]);
        echo "
                </a>
            </div>
        </nav>

        <div class=\"mall-my-account__content\">
            ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . ("::pages/" . twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", [], "any", false, false, false, 24)))        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/myaccount/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  89 => 24,  80 => 18,  71 => 14,  67 => 13,  59 => 10,  55 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/myaccount/default.htm", "");
    }
}
