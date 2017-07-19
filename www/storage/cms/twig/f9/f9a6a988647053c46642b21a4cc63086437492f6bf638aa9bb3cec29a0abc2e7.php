<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/pages/diensten/webapplicaties.htm */
class __TwigTemplate_93af701b6954455c23455efab6b3b4d4234a723cdd2ca8b71e9dd43f6a20a223 extends Twig_Template
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
        echo "<meta property=\"og:title\" content=\"Webapplicaties op basis van Symfony en React.js - Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/diensten/webapplicaties\">
<meta property=\"og:description\" content=\"Een eigen webapplicatie op maat. Gekoppeld met bestaande systemen zorgen deze ervoor dat je on the go data kunt bewerken, exporteren of toevoegen.\">
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 6
        echo "
<section class=\"uk-background-cover uk-background-fixed uk-background-center-right\"
         style=\"background-image: url(";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/82514406502.jpg");
        echo ");\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\" style=\"height: 55vh;\">
        <div class=\"uk-position-center-left uk-padding\">
            <h1>Webapplicaties</h1>
            <ul class=\"uk-breadcrumb\">
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten");
        echo "\" title=\"diensten overzichtspagina\">Diensten</a></li>
                <li>Webapplicaties</li>
            </ul>
        </div>
    </header>
</section>

<div class=\"uk-grid-collapse uk-flex-middle\" uk-scrollspy=\"target: > div > img; cls:uk-animation-slide-left; delay: 250; repeat:true;\"  uk-grid>
    <div class=\"uk-width-3-5@m uk-width-1-1@s\">
        <img src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/photo-1421757381940-5d269570b21c.jpg");
        echo "\" alt=\"\">
    </div>
    <div class=\"uk-width-2-5@m uk-width-1-1@s uk-padding-large\">
        <div class=\"uk-tile uk-tile-default\">
            <p>
                Is een webapplicatie waar je naar op zoek bent?
            </p>
            <p class=\"uk-text-uppercase uk-text-muted\"> I've got this.</p>
            <p>
                Webapplicaties hebben verschillende vormen en noden, maar ze moeten allen <strong>betrouwbaar en toegankelijk </strong> zijn.
            </p>
        </div>
    </div>
</div>

<div class=\"uk-section uk-section-muted\">
    <div class=\"uk-container uk-text-center\">
        <div class=\"uk-child-width-1-3@m uk-grid-small uk-grid-match\" uk-grid uk-scrollspy=\"target: > div; cls:uk-animation-fade; delay: 250; repeat:true;\">
            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: cloud-download; ratio: 5;\"></span>
                        <h3>Een webapplicatie staat nooit alleen</h3>
                        <p>
                            <strong>Integratie</strong> met je eigen CRM, ERP, DB of welk ander systeem dan ook.
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #CRM #ERP #API
                    </div>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: phone; ratio: 5;\"></span>
                        <h3>1 webapplicatie to rule them all</h3>
                        <p>
                            <strong>On the go</strong> data toevoegen, exporteren of bewerken.
                            Een responsive webapplicatie <strong>kan dit allemaal.</strong>
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #responsive #mobile
                    </div>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: server; ratio: 5;\"></span>
                        <h3>Uitgebreide mogelijkheden</h3>
                        <p>
                            <strong>Integratie</strong> met betaalsystemen, SMS-diensten,
                            mail-reminders, E-id diensten,... <strong>you name it.</strong>
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #integration #paymentproviders
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 90
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("misc/digitalbranding"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/pages/diensten/webapplicaties.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 90,  52 => 22,  40 => 13,  32 => 8,  28 => 6,  26 => 1,  21 => 2,  19 => 1,);
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
<meta property=\"og:title\" content=\"Webapplicaties op basis van Symfony en React.js - Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/diensten/webapplicaties\">
<meta property=\"og:description\" content=\"Een eigen webapplicatie op maat. Gekoppeld met bestaande systemen zorgen deze ervoor dat je on the go data kunt bewerken, exporteren of toevoegen.\">
{% endput %}

<section class=\"uk-background-cover uk-background-fixed uk-background-center-right\"
         style=\"background-image: url({{ 'assets/images/82514406502.jpg'|theme }});\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\" style=\"height: 55vh;\">
        <div class=\"uk-position-center-left uk-padding\">
            <h1>Webapplicaties</h1>
            <ul class=\"uk-breadcrumb\">
                <li><a href=\"{{ 'diensten'|page }}\" title=\"diensten overzichtspagina\">Diensten</a></li>
                <li>Webapplicaties</li>
            </ul>
        </div>
    </header>
</section>

<div class=\"uk-grid-collapse uk-flex-middle\" uk-scrollspy=\"target: > div > img; cls:uk-animation-slide-left; delay: 250; repeat:true;\"  uk-grid>
    <div class=\"uk-width-3-5@m uk-width-1-1@s\">
        <img src=\"{{ 'assets/images/photo-1421757381940-5d269570b21c.jpg'|theme }}\" alt=\"\">
    </div>
    <div class=\"uk-width-2-5@m uk-width-1-1@s uk-padding-large\">
        <div class=\"uk-tile uk-tile-default\">
            <p>
                Is een webapplicatie waar je naar op zoek bent?
            </p>
            <p class=\"uk-text-uppercase uk-text-muted\"> I've got this.</p>
            <p>
                Webapplicaties hebben verschillende vormen en noden, maar ze moeten allen <strong>betrouwbaar en toegankelijk </strong> zijn.
            </p>
        </div>
    </div>
</div>

<div class=\"uk-section uk-section-muted\">
    <div class=\"uk-container uk-text-center\">
        <div class=\"uk-child-width-1-3@m uk-grid-small uk-grid-match\" uk-grid uk-scrollspy=\"target: > div; cls:uk-animation-fade; delay: 250; repeat:true;\">
            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: cloud-download; ratio: 5;\"></span>
                        <h3>Een webapplicatie staat nooit alleen</h3>
                        <p>
                            <strong>Integratie</strong> met je eigen CRM, ERP, DB of welk ander systeem dan ook.
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #CRM #ERP #API
                    </div>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: phone; ratio: 5;\"></span>
                        <h3>1 webapplicatie to rule them all</h3>
                        <p>
                            <strong>On the go</strong> data toevoegen, exporteren of bewerken.
                            Een responsive webapplicatie <strong>kan dit allemaal.</strong>
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #responsive #mobile
                    </div>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: server; ratio: 5;\"></span>
                        <h3>Uitgebreide mogelijkheden</h3>
                        <p>
                            <strong>Integratie</strong> met betaalsystemen, SMS-diensten,
                            mail-reminders, E-id diensten,... <strong>you name it.</strong>
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #integration #paymentproviders
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% partial 'misc/digitalbranding' %}", "/var/www/benjaminlierman/themes/benjaminlierman/pages/diensten/webapplicaties.htm", "");
    }
}
