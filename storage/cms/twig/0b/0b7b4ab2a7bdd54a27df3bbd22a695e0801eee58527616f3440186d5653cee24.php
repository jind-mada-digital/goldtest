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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/searchresults/content.htm */
class __TwigTemplate_64f6238431d4cafdb107adee9a4bcade3b0a0fe207fb5ae4314b9b309bac606a extends \Twig\Template
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
        echo "<h4 class=\"ss-result__title\">
    <a href=\"";
        // line 2
        echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, false, 2));
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "title", [], "any", false, false, false, 2);
        echo "</a>

    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "</h4>

<p class=\"ss-result__text\">
    ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "excerpt", [], "any", false, false, false, 13);
        echo "
</p>

<p class=\"ss-result__url\">
    <a href=\"";
        // line 17
        echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, false, 17));
        echo "\" class=\"ss-result__link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "visitPageMessage", [], "any", false, false, false, 17), "html", null, true);
        echo " &rarr;</a>
</p>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/searchresults/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  62 => 13,  57 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/searchresults/content.htm", "");
    }
}
