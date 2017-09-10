<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_dffb0bdafedccf293e7118d5bc247add1022835d573ed5264b674c4dd30dd236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9dda680f9b730f8e1254a5fe2e8457eb6e038e6e1bda62d3a809e2b3cc5dbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9dda680f9b730f8e1254a5fe2e8457eb6e038e6e1bda62d3a809e2b3cc5dbf0->enter($__internal_a9dda680f9b730f8e1254a5fe2e8457eb6e038e6e1bda62d3a809e2b3cc5dbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7c10bd469a6298dc3d93cfd1d7c59263171cdb45e983a17702d49858a9bc5d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c10bd469a6298dc3d93cfd1d7c59263171cdb45e983a17702d49858a9bc5d45->enter($__internal_7c10bd469a6298dc3d93cfd1d7c59263171cdb45e983a17702d49858a9bc5d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a9dda680f9b730f8e1254a5fe2e8457eb6e038e6e1bda62d3a809e2b3cc5dbf0->leave($__internal_a9dda680f9b730f8e1254a5fe2e8457eb6e038e6e1bda62d3a809e2b3cc5dbf0_prof);

        
        $__internal_7c10bd469a6298dc3d93cfd1d7c59263171cdb45e983a17702d49858a9bc5d45->leave($__internal_7c10bd469a6298dc3d93cfd1d7c59263171cdb45e983a17702d49858a9bc5d45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
