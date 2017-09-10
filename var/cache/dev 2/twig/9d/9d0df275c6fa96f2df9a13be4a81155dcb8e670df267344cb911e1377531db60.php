<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6629c6214b0e1d6f7b4e0a6207c8b6456f887ad17fc465f3c6737a6827513f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cfc6580f48b530680013066439a2d347acc77e18262fdad4e57bc5ff307e738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cfc6580f48b530680013066439a2d347acc77e18262fdad4e57bc5ff307e738->enter($__internal_7cfc6580f48b530680013066439a2d347acc77e18262fdad4e57bc5ff307e738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5ffe5f870fcc9d01a321f12f9688773aa4511d7b4dae12a83bccf310043a2f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffe5f870fcc9d01a321f12f9688773aa4511d7b4dae12a83bccf310043a2f82->enter($__internal_5ffe5f870fcc9d01a321f12f9688773aa4511d7b4dae12a83bccf310043a2f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7cfc6580f48b530680013066439a2d347acc77e18262fdad4e57bc5ff307e738->leave($__internal_7cfc6580f48b530680013066439a2d347acc77e18262fdad4e57bc5ff307e738_prof);

        
        $__internal_5ffe5f870fcc9d01a321f12f9688773aa4511d7b4dae12a83bccf310043a2f82->leave($__internal_5ffe5f870fcc9d01a321f12f9688773aa4511d7b4dae12a83bccf310043a2f82_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3359c2b9f7127a5efe22ba50d42d0b6a03581300615eab4c84c21fe352852f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3359c2b9f7127a5efe22ba50d42d0b6a03581300615eab4c84c21fe352852f3f->enter($__internal_3359c2b9f7127a5efe22ba50d42d0b6a03581300615eab4c84c21fe352852f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc4f739fe9796d934bc44e005f5394409955f2117a7fdd00143d28d565862734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4f739fe9796d934bc44e005f5394409955f2117a7fdd00143d28d565862734->enter($__internal_dc4f739fe9796d934bc44e005f5394409955f2117a7fdd00143d28d565862734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dc4f739fe9796d934bc44e005f5394409955f2117a7fdd00143d28d565862734->leave($__internal_dc4f739fe9796d934bc44e005f5394409955f2117a7fdd00143d28d565862734_prof);

        
        $__internal_3359c2b9f7127a5efe22ba50d42d0b6a03581300615eab4c84c21fe352852f3f->leave($__internal_3359c2b9f7127a5efe22ba50d42d0b6a03581300615eab4c84c21fe352852f3f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f94513533f0e82d716a42ce82ffccf569f35b676f43075cddd3abdcd31e7ae3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94513533f0e82d716a42ce82ffccf569f35b676f43075cddd3abdcd31e7ae3d->enter($__internal_f94513533f0e82d716a42ce82ffccf569f35b676f43075cddd3abdcd31e7ae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2b1480d18b845970701798c880cfcc9b3548dc850db71000b4b413e7ef27ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b1480d18b845970701798c880cfcc9b3548dc850db71000b4b413e7ef27ccb->enter($__internal_e2b1480d18b845970701798c880cfcc9b3548dc850db71000b4b413e7ef27ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e2b1480d18b845970701798c880cfcc9b3548dc850db71000b4b413e7ef27ccb->leave($__internal_e2b1480d18b845970701798c880cfcc9b3548dc850db71000b4b413e7ef27ccb_prof);

        
        $__internal_f94513533f0e82d716a42ce82ffccf569f35b676f43075cddd3abdcd31e7ae3d->leave($__internal_f94513533f0e82d716a42ce82ffccf569f35b676f43075cddd3abdcd31e7ae3d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aa324f2648c53dfb7d8c9e9ef09aaa4573d604a9b661ac8748003793dbfb965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa324f2648c53dfb7d8c9e9ef09aaa4573d604a9b661ac8748003793dbfb965->enter($__internal_9aa324f2648c53dfb7d8c9e9ef09aaa4573d604a9b661ac8748003793dbfb965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f201ee2d107c65ce89730e59b2c3437a5838c342b4c0b722e12b531cf571c574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f201ee2d107c65ce89730e59b2c3437a5838c342b4c0b722e12b531cf571c574->enter($__internal_f201ee2d107c65ce89730e59b2c3437a5838c342b4c0b722e12b531cf571c574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f201ee2d107c65ce89730e59b2c3437a5838c342b4c0b722e12b531cf571c574->leave($__internal_f201ee2d107c65ce89730e59b2c3437a5838c342b4c0b722e12b531cf571c574_prof);

        
        $__internal_9aa324f2648c53dfb7d8c9e9ef09aaa4573d604a9b661ac8748003793dbfb965->leave($__internal_9aa324f2648c53dfb7d8c9e9ef09aaa4573d604a9b661ac8748003793dbfb965_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
