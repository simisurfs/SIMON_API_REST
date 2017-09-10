<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9c1f1e896211d5bdb6831966ea143b03be1922e1ab33137da8c8f53119a0baa8 extends Twig_Template
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
        $__internal_d1a17767cef4aa31f023ce3e76933e2f3c5da1e1bf1f9d889f06807e844758bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a17767cef4aa31f023ce3e76933e2f3c5da1e1bf1f9d889f06807e844758bf->enter($__internal_d1a17767cef4aa31f023ce3e76933e2f3c5da1e1bf1f9d889f06807e844758bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5dd1e43b1ab71b79b2b4d8f978a9a16cf22de679bec375d8cfa35ebe660c390d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd1e43b1ab71b79b2b4d8f978a9a16cf22de679bec375d8cfa35ebe660c390d->enter($__internal_5dd1e43b1ab71b79b2b4d8f978a9a16cf22de679bec375d8cfa35ebe660c390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d1a17767cef4aa31f023ce3e76933e2f3c5da1e1bf1f9d889f06807e844758bf->leave($__internal_d1a17767cef4aa31f023ce3e76933e2f3c5da1e1bf1f9d889f06807e844758bf_prof);

        
        $__internal_5dd1e43b1ab71b79b2b4d8f978a9a16cf22de679bec375d8cfa35ebe660c390d->leave($__internal_5dd1e43b1ab71b79b2b4d8f978a9a16cf22de679bec375d8cfa35ebe660c390d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
