<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f8739e6a37e7a2c51a559f01a2ef43f481dd13581aa531ed724dd69cfe821e31 extends Twig_Template
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
        $__internal_4dda42fda63c633e59479bf7ae84bad5fed37e82ae60914e822fbbe1a3b3c713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dda42fda63c633e59479bf7ae84bad5fed37e82ae60914e822fbbe1a3b3c713->enter($__internal_4dda42fda63c633e59479bf7ae84bad5fed37e82ae60914e822fbbe1a3b3c713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_65bde33ad14fc7f08de99a00192101dc65b76e800c10f5301b8f08b4fb1cb920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bde33ad14fc7f08de99a00192101dc65b76e800c10f5301b8f08b4fb1cb920->enter($__internal_65bde33ad14fc7f08de99a00192101dc65b76e800c10f5301b8f08b4fb1cb920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4dda42fda63c633e59479bf7ae84bad5fed37e82ae60914e822fbbe1a3b3c713->leave($__internal_4dda42fda63c633e59479bf7ae84bad5fed37e82ae60914e822fbbe1a3b3c713_prof);

        
        $__internal_65bde33ad14fc7f08de99a00192101dc65b76e800c10f5301b8f08b4fb1cb920->leave($__internal_65bde33ad14fc7f08de99a00192101dc65b76e800c10f5301b8f08b4fb1cb920_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
