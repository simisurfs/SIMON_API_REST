<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_b4a7dbe2c8bb0747b8d0a8481e80c65fb4d995ae6a1456fb47d0e92e6358718f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_156d120bbe78cbaea572ddda074eb90f49bcedd681afed93a4d879e7fa752aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156d120bbe78cbaea572ddda074eb90f49bcedd681afed93a4d879e7fa752aca->enter($__internal_156d120bbe78cbaea572ddda074eb90f49bcedd681afed93a4d879e7fa752aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ce4de912a76e2e8de304fb0441dd91d2bea3896fbf843abbc5ae11ff9bd2f610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4de912a76e2e8de304fb0441dd91d2bea3896fbf843abbc5ae11ff9bd2f610->enter($__internal_ce4de912a76e2e8de304fb0441dd91d2bea3896fbf843abbc5ae11ff9bd2f610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_156d120bbe78cbaea572ddda074eb90f49bcedd681afed93a4d879e7fa752aca->leave($__internal_156d120bbe78cbaea572ddda074eb90f49bcedd681afed93a4d879e7fa752aca_prof);

        
        $__internal_ce4de912a76e2e8de304fb0441dd91d2bea3896fbf843abbc5ae11ff9bd2f610->leave($__internal_ce4de912a76e2e8de304fb0441dd91d2bea3896fbf843abbc5ae11ff9bd2f610_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_117b1cd543d209d6416c32668dcd60acd6cbd9cbfed3f170b01aa1d48f8804ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117b1cd543d209d6416c32668dcd60acd6cbd9cbfed3f170b01aa1d48f8804ff->enter($__internal_117b1cd543d209d6416c32668dcd60acd6cbd9cbfed3f170b01aa1d48f8804ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8932c1350cb2e8d44f40e3587fc32dbb7e97035717b0ba5e69c60acd20a6289d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8932c1350cb2e8d44f40e3587fc32dbb7e97035717b0ba5e69c60acd20a6289d->enter($__internal_8932c1350cb2e8d44f40e3587fc32dbb7e97035717b0ba5e69c60acd20a6289d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8932c1350cb2e8d44f40e3587fc32dbb7e97035717b0ba5e69c60acd20a6289d->leave($__internal_8932c1350cb2e8d44f40e3587fc32dbb7e97035717b0ba5e69c60acd20a6289d_prof);

        
        $__internal_117b1cd543d209d6416c32668dcd60acd6cbd9cbfed3f170b01aa1d48f8804ff->leave($__internal_117b1cd543d209d6416c32668dcd60acd6cbd9cbfed3f170b01aa1d48f8804ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
