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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/category-slideshow-league5.htm */
class __TwigTemplate_f967e144ea69581d870097e0efc99492ae98bec3c494688ed82477d9a5cb4013 extends \Twig\Template
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
        echo "<div class=\"block-category-slideshow block-league5 ";
        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
        echo "-image\">
    <div class=\"container text-center\">
        <div class=\"pretitle-lined\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour les pros"]);
        echo "</div>
        <h2 class=\"h1\">League 5</h2>
    </div>

    <div class=\"carousel-wrapper\">
        <div class=\"row no-gutters\">
            <div class=\"col-lg-6\">
                <div id=\"carouselLeague5\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shop_league5_blocks"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 13
            echo "                            <div class=\"carousel-item carousel-item-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) ? ("active") : (""));
            echo "\"
                                 data-interval=\"10000\">
                                <img src=\"";
            // line 15
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["block"], "img_product", [], "any", false, false, false, 15));
            echo "\" alt=\"\" class=\"product\">
                            </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselLeague5\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Précédent"]);
        echo "</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselLeague5\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Suivant"]);
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-4 offset-lg-2 offset-xl-1 side-description align-self-center\">
                <h3>";
        // line 30
        echo twig_escape_filter($this->env, ($context["shop_league5_title"] ?? null), "html", null, true);
        echo "</h3>
                <hr>
                <div class=\"content\">
                    ";
        // line 33
        echo ($context["shop_league5_content"] ?? null);
        echo "
                </div>

                ";
        // line 36
        if ((($context["shop_league5_link_name"] ?? null) && ($context["shop_league5_link_url"] ?? null))) {
            // line 37
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, ($context["shop_league5_link_url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, ($context["shop_league5_link_name"] ?? null), "html", null, true);
            echo "</a>
                ";
        }
        // line 39
        echo "            </div>
        </div>
    </div>

    <style type=\"text/css\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shop_league5_blocks"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 45
            echo "        #carouselLeague5 .carousel-item-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45), "html", null, true);
            echo "::before {
            background-image: url(";
            // line 46
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["block"], "img_background", [], "any", false, false, false, 46));
            echo ");
        }
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </style>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/category-slideshow-league5.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 49,  168 => 46,  163 => 45,  146 => 44,  139 => 39,  131 => 37,  129 => 36,  123 => 33,  117 => 30,  109 => 25,  102 => 21,  97 => 18,  80 => 15,  72 => 13,  55 => 12,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/category-slideshow-league5.htm", "");
    }
}
