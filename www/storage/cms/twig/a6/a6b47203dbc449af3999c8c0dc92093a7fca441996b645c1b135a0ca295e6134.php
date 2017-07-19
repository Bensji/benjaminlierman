<?php

/* /var/www/benjaminlierman/themes/benjaminlierman/partials/misc/contactform.htm */
class __TwigTemplate_1cbfe5a62e6aafd99979434daa79231b40b48b589f10061ca4bd9907f8c46762 extends Twig_Template
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
        echo "<form class=\"contact--form\" data-request=\"";
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "

    <p id=\"error--message\" class=\"uk-text-danger\" style=\"display: none;\">Oeps, deze velden zijn verplicht.</p>

    <div class=\"uk-margin\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"uk-input\" placeholder=\"Naam\" onchange=\"benj.formValidator.removeErrors(this)\">
    </div>

    <div class=\"uk-margin\">
        <input type=\"text\" id=\"email\" name=\"email\" class=\"uk-input\" placeholder=\"E-mail\" onchange=\"benj.formValidator.removeErrors(this)\">
    </div>

    <div class=\"uk-margin\">
        <textarea class=\"uk-textarea\" id=\"comments\" placeholder=\"Bericht\" name=\"comments\" rows=\"8\" cols=\"80\" onchange=\"benj.formValidator.removeErrors(this)\"></textarea>
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\"
            class=\"uk-button-default uk-button uk-button-large uk-text-muted\">Verzenden
    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/benjaminlierman/themes/benjaminlierman/partials/misc/contactform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"contact--form\" data-request=\"{{ genericForm }}::onFormSubmit\">

    {{ form_token() }}

    <p id=\"error--message\" class=\"uk-text-danger\" style=\"display: none;\">Oeps, deze velden zijn verplicht.</p>

    <div class=\"uk-margin\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"uk-input\" placeholder=\"Naam\" onchange=\"benj.formValidator.removeErrors(this)\">
    </div>

    <div class=\"uk-margin\">
        <input type=\"text\" id=\"email\" name=\"email\" class=\"uk-input\" placeholder=\"E-mail\" onchange=\"benj.formValidator.removeErrors(this)\">
    </div>

    <div class=\"uk-margin\">
        <textarea class=\"uk-textarea\" id=\"comments\" placeholder=\"Bericht\" name=\"comments\" rows=\"8\" cols=\"80\" onchange=\"benj.formValidator.removeErrors(this)\"></textarea>
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\"
            class=\"uk-button-default uk-button uk-button-large uk-text-muted\">Verzenden
    </button>
</form>", "/var/www/benjaminlierman/themes/benjaminlierman/partials/misc/contactform.htm", "");
    }
}
