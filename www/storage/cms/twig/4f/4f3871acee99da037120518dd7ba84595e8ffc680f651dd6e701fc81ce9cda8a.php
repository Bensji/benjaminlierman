<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/pages/404.htm */
class __TwigTemplate_3946ead9ba86784ae27c12d57f015016ae759fa6e644caf886b057ae9199b628 extends Twig_Template
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
        echo "<section class=\"uk-background-cover uk-background-fixed uk-background-bottom-right\"
         style=\"background-image: url(";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/pexels-photo-92904.jpeg");
        echo ");\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\"
            style=\"height: 40vh;\">
        <h1 class=\"uk-position-center-left uk-padding\"> 404</h1>
    </header>
</section>

<div class=\"uk-container uk-dark uk-margin-large-top\">
    <h1>404 - Not Found</h1>
    <p>De gevraagde pagina kon niet worden gevonden. Neem een kijkje op onze andere pagina's of laat ons weten naar war je op zoek was!</p>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"uk-background-cover uk-background-fixed uk-background-bottom-right\"
         style=\"background-image: url({{ 'assets/images/pexels-photo-92904.jpeg'|theme }});\">
    <header class=\"mask-triangle-left uk-padding uk-light uk-background-secondary uk-animation-slide-left\"
            style=\"height: 40vh;\">
        <h1 class=\"uk-position-center-left uk-padding\"> 404</h1>
    </header>
</section>

<div class=\"uk-container uk-dark uk-margin-large-top\">
    <h1>404 - Not Found</h1>
    <p>De gevraagde pagina kon niet worden gevonden. Neem een kijkje op onze andere pagina's of laat ons weten naar war je op zoek was!</p>
</div>", "/var/www/benjaminlierman/themes/benjaminlierman/pages/404.htm", "");
    }
}
