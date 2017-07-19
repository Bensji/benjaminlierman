<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/pages/contact.htm */
class __TwigTemplate_a7f814a59723ed2691ed756c3533039a5625b89a1a4ed73c617bae955527e0ff extends Twig_Template
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
        echo "<meta property=\"og:title\" content=\"Contact - Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/contact\">
<meta property=\"og:description\" content=\"Websites en Webapplicaties rechtstreeks vanuit de Hoppestad Poperinge.
    De ideale partner voor al uw digitale noden.\">
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 7
        echo "
<section class=\"uk-background-cover uk-background-fixed uk-background-bottom-right\"
         style=\"background-image: url(";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/pexels-photo-92904.jpeg");
        echo ");\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\"
            style=\"height: 40vh;\">
        <h1 class=\"uk-position-center-left uk-padding\"> Contact</h1>
    </header>
</section>

<div class=\"uk-section uk-section-large\">
    <div class=\"uk-container\">
        <div uk-grid>
            <div class=\"uk-width-1-3@m uk-width-1-1@s uk-text-justify uk-padding-small\">
                <ul class=\"uk-list\">
                    <li class=\"uk-text-bold uk-text-uppercase\">Benjamin Lierman</li>
                    <li>Werf 123</li>
                    <li>8970 Poperinge</li>
                    <li>BE 0671.689.168</li>
                    <li><br></li>
                    <li>+ 32 (0) 493 74 70 29</li>
                    <li>info@benjaminlierman.be</li>
                </ul>
            </div>

            <div class=\"uk-width-2-3@m uk-width-1-1@s\">
                ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("misc/contactform"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 33,  59 => 32,  33 => 9,  29 => 7,  27 => 1,  21 => 2,  19 => 1,);
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
<meta property=\"og:title\" content=\"Contact - Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/contact\">
<meta property=\"og:description\" content=\"Websites en Webapplicaties rechtstreeks vanuit de Hoppestad Poperinge.
    De ideale partner voor al uw digitale noden.\">
{% endput %}

<section class=\"uk-background-cover uk-background-fixed uk-background-bottom-right\"
         style=\"background-image: url({{ 'assets/images/pexels-photo-92904.jpeg'|theme }});\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\"
            style=\"height: 40vh;\">
        <h1 class=\"uk-position-center-left uk-padding\"> Contact</h1>
    </header>
</section>

<div class=\"uk-section uk-section-large\">
    <div class=\"uk-container\">
        <div uk-grid>
            <div class=\"uk-width-1-3@m uk-width-1-1@s uk-text-justify uk-padding-small\">
                <ul class=\"uk-list\">
                    <li class=\"uk-text-bold uk-text-uppercase\">Benjamin Lierman</li>
                    <li>Werf 123</li>
                    <li>8970 Poperinge</li>
                    <li>BE 0671.689.168</li>
                    <li><br></li>
                    <li>+ 32 (0) 493 74 70 29</li>
                    <li>info@benjaminlierman.be</li>
                </ul>
            </div>

            <div class=\"uk-width-2-3@m uk-width-1-1@s\">
                {% partial 'misc/contactform' %}
            </div>
        </div>
    </div>
</div>", "/var/www/benjaminlierman/themes/benjaminlierman/pages/contact.htm", "");
    }
}
