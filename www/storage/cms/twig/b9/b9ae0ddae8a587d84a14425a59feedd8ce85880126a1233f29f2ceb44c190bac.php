<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/pages/diensten/digitalbranding.htm */
class __TwigTemplate_04543c8e1bc2767c2e6e01dd8875d2f7f7c3198d6ac7d42b85409e439d8244cc extends Twig_Template
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
        echo "<meta property=\"og:title\" content=\"Digital Branding - Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/diensten/digital-branding\">
<meta property=\"og:description\" content=\"Een creatieve campagne lanceren? Wil je zowel offline als online aanwezigheid?\">
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 6
        echo "
<section class=\"uk-background-cover uk-background-bottom-right\"
         style=\"background-image: url(";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/pexels-photo-316466.jpeg");
        echo ");\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\" style=\"height: 55vh;\">
        <div class=\"uk-position-center-left uk-padding\">
            <h1>Digital Branding</h1>
            <ul class=\"uk-breadcrumb\">
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten");
        echo "\" title=\"diensten overzichtspagina\">Diensten</a></li>
                <li>Digital Branding</li>
            </ul>
        </div>
    </header>
</section>

<div class=\"uk-grid-collapse\" uk-scrollspy=\"target: > div > img; cls:uk-animation-slide-left; delay: 250; repeat:true;\"  uk-grid>
    <div class=\"uk-width-3-5@m uk-width-1-1@s\">
        <img src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/pexels-photo-475735.jpeg");
        echo "\" alt=\"\">
    </div>
    <div class=\"uk-width-2-5@m uk-width-1-1@s uk-padding-large\">
        <div class=\"uk-tile uk-tile-default\">
            <p class=\"uk-text-bold\">
                Impactvolle campagnes
            </p>
            <p>
                Een creatieve campagne is een <strong>erg krachtige marketingtool.</strong> Of je nu een <strong>nieuwe dienst lanceert</strong> of je verkoop wilt stimuleren, wij brengen jouw boodschap op een duidelijke en originele manier over.
                In het oog springen zonder de eigenheid van <strong>je merk te verliezen</strong>, dat is waar we voor gaan.
            </p>
            <p>
                Natuurlijk verdient uw boodschap ook <strong>de beste drager.</strong> We selecteren en motiveren in uw campagneplan de beste communicatiemix.
                We werken crossmediaal en combineren probleemloos traditionele met de allernieuwste media.
                We kiezen en kopen de meest geschikte media, bepalen het formaat en de doorlooptijd en <strong>beheren zo optimaal uw mediabudget.</strong>
            </p>
        </div>
    </div>
</div>

";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("misc/webdevelopment"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/pages/diensten/digitalbranding.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 42,  52 => 22,  40 => 13,  32 => 8,  28 => 6,  26 => 1,  21 => 2,  19 => 1,);
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
<meta property=\"og:title\" content=\"Digital Branding - Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/diensten/digital-branding\">
<meta property=\"og:description\" content=\"Een creatieve campagne lanceren? Wil je zowel offline als online aanwezigheid?\">
{% endput %}

<section class=\"uk-background-cover uk-background-bottom-right\"
         style=\"background-image: url({{ 'assets/images/pexels-photo-316466.jpeg'|theme }});\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\" style=\"height: 55vh;\">
        <div class=\"uk-position-center-left uk-padding\">
            <h1>Digital Branding</h1>
            <ul class=\"uk-breadcrumb\">
                <li><a href=\"{{ 'diensten'|page }}\" title=\"diensten overzichtspagina\">Diensten</a></li>
                <li>Digital Branding</li>
            </ul>
        </div>
    </header>
</section>

<div class=\"uk-grid-collapse\" uk-scrollspy=\"target: > div > img; cls:uk-animation-slide-left; delay: 250; repeat:true;\"  uk-grid>
    <div class=\"uk-width-3-5@m uk-width-1-1@s\">
        <img src=\"{{ 'assets/images/pexels-photo-475735.jpeg'|theme }}\" alt=\"\">
    </div>
    <div class=\"uk-width-2-5@m uk-width-1-1@s uk-padding-large\">
        <div class=\"uk-tile uk-tile-default\">
            <p class=\"uk-text-bold\">
                Impactvolle campagnes
            </p>
            <p>
                Een creatieve campagne is een <strong>erg krachtige marketingtool.</strong> Of je nu een <strong>nieuwe dienst lanceert</strong> of je verkoop wilt stimuleren, wij brengen jouw boodschap op een duidelijke en originele manier over.
                In het oog springen zonder de eigenheid van <strong>je merk te verliezen</strong>, dat is waar we voor gaan.
            </p>
            <p>
                Natuurlijk verdient uw boodschap ook <strong>de beste drager.</strong> We selecteren en motiveren in uw campagneplan de beste communicatiemix.
                We werken crossmediaal en combineren probleemloos traditionele met de allernieuwste media.
                We kiezen en kopen de meest geschikte media, bepalen het formaat en de doorlooptijd en <strong>beheren zo optimaal uw mediabudget.</strong>
            </p>
        </div>
    </div>
</div>

{% partial 'misc/webdevelopment' %}", "/var/www/benjaminlierman/themes/benjaminlierman/pages/diensten/digitalbranding.htm", "");
    }
}
