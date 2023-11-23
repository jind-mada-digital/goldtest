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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/footer.htm */
class __TwigTemplate_0d3ac1de15c8e2e213d0ec6167193865d52c797d496dc3042ed26e3293d40ef0 extends \Twig\Template
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
        echo "<footer id=\"footer\">
    <div class=\"container\">
        <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/goldtest-logo-white.svg");
        echo "\" alt=\"GOLDTEST of Switzerland\">

        <div class=\"row\">
            <div class=\"col-lg-4 col-left\">
                <a href=\"https://www.facebook.com/goldtest.ch/\" target=\"_blank\"><img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/facebook.svg");
        echo "\" alt=\"Facebook\"></a>&nbsp;&nbsp;
                <a href=\"https://www.instagram.com/goldtest/\" target=\"_blank\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/instagram.svg");
        echo "\" alt=\"Instagram\"></a>
                 <div class=\"titlenewsletter\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Newsletter"]);
        echo "</div>
                <script type=\"text/javascript\"
                        src=\"https://webform.statslive.info/ow/eyJpdiI6IllnSWVUdlU1aG5kbjVtVWxJbVZqVjl3a2ZudmhZa0hhdU1zVEpsdTNSNm89IiwidmFsdWUiOiJMMFF0R3AzZVBcL0ZLaXFJRzVOY3NTRTFMclI4Wkg3WmdOSnhFcWpzNEEwRT0iLCJtYWMiOiIwMjI0YWEzZTMwMWQ3NjkxZjI2Mzc3MjIyNDE4YWM0YjI0ZGY4OThjNTU0ZGU5N2E3OTc0N2RlZDUzZTM3MTU4In0=\"></script>
            </div>
            <div class=\"col-lg-4 col-center\">
                <div class=\"title\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Navigation"]);
        echo "</div>

                <ul class=\"list-unstyled\">
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["footerMenu"] ?? null), "menuItems", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                        <li>
                            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 19), "html", null, true);
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 19) == "contact")) ? ("#contact") : (""));
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 19)]);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </ul>
\t\t\t  <div class=\"title\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Downloads"]);
        echo "</div>
                <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"https://goldtest.ch/storage/app/media/downloads/Affiche-Triple-Up-2022-3.pdf\" target=\"_blank\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Special offer"]);
        echo "</a>
                        </li>
\t\t\t\t\t  \t<li>
                            <a href=\"https://goldtest.ch/storage/app/media/downloads/bulletin-de-retour-goldtest-2022.pdf\" target=\"_blank\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Return Form"]);
        echo "</a>
                        </li>
               </ul>
            </div>
            <div class=\"col-lg-4 col-right\">
                <span class=\"title\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Partenaires"]);
        echo "</span>

                <div class=\"partners\">
                    <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/partenaires/swiss-ski@2x.png");
        echo "\" alt=\"Swiss ski school\"
                         width=\"20%\" class=\"mr-4\">
                    <img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/partenaires/suisse_fr@2x.png");
        echo "\" alt=\"Suisse Tourisme\"
                         width=\"57%\"><br>
                    <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/partenaires/demo_team@2x.png");
        echo "\"
                         alt=\"swiss snowsports demo team\"
                         width=\"128\" class=\"mt-4\">
                </div>

                <span class=\"title\">";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Services de paiement"]);
        echo "</span>
                <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/service_payment.svg");
        echo "\"
                     alt=\"VISA, mastercard, PostFinance\">
                <br/>
                <img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/twint.png");
        echo "\"
                     alt=\"Twint Payment\"
                     width=\"105px\"
                     class=\"mt-4\">
            </div>
        </div>
        <div class=\"made-by text-lg-right\">
            <p>";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Site fait en Suisse par"]);
        echo " <a href=\"https://www.sitery.ch\" target=\"_blank\"> Sitery</a></p>
        </div>
    </div>
    
</footer>
";
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("popup-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  156 => 57,  146 => 50,  140 => 47,  136 => 46,  128 => 41,  123 => 39,  118 => 37,  112 => 34,  104 => 29,  98 => 26,  92 => 23,  89 => 22,  77 => 19,  74 => 18,  70 => 17,  64 => 14,  56 => 9,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/footer.htm", "");
    }
}
