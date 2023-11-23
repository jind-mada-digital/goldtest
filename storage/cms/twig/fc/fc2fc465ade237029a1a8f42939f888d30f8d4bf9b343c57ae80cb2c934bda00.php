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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/terms.htm */
class __TwigTemplate_a02fc275b4bc6f57c0d41b001b8f84400aa4101882e560578f7224ef30038b51 extends \Twig\Template
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
        echo "<div class=\"mall-signup-terms form-group\">
    <div class=\"custom-checkbox\">
        <input class=\"custom-control-input js-mall-toggle-signup-terms\"
               type=\"checkbox\"
               name=\"terms_accepted\" id=\"terms_accepted\"
               value=\"1\">

        <label class=\"custom-control-label\" for=\"terms_accepted\">
            <a href=\"";
        // line 9
        echo RainLab\Pages\Classes\Page::url("conditions-generales-de-vente");
        echo "\"
               target=\"_blank\">
                ";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["J'accepte les conditions de vente"]);
        echo "
            </a>
        </label>
        <div data-validate-for=\"terms_accepted\"></div>
    </div>
</div>

";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 19
        echo "    <script>
        \$(function () {
            ";
        // line 22
        echo "            \$('.mall-btn-signup').prop('disabled', true)
            \$('.js-mall-toggle-signup-terms').on('click', function () {
                \$('.mall-btn-signup').prop('disabled', !this.checked);
            });
        })
    </script>
";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/terms.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  68 => 22,  64 => 19,  62 => 18,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/terms.htm", "");
    }
}
