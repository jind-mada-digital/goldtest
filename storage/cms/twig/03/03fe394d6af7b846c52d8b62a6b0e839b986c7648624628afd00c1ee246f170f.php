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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/header.htm */
class __TwigTemplate_468ba095665020fa41d7a03ed5e8aafac2861d2ba8a62eba3f2a62cc22b1fd25 extends \Twig\Template
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
        echo "<style>
  @media (max-width: 767.98px) {
    .select-language {
        visibility: visible;
    }
\t.language-area {
        visibility: hidden;
    }
}

@media (min-width: 767.98px) {
    .language-area {
        visibility : visible;
    }
\t.select-language {
        visibility: hidden;
    }
}
</style>
<header id=\"header\">
  <div class=\"header-top container-fluid\" style=\"box-sizing:content-box;\">
        ";
        // line 22
        $context["cartProductsCount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "cart", [], "any", false, false, false, 22), "products", [], "any", false, false, false, 22), "count", [], "any", false, false, false, 22);
        // line 23
        echo "
        ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/header-search"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "
        <a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cart");
        echo "\" class=\"mr-3\">
            <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/cart_20.svg");
        echo "\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Panier"]);
        echo "\" width=\"20\">

            <span class=\"mall-cart-count ";
        // line 29
        echo (((($context["cartProductsCount"] ?? null) < 1)) ? ("d-none") : (""));
        echo "\">
                ";
        // line 30
        echo twig_escape_filter($this->env, ($context["cartProductsCount"] ?? null), "html", null, true);
        echo "
            </span>
        </a>


        ";
        // line 35
        if (($context["user"] ?? null)) {
            // line 36
            echo "            <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("myaccount");
            echo "\" class=\"mr-3\">
                <img src=\"";
            // line 37
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/member_20.svg");
            echo "\" alt=\"\" class=\"mr-1\">
                ";
            // line 38
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mon compte"]);
            echo "
            </a>
        ";
        } else {
            // line 41
            echo "\t  <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\" class=\"mr-3\">
                <img src=\"";
            // line 42
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/member_20.svg");
            echo "\" alt=\"\" class=\"mr-1\">
                ";
            // line 43
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Login ou Inscription"]);
            echo "
            </a>
        ";
        }
        // line 46
        echo "\t  <select class=\"mt-2 select-language\" onchange =\"window.location.assign(this.value)\" style=\"font-size:0.8rem;\">
\t\t<option value=\"/fr\" ";
        // line 47
        echo (((twig_get_attribute($this->env, $this->source, ($context["localePicker"] ?? null), "activeLocale", [], "any", false, false, false, 47) == "fr")) ? ("selected") : (""));
        echo ">FR</option>
\t\t<option value=\"/de\" ";
        // line 48
        echo (((twig_get_attribute($this->env, $this->source, ($context["localePicker"] ?? null), "activeLocale", [], "any", false, false, false, 48) == "de")) ? ("selected") : (""));
        echo ">DE</option>
\t\t<option value=\"/it\" ";
        // line 49
        echo (((twig_get_attribute($this->env, $this->source, ($context["localePicker"] ?? null), "activeLocale", [], "any", false, false, false, 49) == "it")) ? ("selected") : (""));
        echo ">IT</option>
\t\t<option value=\"/en\" ";
        // line 50
        echo (((twig_get_attribute($this->env, $this->source, ($context["localePicker"] ?? null), "activeLocale", [], "any", false, false, false, 50) == "en")) ? ("selected") : (""));
        echo ">EN</option>\t\t
\t  </select>
\t  <span class=\"language-area\">
\t  <button data-request=\"onSwitchLocale\" data-request-data=\"locale: 'fr'\"
                class=\"btn btn-link ";
        // line 54
        echo (((twig_get_attribute($this->env, $this->source, ($context["localePicker"] ?? null), "activeLocale", [], "any", false, false, false, 54) == "fr")) ? ("active") : (""));
        echo "\">FR
        </button>

        |

        <button data-request=\"onSwitchLocale\" data-request-data=\"locale: 'de'\"
                class=\"btn btn-link ";
        // line 60
        echo (((twig_get_attribute($this->env, $this->source, ($context["localePicker"] ?? null), "activeLocale", [], "any", false, false, false, 60) == "de")) ? ("active") : (""));
        echo "\">DE
        </button>
\t    |

        <button data-request=\"onSwitchLocale\" data-request-data=\"locale: 'it'\"
                class=\"btn btn-link ";
        // line 65
        echo (((twig_get_attribute($this->env, $this->source, ($context["localePicker"] ?? null), "activeLocale", [], "any", false, false, false, 65) == "it")) ? ("active") : (""));
        echo "\">IT
        </button>
\t    |

        <button data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\"
                class=\"btn btn-link ";
        // line 70
        echo (((twig_get_attribute($this->env, $this->source, ($context["localePicker"] ?? null), "activeLocale", [], "any", false, false, false, 70) == "en")) ? ("active") : (""));
        echo "\">EN
