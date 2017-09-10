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
        $__internal_41a43a0382cb9e6d04687f69fb3b030c32fedb35787deee396cf8ef7b5fb97f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a43a0382cb9e6d04687f69fb3b030c32fedb35787deee396cf8ef7b5fb97f2->enter($__internal_41a43a0382cb9e6d04687f69fb3b030c32fedb35787deee396cf8ef7b5fb97f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_aa0f6dcef8da8f7af568bd6750cabb0c14d877d293484ea0a4b179ba748e7355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0f6dcef8da8f7af568bd6750cabb0c14d877d293484ea0a4b179ba748e7355->enter($__internal_aa0f6dcef8da8f7af568bd6750cabb0c14d877d293484ea0a4b179ba748e7355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a43a0382cb9e6d04687f69fb3b030c32fedb35787deee396cf8ef7b5fb97f2->leave($__internal_41a43a0382cb9e6d04687f69fb3b030c32fedb35787deee396cf8ef7b5fb97f2_prof);

        
        $__internal_aa0f6dcef8da8f7af568bd6750cabb0c14d877d293484ea0a4b179ba748e7355->leave($__internal_aa0f6dcef8da8f7af568bd6750cabb0c14d877d293484ea0a4b179ba748e7355_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7017d7e95c58dadaff898bfd0d765667a73106ce4485e42e196c60d120ee68ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7017d7e95c58dadaff898bfd0d765667a73106ce4485e42e196c60d120ee68ad->enter($__internal_7017d7e95c58dadaff898bfd0d765667a73106ce4485e42e196c60d120ee68ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7cccc76d552e45150ea586212f254a3574f8fd0b42f3f83bd546f82e71b9167b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cccc76d552e45150ea586212f254a3574f8fd0b42f3f83bd546f82e71b9167b->enter($__internal_7cccc76d552e45150ea586212f254a3574f8fd0b42f3f83bd546f82e71b9167b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7cccc76d552e45150ea586212f254a3574f8fd0b42f3f83bd546f82e71b9167b->leave($__internal_7cccc76d552e45150ea586212f254a3574f8fd0b42f3f83bd546f82e71b9167b_prof);

        
        $__internal_7017d7e95c58dadaff898bfd0d765667a73106ce4485e42e196c60d120ee68ad->leave($__internal_7017d7e95c58dadaff898bfd0d765667a73106ce4485e42e196c60d120ee68ad_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c87feb6ee220fd0e84d46a61514881293170698992944edd531e71be3d700fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c87feb6ee220fd0e84d46a61514881293170698992944edd531e71be3d700fb->enter($__internal_3c87feb6ee220fd0e84d46a61514881293170698992944edd531e71be3d700fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cd954ebd262cecc5f44674d8701e099095db90ea2a9cab75620a9b22582554b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd954ebd262cecc5f44674d8701e099095db90ea2a9cab75620a9b22582554b->enter($__internal_7cd954ebd262cecc5f44674d8701e099095db90ea2a9cab75620a9b22582554b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7cd954ebd262cecc5f44674d8701e099095db90ea2a9cab75620a9b22582554b->leave($__internal_7cd954ebd262cecc5f44674d8701e099095db90ea2a9cab75620a9b22582554b_prof);

        
        $__internal_3c87feb6ee220fd0e84d46a61514881293170698992944edd531e71be3d700fb->leave($__internal_3c87feb6ee220fd0e84d46a61514881293170698992944edd531e71be3d700fb_prof);

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
