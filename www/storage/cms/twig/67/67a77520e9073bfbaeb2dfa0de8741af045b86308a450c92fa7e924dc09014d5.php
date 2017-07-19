<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/partials/site/header.htm */
class __TwigTemplate_7da13a79a718759ad924ff75da6942eeed58f2c966e17f351d4f801f21fe2874 extends Twig_Template
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
        echo "<div class=\"uk-position-relative\">
    <div id=\"top-nav\" class=\"uk-position-top uk-position-fixed uk-blend-difference nav-down uk-animation-slide-top\">
        <nav class=\"uk-navbar-container uk-navbar-transparent\" uk-navbar style=\"padding-right: 30px;\">
            <div class=\"uk-navbar-left\">
                <a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" title=\"naar home benjamin lierman\"><img class=\"uk-logo uk-padding-small\"
                                                                    src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/svg/logo_benjaminlierman-white.svg");
        echo "\"
                                                                    style=\"width: 125px;\"></a>
            </div>
            <div class=\"uk-navbar-right\">
                <ul class=\"uk-navbar-nav\">
                    <li class=\"";
        // line 11
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "uk-active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
                    <li class=\"";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "diensten")) {
            echo "uk-active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("diensten");
        echo "\">Diensten</a>
                    </li>
                    <li class=\"";
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "uk-active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  45 => 12,  37 => 11,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"uk-position-relative\">
    <div id=\"top-nav\" class=\"uk-position-top uk-position-fixed uk-blend-difference nav-down uk-animation-slide-top\">
        <nav class=\"uk-navbar-container uk-navbar-transparent\" uk-navbar style=\"padding-right: 30px;\">
            <div class=\"uk-navbar-left\">
                <a href=\"{{ 'home'|page }}\" title=\"naar home benjamin lierman\"><img class=\"uk-logo uk-padding-small\"
                                                                    src=\"{{ 'assets/images/svg/logo_benjaminlierman-white.svg' | theme }}\"
                                                                    style=\"width: 125px;\"></a>
            </div>
            <div class=\"uk-navbar-right\">
                <ul class=\"uk-navbar-nav\">
                    <li class=\"{% if this.page.id == 'home' %}uk-active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                    <li class=\"{% if this.page.id == 'diensten' %}uk-active{% endif %}\"><a href=\"{{ 'diensten'|page }}\">Diensten</a>
                    </li>
                    <li class=\"{% if this.page.id == 'contact' %}uk-active{% endif %}\"><a href=\"{{ 'contact'|page }}\">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>", "/var/www/benjaminlierman/themes/benjaminlierman/partials/site/header.htm", "");
    }
}
