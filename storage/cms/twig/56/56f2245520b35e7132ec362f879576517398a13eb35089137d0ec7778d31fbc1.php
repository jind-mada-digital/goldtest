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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/shop-club5.htm */
class __TwigTemplate_9d7363f87fdc534e59b89a8774a0ef8bfdae88372dd4e907e7a22aa6df70551b extends \Twig\Template
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
        echo "<div class=\"block-head\">
    <div class=\"container\">
        <div class=\"pretitle-lined\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "category", [], "any", false, false, false, 3), "goldtest_pretitle", [], "any", false, false, false, 3)]);
        echo "</div>
        <h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "category", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>

        <div class=\"description\">
            ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "category", [], "any", false, false, false, 7), "description", [], "any", false, false, false, 7);
        echo "
        </div>
    </div>
</div>

";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("productsFilter"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("products"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "
";
        // line 15
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['blockClass'] = "left-image"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category-slideshow-league5"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "
";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 18
        echo "<link href=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css\" rel=\"stylesheet\">
<style>
.stock-filter{
    font-family: 'Source Sans Pro',sans-serif !important;
    display: block;
    float: left;
    margin: 0 15px 10px 0;
    font-size: 18px;
    line-height: 18px;
    padding: 13px;
    color: #676767;
    border: 3px solid #f2f2f2;
    background: #f2f2f2;
    cursor: pointer;
    text-decoration: none;
}
.stock-filter-active{
    background: #fff;
    color: #353535;
    border-color: #353535;
}
body.page-shop-league5 .mall-products-filter, body.page-shop-club5 .mall-products-filter{
    top: unset !important;
}
.custom-filter-color-main{
    display: block;
    float: left;
    margin: 0 15px 10px 0;
    font-size: 18px;
    line-height: 18px;
    color: #676767;
    border: 3px solid #f2f2f2;
    cursor: pointer;
    text-decoration: none;
}
.custom-filter-color{
    border-radius: 50%;
    padding: 9px;
    background: #fff;
    border-color: #fff;
    margin-right: 0;
}
.custom-filter-color-main span{
    width: 25px;
    height: 25px;
    display: block;
    border-radius: 50%;
}
.custom-filter-color-selected{
    background: #fff !important;
    color: #353535 !important;
    border-color: #353535 !important;
}
</style>
";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 73
        echo "
";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 75
        echo "<script src=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js\"></script>
<script>
    \$(function(){
        toggleCustomFilter();
    
        setInterval(() => {
            toggleCustomFilter();
        }, 300);        
        
        function toggleCustomFilter(){
            
            let count = 0;
            \$(\"input[name='stockV']\").parent().closest('label').removeClass('stock-filter-active');
            \$(\"input[name='stockV']:checked\").parent().closest('label').addClass('stock-filter-active');

            
            \$('.mall-products-item').show();

            if(\$(\"input[name='stockV']:checked\").val() == 1){
                \$('.mall-products-item').each(function( i, e ) {
                    if(e.getAttribute('data-st') <= 0){
                        e.style.display = 'none';
                    }
                });
            } else { 
                \$('.mall-products-item').show();
            }
        
            count = \$('.mall-products-item:visible').length;
            \$('.mall-products-counter').text(count + \" ";
        // line 104
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["produit(s) trouvé(s)"]);
        echo "\");
        }
        
        \$(\"input[name='stockV']\").on('click', function(){
            toggleCustomFilter();
        });
    });


</script>
";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/shop-club5.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 74,  174 => 104,  143 => 75,  141 => 74,  138 => 73,  136 => 17,  80 => 18,  78 => 17,  75 => 16,  70 => 15,  67 => 14,  63 => 13,  59 => 12,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/shop-club5.htm", "");
    }
}
