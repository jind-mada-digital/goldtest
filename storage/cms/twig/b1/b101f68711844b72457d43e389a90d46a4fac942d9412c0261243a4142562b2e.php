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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/discountapplier/default.htm */
class __TwigTemplate_70feb3d2d0890cd75d67a2bf84cfa2c684c71e2f1e41e80df3fc5ccc76ecd65f extends \Twig\Template
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
        if ((($context["hasAppliedNonTriggerCode"] ?? null) == false)) {
            // line 2
            echo "    <div class=\"row justify-content-end\">
        <div class=\"col-lg-7\">
            <div class=\"mall-discount-applier\">
                <form data-request=\"onApplyDiscount\"
                      data-request-validate
                      data-request-flash
                      data-request-success=\"\$.publish('mall.discount.applied')\">
                    <div class=\"mall-form-control\">
                        <label for=\"code\">";
            // line 10
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Code promotionnel"]);
            echo "</label>
                        <div class=\"input-group\">
                            <input name=\"code\" type=\"text\" id=\"code\" class=\"form-control\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-secondary btn-sm\">
                                    ";
            // line 15
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.discount.apply"]);
            echo "
                                </button>
                            </div>
                        </div>
                        <div data-validate-for=\"code\"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        } else {
            // line 26
            echo "<div class=\"row justify-content-end\">
    <div class=\"col-lg-7\">
        <div class=\"alert alert-info\" role=\"alert\">
            ";
            // line 29
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["goldtest.mall::lang.components.discountApplier.cartPromotionAlreadyApplied"]);
            echo "
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/discountapplier/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  71 => 26,  57 => 15,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/discountapplier/default.htm", "");
    }
}
