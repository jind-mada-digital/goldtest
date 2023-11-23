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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/scripts.htm */
class __TwigTemplate_f2ea0e9af77554501525bee95a77bc99a5e2f28b1147dad597400719d02aeec6 extends \Twig\Template
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
            var \$overlay = \$('.mall-overlay');

            \$.subscribe('mall.address.update', function () {
                \$.request('";
        // line 8
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRun', {
                    update: {'";
        // line 9
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::shippingmethod': '.mall-cart-summary__shipping-method > div'},
                    success: function (data) {
                        \$.publish('mall.shipping.update')
                    },
                })
            });

            \$body.on('click', '.js-mall-checkout', function (e) {
                e.preventDefault();
                \$overlay.prependTo(\$body).show();

                var commentMessage = \$('[name=\"checkout_comment\"]').val();

                \$.request('";
        // line 22
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onCheckout', {
                    flash: 1,
                    data: {
                        'checkout_comment': commentMessage
                    },
                    error: function (jqXHR) {
                        \$overlay.hide();
                        if (jqXHR.status === 406) {
                            return this.options.handleValidationMessage(
                                jqXHR.responseJSON['X_OCTOBER_ERROR_MESSAGE'],
                                jqXHR.responseJSON['X_OCTOBER_ERROR_FIELDS']
                            )
                        }
                        this.error(jqXHR);
                        // document.location.href = '";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "accountPage", [], "any", false, false, false, 36));
        echo "';
                    },
                    handleValidationMessage: function (message, fields) {
                        alert(\"There was an error while processing your order: \" + message);
                        document.location.href = '";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "accountPage", [], "any", false, false, false, 40));
        echo "';
                    },
                    handleErrorMessage : function(message, type) {
                        \$.oc.flashMsg({ text: message, class: 'error' })
                    }
                })
            });
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 1,  91 => 40,  84 => 36,  67 => 22,  51 => 9,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/checkout/scripts.htm", "");
    }
}
