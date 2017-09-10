<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_994962dddf6770796682e3c8ac0e461d0cf2cc71603e3a94fff72ef720d5ec13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48be903fb13a04cf98ee95d014d68964b7f358e8a167cdb71ea4dec6b5eae41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48be903fb13a04cf98ee95d014d68964b7f358e8a167cdb71ea4dec6b5eae41e->enter($__internal_48be903fb13a04cf98ee95d014d68964b7f358e8a167cdb71ea4dec6b5eae41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_29a427cf832b76f9c06089822ab092adb3b60c3af9e77b251d8027266b992b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a427cf832b76f9c06089822ab092adb3b60c3af9e77b251d8027266b992b33->enter($__internal_29a427cf832b76f9c06089822ab092adb3b60c3af9e77b251d8027266b992b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48be903fb13a04cf98ee95d014d68964b7f358e8a167cdb71ea4dec6b5eae41e->leave($__internal_48be903fb13a04cf98ee95d014d68964b7f358e8a167cdb71ea4dec6b5eae41e_prof);

        
        $__internal_29a427cf832b76f9c06089822ab092adb3b60c3af9e77b251d8027266b992b33->leave($__internal_29a427cf832b76f9c06089822ab092adb3b60c3af9e77b251d8027266b992b33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee88baec0cfcc2d9a1ea5bea04a8ae3dc6470a944710b1314c247a792a03e048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee88baec0cfcc2d9a1ea5bea04a8ae3dc6470a944710b1314c247a792a03e048->enter($__internal_ee88baec0cfcc2d9a1ea5bea04a8ae3dc6470a944710b1314c247a792a03e048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cca9b3469e5e43cef97d962df4623bb8dbb62430b1b5daa6ef9c415cd8f0b3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca9b3469e5e43cef97d962df4623bb8dbb62430b1b5daa6ef9c415cd8f0b3e6->enter($__internal_cca9b3469e5e43cef97d962df4623bb8dbb62430b1b5daa6ef9c415cd8f0b3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cca9b3469e5e43cef97d962df4623bb8dbb62430b1b5daa6ef9c415cd8f0b3e6->leave($__internal_cca9b3469e5e43cef97d962df4623bb8dbb62430b1b5daa6ef9c415cd8f0b3e6_prof);

        
        $__internal_ee88baec0cfcc2d9a1ea5bea04a8ae3dc6470a944710b1314c247a792a03e048->leave($__internal_ee88baec0cfcc2d9a1ea5bea04a8ae3dc6470a944710b1314c247a792a03e048_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_503433639ec9828c88c1074e45711facddee74855c8dffa2a6148b866289bb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503433639ec9828c88c1074e45711facddee74855c8dffa2a6148b866289bb4e->enter($__internal_503433639ec9828c88c1074e45711facddee74855c8dffa2a6148b866289bb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f9ce76ff5a7e2d385cd2685f585903ee4f85810921ff8607b1b98c02d2a0116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9ce76ff5a7e2d385cd2685f585903ee4f85810921ff8607b1b98c02d2a0116->enter($__internal_7f9ce76ff5a7e2d385cd2685f585903ee4f85810921ff8607b1b98c02d2a0116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f9ce76ff5a7e2d385cd2685f585903ee4f85810921ff8607b1b98c02d2a0116->leave($__internal_7f9ce76ff5a7e2d385cd2685f585903ee4f85810921ff8607b1b98c02d2a0116_prof);

        
        $__internal_503433639ec9828c88c1074e45711facddee74855c8dffa2a6148b866289bb4e->leave($__internal_503433639ec9828c88c1074e45711facddee74855c8dffa2a6148b866289bb4e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b0e4825b0235629d3f14eb93ffe5e4c6b6c3e362e593b662ac32d635cb741fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0e4825b0235629d3f14eb93ffe5e4c6b6c3e362e593b662ac32d635cb741fb->enter($__internal_4b0e4825b0235629d3f14eb93ffe5e4c6b6c3e362e593b662ac32d635cb741fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_188820cec6d7575913fb7a6507cf4d1f9c6bf8a7c4ed2b4fd0608bc23e4eb7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188820cec6d7575913fb7a6507cf4d1f9c6bf8a7c4ed2b4fd0608bc23e4eb7c2->enter($__internal_188820cec6d7575913fb7a6507cf4d1f9c6bf8a7c4ed2b4fd0608bc23e4eb7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_188820cec6d7575913fb7a6507cf4d1f9c6bf8a7c4ed2b4fd0608bc23e4eb7c2->leave($__internal_188820cec6d7575913fb7a6507cf4d1f9c6bf8a7c4ed2b4fd0608bc23e4eb7c2_prof);

        
        $__internal_4b0e4825b0235629d3f14eb93ffe5e4c6b6c3e362e593b662ac32d635cb741fb->leave($__internal_4b0e4825b0235629d3f14eb93ffe5e4c6b6c3e362e593b662ac32d635cb741fb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
