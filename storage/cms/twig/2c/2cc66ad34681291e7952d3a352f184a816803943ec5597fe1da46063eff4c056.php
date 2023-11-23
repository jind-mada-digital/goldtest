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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/search.htm */
class __TwigTemplate_39c721328262e68e57ffd8cd3f53e43f69ed0dad68fea09ff5099b3efe44c5d9 extends \Twig\Template
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
        echo "<div class=\"container search-input-area\" style=\"min-height: 300px;\">
    <div class=\"search-input-area-inner\">
        <form action=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["searchInput"] ?? null), "searchPage", [], "any", false, false, false, 3));
        echo "?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
        echo "\" method=\"get\">
            <div class=\"ss-search-form\">
                <div class=\"ss-search-form__input\">
                    <input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["goldtest.mall::lang.label.search"]);
        echo "\"
                           value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["searchInput"] ?? null), "query", [], "any", false, false, false, 7), "html", null, true);
        echo "\"
                           autocomplete=\"off\"
                           autofocus
                    >
                    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["goldtest.mall::lang.label.search"]);
        echo "</button>
                </div>
            </div>
        </form>
    </div>
    ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("searchResults"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "</div>

<style>
.search-input-area-inner {
    margin-bottom: 1rem;
    margin-top: 1rem;
}
.search-input-area .ss-search-form__input {
    display: flex;
}
.search-input-area .ss-search-form__input input {
    padding: 2rem;
}
.search-input-area .ss-result {
    margin-bottom: 1em;
    display: flex;
    align-items: center;
    border-bottom: 1px solid lightgray;
    padding-bottom: 1em;
}
.search-input-area .ss-result__aside {
    margin-right: .5em;
    min-width: 150px;
    display: flex;
    height: 100%;
}
.search-input-area .ss-result__title {
    font-weight: bold;
    margin-bottom: .5em;
}
.search-input-area .ss-result__badge {
    font-size: .7em;
    padding: .2em .5em;
    border-radius: 4px;
    margin-left: .75em;
    background: #eee;
    display: inline-block;
}
.search-input-area .ss-result__text {
    margin-bottom: .5em;
    text-transform: lowercase;
}
.search-input-area .ss-result__url {
}

.search-input-area .ss-search-form {
    position: relative;
}
.search-input-area .ss-search-form__results {
    display: none;
    position: absolute;
    left: 0;
    top: 35px;
    width: 100%;
    background: #fff;
    padding: 1em;
    box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
}
.search-input-area .ss-search-form__results--visible {
    display: block;
}
</style>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  68 => 16,  60 => 11,  53 => 7,  49 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/search.htm", "");
    }
}
