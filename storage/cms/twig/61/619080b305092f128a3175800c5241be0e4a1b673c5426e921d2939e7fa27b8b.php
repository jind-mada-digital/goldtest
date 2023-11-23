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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/scripts.htm */
class __TwigTemplate_2914edc62b5af988fdad4c568975efb7de386476815c01bef16cc65bc877ed7b extends \Twig\Template
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

            \$.subscribe('mall.discount.applied', refreshCart);
            \$.subscribe('mall.shipping.update', refreshCart);
            \$.subscribe('mall.address.update', refreshCart);

            function refreshCart () {
                \$.request('";
        // line 11
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRun', {
                    update: {'";
        // line 12
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::cart': '.mall-cart'},
                })
            }

            \$body.on('change', '.js-mall-quantity', function () {
                \$.request('";
        // line 17
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onUpdateQuantity', {
                    data: {id: this.dataset.id, quantity: this.value},
                    update: {'";
        // line 19
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::cart': '.mall-cart'},
                    loading: \$.oc.stripeLoadIndicator,
                    flash: true,
                    success: function (data) {
                        this.success(data)
                        \$.publish('mall.cart.update', data)
                    },
                    handleFlashMessage: function (message, type) {
                        \$.oc.flashMsg({text: message, class: type})
                    }
                })
            });
            \$body.on('click', '.js-mall-remove-product', function () {
                \$.request('";
        // line 32
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRemoveProduct', {
                    data: {id: this.dataset.id},
                    update: {'";
        // line 34
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::cart': '.mall-cart'},
                    loading: \$.oc.stripeLoadIndicator,
                    confirm: '";
        // line 36
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.confirm"]);
        echo "',
                    success: function (data) {
                        this.success(data)
                        \$.publish('mall.cart.update', data)
                        \$.publish('mall.cart.productRemoved', data)
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
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 1,  93 => 36,  88 => 34,  83 => 32,  67 => 19,  62 => 17,  54 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/cart/scripts.htm", "");
    }
}
