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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/images.htm */
class __TwigTemplate_6dbe17f552db6038fdd7a4859ea79180ffc6be1d22772edf4c62fff15cdc1a1e extends \Twig\Template
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
        if (($context["images"] ?? null)) {
            // line 2
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["images"] ?? null), "first", [], "any", false, false, false, 2), "thumb", [0 => ($context["auto"] ?? null), 1 => 740], "method", false, false, false, 2), "html", null, true);
            echo "\"
         srcset=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["images"] ?? null), "first", [], "any", false, false, false, 3), "thumb", [0 => ($context["auto"] ?? null), 1 => 740], "method", false, false, false, 3), "html", null, true);
            echo " 1x, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["images"] ?? null), "first", [], "any", false, false, false, 3), "thumb", [0 => ($context["auto"] ?? null), 1 => 1480], "method", false, false, false, 3), "html", null, true);
            echo " 2x\"
         alt=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["images"] ?? null), "first", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
            echo "\" class=\"full-image\">

    <div class=\"thumbnails\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 8
                echo "            <a class=\"thumbnail ";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) ? ("active") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-debug=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 8), "html", null, true);
                echo "\"
               data-full-src=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => ($context["auto"] ?? null), 1 => 740], "method", false, false, false, 9), "html", null, true);
                echo "\"
               data-full-srcset=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => ($context["auto"] ?? null), 1 => 740], "method", false, false, false, 10), "html", null, true);
                echo " 1x, ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => ($context["auto"] ?? null), 1 => 1480], "method", false, false, false, 10), "html", null, true);
                echo " 2x\">
                <img srcset=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 70, 1 => 70], "method", false, false, false, 11), "html", null, true);
                echo " 1x, ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 140, 1 => 140], "method", false, false, false, 11), "html", null, true);
                echo " 2x\"
                     src=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 70, 1 => 70], "method", false, false, false, 12), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
            </a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 15), "videos", [], "any", false, false, false, 15))) {
                // line 16
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 16), "videos", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 17
                    echo "            <div class=\"video mr-2\" style=\"background: #fff;cursor: pointer;height: 90px;width:90px;\" data-video=\"";
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, false, 17));
                    echo "\" data-toggle=\"modal\" data-target=\"#videoModal";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                ";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "                <img src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, false, 19));
                        echo "\" style=\"width: 100%;max-height: 90px;\" alt=\"play-video\">
                ";
                    } else {
                        // line 21
                        echo "                <img src=\"";
                        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/play-video.png");
                        echo "\" style=\"width: 100%;\" alt=\"play-video\">
                ";
                    }
                    // line 23
                    echo "            </div>

            <div class=\"modal fade videoM\" id=\"videoModal";
                    // line 25
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-xl\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <video controls width=\"100%\" id=\"productVideo";
                    // line 30
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                        <source src=\"";
                    // line 31
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, false, 31));
                    echo "\" type=\"video/mp4\">
                    </video>
                    </div>
                </div>
                </div>
            </div>

            ";
                    // line 38
                    echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'                    );
                    // line 39
                    echo "            <script>
                \$(function(){
                    \$('#videoModal";
                    // line 41
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "').on('shown.bs.modal', function () {
                        \$('#productVideo";
                    // line 42
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "')[0].play();
                    });
                    \$('#videoModal";
                    // line 44
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "').on('hidden.bs.modal', function () {
                        \$('#productVideo";
                    // line 45
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "')[0].pause();
                    });
                });
            </script>
            ";
                    // line 38
                    echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true                    );
                    // line 50
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "        ";
            }
            // line 52
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/images.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 52,  206 => 51,  200 => 50,  198 => 38,  191 => 45,  187 => 44,  182 => 42,  178 => 41,  174 => 39,  172 => 38,  162 => 31,  158 => 30,  150 => 25,  146 => 23,  140 => 21,  134 => 19,  132 => 18,  125 => 17,  120 => 16,  117 => 15,  98 => 12,  92 => 11,  86 => 10,  82 => 9,  73 => 8,  56 => 7,  50 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/images.htm", "");
    }
}
