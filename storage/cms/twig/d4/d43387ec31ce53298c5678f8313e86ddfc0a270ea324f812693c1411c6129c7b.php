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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/head.htm */
class __TwigTemplate_ee6bbf71bb0b2762053902fe26fda6c28c1cc0d76d35f90b8ee7894567cef35f extends \Twig\Template
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
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "meta_description", [], "any", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context["meta_description"] = strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "meta_description", [], "any", false, false, false, 2));
        } else {
            // line 4
            echo "    ";
            $context["meta_description"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "meta_description", [], "any", false, false, false, 4);
        }
        // line 6
        echo "
";
        // line 7
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7))) {
            // line 8
            echo "    ";
            $context["meta_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8);
        } else {
            // line 10
            echo "    ";
            $context["meta_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10);
        }
        // line 12
        echo "<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 14
        echo twig_escape_filter($this->env, ($context["meta_title"] ?? null), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    <meta name=\"description\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["meta_description"] ?? null), "html", null, true);
        echo "\">

    <meta property=\"og:url\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "fullUrl", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "fullUrl", [], "any", false, false, false, 19)) : (($this->extensions['System\Twig\Extension']->appFilter("/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "url", [], "any", false, false, false, 19)))), "html", null, true);
        echo "\">
    <meta property=\"og:title\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["meta_title"] ?? null), "html", null, true);
        echo "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:description\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["meta_description"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 23
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 23), "meta_image", [], "any", false, false, false, 23))) {
            // line 24
            echo "        <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "meta_image", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
    ";
        }
        // line 26
        echo "
    <link href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/scss/theme.scss"]);
        echo ".css\" rel=\"stylesheet\">
    ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 29
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mallDependencies"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-154465717-1\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-154465717-1');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '573860596550639');
      fbq('track', 'PageView');
    </script>
    <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
      src=\"https://www.facebook.com/tr?id=573860596550639&ev=PageView&noscript=1\"
    /></noscript>
    <!-- End Facebook Pixel Code -->

</head>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  106 => 29,  103 => 28,  99 => 27,  96 => 26,  90 => 24,  88 => 23,  84 => 22,  79 => 20,  75 => 19,  70 => 17,  64 => 14,  60 => 12,  56 => 10,  52 => 8,  50 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/template/head.htm", "");
    }
}
