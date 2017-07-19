<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/layouts/special.htm */
class __TwigTemplate_9602193b5d0a863f63750b55f541a79c37a4ac9d2c40f4ae25419d8cc4fa2899 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Benjamin Lierman\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"robots\" content=\"index, follow\">
    <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/app.styles.min.css");
        echo "\" rel=\"stylesheet\">

    <meta property=\"og:site_name\" content=\"Benjamin Lierman\">
    <meta property=\"og:type\" content=\"Website\">
    <meta property=\"og:locale\" content=\"nl_NL\">
    <meta property=\"og:email\" content=\"info@benjaminlierman.be\">
    <meta property=\"og:phone_number\" content=\"0493 74 70 29\">
    <meta property=\"og:latitude\" content=\"50.852060\">
    <meta property=\"og:longitude\" content=\"2.711841\">
    <meta property=\"og:street-address\" content=\"Werf 123\">
    <meta property=\"og:locality\" content=\"Poperinge\">
    <meta property=\"og:region\" content=\"West-Vlaanderen\">
    <meta property=\"og:postal-code\" content=\"8970\">
    <meta property=\"og:country-name\" content=\"België\">
    <meta property=\"og:image\" content=\"";
        // line 26
        echo "assets/images/header_home_benjaminlierman.jpg";
        echo "\">

    ";
        // line 28
        $context['__placeholder_metatags_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('metatags', $context['__placeholder_metatags_default_contents']);
        unset($context['__placeholder_metatags_default_contents']);        // line 29
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 30
        echo "</head>
<body>
<div id=\"main\" class=\"uk-animation-fade\">
    <!-- Header -->
    ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "
    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 38
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 39
        echo "    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "    </footer>
</div>
<!-- Scripts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\"></script>
<script src=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/node_modules/jquery/dist/jquery.min.js");
        echo "\"></script>
<script src=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/node_modules/jquery-lazyload/jquery.lazyload.js");
        echo "\"></script>
<script src=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/node_modules/uikit/dist/js/uikit.min.js");
        echo "\"></script>
<script src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/node_modules/uikit/dist/js/uikit-icons.min.js");
        echo "\"></script>
<script src=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/app.scripts.min.js");
        echo "\"></script>
";
        // line 53
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 54
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 55
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/layouts/special.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  129 => 54,  122 => 53,  118 => 52,  114 => 51,  110 => 50,  106 => 49,  102 => 48,  96 => 44,  92 => 43,  86 => 39,  84 => 38,  79 => 35,  75 => 34,  69 => 30,  65 => 29,  63 => 28,  58 => 26,  41 => 12,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>{{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"Benjamin Lierman\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"robots\" content=\"index, follow\">
    <link href=\"{{ 'assets/css/app.styles.min.css'|theme }}\" rel=\"stylesheet\">

    <meta property=\"og:site_name\" content=\"Benjamin Lierman\">
    <meta property=\"og:type\" content=\"Website\">
    <meta property=\"og:locale\" content=\"nl_NL\">
    <meta property=\"og:email\" content=\"info@benjaminlierman.be\">
    <meta property=\"og:phone_number\" content=\"0493 74 70 29\">
    <meta property=\"og:latitude\" content=\"50.852060\">
    <meta property=\"og:longitude\" content=\"2.711841\">
    <meta property=\"og:street-address\" content=\"Werf 123\">
    <meta property=\"og:locality\" content=\"Poperinge\">
    <meta property=\"og:region\" content=\"West-Vlaanderen\">
    <meta property=\"og:postal-code\" content=\"8970\">
    <meta property=\"og:country-name\" content=\"België\">
    <meta property=\"og:image\" content=\"{{ 'assets/images/header_home_benjaminlierman.jpg' }}\">

    {% placeholder metatags %}
    {% styles %}
</head>
<body>
<div id=\"main\" class=\"uk-animation-fade\">
    <!-- Header -->
    {% partial 'site/header' %}

    <!-- Content -->
    <section id=\"layout-content\">
        {% page %}
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>
</div>
<!-- Scripts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\"></script>
<script src=\"{{ 'assets/node_modules/jquery/dist/jquery.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/node_modules/jquery-lazyload/jquery.lazyload.js'|theme }}\"></script>
<script src=\"{{ 'assets/node_modules/uikit/dist/js/uikit.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/node_modules/uikit/dist/js/uikit-icons.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/app.scripts.min.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}

</body>
</html>", "/var/www/benjaminlierman/themes/benjaminlierman/layouts/special.htm", "");
    }
}
