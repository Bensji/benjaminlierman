<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/partials/misc/digitalbranding.htm */
class __TwigTemplate_66ea95aa414fcab4794a4739ba1ecb6eedf78dcdfe90e004b61f45e799aaec83 extends Twig_Template
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
        echo "<div class=\"uk-background-center-left uk-background-fixed\" style=\"background-image: url(";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/coffeebar_benj.jpg");
        echo ");\">
    <div>
        <section class=\"mask-triangle-right-01 uk-flex-right uk-text-left uk-light uk-flex-middle uk-padding-large\"
                 uk-scrollspy=\"cls:uk-animation-slide-right; delay: 250; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\" uk-grid>
            <div class=\"uk-width-1-3@m uk-padding-large\">
                <p class=\"uk-text-bold\">Digital Branding</p>
                <p>
                    Je eigen merk digitaal op de kaart plaatsen of creatieve digitale campagnes op poten zetten. Laat je verbazen door wat het web allemaal te bieden heeft.
                </p>
                <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten/digitalbranding");
        echo "\" title=\"Webapplicaties\">Meer informatie<span uk-icon=\"icon: arrow-right\"></span></a>
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/partials/misc/digitalbranding.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"uk-background-center-left uk-background-fixed\" style=\"background-image: url({{ 'assets/images/coffeebar_benj.jpg'|theme }});\">
    <div>
        <section class=\"mask-triangle-right-01 uk-flex-right uk-text-left uk-light uk-flex-middle uk-padding-large\"
                 uk-scrollspy=\"cls:uk-animation-slide-right; delay: 250; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\" uk-grid>
            <div class=\"uk-width-1-3@m uk-padding-large\">
                <p class=\"uk-text-bold\">Digital Branding</p>
                <p>
                    Je eigen merk digitaal op de kaart plaatsen of creatieve digitale campagnes op poten zetten. Laat je verbazen door wat het web allemaal te bieden heeft.
                </p>
                <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\" href=\"{{ 'diensten/digitalbranding'|page }}\" title=\"Webapplicaties\">Meer informatie<span uk-icon=\"icon: arrow-right\"></span></a>
            </div>
        </section>
    </div>
</div>", "/var/www/benjaminlierman/themes/benjaminlierman/partials/misc/digitalbranding.htm", "");
    }
}
