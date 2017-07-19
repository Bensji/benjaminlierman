<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/partials/misc/webdevelopment.htm */
class __TwigTemplate_ca38f3efa9279d53b914d248b215fc14d89c69353d7085c957f8018f80cbcc3b extends Twig_Template
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
        echo "<div class=\"uk-background-center-left uk-background-fixed uk-background-norepeat uk-light\"
     style=\"background-image: url(";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/pexels-photo-326514.jpeg");
        echo ");\">
    <div>
        <section class=\"mask-triangle-right-01 uk-flex-right uk-text-left uk-light uk-flex-middle uk-padding-large\"
                 uk-scrollspy=\"cls:uk-animation-slide-right; delay: 250; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\" uk-grid>
            <div class=\"uk-width-1-3@m\">
                <p class=\"uk-text-bold\">Webdesign & development</p>
                <p>
                    Responsive en custom webdesign en -development. Geen lege doos, maar een volledig aanpasbaar
                    eindproduct.
                </p>
                <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\"
                   href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten/webdevelopment");
        echo "\" title=\"Webdevelopment\">Meer informatie<span
                        uk-icon=\"icon: arrow-right\"></span></a>
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/partials/misc/webdevelopment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"uk-background-center-left uk-background-fixed uk-background-norepeat uk-light\"
     style=\"background-image: url({{ 'assets/images/pexels-photo-326514.jpeg'|theme }});\">
    <div>
        <section class=\"mask-triangle-right-01 uk-flex-right uk-text-left uk-light uk-flex-middle uk-padding-large\"
                 uk-scrollspy=\"cls:uk-animation-slide-right; delay: 250; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\" uk-grid>
            <div class=\"uk-width-1-3@m\">
                <p class=\"uk-text-bold\">Webdesign & development</p>
                <p>
                    Responsive en custom webdesign en -development. Geen lege doos, maar een volledig aanpasbaar
                    eindproduct.
                </p>
                <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\"
                   href=\"{{ 'diensten/webdevelopment'|page }}\" title=\"Webdevelopment\">Meer informatie<span
                        uk-icon=\"icon: arrow-right\"></span></a>
            </div>
        </section>
    </div>
</div>", "/var/www/benjaminlierman/themes/benjaminlierman/partials/misc/webdevelopment.htm", "");
    }
}
