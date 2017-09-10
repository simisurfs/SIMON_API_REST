<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a1f34043332ceabc7c82da17525eea7df96a075df6247912dbc71ef7b411a00a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_049642700f335c0616e55572285e3be386f2b07937cddf2c3bf0829700aedd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049642700f335c0616e55572285e3be386f2b07937cddf2c3bf0829700aedd8b->enter($__internal_049642700f335c0616e55572285e3be386f2b07937cddf2c3bf0829700aedd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8eca1e5887e9702b44207466dd80627397c229982f0ef27e205892c3e3639be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eca1e5887e9702b44207466dd80627397c229982f0ef27e205892c3e3639be2->enter($__internal_8eca1e5887e9702b44207466dd80627397c229982f0ef27e205892c3e3639be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_049642700f335c0616e55572285e3be386f2b07937cddf2c3bf0829700aedd8b->leave($__internal_049642700f335c0616e55572285e3be386f2b07937cddf2c3bf0829700aedd8b_prof);

        
        $__internal_8eca1e5887e9702b44207466dd80627397c229982f0ef27e205892c3e3639be2->leave($__internal_8eca1e5887e9702b44207466dd80627397c229982f0ef27e205892c3e3639be2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09bfeda1a903d94609dea526e765e9ac9283e6a68511df8592b19ed7233336ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09bfeda1a903d94609dea526e765e9ac9283e6a68511df8592b19ed7233336ab->enter($__internal_09bfeda1a903d94609dea526e765e9ac9283e6a68511df8592b19ed7233336ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92284745d867d7b0d413207f07994c2195255adf86a2e9e01ddd1be10f2accc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92284745d867d7b0d413207f07994c2195255adf86a2e9e01ddd1be10f2accc4->enter($__internal_92284745d867d7b0d413207f07994c2195255adf86a2e9e01ddd1be10f2accc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_92284745d867d7b0d413207f07994c2195255adf86a2e9e01ddd1be10f2accc4->leave($__internal_92284745d867d7b0d413207f07994c2195255adf86a2e9e01ddd1be10f2accc4_prof);

        
        $__internal_09bfeda1a903d94609dea526e765e9ac9283e6a68511df8592b19ed7233336ab->leave($__internal_09bfeda1a903d94609dea526e765e9ac9283e6a68511df8592b19ed7233336ab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90baf2db7f47ef5191fa1fc44643c37aa02941b42c6488feb9b9cffa7747082c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90baf2db7f47ef5191fa1fc44643c37aa02941b42c6488feb9b9cffa7747082c->enter($__internal_90baf2db7f47ef5191fa1fc44643c37aa02941b42c6488feb9b9cffa7747082c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dc1cdcd9d6a52ff09e8aea424b63595e1c62f380ec36c206759846c46854874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc1cdcd9d6a52ff09e8aea424b63595e1c62f380ec36c206759846c46854874->enter($__internal_4dc1cdcd9d6a52ff09e8aea424b63595e1c62f380ec36c206759846c46854874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4dc1cdcd9d6a52ff09e8aea424b63595e1c62f380ec36c206759846c46854874->leave($__internal_4dc1cdcd9d6a52ff09e8aea424b63595e1c62f380ec36c206759846c46854874_prof);

        
        $__internal_90baf2db7f47ef5191fa1fc44643c37aa02941b42c6488feb9b9cffa7747082c->leave($__internal_90baf2db7f47ef5191fa1fc44643c37aa02941b42c6488feb9b9cffa7747082c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
