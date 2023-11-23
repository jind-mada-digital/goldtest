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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/scripts.htm */
class __TwigTemplate_cd4a81f6a78d05e54332814f62c5cf616420757e2e256169fbc43500b7579f7a extends \Twig\Template
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
            \$('.js-mall-toggle-shipping-address').on('click', function () {
                \$('.mall-shipping-address').toggle(this.checked);
            });
            \$('.js-toggle-school').on('click', function () {
                \$('.school-block').toggle(this.checked);
            });
            \$('.js-mall-toggle-guest-signup').on('click', function () {
                \$('.mall-signup__password-inputs').toggle(! this.checked);
            });

            \$('select[name=\"goldtest_school_title\"]').on('change', function() {
                if (this.value === 'CUSTOM') {
                    \$('.school-title-other-block').show();
                } else {
                    \$('input[name=\"goldtest_school_title_other\"]').val('');
                    \$('.school-title-other-block').hide();
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
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/scripts.htm";
    }

    public function getDebugInfo()
    {
        return array (  63 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/scripts.htm", "");
    }
}
