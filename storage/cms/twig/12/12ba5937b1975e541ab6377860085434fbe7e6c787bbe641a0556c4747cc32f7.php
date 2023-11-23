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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/scripts.htm */
class __TwigTemplate_9d9de884bd385aefe1654b6b82699d63c4ae270def59d0b3189ef8903f0bf9ca extends \Twig\Template
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
            var \$form = \$('#mall-add-to-cart');
            var \$addToCart = \$('.mall-product__add-to-cart');

            \$body.on('click', '.js-mall-property-selector', function (e) {
                var \$this = \$(this);
                // \$this.closest('.mall-product__property').find('.js-mall-property-selector').removeClass('')
                \$this.closest('.mall-product__property').find('[data-mall-property]')
                    .val(\$this.data('id'))
                    .trigger('change');

            });

            \$body.on('change', '[data-mall-property]', function (e, isInitial) {
                var values = \$('[data-mall-property]').map(function () {
                    return this.value;
                }).toArray();

                var props = {};
                \$('[data-mall-custom-field]').map(function () {
                    if (this.type === 'checkbox' && !this.checked) {
                        return
                    }
                    return props[this.dataset.id] = this.value
                });

                \$addToCart.html('<div class=\"mall-product__property-stock mall-product__property-stock--checking\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.checking"]);
        echo "</div>');

                \$.request('onChangeProperty', {
                    data: {values: values, props: props, initial: isInitial},
                    loading: isInitial ? null : \$.oc.stripeLoadIndicator
                })
            });

            var firstProperty = \$('[data-mall-property]:first');
            if (firstProperty.length) {
                firstProperty.trigger('change', true)
            } else {
                ";
        // line 46
        echo "                \$.request('onCheckProductStock', {
                    data: {slug: '";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 47), "html", null, true);
        echo "'},
                    loading: null
                })
            }

            ";
        // line 53
        echo "            \$body.on('click', '.mall-option-selector', function () {
                \$(this.dataset.target).val(this.dataset.value).trigger('change');

                \$(this).parent().find('.is-active').removeClass('is-active');
                \$(this).addClass('is-active');
            });

            ";
        // line 61
        echo "            \$body.on('change', '[data-mall-custom-field]', function () {
                \$.request('onChangeConfiguration', {
                    form: \$form,
                    loading: \$.oc.stripeLoadIndicator
                })
            });

            var \$imagesWrapper = \$('.mall-product__images');
            var \$imageActive = \$imagesWrapper.find('.full-image');
            var \$imagesThumbnails = \$imagesWrapper.find('.thumbnail');

            \$imagesThumbnails.on('click', function (event) {
                event.preventDefault();
                var \$item = \$(this);
                \$imagesThumbnails.removeClass('active');
                \$item.addClass('active');
                \$imageActive.removeAttr('srcset');
                \$imageActive.attr('src', \$item.data('full-src'));
                \$imageActive.attr('srcset', \$item.data('full-srcset'));
            });

            \$body.on('change', '#quantity', function (e) {
                console.log('qte changed');
                var \$quantityLessBtn = \$('.btn-quantity.less');

                \$quantityLessBtn.removeAttr('disabled');

                if (this.value < 2) {
                    \$quantityLessBtn.attr('disabled', true);
                }
            });

            \$body.on('click', '.btn-quantity.more', function (event) {
                event.preventDefault();
                var \$quantity = \$('#quantity');
                var quantity = parseInt(\$quantity.val());

                \$quantity.val(quantity + 1).trigger('change');
            });

            \$body.on('click', '.btn-quantity.less', function (event) {
                event.preventDefault();
                var \$quantity = \$('#quantity');
                var quantity = parseInt(\$quantity.val());

                if (quantity > 1) {
                    \$quantity.val(quantity - 1).trigger('change');
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
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 1,  104 => 61,  95 => 53,  87 => 47,  84 => 46,  69 => 30,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/product/scripts.htm", "");
    }
}
