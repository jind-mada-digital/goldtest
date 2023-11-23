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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/default.htm */
class __TwigTemplate_7b765aefad4073b22fff1ca59f20436943f4edcaa3a89af610c6e4467c12ab2f extends \Twig\Template
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
        echo "<div class=\"mall-product\">

    <div class=\"container\">
        <div class=\"row no-gutters\">
            <div class=\"col-lg-6 mall-product__images\">
                ";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['images'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "all_images", [], "any", false, false, false, 6)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::images")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "            </div>

            <div class=\"col-lg-6 mall-product__main\">
                <div class=\"mall-product__category\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 11), "getPropertyValueBySlug", [0 => "pre-titre-categorie"], "method", false, false, false, 11), "html", null, true);
        echo "
                </div>

                <h1 class=\"mall-product__name\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>

                ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_defined_id", [], "any", false, false, false, 16)) {
            // line 17
            echo "                    <div class=\"mall-product__id\">
                        ";
            // line 18
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["n°"]);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "user_defined_id", [], "any", false, false, false, 18), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 21
        echo "
                ";
        // line 22
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 22)) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 22)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 22), "description_short", [], "any", false, false, false, 22)))) {
            // line 23
            echo "                    <p class=\"mall-product__description-short\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 23)) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 23)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 23), "description_short", [], "any", false, false, false, 23))), "html", null, true);
            echo "</p>
                ";
        }
        // line 25
        echo "
                ";
        // line 26
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 26), "first", [], "any", false, false, false, 26), "slug", [], "any", false, false, false, 26) != "league5") || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "goldtest_is_school_member", [], "any", false, false, false, 26))) {
            // line 27
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::cart")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 28
            echo "                ";
        } else {
            // line 29
            echo "                    <div class=\"mall-product__cant_see_price\">
                        ";
            // line 30
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cet article est exlusivement réservé aux écoles suisses de ski. Connectez-vous avec votre compte :image pour voir le prix.", ["image" => (("<img src=\"" . $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/60_pro-red.svg")) . "\" alt=\"PRO\">")]]);
            // line 32
            echo "
                    </div>

                    <a href=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\" class=\"btn btn-sm mt-4 btn-secondary\">
                        ";
            // line 36
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Login ou inscription"]);
            echo "
                    </a> <br>

                    <a href=\"";
            // line 39
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop-club5");
            echo "\" class=\"btn btn-sm mt-4 btn-primary\">
                        ";
            // line 40
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Boutique publique"]);
            echo "
                    </a>
                ";
        }
        // line 43
        echo "            </div>
        </div>
    </div>


    <div class=\"container-fluid mall-product__assurances\">
        <div class=\"row no-gutters\">
            ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "goldtest_assurances_activity", [], "any", false, false, false, 50)) {
            // line 51
            echo "                <div class=\"col\">
                    <img src=\"";
            // line 52
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/80_mountain.svg");
            echo "\" alt=\"\">
                    <h4>";
            // line 53
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Activité"]);
            echo "</h4>
                    <div class=\"description\">
                        ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "goldtest_assurances_activity", [], "any", false, false, false, 55), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 59
        echo "
            ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "goldtest_assurances_design", [], "any", false, false, false, 60)) {
            // line 61
            echo "                <div class=\"col\">
                    <img src=\"";
            // line 62
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/80_style.svg");
            echo "\" alt=\"\">
                    <h4>";
            // line 63
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Design"]);
            echo "</h4>
                    <div class=\"description\">
                        ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "goldtest_assurances_design", [], "any", false, false, false, 65), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 69
        echo "
            ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "goldtest_assurances_material", [], "any", false, false, false, 70)) {
            // line 71
            echo "                <div class=\"col\">
                    <img src=\"";
            // line 72
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/80_material.svg");
            echo "\" alt=\"\">
                    <h4>";
            // line 73
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Matériel"]);
            echo "</h4>
                    <div class=\"description\">
                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "goldtest_assurances_material", [], "any", false, false, false, 75), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 79
        echo "
            ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "goldtest_assurances_details", [], "any", false, false, false, 80)) {
            // line 81
            echo "                <div class=\"col\">
                    <img src=\"";
            // line 82
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/80_zip.svg");
            echo "\" alt=\"\">
                    <h4>";
            // line 83
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Détails"]);
            echo "</h4>
                    <div class=\"description\">
                        ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "goldtest_assurances_details", [], "any", false, false, false, 85), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 89
        echo "        </div>
    </div>

    <div class=\"mall-product__description\">
        <div class=\"row no-gutters\">
            <div class=\"col-lg-6 col-description align-self-center\">
                ";
        // line 95
        echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 95)) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 95)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 95), "description", [], "any", false, false, false, 95)));
        echo "
            </div>
            <div class=\"col-lg-6 col-slideshow\">
                ";
        // line 98
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 98), "goldtest_context_images", [], "any", false, false, false, 98)) > 0)) {
            // line 99
            echo "                    <div id=\"carouselContextImages\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 101), "goldtest_context_images", [], "any", false, false, false, 101));
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
                // line 102
                echo "                                <div class=\"carousel-item carousel-item-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102), "html", null, true);
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 102)) ? ("active") : (""));
                echo "\"
                                     data-interval=\"10000\">
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                        </div>

                        ";
            // line 108
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 108), "goldtest_context_images", [], "any", false, false, false, 108)) > 1)) {
                // line 109
                echo "                            <a class=\"carousel-control-prev\" href=\"#carouselContextImages\" role=\"button\"
                               data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">";
                // line 112
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Précédent"]);
                echo "</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselContextImages\" role=\"button\"
                               data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">";
                // line 117
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Suivant"]);
                echo "</span>
                            </a>
                        ";
            }
            // line 120
            echo "                    </div>

                    <style type=\"text/css\">
                        ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product", [], "any", false, false, false, 123), "goldtest_context_images", [], "any", false, false, false, 123));
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
                // line 124
                echo "                        #carouselContextImages .carousel-item-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 124), "html", null, true);
                echo " {
                            background-image: url(";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 1600, 1 => "auto"], "method", false, false, false, 125), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                    </style>
                ";
        }
        // line 131
        echo "            </div>
        </div>
    </div>

    ";
        // line 135
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "accessories", [], "any", false, false, false, 135)) > 0)) {
            // line 136
            echo "        <div class=\"mall-product__suggested-products\">
            <div class=\"pretitle-lined text-center\">";
            // line 137
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["A combiner avec"]);
            echo "</div>

            <div class=\"row no-gutters mall-products__products\">
                ";
            // line 140
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "accessories", [], "any", false, false, false, 140)) > 1)) {
                // line 141
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "accessories", [], "any", false, false, false, 141), "random", [0 => 2], "method", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["suggestedItem"]) {
                    // line 142
                    echo "                        ";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['item'] = $context["suggestedItem"]                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@accessories-item"                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 143
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suggestedItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                ";
            } else {
                // line 145
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['item'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "accessories", [], "any", false, false, false, 145), "first", [], "any", false, false, false, 145)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@accessories-item"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 146
                echo "                ";
            }
            // line 147
            echo "            </div>
        </div>
    ";
        }
        // line 150
        echo "</div>


