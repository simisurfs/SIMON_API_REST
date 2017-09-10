<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_69e884bb1c0016ff9a4b12d15bd20cb9d08cc7b86673ea92c9514ec266686663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_261aac36b2d54a9105c815a24e236ba9bb8c55f70f131560d4ec4d4cc049090c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261aac36b2d54a9105c815a24e236ba9bb8c55f70f131560d4ec4d4cc049090c->enter($__internal_261aac36b2d54a9105c815a24e236ba9bb8c55f70f131560d4ec4d4cc049090c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_96fb500b6bf8a1d21cf3d2f2513bfe962e91b8223db75fd929167b3a41c65456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fb500b6bf8a1d21cf3d2f2513bfe962e91b8223db75fd929167b3a41c65456->enter($__internal_96fb500b6bf8a1d21cf3d2f2513bfe962e91b8223db75fd929167b3a41c65456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261aac36b2d54a9105c815a24e236ba9bb8c55f70f131560d4ec4d4cc049090c->leave($__internal_261aac36b2d54a9105c815a24e236ba9bb8c55f70f131560d4ec4d4cc049090c_prof);

        
        $__internal_96fb500b6bf8a1d21cf3d2f2513bfe962e91b8223db75fd929167b3a41c65456->leave($__internal_96fb500b6bf8a1d21cf3d2f2513bfe962e91b8223db75fd929167b3a41c65456_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ead16c2b9c3ca552c864f350217b3f9ebd5306473b730a1a508982943c46bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ead16c2b9c3ca552c864f350217b3f9ebd5306473b730a1a508982943c46bf5->enter($__internal_7ead16c2b9c3ca552c864f350217b3f9ebd5306473b730a1a508982943c46bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea36ef5f16286a8988e6c4b7862637c6eec617186beb0044fce7edb6a5ba3e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea36ef5f16286a8988e6c4b7862637c6eec617186beb0044fce7edb6a5ba3e60->enter($__internal_ea36ef5f16286a8988e6c4b7862637c6eec617186beb0044fce7edb6a5ba3e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ea36ef5f16286a8988e6c4b7862637c6eec617186beb0044fce7edb6a5ba3e60->leave($__internal_ea36ef5f16286a8988e6c4b7862637c6eec617186beb0044fce7edb6a5ba3e60_prof);

        
        $__internal_7ead16c2b9c3ca552c864f350217b3f9ebd5306473b730a1a508982943c46bf5->leave($__internal_7ead16c2b9c3ca552c864f350217b3f9ebd5306473b730a1a508982943c46bf5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7fb2ae4b4da553d7b4c62b1e25faf1fc774abbe2bbc6fe2d717aa08a06ebd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fb2ae4b4da553d7b4c62b1e25faf1fc774abbe2bbc6fe2d717aa08a06ebd1f->enter($__internal_a7fb2ae4b4da553d7b4c62b1e25faf1fc774abbe2bbc6fe2d717aa08a06ebd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2d801f77c8f1165187cf5e10b4d7f85aa049d1b8076871cfc6a81dd1aa1bf38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d801f77c8f1165187cf5e10b4d7f85aa049d1b8076871cfc6a81dd1aa1bf38->enter($__internal_d2d801f77c8f1165187cf5e10b4d7f85aa049d1b8076871cfc6a81dd1aa1bf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d2d801f77c8f1165187cf5e10b4d7f85aa049d1b8076871cfc6a81dd1aa1bf38->leave($__internal_d2d801f77c8f1165187cf5e10b4d7f85aa049d1b8076871cfc6a81dd1aa1bf38_prof);

        
        $__internal_a7fb2ae4b4da553d7b4c62b1e25faf1fc774abbe2bbc6fe2d717aa08a06ebd1f->leave($__internal_a7fb2ae4b4da553d7b4c62b1e25faf1fc774abbe2bbc6fe2d717aa08a06ebd1f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
