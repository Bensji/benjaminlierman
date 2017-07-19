<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/pages/services/webdevelopment.htm */
class __TwigTemplate_b74aae6b226eba94f239c51515f365505a7c6e53b28e71f34c278065d9fec505 extends Twig_Template
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
        echo "<meta property=\"og:title\" content=\"Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/services/webdevelopment\">
<meta property=\"og:description\"
      content=\"Een eigen website is de dag van vandaag logisch en vanzelfspreken. Een digitale partner vinden die deze op de gepaste manier voor u kan verwezelijken is dit niet. Ontdek hier wat ik allemaal voor u kan betekenen.\">
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 7
        echo "
<section class=\"uk-background-cover uk-background-fixed uk-background-center-right\"
         style=\"background-image: url(";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/startup-website-layout-wireframes-ideas-sketched-on-paper-picjumbo-com.jpg");
        echo ");\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\"
            style=\"height: 55vh;\">
        <div class=\"uk-position-center-left uk-padding\">
            <h1>Webdevelopment</h1>
            <ul class=\"uk-breadcrumb\">
                <li><a href=\"/services\" title=\"services overzichtspagina\">Services</a></li>
                <li>Webdevelopment</li>
            </ul>
        </div>
    </header>
</section>

<div class=\"uk-grid-collapse uk-flex-middle\"
     uk-scrollspy=\"target: > div > img; cls:uk-animation-fade; delay: 250; repeat:true;\" uk-grid>
    <div class=\"uk-width-2-5@m uk-width-1-1@s uk-padding-large\">
        <div class=\"uk-tile uk-tile-default\">
            <p>Zo logisch en vanzelfsprekend is dat tegenwoordig. Maar aanwezigheid op het internet is niet genoeg.
                Het is van kapitaal belang dat <strong>uw site gebruiksvriendelijk is en goed oogt</strong>.
                Helemaal in lijn met het imago van uw zaak.
            </p>
            <p>
                Tegelijk moet een site leven. <strong>Dus moet u die zelf kunnen aanpassen.</strong> En dit liefst ook
                zo makkelijk mogelijk.
            </p>
        </div>
    </div>
    <div class=\"uk-width-3-5@m uk-width-1-1@s\">
        <img src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/free-tablet-mockup.png");
        echo "\" alt=\"\">
    </div>
</div>

<div class=\"uk-section uk-section-muted\">
    <div class=\"uk-container uk-text-center\">
        <div class=\"uk-child-width-1-3@m uk-grid-small uk-grid-match\" uk-grid
             uk-scrollspy=\"target: > div; cls:uk-animation-fade; delay: 250; repeat:true;\">
            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: happy; ratio: 5;\"></span>
                        <h3>Een website die mag gezien worden</h3>
                        <p>
                            Jouw online project krijgt een creatief en functioneel ontwerp, in een stijl die <strong>perfect
                            past.</strong>
                        </p>
                        <p>
                            Schitterend, bruikbaar en juist.
                            Geen bandwerk hier, maar <strong>een uniek ontwerp</strong> aangepast aan de doelgroep.
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #webdesign
                    </div>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: search; ratio: 5;\"></span>
                        <h3>Een website die mag gevonden worden</h3>
                        <p>
                            Een goede website is naast functioneel en mooi, ook nog <strong>goed vindbaar.</strong> Ook
                            hier wordt rekening mee gehouden.
                            Onze websites laden snel, <strong>passen zich aan</strong> op verschillende devices en
                            hebben genoten van SEO.
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #SEO
                    </div>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: move; ratio: 5;\"></span>
                        <h3>Een website die mag gebruikt worden</h3>
                        <p>
                            Als dit gewenst is, kun je alle content van de website <strong>zelf aanpassen.</strong>
                            Dit door gebruik te maken van het open-source <strong>CMS</strong> Drupal, Wordpress of
                            andere!
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #drupal #wordpress
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 103
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("misc/webapplications"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/pages/services/webdevelopment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 103,  64 => 37,  33 => 9,  29 => 7,  27 => 1,  21 => 2,  19 => 1,);
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
<meta property=\"og:title\" content=\"Websites &amp; webapplicaties vanuit Poperinge - Benjamin Lierman\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/services/webdevelopment\">
<meta property=\"og:description\"
      content=\"Een eigen website is de dag van vandaag logisch en vanzelfspreken. Een digitale partner vinden die deze op de gepaste manier voor u kan verwezelijken is dit niet. Ontdek hier wat ik allemaal voor u kan betekenen.\">
{% endput %}

