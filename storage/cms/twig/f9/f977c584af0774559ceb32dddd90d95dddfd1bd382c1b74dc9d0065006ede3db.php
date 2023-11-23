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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/layouts/about.htm */
class __TwigTemplate_d1c0d9e5ba608bee8357b23085936af7fb55bbf2a3dda3897b42fe42c787d80f extends \Twig\Template
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
        echo "<body class=\"layout-about page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
<div class=\"block-head\">
    <div class=\"container\">
        <div class=\"pretitle-lined\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["head_pretitle"] ?? null), "html", null, true);
        echo "</div>
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>

        <div class=\"description\">
            ";
        // line 13
        echo ($context["head_intro"] ?? null);
        echo "
        </div>
    </div>
</div>

<div class=\"block-content-image image-left\">
    <div class=\"container\">
        <div class=\"row no-gutters align-items-center\">
            <div class=\"background-image-col\" style=\"background-image: url(";
        // line 21
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["block1_image"] ?? null));
        echo ")\"></div>
            <div class=\"col-lg-6 offset-lg-6\">
                <div class=\"content-wrapper\">
                    <h2 class=\"h1\">";
        // line 24
        echo twig_escape_filter($this->env, ($context["block1_title"] ?? null), "html", null, true);
        echo "</h2>

                    <div class=\"content\">
                        ";
        // line 27
        echo ($context["block1_content"] ?? null);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"block-about\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"content font-size-big3\">
                    <div class=\"pretitle-lined white\">";
        // line 40
        echo twig_escape_filter($this->env, ($context["block2_pretitle"] ?? null), "html", null, true);
        echo "</div>
                    <h2 class=\"h1\">";
        // line 41
        echo twig_escape_filter($this->env, ($context["block2_title"] ?? null), "html", null, true);
        echo "</h2>

                    ";
        // line 43
        echo ($context["block2_content"] ?? null);
        echo "

                    <a href=\"";
        // line 45
        echo RainLab\Pages\Classes\Page::url(($context["block2_link_url"] ?? null));
        echo "\" class=\"btn btn-secondary\">";
        echo twig_escape_filter($this->env, ($context["block2_link_name"] ?? null), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"block-content-image image-right\">
    <div class=\"container\">
        <div class=\"row no-gutters align-items-center\">
            <div class=\"col-lg-6\">
                <div class=\"content-wrapper text-lg-right\">
                    <h2 class=\"h1\">";
        // line 57
        echo twig_escape_filter($this->env, ($context["block3_title"] ?? null), "html", null, true);
        echo "</h2>

                    <div class=\"content\">
                        ";
        // line 60
        echo ($context["block3_content"] ?? null);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"background-image-col\" style=\"background-image: url(";
        // line 64
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["block3_image"] ?? null));
        echo ")\"></div>
        </div>
    </div>
</div>

<div class=\"block-contact\">
    <a name=\"contact\"></a>
    <div class=\"container\">
        <div class=\"row no-gutters align-items-center\">
            <div class=\"col-lg-6\">
                <div class=\"content-wrapper text-lg-right\">
                    <h2 class=\"h1\">";
        // line 75
        echo twig_escape_filter($this->env, ($context["contact_title"] ?? null), "html", null, true);
        echo "</h2>
                    <p class=\"h4\">";
        // line 76
        echo twig_escape_filter($this->env, ($context["contact_subtitle"] ?? null), "html", null, true);
        echo "</p>
                    <div class=\"content\">";
        // line 77
        echo ($context["contact_content"] ?? null);
        echo "</div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                ";
        // line 81
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("goldtestContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 82
        echo "            </div>
        </div>
    </div>
</div>

";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "
";
        // line 90
        if ((($context["block2_background_image"] ?? null) || ($context["block2_background_color"] ?? null))) {
            // line 91
            echo "    <style>
        ";
            // line 92
            if (($context["block2_background_image"] ?? null)) {
                // line 93
                echo "        .block-about {
            background-image: url(";
                // line 94
                echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["block2_background_image"] ?? null));
                echo ");
        }

        ";
            }
            // line 98
            echo "
        ";
            // line 99
            if (($context["block2_background_color"] ?? null)) {
                // line 100
                echo "        .block-about {
            background-color: ";
                // line 101
                echo twig_escape_filter($this->env, ($context["block2_background_color"] ?? null), "html", null, true);
                echo ";
        }

        ";
            }
            // line 105
            echo "    </style>
";
        }
        // line 107
        echo "</body>
</html>
























";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/layouts/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 107,  238 => 105,  231 => 101,  228 => 100,  226 => 99,  223 => 98,  216 => 94,  213 => 93,  211 => 92,  208 => 91,  206 => 90,  203 => 89,  199 => 88,  195 => 87,  188 => 82,  184 => 81,  177 => 77,  173 => 76,  169 => 75,  155 => 64,  148 => 60,  142 => 57,  125 => 45,  120 => 43,  115 => 41,  111 => 40,  95 => 27,  89 => 24,  83 => 21,  72 => 13,  66 => 10,  62 => 9,  57 => 6,  53 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/layouts/about.htm", "");
    }
}
