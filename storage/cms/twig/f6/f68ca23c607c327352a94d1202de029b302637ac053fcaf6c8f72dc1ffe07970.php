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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/layouts/home.htm */
class __TwigTemplate_b503c99138a94b661c6dfbe947b0c9d1cf3cc3c8af7efcf96512306f87c96c24 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["localePicker"] ?? null), "activeLocale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "<body class=\"layout-home page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "<div class=\"parallax\">
    <div class=\"parallax__first\"></div>
    <div class=\"parallax__second\"></div>
</div>
<div class=\"block-home-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-left\">
                <h1>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>

                <div class=\"buttons\">
                    <div class=\"float-lg-left mr-3\">
                        ";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour les pros"]);
        echo "<br>
                        <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop-league5");
        echo "\" class=\"btn btn-primary\">League 5</a>
                    </div>
                    <div class=\"float-lg-left\">
                        ";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour tous"]);
        echo "<br>
                        <a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop-club5");
        echo "\" class=\"btn btn-secondary\">Club 5</a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"col-lg-6 col-right\">
                <div class=\"content\">
                    ";
        // line 30
        echo ($context["head_text"] ?? null);
        echo "
                </div>
            </div>
        </div>
    </div>

</div>
";
        // line 37
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['image'] = "left"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category-slideshow-league5"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
";
        // line 39
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['image'] = "right"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category-slideshow-club5"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "
<div class=\"block-about\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"content font-size-big3\">
                    <div class=\"pretitle-lined white\">Goldtest</div>
                    <h2 class=\"h1\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["about_title"] ?? null), "html", null, true);
        echo "</h2>

                    ";
        // line 49
        echo ($context["about_content"] ?? null);
        echo "

                    <a href=\"";
        // line 51
        echo RainLab\Pages\Classes\Page::url(($context["about_link_url"] ?? null));
        echo "\" class=\"btn btn-secondary\">";
        echo twig_escape_filter($this->env, ($context["about_link_name"] ?? null), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "
";
        // line 62
        if ((($context["about_background_image"] ?? null) || ($context["about_background_color"] ?? null))) {
            // line 63
            echo "    <style>
        ";
            // line 64
            if (($context["about_background_image"] ?? null)) {
                // line 65
                echo "        .block-about {
            background-image: url(";
                // line 66
                echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["about_background_image"] ?? null));
                echo ");
        }

        ";
            }
            // line 70
            echo "
        ";
            // line 71
            if (($context["about_background_color"] ?? null)) {
                // line 72
                echo "        .block-about {
            background-color: ";
                // line 73
                echo twig_escape_filter($this->env, ($context["about_background_color"] ?? null), "html", null, true);
                echo ";
        }

        ";
            }
            // line 77
            echo "    </style>
";
        }
        // line 79
        echo "</body>
</html>















";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "shop_league5_blocks", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 97
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "





";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "shop_club5_blocks", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 107
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 107,  240 => 106,  232 => 100,  224 => 97,  220 => 96,  201 => 79,  197 => 77,  190 => 73,  187 => 72,  185 => 71,  182 => 70,  175 => 66,  172 => 65,  170 => 64,  167 => 63,  165 => 62,  162 => 61,  158 => 60,  154 => 59,  152 => 58,  140 => 51,  135 => 49,  130 => 47,  121 => 40,  116 => 39,  113 => 38,  108 => 37,  98 => 30,  88 => 23,  84 => 22,  78 => 19,  74 => 18,  67 => 14,  57 => 6,  53 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/layouts/home.htm", "");
    }
}