\t  </button>
\t  </span>
    </div>
    <div class=\"header-main\">
        <div class=\"container-fluid h-100\">
            <div class=\"d-flex h-100 flex-row align-items-center\">
                <a href=\"/\" class=\"logo mr-auto\" accesskey=\"0\">
                    <img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/goldtest-logo.svg");
        echo "\" alt=\"\" title=\"Goldtest\"
                         class=\"logo-normal\">
                    <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/goldtest-logo-text.svg");
        echo "\" alt=\"\" title=\"Goldtest\"
                         class=\"logo-scrolled\">
                </a>

                

                ";
        // line 87
        echo "                ";
        // line 94
        echo "                
                ";
        // line 95
        if (($context["product"] ?? null)) {
            // line 96
            echo "                    <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product", [], "any", false, false, false, 96), "inProCategory", [], "any", false, false, false, 96)) ? ("shop-league5") : ("shop-club5")));
            echo "\"
                       class=\"back-to-shop\">
                        ";
            // line 98
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retour au shop"]);
            echo "
                    </a>
                ";
        }
        // line 101
        echo "
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"modal\"
                        data-target=\"#menu\" aria-controls=\"menu\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                </button>
            </div>
        </div>
    </div>
</header>

<div id=\"menu\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <button class=\"menu-close\" type=\"button\" data-dismiss=\"modal\">
            </button>
            <form class=\"menu-search\" action=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
        echo "\" method=\"get\">
                <div class=\"ss-search-form__input\" style=\"display: flex;align-items: center;padding: 1rem;\">
                    <input class=\"form-control\" style=\"padding: 2rem;\" name=\"q\" type=\"text\" placeholder=\"";
        // line 118
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Rechercher un produit"]);
        echo "\"
                           value=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["searchInput"] ?? null), "query", [], "any", false, false, false, 119), "html", null, true);
        echo "\"
                           autocomplete=\"off\"
                           autofocus
                    >
                    <button class=\"btn btn-primary\" type=\"submit\">Search</button>
                </div>
            </form>
            <ul>
                <li>
                    <a href=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop-league5");
        echo "\">
                        <div class=\"pretitle-lined\">";
        // line 129
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour les pros"]);
        echo "</div>
                        <span class=\"h2 d-block\">League5</span>
                        <span class=\"h5 d-block\">Shop</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop-club5");
        echo "\">
                        <div class=\"pretitle-lined\">";
        // line 136
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour tous"]);
        echo "</div>
                        <span class=\"h2 d-block\">Club5</span>
                        <span class=\"h5 d-block\">Shop</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 142
        echo RainLab\Pages\Classes\Page::url("about");
        echo "\">
                        <div class=\"pretitle-lined\">Goldtest</div>
                        <span class=\"h2 d-block\">About</span>
                    </a>
                </li>
                <li>
                    <a href=\"http://easyskischool.goldtest.com/\" target=\"_blank\">
                        <span class=\"h5 d-block\">
                            <img src=\"";
        // line 150
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/arrow_right_20.svg");
        echo "\" alt=\"\">
                            Easy ski school
                        </span>
                    </a>
                </li>
                <li>
                    <a href=\"https://boutique.goldtest.com/\" target=\"_blank\">
                        <span class=\"h5 d-block\">
                            <img src=\"";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/arrow_right_20.svg");
        echo "\" alt=\"\">
                            Outlet
                        </span>
                    </a>
                </li>
                <li>
                    <a href=\"https://ebikeshoptorgon.ch/\" target=\"_blank\">
                        <span class=\"h5 d-block\">
                            <img src=\"";
        // line 166
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/arrow_right_20.svg");
        echo "\" alt=\"\">
                            EBIKE SHOP TORGON
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


";
        // line 177
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 178
        echo "    <script>
        \$(function () {
            var baseCount = '";
        // line 180
        echo twig_escape_filter($this->env, ($context["cartProductsCount"] ?? null), "html", null, true);
        echo "';
            var \$count = \$('.mall-cart-count');

            \$.subscribe('mall.cart.productAdded', function () {
                \$count.removeClass('d-none').text(++baseCount).show();
            });

            \$.subscribe('mall.cart.productRemoved', function () {
                baseCount--;
                if (baseCount < 0) baseCount = 0;
                \$count.text(baseCount);
            });
        });
    </script>
";
        // line 177
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 177,  337 => 180,  333 => 178,  331 => 177,  317 => 166,  306 => 158,  295 => 150,  284 => 142,  275 => 136,  271 => 135,  262 => 129,  258 => 128,  246 => 119,  242 => 118,  235 => 116,  218 => 101,  212 => 98,  206 => 96,  204 => 95,  201 => 94,  199 => 87,  190 => 80,  185 => 78,  174 => 70,  166 => 65,  158 => 60,  149 => 54,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  127 => 46,  121 => 43,  117 => 42,  112 => 41,  106 => 38,  102 => 37,  97 => 36,  95 => 35,  87 => 30,  83 => 29,  76 => 27,  72 => 26,  69 => 25,  65 => 24,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/header.htm", "");
    }
}
