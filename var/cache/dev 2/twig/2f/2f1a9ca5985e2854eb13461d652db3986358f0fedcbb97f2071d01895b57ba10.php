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
        $__internal_9969d142cb0986e976096aaf64f950ff0679fbc2259b8ab543dd2096a676677c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9969d142cb0986e976096aaf64f950ff0679fbc2259b8ab543dd2096a676677c->enter($__internal_9969d142cb0986e976096aaf64f950ff0679fbc2259b8ab543dd2096a676677c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8e64aa285315540498a4314d33b3418ebccbd6c0f1ae2dd64c9757604f8cb0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e64aa285315540498a4314d33b3418ebccbd6c0f1ae2dd64c9757604f8cb0e9->enter($__internal_8e64aa285315540498a4314d33b3418ebccbd6c0f1ae2dd64c9757604f8cb0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9969d142cb0986e976096aaf64f950ff0679fbc2259b8ab543dd2096a676677c->leave($__internal_9969d142cb0986e976096aaf64f950ff0679fbc2259b8ab543dd2096a676677c_prof);

        
        $__internal_8e64aa285315540498a4314d33b3418ebccbd6c0f1ae2dd64c9757604f8cb0e9->leave($__internal_8e64aa285315540498a4314d33b3418ebccbd6c0f1ae2dd64c9757604f8cb0e9_prof);

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
