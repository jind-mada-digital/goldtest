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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/header-search.htm */
class __TwigTemplate_4302decbbfc93eb9e9ad30079cfb2f270fff282813d36667b5abb03ed2de4c8d extends \Twig\Template
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
        echo "<form class=\"header-search-form hidden-sm\" action=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
        echo "\" method=\"get\">
    <div class=\"ss-search-form\">
        <div class=\"ss-search-form__input\">
            <input name=\"q\" type=\"text\" placeholder=\"";
        // line 4
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["goldtest.mall::lang.label.search"]);
        echo "\"
                   value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["searchInput"] ?? null), "query", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
                   autocomplete=\"off\"
                   autofocus
            >
            <button type=\"submit\" class=\"search-button\">
              <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/search.svg");
        echo "\" alt=\"";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["goldtest.mall::lang.label.search"]);
        echo "\" width=\"16\">
            </button>
        </div>
    </div>
</form>

<style>
.header-search-form {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-right: 0.5rem;
}

.header-search-form .search-button {
    position: absolute;
    left: 0px;
    height: 20px;
    width: 20px;
    padding: 0;
    margin: 0;
    border: none;
    background: none;
    outline: none !important;
    cursor: pointer;
}

.header-search-form input {
    border: 0;
    font-size: 16px;
    appearance: none;
    outline: none;
    padding-left: 25px;
    background: transparent;
    border-bottom: 2px solid #7b7b7b;
}

.menu-search {
    display: none;
}

@media (max-width: 767.98px) {
    .menu-search {
        display: block;
    }
}

@media (max-width: 767.98px) {
    .header-search-form {
        display: none;
    }
}
</style>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/header-search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  50 => 5,  46 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/header-search.htm", "");
    }
}
