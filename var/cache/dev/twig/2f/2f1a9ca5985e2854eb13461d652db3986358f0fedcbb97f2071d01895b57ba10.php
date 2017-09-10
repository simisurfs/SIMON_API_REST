<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_58990fe42fcf20f015a30a013c9a9a97f340da4491bab38eb46007f5eff05f8c extends Twig_Template
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
        $__internal_497621b773c77cce8675ca9f53aa5dcdc3310e874cee901c21d3155f4d23181f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497621b773c77cce8675ca9f53aa5dcdc3310e874cee901c21d3155f4d23181f->enter($__internal_497621b773c77cce8675ca9f53aa5dcdc3310e874cee901c21d3155f4d23181f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8288cef4d1e1b2c92d17e298c9d5b929351ff1ce9133a32d46ceb07a305527c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8288cef4d1e1b2c92d17e298c9d5b929351ff1ce9133a32d46ceb07a305527c5->enter($__internal_8288cef4d1e1b2c92d17e298c9d5b929351ff1ce9133a32d46ceb07a305527c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_497621b773c77cce8675ca9f53aa5dcdc3310e874cee901c21d3155f4d23181f->leave($__internal_497621b773c77cce8675ca9f53aa5dcdc3310e874cee901c21d3155f4d23181f_prof);

        
        $__internal_8288cef4d1e1b2c92d17e298c9d5b929351ff1ce9133a32d46ceb07a305527c5->leave($__internal_8288cef4d1e1b2c92d17e298c9d5b929351ff1ce9133a32d46ceb07a305527c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
