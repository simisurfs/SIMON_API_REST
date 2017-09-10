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
        $__internal_ca0079b75a31e4db106cf5616dfbaf332423a7b4fe8a9bbd87a08e6c96e6912b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0079b75a31e4db106cf5616dfbaf332423a7b4fe8a9bbd87a08e6c96e6912b->enter($__internal_ca0079b75a31e4db106cf5616dfbaf332423a7b4fe8a9bbd87a08e6c96e6912b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_84a3c72402ca8e98decfc722979c171bb41038a59170f5b0fe7713c149d491bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a3c72402ca8e98decfc722979c171bb41038a59170f5b0fe7713c149d491bd->enter($__internal_84a3c72402ca8e98decfc722979c171bb41038a59170f5b0fe7713c149d491bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ca0079b75a31e4db106cf5616dfbaf332423a7b4fe8a9bbd87a08e6c96e6912b->leave($__internal_ca0079b75a31e4db106cf5616dfbaf332423a7b4fe8a9bbd87a08e6c96e6912b_prof);

        
        $__internal_84a3c72402ca8e98decfc722979c171bb41038a59170f5b0fe7713c149d491bd->leave($__internal_84a3c72402ca8e98decfc722979c171bb41038a59170f5b0fe7713c149d491bd_prof);

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
