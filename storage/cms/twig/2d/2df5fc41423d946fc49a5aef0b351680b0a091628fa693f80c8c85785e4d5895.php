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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/popup-banner.htm */
class __TwigTemplate_979677e78aef03fa282d51895c0e7b64e0ed9c85d9d98fcf050325a043ca4321 extends \Twig\Template
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
        echo "<!--
<div class=\"control-popup modal fade\" id=\"bs-modal\" tabindex=\"-1\" role=\"dialog\">
    <div
        class=\"modal-dialog modal-dialog-centered\"
        style=\"max-width: max-content; margin: 0 auto\"
    >
        <div class=\"modal-content\">
            <button
                id=\"offerBtn\"
                style=\"margin-left: 0\"
                type=\"button\"
                class=\"close\"
                data-dismiss=\"modal\"
                aria-hidden=\"true\"
            >
                &times;
            </button>
            <a
                href=\"https://www.goldtest.ch/fr/club5\"
            >
                <img
                    src=\"/storage/app/media/pop-ups/pop-up-Triple-Up-2023_janvier-mars.png\"
                    style=\"width: 70vw; height: auto\"
                />
            </a>
        </div>
    </div>
    <style>
        #offerBtn:hover,
        #offerBtn {
            position: absolute;
            color: white;
            right: -34px;
            top: -9px;
            opacity: 1;
            padding: 1px 11px;
            text-shadow: none;
        }
    </style>
    ";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 41
        echo "    <script>
        \$(function () {
            const productModal = sessionStorage.getItem(\"product_modal\");
            if (!productModal || window.location.hash == \"#p\") {
                // if (window.location.hash == \"#p\") {
                sessionStorage.setItem(\"product_modal\", \"1\");
                \$(\"#bs-modal\").modal();
            }
        });
    </script>
    ";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 52
        echo "</div>
-->";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/popup-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 52,  92 => 40,  80 => 41,  78 => 40,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/popup-banner.htm", "");
    }
}
