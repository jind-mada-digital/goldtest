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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/layouts/default-static.htm */
class __TwigTemplate_feed27b37eb65591fe0e25005566390eb0c731964d9fd084b989b3783844042a extends \Twig\Template
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
        echo "<body class=\"layout-default-static page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
<div class=\"block-content\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>

                <div class=\"content\">
                    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 15
        echo "                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 21
        if ((($context["about_title"] ?? null) && ($context["about_content"] ?? null))) {
            // line 22
            echo "    <div class=\"block-about\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"content font-size-big3\">
                        ";
            // line 27
            if (($context["about_pretitle"] ?? null)) {
                // line 28
                echo "                            <div class=\"pretitle-lined white\">";
                echo twig_escape_filter($this->env, ($context["about_pretitle"] ?? null), "html", null, true);
                echo "</div>
                        ";
            }
            // line 30
            echo "
                        <h2 class=\"h1\">";
            // line 31
            echo twig_escape_filter($this->env, ($context["about_title"] ?? null), "html", null, true);
            echo "</h2>

                        ";
            // line 33
            echo ($context["about_content"] ?? null);
            echo "

                        ";
            // line 35
            if ((($context["about_link_url"] ?? null) && ($context["about_link_name"] ?? null))) {
                // line 36
                echo "                            <a href=\"";
                echo RainLab\Pages\Classes\Page::url(($context["about_link_url"] ?? null));
                echo "\" class=\"btn btn-secondary\">
                                ";
                // line 37
                echo twig_escape_filter($this->env, ($context["about_link_name"] ?? null), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 40
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 46
        echo "
";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "</body>
</html>






";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/layouts/default-static.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  138 => 48,  134 => 47,  131 => 46,  123 => 40,  117 => 37,  112 => 36,  110 => 35,  105 => 33,  100 => 31,  97 => 30,  91 => 28,  89 => 27,  82 => 22,  80 => 21,  72 => 15,  70 => 14,  64 => 11,  57 => 6,  53 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/layouts/default-static.htm", "");
    }
}
