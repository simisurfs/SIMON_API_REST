<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2ad2dd3c30ae1fdf4dc9d1f5ae24a0441bbd3251833590d4a358e0129faff013 extends Twig_Template
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
        $__internal_61b32a6a6ccca3f6ea78f7f5305b683812182ffdeebd930fed4a3f379e84d6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b32a6a6ccca3f6ea78f7f5305b683812182ffdeebd930fed4a3f379e84d6ea->enter($__internal_61b32a6a6ccca3f6ea78f7f5305b683812182ffdeebd930fed4a3f379e84d6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_53880bb53afe3beb5e218d09fd2d82d98adf9401f2af013064d9581094c9c467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53880bb53afe3beb5e218d09fd2d82d98adf9401f2af013064d9581094c9c467->enter($__internal_53880bb53afe3beb5e218d09fd2d82d98adf9401f2af013064d9581094c9c467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_61b32a6a6ccca3f6ea78f7f5305b683812182ffdeebd930fed4a3f379e84d6ea->leave($__internal_61b32a6a6ccca3f6ea78f7f5305b683812182ffdeebd930fed4a3f379e84d6ea_prof);

        
        $__internal_53880bb53afe3beb5e218d09fd2d82d98adf9401f2af013064d9581094c9c467->leave($__internal_53880bb53afe3beb5e218d09fd2d82d98adf9401f2af013064d9581094c9c467_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
