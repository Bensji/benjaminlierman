<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/partials/misc/webapplications.htm */
class __TwigTemplate_7aa4159fb921553e57faa83d9f5ebe316f62cd2b8c094702cb26339c3002e9c5 extends Twig_Template
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
        echo "<div class=\"uk-background-center-right uk-background-fixed uk-light\"
     style=\"background-image: url(";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/pexels-photo-267447.jpeg");
        echo ");\">
    <div>
        <section class=\"mask-triangle-left-01 uk-flex-middle uk-padding-large\"
                 uk-scrollspy=\"cls:uk-animation-slide-left; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\" uk-grid>
            <div class=\"uk-width-1-3@m uk-padding-large\">
                <p class=\"uk-text-bold\">Webapplicaties</p>
                <p>Gebaseerd op <strong>Symfony en React.js</strong> creëren we voor jou een API-based webapplicatie op
                    maat.</p>
                <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\"
                   href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten/webapplicaties");
        echo "\" title=\"Webapplications\">Meer informatie<span
                        uk-icon=\"icon: arrow-right\"></span></a>
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/partials/misc/webapplications.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"uk-background-center-right uk-background-fixed uk-light\"
     style=\"background-image: url({{ 'assets/images/pexels-photo-267447.jpeg'|theme }});\">
    <div>
        <section class=\"mask-triangle-left-01 uk-flex-middle uk-padding-large\"
                 uk-scrollspy=\"cls:uk-animation-slide-left; repeat:true;\"
                 style=\"background-color: #222222; height: 40vh;\" uk-grid>
            <div class=\"uk-width-1-3@m uk-padding-large\">
                <p class=\"uk-text-bold\">Webapplicaties</p>
                <p>Gebaseerd op <strong>Symfony en React.js</strong> creëren we voor jou een API-based webapplicatie op
                    maat.</p>
                <a class=\"uk-button-default uk-button uk-button-large uk-text-muted uk-margin\"
                   href=\"{{ 'diensten/webapplicaties'|page }}\" title=\"Webapplications\">Meer informatie<span
                        uk-icon=\"icon: arrow-right\"></span></a>
            </div>
        </section>
    </div>
</div>", "/var/www/benjaminlierman/themes/benjaminlierman/partials/misc/webapplications.htm", "");
    }
}