<!-- Modal -->
<div class=\"modal fade\" id=\"sizeGuide\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sizeGuideLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"sizeGuideLabel\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Guide des tailles"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 164
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("guide-tailles"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 165
        echo "            </div>
        </div>
    </div>
</div>

";
        // line 170
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scripts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 171
        echo "
";
        // line 172
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "dataLayer", [], "any", false, false, false, 172)) {
            // line 173
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::datalayer")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 173,  456 => 172,  453 => 171,  449 => 170,  442 => 165,  438 => 164,  429 => 158,  419 => 150,  414 => 147,  411 => 146,  405 => 145,  402 => 144,  396 => 143,  390 => 142,  385 => 141,  383 => 140,  377 => 137,  374 => 136,  372 => 135,  366 => 131,  362 => 129,  344 => 125,  339 => 124,  322 => 123,  317 => 120,  311 => 117,  303 => 112,  298 => 109,  296 => 108,  292 => 106,  271 => 102,  254 => 101,  250 => 99,  248 => 98,  242 => 95,  234 => 89,  227 => 85,  222 => 83,  218 => 82,  215 => 81,  213 => 80,  210 => 79,  203 => 75,  198 => 73,  194 => 72,  191 => 71,  189 => 70,  186 => 69,  179 => 65,  174 => 63,  170 => 62,  167 => 61,  165 => 60,  162 => 59,  155 => 55,  150 => 53,  146 => 52,  143 => 51,  141 => 50,  132 => 43,  126 => 40,  122 => 39,  116 => 36,  112 => 35,  107 => 32,  105 => 30,  102 => 29,  99 => 28,  94 => 27,  92 => 26,  89 => 25,  83 => 23,  81 => 22,  78 => 21,  71 => 18,  68 => 17,  66 => 16,  61 => 14,  55 => 11,  49 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/default.htm", "");
    }
}
