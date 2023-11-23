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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/myaccount.htm */
class __TwigTemplate_273276ea51c58df77dc38d521f285cb65ef7686de0e7ca4b82937567ae2797a4 extends \Twig\Template
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
        echo "<div class=\"control-popup modal fade\" id=\"user-fill-info\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\">
      <div class=\"modal-content\">
          <div class=\"modal-header\">
              <button style=\"margin-left: 0;\" type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
              <h4 style=\"margin-top: 4px;\"class=\"modal-title\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please share more about you"]);
        echo "</h4>
          </div>
          <form data-request=\"onUserDataSubmit\" data-request-validate data-request-flash>
            <div class=\"modal-body\">
              <div class=\"row\">
                  <div class=\"col-md-12\">
                      <div class=\"form-group\">
                          <label for=\"height\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Taille (cm)"]);
        echo "</label>
                          <input class=\"form-control\" id=\"height\" type=\"text\" name=\"height\"
                                value=\"\">
                          <div data-validate-for=\"height\"></div>
                      </div>
                  </div>
                  <div class=\"col-md-12\">
                      <div class=\"form-group\">
                          <label for=\"weight\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Poids (kg)"]);
        echo "</label>
                          <input class=\"form-control\" id=\"weight\" type=\"text\" name=\"weight\"
                                value=\"\">
                          <div data-validate-for=\"weight\"></div>
                      </div>
                  </div>
              </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["cancel"]);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["save"]);
        echo "</button>
            </div>
          </form>
      </div>
  </div>
</div>
";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 38
        echo "<script>
\$(function () {
  if(";
        // line 40
        echo twig_escape_filter($this->env, ($context["showPopupBool"] ?? null), "html", null, true);
        echo ") {
    \$('#user-fill-info').modal();
  }
});
</script>
";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 46
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("myAccount"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/myaccount.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 46,  104 => 37,  96 => 40,  92 => 38,  90 => 37,  81 => 31,  77 => 30,  65 => 21,  54 => 13,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/pages/myaccount.htm", "");
    }
}
