<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/pages/services.htm */
class __TwigTemplate_97a99a65346d0746e2eeb8ca0ad87f0da2e929b3001af04c712ebf6426253d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('CMS')->startBlock('metatags'        );
        // line 2
        echo "<meta property=\"og:title\" content=\"Diensten - Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/diensten\">
<meta property=\"og:description\" content=\"Websites en Webapplicaties rechtstreeks vanuit de Hoppestad Poperinge.
    De ideale partner voor al uw digitale noden.\">
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 7
        echo "
<section class=\"uk-background-cover uk-background-fixed\"
         style=\"background-image: url(";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/header_home_benjaminlierman.jpg");
        echo ");\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\" style=\"height: 55vh;\">
        <h1 class=\"uk-position-center-left uk-padding\"> Diensten</h1>
    </header>
</section>

<div class=\"uk-section uk-section-large\">
    <div class=\"uk-container uk-padding uk-text-justify\"
         uk-scrollspy=\"target: > p; cls:uk-animation-fade; delay: 250; repeat:true;\">
        <p>Ik ontwikkel zowel <strong>websites</strong> als <strong>op maat gemaakte webapplicaties.</strong></p>
    </div>
</div>

";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("misc/webdevelopment"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("misc/webapplications"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("misc/digitalbranding"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 24,  53 => 23,  49 => 22,  33 => 9,  29 => 7,  27 => 1,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put metatags  %}
<meta property=\"og:title\" content=\"Diensten - Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/diensten\">
<meta property=\"og:description\" content=\"Websites en Webapplicaties rechtstreeks vanuit de Hoppestad Poperinge.
    De ideale partner voor al uw digitale noden.\">
{% endput %}

<section class=\"uk-background-cover uk-background-fixed\"
         style=\"background-image: url({{ 'assets/images/header_home_benjaminlierman.jpg'|theme }});\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\" style=\"height: 55vh;\">
        <h1 class=\"uk-position-center-left uk-padding\"> Diensten</h1>
    </header>
</section>

<div class=\"uk-section uk-section-large\">
    <div class=\"uk-container uk-padding uk-text-justify\"
         uk-scrollspy=\"target: > p; cls:uk-animation-fade; delay: 250; repeat:true;\">
        <p>Ik ontwikkel zowel <strong>websites</strong> als <strong>op maat gemaakte webapplicaties.</strong></p>
    </div>
</div>

{% partial 'misc/webdevelopment' %}
{% partial 'misc/webapplications' %}
{% partial 'misc/digitalbranding' %}", "/var/www/benjaminlierman/themes/benjaminlierman/pages/services.htm", "");
    }
}
