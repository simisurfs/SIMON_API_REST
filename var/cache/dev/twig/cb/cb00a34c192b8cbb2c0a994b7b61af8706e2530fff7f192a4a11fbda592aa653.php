<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_05ac60eb134bef8b1cd25c667bdf1eb8bf51221630c6198d60e4879a28e02a19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ce9661ef9906791d46435a6c7466360fda34fe3d949fdd5eb98b8e83954c107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce9661ef9906791d46435a6c7466360fda34fe3d949fdd5eb98b8e83954c107->enter($__internal_1ce9661ef9906791d46435a6c7466360fda34fe3d949fdd5eb98b8e83954c107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9424231003519831e575e4e39f577432df7aa2dcf9e10dbe703434fd6df1b40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9424231003519831e575e4e39f577432df7aa2dcf9e10dbe703434fd6df1b40b->enter($__internal_9424231003519831e575e4e39f577432df7aa2dcf9e10dbe703434fd6df1b40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ce9661ef9906791d46435a6c7466360fda34fe3d949fdd5eb98b8e83954c107->leave($__internal_1ce9661ef9906791d46435a6c7466360fda34fe3d949fdd5eb98b8e83954c107_prof);

        
        $__internal_9424231003519831e575e4e39f577432df7aa2dcf9e10dbe703434fd6df1b40b->leave($__internal_9424231003519831e575e4e39f577432df7aa2dcf9e10dbe703434fd6df1b40b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c3319d6c10f82a953e05c849cefb21480a24f52a8b5570726da070f258e284f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3319d6c10f82a953e05c849cefb21480a24f52a8b5570726da070f258e284f4->enter($__internal_c3319d6c10f82a953e05c849cefb21480a24f52a8b5570726da070f258e284f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_170288907def60d23e5d636a473ea5e68d1a764ac86386e4c540f288f0cd0fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170288907def60d23e5d636a473ea5e68d1a764ac86386e4c540f288f0cd0fb9->enter($__internal_170288907def60d23e5d636a473ea5e68d1a764ac86386e4c540f288f0cd0fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_170288907def60d23e5d636a473ea5e68d1a764ac86386e4c540f288f0cd0fb9->leave($__internal_170288907def60d23e5d636a473ea5e68d1a764ac86386e4c540f288f0cd0fb9_prof);

        
        $__internal_c3319d6c10f82a953e05c849cefb21480a24f52a8b5570726da070f258e284f4->leave($__internal_c3319d6c10f82a953e05c849cefb21480a24f52a8b5570726da070f258e284f4_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a3922f9d8ad124448d86f5cfcef971d10aec27c692e1aceeee60b30b87f7df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3922f9d8ad124448d86f5cfcef971d10aec27c692e1aceeee60b30b87f7df4->enter($__internal_2a3922f9d8ad124448d86f5cfcef971d10aec27c692e1aceeee60b30b87f7df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea3cd3ec7395b2afe3625dba52c83a35381f9fcc7d5ca5ecdd139c39e25970f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3cd3ec7395b2afe3625dba52c83a35381f9fcc7d5ca5ecdd139c39e25970f0->enter($__internal_ea3cd3ec7395b2afe3625dba52c83a35381f9fcc7d5ca5ecdd139c39e25970f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ea3cd3ec7395b2afe3625dba52c83a35381f9fcc7d5ca5ecdd139c39e25970f0->leave($__internal_ea3cd3ec7395b2afe3625dba52c83a35381f9fcc7d5ca5ecdd139c39e25970f0_prof);

        
        $__internal_2a3922f9d8ad124448d86f5cfcef971d10aec27c692e1aceeee60b30b87f7df4->leave($__internal_2a3922f9d8ad124448d86f5cfcef971d10aec27c692e1aceeee60b30b87f7df4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
