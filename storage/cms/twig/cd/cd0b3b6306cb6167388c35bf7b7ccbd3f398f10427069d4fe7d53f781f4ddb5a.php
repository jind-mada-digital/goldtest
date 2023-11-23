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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/productsfilter/scripts.htm */
class __TwigTemplate_64ea3beef5e0bdcac300f12cc540fb9bd54e3724693c84a27bc8162beb8557d2 extends \Twig\Template
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
            var \$propertiesForm = \$('.mall-products-filter');
            var \$body = \$('body');

            \$body.on('click', '.js-mall-filter', function () {
                var \$input = \$(this).find('input');
                var \$group = \$input.closest('.mall-filter');

                // var \$itemToActive = \$input.prop('checked')
                //     ? \$group.find('.mall-filter__select-all-option')
                //     : \$(this);

                var \$itemToActive = \$(this);

                \$group.find('input[type=\"checkbox\"]').prop('checked', false);
                \$group.find('.mall-filter__option--selected').removeClass('mall-filter__option--selected');

                \$itemToActive.addClass('mall-filter__option--selected');
                \$itemToActive.find('input').prop('checked', true);

                \$propertiesForm.trigger('submit');
            });

            \$body.on('click', '.js-mall-clear-filter', function () {
                var \$parent = \$(this).closest('.mall-property');
                if (\$parent.length < 1) {
                    \$parent = \$(this).closest('.mall-property-group');
                }

                \$parent.find(':input:not([type=\"checkbox\"])').val('');
                \$parent.find('input[type=\"checkbox\"]').prop('checked', false);
                \$parent.find('.mall-filter__option--selected').removeClass('mall-filter__option--selected');

                \$propertiesForm.trigger('submit');
            });

            \$body.on('change', '.js-mall-select-filter', function () {
                \$propertiesForm.trigger('submit');
            });

            \$propertiesForm.on('submit', function (e) {
                e.preventDefault();

                \$.publish('mall.products.load.start');
                \$(this).request('";
        // line 47
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSetFilter', {
                    loading: \$.oc.stripeLoadIndicator,
                    complete: function (response) {
                        \$.oc.stripeLoadIndicator.hide();
                        if (response.responseJSON.hasOwnProperty('queryString')) {
                            history.replaceState(null, '', '?' + response.responseJSON.queryString)
                        }
                        \$('[data-filter]').hide();
                        if (response.responseJSON.hasOwnProperty('filter')) {
                            for (var filter of Object.keys(response.responseJSON.filter)) {
                                \$('[data-filter=\"' + filter + '\"]').show();
                            }
                        }
                        \$.publish('mall.products.load.complete')
                    },
                    error: function () {
                        \$.oc.stripeLoadIndicator.hide();
                        \$.oc.flashMsg({text: '";
        // line 64
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.search_error"]);
        echo "', class: 'error'});
                        \$.publish('mall.products.load.error')
                    }
                });
            });

            // if (\$propertiesForm.css('position') === 'sticky') {
                \$propertiesForm.css('position', 'static');
                var propertiesFormTopPos = \$propertiesForm.offset().top;
                \$propertiesForm.css('position', '');

                fixPropertiesForm();
                \$(window).scroll(fixPropertiesForm);
            // }

            function fixPropertiesForm() {
                if (window.scrollY > propertiesFormTopPos) {
                    \$body.addClass('products-filter-fixed');
                } else {
                    \$body.removeClass('products-filter-fixed');
                }
            }
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/productsfilter/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 1,  106 => 64,  86 => 47,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/productsfilter/scripts.htm", "");
    }
}
