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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/customerprofile/scripts.htm */
class __TwigTemplate_23a4f1e8385c1bdbfc76a9ee1f31e1693741a98be8e2084b5c917eba38acd73d extends \Twig\Template
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
            \$('.js-toggle-school').on('click', function () {
                \$('.school-block').toggle(this.checked);
                if(!this.checked) {
                    \$('#goldtest_school_id').val('');
                    \$('#goldtest_school_title').val('');
                }
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
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/customerprofile/scripts.htm";
    }

    public function getDebugInfo()
    {
        return array (  60 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/customerprofile/scripts.htm", "");
    }
}
