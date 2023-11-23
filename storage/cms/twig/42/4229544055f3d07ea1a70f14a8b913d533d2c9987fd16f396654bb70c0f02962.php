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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/overlay.htm */
class __TwigTemplate_45c3cfe1d7a8a8deb0ebfa3fd57b4d2e68699324ef8aa94e62a1b3c2e3f59733 extends \Twig\Template
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
        echo "<div class=\"mall-overlay\"
     style=\"display: none; z-index: 99999 !important;\">
    <svg stroke=\"#666\" width=\"38\" height=\"38\" viewBox=\"0 0 38 38\" transform=\"scale(2)\"
         xmlns=\"http://www.w3.org/2000/svg\">
        <g fill=\"none\" fill-rule=\"evenodd\">
            <g transform=\"translate(1 1)\" stroke-width=\"2\">
                <circle stroke-opacity=\".5\" cx=\"18\" cy=\"18\" r=\"18\"/>
                <path d=\"M36 18c0-9.94-8.06-18-18-18\">
                    <animateTransform
                            attributeName=\"transform\"
                            type=\"rotate\"
                            from=\"0 18 18\"
                            to=\"360 18 18\"
                            dur=\"1s\"
                            repeatCount=\"indefinite\"/>
                </path>
            </g>
        </g>
    </svg>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/overlay.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/overlay.htm", "");
    }
}
