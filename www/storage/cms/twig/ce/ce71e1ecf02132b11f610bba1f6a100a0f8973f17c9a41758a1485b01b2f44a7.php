<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/pages/home.htm */
class __TwigTemplate_73692a009a7d3b6ace6c38e4ed90e2d7693902519ff820e611cc47fe9c86e0fc extends Twig_Template
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
        echo "<meta property=\"og:title\" content=\"Benjamin Lierman - websites &amp; webapplicaties\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/\">
<meta property=\"og:description\" content=\"Websites en Webapplicaties rechtstreeks vanuit de Hoppestad Poperinge.
    De ideale partner voor al uw digitale noden.\">
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 7
        echo "
<section class=\"uk-background-cover uk-background-fixed uk-light\"
         style=\"background-image: url(";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/header_home_benjaminlierman.jpg");
        echo ");\">
    <header class=\"mask-triangle-left uk-padding uk-background-secondary uk-animation-slide-left\"
            style=\"height: 110vh;\">
        <div class=\"uk-position-center-left uk-padding uk-width-1-2@m uk-width-1-1@s\" style=\"min-height: 250px;\">
            <h1><b>Benjamin Lierman</b> <span class=\"element\"></span><span class=\"typed-cursor\"></span></h1>
        </div>
    </header>
    <div class=\"uk-position-bottom-right uk-padding uk-text-primary\" uk-grid>
        <a class=\"uk-link-reset\" href=\"#about\" uk-scroll><strong>Scroll down</strong> to discover more <span
                class=\"uk-dark\" uk-icon=\"icon: arrow-down\"></span></a>
    </div>
</section>

<div id=\"about\" class=\"uk-section uk-section-large uk-dark\">
    <div class=\"uk-container uk-padding uk-text-justify\"
         uk-scrollspy=\"target: > p; cls:uk-animation-fade; delay: 250; repeat:true;\">
        <p>Gesitueerd in de prachtige hoppestad Poperinge help ik lokale zelfstandigen hun <strong>digitale
            mogelijkheden</strong> uitwerken. <br><br>
            Als ondernemer kan het online aspect van je zaak uit het oog verloren worden. Begrijpelijk, want waar moet
            je in hemelsnaam beginnen.
            Samen zoeken we naar de <strong>gepaste media</strong> om je eigen verhaal te schrijven. Hoofdstuk per
            hoofdstuk. Woord voor woord.</p>
    </div>
</div>

<div class=\"uk-section uk-section-muted\">
    <div class=\"uk-container uk-text-center\">
        <div class=\"uk-child-width-1-3@m uk-grid-small uk-grid-match\" uk-grid
             uk-scrollspy=\"target: > div; cls:uk-animation-fade; delay: 250; repeat:true;\">
            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <a class=\"uk-link-reset\" href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten/webdevelopment");
        echo "\"  title=\"service webdevelopment\">
                        <div class=\"uk-card-badge uk-label\">Custom</div>
                        <div class=\"uk-card-body\">
                            <span uk-icon=\"icon: laptop; ratio: 5;\"></span>
                            <h3>Webdevelopment</h3>
                            <p>Door middel van de nieuwste technieken zorgen we er samen voor dat uw bedrijf ook online
                                sterk aanwezig is.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <a class=\"uk-link-reset\" href=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten/webapplicaties");
        echo "\" title=\"service webdevelopment\">
                        <div class=\"uk-card-badge uk-label\">Custom</div>
                        <div class=\"uk-card-body\">
                            <span uk-icon=\"icon: database; ratio: 5;\"></span>
                            <h3>Webapplicaties</h3>
                            <p>In nood voor een webapplicatie op maat. Ook daar hebben we een oplossing voor.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <a class=\"uk-link-reset\" href=\"";
        // line 67
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten/digitalbranding");
        echo "\"  title=\"service digital branding\">
                        <div class=\"uk-card-body\">
                            <span uk-icon=\"icon: heart; ratio: 5;\"></span>
                            <h3>Digital Branding</h3>
                            <p><i>Buzzword much?!</i> Toch kunnen we jouw bedrijf hier ook mee helpen.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin-large\" href=\"";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten");
        echo "\" >Alle
            Diensten<span uk-icon=\"icon: arrow-right\"></span></a>
    </div>
</div>

