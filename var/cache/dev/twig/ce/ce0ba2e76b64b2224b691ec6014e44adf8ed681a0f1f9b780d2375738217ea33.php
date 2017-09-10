<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0541a88dde80acf3cce098a96b4906b32d960b4be3b76a542c256949e852c97c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37170f74015f29d588b33928fe99ce2db924b33474c6eba816ece45359d0c604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37170f74015f29d588b33928fe99ce2db924b33474c6eba816ece45359d0c604->enter($__internal_37170f74015f29d588b33928fe99ce2db924b33474c6eba816ece45359d0c604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ac1bfeb6c5f313495051c9d5d05fab5853b12f171dbee40b6964da565ba6f171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1bfeb6c5f313495051c9d5d05fab5853b12f171dbee40b6964da565ba6f171->enter($__internal_ac1bfeb6c5f313495051c9d5d05fab5853b12f171dbee40b6964da565ba6f171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_37170f74015f29d588b33928fe99ce2db924b33474c6eba816ece45359d0c604->leave($__internal_37170f74015f29d588b33928fe99ce2db924b33474c6eba816ece45359d0c604_prof);

        
        $__internal_ac1bfeb6c5f313495051c9d5d05fab5853b12f171dbee40b6964da565ba6f171->leave($__internal_ac1bfeb6c5f313495051c9d5d05fab5853b12f171dbee40b6964da565ba6f171_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c54805fb33300b8dc33bfbd9477f36d1b2e01c8cff911eee5bfc155fe680ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c54805fb33300b8dc33bfbd9477f36d1b2e01c8cff911eee5bfc155fe680ad8->enter($__internal_9c54805fb33300b8dc33bfbd9477f36d1b2e01c8cff911eee5bfc155fe680ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e4e556daa2f1abb596152e9a5cfcb932a3d12d157df79656d717b4fb6d06a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4e556daa2f1abb596152e9a5cfcb932a3d12d157df79656d717b4fb6d06a9a->enter($__internal_2e4e556daa2f1abb596152e9a5cfcb932a3d12d157df79656d717b4fb6d06a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2e4e556daa2f1abb596152e9a5cfcb932a3d12d157df79656d717b4fb6d06a9a->leave($__internal_2e4e556daa2f1abb596152e9a5cfcb932a3d12d157df79656d717b4fb6d06a9a_prof);

        
        $__internal_9c54805fb33300b8dc33bfbd9477f36d1b2e01c8cff911eee5bfc155fe680ad8->leave($__internal_9c54805fb33300b8dc33bfbd9477f36d1b2e01c8cff911eee5bfc155fe680ad8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
