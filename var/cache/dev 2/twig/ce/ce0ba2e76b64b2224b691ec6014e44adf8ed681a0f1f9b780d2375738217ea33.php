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
        $__internal_31d0071855f540a3f89cba8c27225691912572ed0319af159380f90a36dfc2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d0071855f540a3f89cba8c27225691912572ed0319af159380f90a36dfc2b7->enter($__internal_31d0071855f540a3f89cba8c27225691912572ed0319af159380f90a36dfc2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5f399d5c7db82f0052c7bc81504fa44b469a77e67026f4ac8a405fea3e34c8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f399d5c7db82f0052c7bc81504fa44b469a77e67026f4ac8a405fea3e34c8f4->enter($__internal_5f399d5c7db82f0052c7bc81504fa44b469a77e67026f4ac8a405fea3e34c8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_31d0071855f540a3f89cba8c27225691912572ed0319af159380f90a36dfc2b7->leave($__internal_31d0071855f540a3f89cba8c27225691912572ed0319af159380f90a36dfc2b7_prof);

        
        $__internal_5f399d5c7db82f0052c7bc81504fa44b469a77e67026f4ac8a405fea3e34c8f4->leave($__internal_5f399d5c7db82f0052c7bc81504fa44b469a77e67026f4ac8a405fea3e34c8f4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a13410f90506f90e86fa0e276e63f7097e033eddd22a39732f3282861061b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a13410f90506f90e86fa0e276e63f7097e033eddd22a39732f3282861061b3a->enter($__internal_4a13410f90506f90e86fa0e276e63f7097e033eddd22a39732f3282861061b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff2c4510bd3eb246a4f87bb78a1e29b96d25aba70c2d387082b6de89f4e193c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2c4510bd3eb246a4f87bb78a1e29b96d25aba70c2d387082b6de89f4e193c9->enter($__internal_ff2c4510bd3eb246a4f87bb78a1e29b96d25aba70c2d387082b6de89f4e193c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ff2c4510bd3eb246a4f87bb78a1e29b96d25aba70c2d387082b6de89f4e193c9->leave($__internal_ff2c4510bd3eb246a4f87bb78a1e29b96d25aba70c2d387082b6de89f4e193c9_prof);

        
        $__internal_4a13410f90506f90e86fa0e276e63f7097e033eddd22a39732f3282861061b3a->leave($__internal_4a13410f90506f90e86fa0e276e63f7097e033eddd22a39732f3282861061b3a_prof);

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
