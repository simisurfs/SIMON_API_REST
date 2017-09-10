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
        $__internal_fcb7753808b6720a60aae89ff1e3379b09fecd6224a6e897b5dad7262b5be877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb7753808b6720a60aae89ff1e3379b09fecd6224a6e897b5dad7262b5be877->enter($__internal_fcb7753808b6720a60aae89ff1e3379b09fecd6224a6e897b5dad7262b5be877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f157bbf3d1aac264a460a593e93745aa4a839e176872b893e8eb922b3501155b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f157bbf3d1aac264a460a593e93745aa4a839e176872b893e8eb922b3501155b->enter($__internal_f157bbf3d1aac264a460a593e93745aa4a839e176872b893e8eb922b3501155b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb7753808b6720a60aae89ff1e3379b09fecd6224a6e897b5dad7262b5be877->leave($__internal_fcb7753808b6720a60aae89ff1e3379b09fecd6224a6e897b5dad7262b5be877_prof);

        
        $__internal_f157bbf3d1aac264a460a593e93745aa4a839e176872b893e8eb922b3501155b->leave($__internal_f157bbf3d1aac264a460a593e93745aa4a839e176872b893e8eb922b3501155b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ff62ce2cf4b0c30ad119401fa1a5987069c4c0512f78d66ffabdcb2b5b42dd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff62ce2cf4b0c30ad119401fa1a5987069c4c0512f78d66ffabdcb2b5b42dd74->enter($__internal_ff62ce2cf4b0c30ad119401fa1a5987069c4c0512f78d66ffabdcb2b5b42dd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_39bbe505f2cbef77582478fc03fd1c6f8f291c1ace7b4340b622447f267ce84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bbe505f2cbef77582478fc03fd1c6f8f291c1ace7b4340b622447f267ce84c->enter($__internal_39bbe505f2cbef77582478fc03fd1c6f8f291c1ace7b4340b622447f267ce84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_39bbe505f2cbef77582478fc03fd1c6f8f291c1ace7b4340b622447f267ce84c->leave($__internal_39bbe505f2cbef77582478fc03fd1c6f8f291c1ace7b4340b622447f267ce84c_prof);

        
        $__internal_ff62ce2cf4b0c30ad119401fa1a5987069c4c0512f78d66ffabdcb2b5b42dd74->leave($__internal_ff62ce2cf4b0c30ad119401fa1a5987069c4c0512f78d66ffabdcb2b5b42dd74_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d97efdc78a605bdf01f7474374eff46490bb1c5e8c67b614a91ceb4a3754a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d97efdc78a605bdf01f7474374eff46490bb1c5e8c67b614a91ceb4a3754a73->enter($__internal_9d97efdc78a605bdf01f7474374eff46490bb1c5e8c67b614a91ceb4a3754a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c068966b39b07484eafd681d0fd08f88230ae7dc1cb2678d1cf833d2a25f4219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c068966b39b07484eafd681d0fd08f88230ae7dc1cb2678d1cf833d2a25f4219->enter($__internal_c068966b39b07484eafd681d0fd08f88230ae7dc1cb2678d1cf833d2a25f4219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c068966b39b07484eafd681d0fd08f88230ae7dc1cb2678d1cf833d2a25f4219->leave($__internal_c068966b39b07484eafd681d0fd08f88230ae7dc1cb2678d1cf833d2a25f4219_prof);

        
        $__internal_9d97efdc78a605bdf01f7474374eff46490bb1c5e8c67b614a91ceb4a3754a73->leave($__internal_9d97efdc78a605bdf01f7474374eff46490bb1c5e8c67b614a91ceb4a3754a73_prof);

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
