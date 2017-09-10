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
        $__internal_498c4d266f48b434b35072917c79984c0ff4333bff963d48e36096016cb37ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498c4d266f48b434b35072917c79984c0ff4333bff963d48e36096016cb37ecc->enter($__internal_498c4d266f48b434b35072917c79984c0ff4333bff963d48e36096016cb37ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_22d0d280578c26f11349bffbb4e228b13339967820320bfe0413dd3eb513821b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d0d280578c26f11349bffbb4e228b13339967820320bfe0413dd3eb513821b->enter($__internal_22d0d280578c26f11349bffbb4e228b13339967820320bfe0413dd3eb513821b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_498c4d266f48b434b35072917c79984c0ff4333bff963d48e36096016cb37ecc->leave($__internal_498c4d266f48b434b35072917c79984c0ff4333bff963d48e36096016cb37ecc_prof);

        
        $__internal_22d0d280578c26f11349bffbb4e228b13339967820320bfe0413dd3eb513821b->leave($__internal_22d0d280578c26f11349bffbb4e228b13339967820320bfe0413dd3eb513821b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b57e1f4102b581880fa656786741b0c1112c499e6058818ae07194bf5020f88c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57e1f4102b581880fa656786741b0c1112c499e6058818ae07194bf5020f88c->enter($__internal_b57e1f4102b581880fa656786741b0c1112c499e6058818ae07194bf5020f88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_854b8bc412142a0b0df203f36a8fcb21788dff1e1086191deb88f5d6e7e730f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854b8bc412142a0b0df203f36a8fcb21788dff1e1086191deb88f5d6e7e730f8->enter($__internal_854b8bc412142a0b0df203f36a8fcb21788dff1e1086191deb88f5d6e7e730f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_854b8bc412142a0b0df203f36a8fcb21788dff1e1086191deb88f5d6e7e730f8->leave($__internal_854b8bc412142a0b0df203f36a8fcb21788dff1e1086191deb88f5d6e7e730f8_prof);

        
        $__internal_b57e1f4102b581880fa656786741b0c1112c499e6058818ae07194bf5020f88c->leave($__internal_b57e1f4102b581880fa656786741b0c1112c499e6058818ae07194bf5020f88c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc131cf23b63533157dfd15412f6f7908119dbaf03373ec009ad35295be59f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc131cf23b63533157dfd15412f6f7908119dbaf03373ec009ad35295be59f5->enter($__internal_cfc131cf23b63533157dfd15412f6f7908119dbaf03373ec009ad35295be59f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d17776cc514bf5cb7aa790ffcdae572c840054fa3f86673ca2a764138c42147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d17776cc514bf5cb7aa790ffcdae572c840054fa3f86673ca2a764138c42147->enter($__internal_6d17776cc514bf5cb7aa790ffcdae572c840054fa3f86673ca2a764138c42147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d17776cc514bf5cb7aa790ffcdae572c840054fa3f86673ca2a764138c42147->leave($__internal_6d17776cc514bf5cb7aa790ffcdae572c840054fa3f86673ca2a764138c42147_prof);

        
        $__internal_cfc131cf23b63533157dfd15412f6f7908119dbaf03373ec009ad35295be59f5->leave($__internal_cfc131cf23b63533157dfd15412f6f7908119dbaf03373ec009ad35295be59f5_prof);

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
