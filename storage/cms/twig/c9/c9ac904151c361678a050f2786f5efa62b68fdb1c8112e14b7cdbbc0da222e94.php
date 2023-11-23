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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/scripts.htm */
class __TwigTemplate_dbf65a886a6b387bc429b6dc0b7a2cd66ed947751513a34cabc01741367c1db2 extends \Twig\Template
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery-3.4.1.min.js", 1 => "@framework", 2 => "@framework.extras", 3 => "assets/vendor/popper/popper-1.15.0.min.js", 4 => "assets/vendor/bootstrap/js/index.js", 5 => "assets/vendor/bootstrap/js/util.js", 6 => "assets/vendor/bootstrap/js/alert.js", 7 => "assets/vendor/bootstrap/js/button.js", 8 => "assets/vendor/bootstrap/js/carousel.js", 9 => "assets/vendor/bootstrap/js/collapse.js", 10 => "assets/vendor/bootstrap/js/dropdown.js", 11 => "assets/vendor/bootstrap/js/modal.js", 12 => "assets/vendor/bootstrap/js/scrollspy.js", 13 => "assets/vendor/bootstrap/js/tab.js", 14 => "assets/vendor/bootstrap/js/tooltip.js", 15 => "assets/vendor/bootstrap/js/popover.js", 16 => "assets/js/app.js"]);
        // line 25
        echo ".js\"></script>

";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 28
        echo "
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 29
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 30
                echo "    <p data-control=\"flash-message\"
       class=\"flash-message fade ";
                // line 31
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\"
       data-interval=\"";
                // line 32
                echo ((twig_in_filter(($context["type"] ?? null), [0 => "error", 1 => "warning"])) ? (15) : (5));
                echo "\">
        ";
                // line 33
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
    </p>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 33,  60 => 32,  56 => 31,  53 => 30,  50 => 29,  47 => 28,  44 => 27,  40 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/scripts.htm", "");
    }
}
