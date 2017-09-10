<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_95ed578adece15657e2554905765ea0ff6a1bc7bd0e3091c80b76d899ab8614d extends Twig_Template
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
        $__internal_f71b8f65cbb52d603cd85edf9567d44f7f197c6fa0af8f5682c13359ba345812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71b8f65cbb52d603cd85edf9567d44f7f197c6fa0af8f5682c13359ba345812->enter($__internal_f71b8f65cbb52d603cd85edf9567d44f7f197c6fa0af8f5682c13359ba345812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2b50cdb36d5598ca244b07d162499753647c84d6f3f2633cfb80641d2ed2b162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b50cdb36d5598ca244b07d162499753647c84d6f3f2633cfb80641d2ed2b162->enter($__internal_2b50cdb36d5598ca244b07d162499753647c84d6f3f2633cfb80641d2ed2b162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f71b8f65cbb52d603cd85edf9567d44f7f197c6fa0af8f5682c13359ba345812->leave($__internal_f71b8f65cbb52d603cd85edf9567d44f7f197c6fa0af8f5682c13359ba345812_prof);

        
        $__internal_2b50cdb36d5598ca244b07d162499753647c84d6f3f2633cfb80641d2ed2b162->leave($__internal_2b50cdb36d5598ca244b07d162499753647c84d6f3f2633cfb80641d2ed2b162_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