<div class=\"uk-background-center-left uk-background-fixed item-project-01-01\"
     style=\"background-image: url(";
        // line 84
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/coffeebar_benj.jpg");
        echo ");\">
    <div class=\"item-project-01-02\">
        <div class=\"uk-light uk-padding\" style=\"position: absolute;\">
            <span class=\"uk-label\">Webapplication</span>
            <span class=\"uk-label\">Chatbot</span>
            <span class=\"uk-label\">Custom</span>
        </div>
        <section class=\"mask-triangle-right-01 uk-padding\"
                 uk-scrollspy=\"cls:uk-animation-slide-right; delay: 300; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\">
            <div class=\"uk-flex-right uk-text-left uk-light\" uk-grid>
                <div class=\"uk-width-1-3@m uk-padding-large\">
                    <p class=\"uk-text-bold\">Benj</p>
                    <p> Een webapplicatie om het beheer van aankoopticketjes bij te houden. Hierbovenop werd ook nog een
                        Facebook-chatbot geplaatst voor eenvoudige interactie.</p>
                    <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\" href=\"#\">Binnenkort
                        online</a>
                </div>
            </div>
        </section>
    </div>
</div>

<div class=\"uk-background-center-left uk-background-fixed item-project-02-01\"
     style=\"background-image: url(";
        // line 108
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/delicedagneau_project.jpg");
        echo ");\">
    <div class=\"item-project-02-02\">
        <div class=\"uk-light uk-padding\" style=\"position: absolute; right: 0;\">
            <span class=\"uk-label\">Website</span>
            <span class=\"uk-label\">Drupal 8</span>
        </div>
        <section class=\"mask-triangle-left-01 uk-padding\"
                 uk-scrollspy=\"cls:uk-animation-slide-left; delay: 300; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\">
            <div class=\"uk-flex-left uk-text-left uk-light\" uk-grid>
                <div class=\"uk-width-1-3@m uk-padding-large\">
                    <p class=\"uk-text-bold\">Délice d'Agneau</p>
                    <p>Meeuw International was in nood voor een nieuwe eigen website. Met het oog op de toekomst werd
                        gekozen voor het CMS Drupal 8.</p>
                    <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\"
                       href=\"https://www.delicedagneau.be\" target=\"_blank\" title=\"project delice dagneau\">Bekijk
                        het project<span uk-icon=\"icon: arrow-right\"></span></a>
                </div>
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 108,  123 => 84,  114 => 78,  100 => 67,  84 => 54,  67 => 40,  33 => 9,  29 => 7,  27 => 1,  21 => 2,  19 => 1,);
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
<meta property=\"og:title\" content=\"Benjamin Lierman - websites &amp; webapplicaties\">
<meta property=\"og:url\" content=\"http://www.benjaminlierman.be/\">
<meta property=\"og:description\" content=\"Websites en Webapplicaties rechtstreeks vanuit de Hoppestad Poperinge.
    De ideale partner voor al uw digitale noden.\">
{% endput %}

<section class=\"uk-background-cover uk-background-fixed uk-light\"
         style=\"background-image: url({{ 'assets/images/header_home_benjaminlierman.jpg'|theme }});\">
    <header class=\"mask-triangle-left uk-padding uk-background-secondary uk-animation-slide-left\"
            style=\"height: 110vh;\">
        <div class=\"uk-position-center-left uk-padding uk-width-1-2@m uk-width-1-1@s\" style=\"min-height: 250px;\">
            <h1><b>Benjamin Lierman</b> <span class=\"element\"></span><span class=\"typed-cursor\"></span></h1>
        </div>
    </header>
    <div class=\"uk-position-bottom-right uk-padding uk-text-primary\" uk-grid>
        <a class=\"uk-link-reset\" href=\"#about\" uk-scroll><strong>Scroll down</strong> to discover more <span
                class=\"uk-dark\" uk-icon=\"icon: arrow-down\"></span></a>
    </div>
</section>

<div id=\"about\" class=\"uk-section uk-section-large uk-dark\">
    <div class=\"uk-container uk-padding uk-text-justify\"
         uk-scrollspy=\"target: > p; cls:uk-animation-fade; delay: 250; repeat:true;\">
        <p>Gesitueerd in de prachtige hoppestad Poperinge help ik lokale zelfstandigen hun <strong>digitale
            mogelijkheden</strong> uitwerken. <br><br>
            Als ondernemer kan het online aspect van je zaak uit het oog verloren worden. Begrijpelijk, want waar moet
            je in hemelsnaam beginnen.
            Samen zoeken we naar de <strong>gepaste media</strong> om je eigen verhaal te schrijven. Hoofdstuk per
            hoofdstuk. Woord voor woord.</p>
    </div>
</div>