<section class=\"uk-background-cover uk-background-fixed uk-background-center-right\"
         style=\"background-image: url({{ 'assets/images/startup-website-layout-wireframes-ideas-sketched-on-paper-picjumbo-com.jpg'|theme }});\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\"
            style=\"height: 55vh;\">
        <div class=\"uk-position-center-left uk-padding\">
            <h1>Webdevelopment</h1>
            <ul class=\"uk-breadcrumb\">
                <li><a href=\"/services\" title=\"services overzichtspagina\">Services</a></li>
                <li>Webdevelopment</li>
            </ul>
        </div>
    </header>
</section>

<div class=\"uk-grid-collapse uk-flex-middle\"
     uk-scrollspy=\"target: > div > img; cls:uk-animation-fade; delay: 250; repeat:true;\" uk-grid>
    <div class=\"uk-width-2-5@m uk-width-1-1@s uk-padding-large\">
        <div class=\"uk-tile uk-tile-default\">
            <p>Zo logisch en vanzelfsprekend is dat tegenwoordig. Maar aanwezigheid op het internet is niet genoeg.
                Het is van kapitaal belang dat <strong>uw site gebruiksvriendelijk is en goed oogt</strong>.
                Helemaal in lijn met het imago van uw zaak.
            </p>
            <p>
                Tegelijk moet een site leven. <strong>Dus moet u die zelf kunnen aanpassen.</strong> En dit liefst ook
                zo makkelijk mogelijk.
            </p>
        </div>
    </div>
    <div class=\"uk-width-3-5@m uk-width-1-1@s\">
        <img src=\"{{ 'assets/images/free-tablet-mockup.png'|theme }}\" alt=\"\">
    </div>
</div>

<div class=\"uk-section uk-section-muted\">
    <div class=\"uk-container uk-text-center\">
        <div class=\"uk-child-width-1-3@m uk-grid-small uk-grid-match\" uk-grid
             uk-scrollspy=\"target: > div; cls:uk-animation-fade; delay: 250; repeat:true;\">
            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: happy; ratio: 5;\"></span>
                        <h3>Een website die mag gezien worden</h3>
                        <p>
                            Jouw online project krijgt een creatief en functioneel ontwerp, in een stijl die <strong>perfect
                            past.</strong>
                        </p>
                        <p>
                            Schitterend, bruikbaar en juist.
                            Geen bandwerk hier, maar <strong>een uniek ontwerp</strong> aangepast aan de doelgroep.
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #webdesign
                    </div>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: search; ratio: 5;\"></span>
                        <h3>Een website die mag gevonden worden</h3>
                        <p>
                            Een goede website is naast functioneel en mooi, ook nog <strong>goed vindbaar.</strong> Ook
                            hier wordt rekening mee gehouden.
                            Onze websites laden snel, <strong>passen zich aan</strong> op verschillende devices en
                            hebben genoten van SEO.
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #SEO
                    </div>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <div class=\"uk-card-body\">
                        <span uk-icon=\"icon: move; ratio: 5;\"></span>
                        <h3>Een website die mag gebruikt worden</h3>
                        <p>
                            Als dit gewenst is, kun je alle content van de website <strong>zelf aanpassen.</strong>
                            Dit door gebruik te maken van het open-source <strong>CMS</strong> Drupal, Wordpress of
                            andere!
                        </p>
                    </div>
                    <div class=\"uk-card-footer uk-text-bold\">
                        #drupal #wordpress
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% partial 'misc/webapplications' %}", "/var/www/benjaminlierman/themes/benjaminlierman/pages/services/webdevelopment.htm", "");
    }
}
