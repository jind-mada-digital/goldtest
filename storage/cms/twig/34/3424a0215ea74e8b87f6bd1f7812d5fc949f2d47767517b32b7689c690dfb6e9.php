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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/billingaddressselector/scripts.htm */
class __TwigTemplate_dc9fef575b9554000fbbdbc29a985252f15b01393de25731db0a39a2b1e00ab7 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "    <script>
        \$(function () {
            var \$body = \$('body');
            \$body.on('click', '.mall-address-selector--";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "type", [], "any", false, false, false, 5), "html", null, true);
        echo " .js-change-address', function () {
                \$.request('";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onChangeAddress', {
                    update: {'";
        // line 7
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::changeAddress': \$(this).closest('.mall-address')},
                    loading: \$.oc.stripeLoadIndicator,
                })
            });
            \$body.on('change', '.mall-address-selector--";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "type", [], "any", false, false, false, 11), "html", null, true);
        echo " #mall_address_id', function () {
                if (this.value === 'new') {
                    document.location.href = '";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "addressPage", [], "any", false, false, false, 13), ["address" => "new", "redirect" => "checkout", "set" => twig_get_attribute($this->env, $this->source,         // line 16
($context["__SELF__"] ?? null), "type", [], "any", false, false, false, 16)]);
        // line 17
        echo "'
                }
            });
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/billingaddressselector/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 1,  67 => 17,  65 => 16,  64 => 13,  59 => 11,  52 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/billingaddressselector/scripts.htm", "");
    }
}