<div class=\"uk-section uk-section-muted\">
    <div class=\"uk-container uk-text-center\">
        <div class=\"uk-child-width-1-3@m uk-grid-small uk-grid-match\" uk-grid
             uk-scrollspy=\"target: > div; cls:uk-animation-fade; delay: 250; repeat:true;\">
            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <a class=\"uk-link-reset\" href=\"{{ 'diensten/webdevelopment'|page }}\"  title=\"service webdevelopment\">
                        <div class=\"uk-card-badge uk-label\">Custom</div>
                        <div class=\"uk-card-body\">
                            <span uk-icon=\"icon: laptop; ratio: 5;\"></span>
                            <h3>Webdevelopment</h3>
                            <p>Door middel van de nieuwste technieken zorgen we er samen voor dat uw bedrijf ook online
                                sterk aanwezig is.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <a class=\"uk-link-reset\" href=\"{{ 'diensten/webapplicaties'|page }}\" title=\"service webdevelopment\">
                        <div class=\"uk-card-badge uk-label\">Custom</div>
                        <div class=\"uk-card-body\">
                            <span uk-icon=\"icon: database; ratio: 5;\"></span>
                            <h3>Webapplicaties</h3>
                            <p>In nood voor een webapplicatie op maat. Ook daar hebben we een oplossing voor.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div>
                <div class=\"uk-card uk-card-hover uk-card-large uk-card-default uk-text-center\">
                    <a class=\"uk-link-reset\" href=\"{{ 'diensten/digitalbranding'|page }}\"  title=\"service digital branding\">
                        <div class=\"uk-card-body\">
                            <span uk-icon=\"icon: heart; ratio: 5;\"></span>
                            <h3>Digital Branding</h3>
                            <p><i>Buzzword much?!</i> Toch kunnen we jouw bedrijf hier ook mee helpen.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin-large\" href=\"{{ 'diensten'|page }}\" >Alle
            Diensten<span uk-icon=\"icon: arrow-right\"></span></a>
    </div>
</div>

<div class=\"uk-background-center-left uk-background-fixed item-project-01-01\"
     style=\"background-image: url({{ 'assets/images/coffeebar_benj.jpg'|theme }});\">
    <div class=\"item-project-01-02\">
        <div class=\"uk-light uk-padding\" style=\"position: absolute;\">
            <span class=\"uk-label\">Webapplication</span>
            <span class=\"uk-label\">Chatbot</span>
            <span class=\"uk-label\">Custom</span>
        </div>
        <section class=\"mask-triangle-right-01 uk-padding\"
                 uk-scrollspy=\"cls:uk-animation-slide-right; delay: 300; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\">
            <div class=\"uk-flex-right uk-text-left uk-light\" uk-grid>
                <div class=\"uk-width-1-3@m uk-padding-large\">
                    <p class=\"uk-text-bold\">Benj</p>
                    <p> Een webapplicatie om het beheer van aankoopticketjes bij te houden. Hierbovenop werd ook nog een
                        Facebook-chatbot geplaatst voor eenvoudige interactie.</p>
                    <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\" href=\"#\">Binnenkort
                        online</a>
                </div>
            </div>
        </section>
    </div>
</div>

<div class=\"uk-background-center-left uk-background-fixed item-project-02-01\"
     style=\"background-image: url({{ 'assets/images/delicedagneau_project.jpg'|theme }});\">
    <div class=\"item-project-02-02\">
        <div class=\"uk-light uk-padding\" style=\"position: absolute; right: 0;\">
            <span class=\"uk-label\">Website</span>
            <span class=\"uk-label\">Drupal 8</span>
        </div>
        <section class=\"mask-triangle-left-01 uk-padding\"
                 uk-scrollspy=\"cls:uk-animation-slide-left; delay: 300; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\">
            <div class=\"uk-flex-left uk-text-left uk-light\" uk-grid>
                <div class=\"uk-width-1-3@m uk-padding-large\">
                    <p class=\"uk-text-bold\">Délice d'Agneau</p>
                    <p>Meeuw International was in nood voor een nieuwe eigen website. Met het oog op de toekomst werd
                        gekozen voor het CMS Drupal 8.</p>
                    <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\"
                       href=\"https://www.delicedagneau.be\" target=\"_blank\" title=\"project delice dagneau\">Bekijk
                        het project<span uk-icon=\"icon: arrow-right\"></span></a>
                </div>
            </div>
        </section>
    </div>
</div>", "/var/www/benjaminlierman/themes/benjaminlierman/pages/home.htm", "");
    }
}
