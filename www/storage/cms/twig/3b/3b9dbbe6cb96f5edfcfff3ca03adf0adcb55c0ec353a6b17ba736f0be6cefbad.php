<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/partials/site/footer.htm */
class __TwigTemplate_2262e5f8bba1f45f77eaf2b6c6286d832edddb2dd5eb2dd9f7eae0011427a445 extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) != "contact")) {
            // line 2
            echo "<div class=\"uk-section-default uk-dark uk-section-large uk-margin-top\"
     uk-scrollspy=\"target: > div > h3; cls:uk-animation-fade; delay: 250; repeat: true;\">
    <div class=\"uk-text-center uk-padding\" uk-grid>
        <h3 class=\"uk-width-1-1\"><a href=\"";
            // line 5
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\" title=\"contact Benjamin Lierman\"
                                    class=\"uk-link-reset\"><span class=\"uk-text-muted\">Ook op zoek naar inspirerend digitaal werk?</span>
            Let's go! <span class=\"uk-margin-small-right\" uk-icon=\"icon: arrow-right\"></span></a></h3>
    </div>
</div>
";
        }
        // line 11
        echo "
<hr>

<footer class=\"uk-section uk-section-large uk-padding uk-text-muted\">
    <section class=\"uk-child-width-expand@s uk-text-center uk-text-left@m\"
             uk-scrollspy=\"target: > ul; cls:uk-animation-fade; delay: 250;\" uk-grid>
        <ul class=\"uk-list\">
            <li>Benjamin Lierman</li>
            <li>Werf 123</li>
            <li>8970 Poperinge</li>
            <li>BE 0671.689.168</li>
        </ul>
        <ul class=\"uk-list\">
            <li><a href=\"mailto:info@benjaminlierman.be\" title=\"mail benjamin lierman\">info@benjaminlierman.be</a></li>
            <li>+ 32 (0) 493 74 70 29</li>
        </ul>
        <ul class=\"uk-list\">
            <li><a>Facebook</a></li>
            <li><a>Pinterest</a></li>
        </ul>
    </section>
</footer>

<hr>

<div class=\"uk-section uk-padding uk-text-muted\">
    <section uk-scrollspy=\"target: > small; cls:uk-animation-slide-bottom; delay: 250; repeat: true;\">
        <small>&copy; Copyright Benjamin Lierman 2017</small>
        <a class=\"uk-link-reset\" href=\"/terms-and-conditions\">
            <small class=\"uk-margin-small-left\">Terms & Conditions</small>
        </a>
        <a class=\"uk-link-reset\" href=\"/privacy-policy\">
            <small class=\"uk-margin-small-left\">Privacy Policy</small>
        </a>
        <a class=\"uk-link-reset\" href=\"/contact\">
            <small class=\"uk-align-right\"><strong>Let's go</strong> <span class=\"uk-margin-small-right\"
                                                                          uk-icon=\"icon: arrow-right\"></span></small>
        </a>
    </section>
</div>

<a id=\"totop\" href=\"#\" uk-totop uk-scroll=\"duration: 1400;\"></a>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.page.id != 'contact' %}
<div class=\"uk-section-default uk-dark uk-section-large uk-margin-top\"
     uk-scrollspy=\"target: > div > h3; cls:uk-animation-fade; delay: 250; repeat: true;\">
    <div class=\"uk-text-center uk-padding\" uk-grid>
        <h3 class=\"uk-width-1-1\"><a href=\"{{ 'contact'|page }}\" title=\"contact Benjamin Lierman\"
                                    class=\"uk-link-reset\"><span class=\"uk-text-muted\">Ook op zoek naar inspirerend digitaal werk?</span>
            Let's go! <span class=\"uk-margin-small-right\" uk-icon=\"icon: arrow-right\"></span></a></h3>
    </div>
</div>
{% endif %}

<hr>

<footer class=\"uk-section uk-section-large uk-padding uk-text-muted\">
    <section class=\"uk-child-width-expand@s uk-text-center uk-text-left@m\"
             uk-scrollspy=\"target: > ul; cls:uk-animation-fade; delay: 250;\" uk-grid>
        <ul class=\"uk-list\">
            <li>Benjamin Lierman</li>
            <li>Werf 123</li>
            <li>8970 Poperinge</li>
            <li>BE 0671.689.168</li>
        </ul>
        <ul class=\"uk-list\">
            <li><a href=\"mailto:info@benjaminlierman.be\" title=\"mail benjamin lierman\">info@benjaminlierman.be</a></li>
            <li>+ 32 (0) 493 74 70 29</li>
        </ul>
        <ul class=\"uk-list\">
            <li><a>Facebook</a></li>
            <li><a>Pinterest</a></li>
        </ul>
    </section>
</footer>

<hr>

<div class=\"uk-section uk-padding uk-text-muted\">
    <section uk-scrollspy=\"target: > small; cls:uk-animation-slide-bottom; delay: 250; repeat: true;\">
        <small>&copy; Copyright Benjamin Lierman 2017</small>
        <a class=\"uk-link-reset\" href=\"/terms-and-conditions\">
            <small class=\"uk-margin-small-left\">Terms & Conditions</small>
        </a>
        <a class=\"uk-link-reset\" href=\"/privacy-policy\">
            <small class=\"uk-margin-small-left\">Privacy Policy</small>
        </a>
        <a class=\"uk-link-reset\" href=\"/contact\">
            <small class=\"uk-align-right\"><strong>Let's go</strong> <span class=\"uk-margin-small-right\"
                                                                          uk-icon=\"icon: arrow-right\"></span></small>
        </a>
    </section>
</div>

<a id=\"totop\" href=\"#\" uk-totop uk-scroll=\"duration: 1400;\"></a>", "/var/www/benjaminlierman/themes/benjaminlierman/partials/site/footer.htm", "");
    }
}