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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/products/scripts.htm */
class __TwigTemplate_0611063edbb556477e8b49749139fe7411ff6abddc8169a0a032014c37abd074 extends \Twig\Template
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
            \$.subscribe('mall.products.load.start', function () {
                \$('.mall-products').find('.mall-loader').css({opacity: 1, visibility: 'visible'})
            });

            \$.subscribe('mall.products.load.complete', function () {
                \$.request('";
        // line 9
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRun', {
                    update: {'";
        // line 10
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::entries': '.mall-products'},
                });
            });

            \$('body').on('click', '.mall-pagination--products a', function (e) {
                e.preventDefault()
                \$.publish('mall.products.load.start')

                history.replaceState(null, '', \$(this).attr('href'))
                \$.publish('mall.products.load.complete')

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            })
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/products/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 1,  52 => 10,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/products/scripts.htm", "");
    }
}
