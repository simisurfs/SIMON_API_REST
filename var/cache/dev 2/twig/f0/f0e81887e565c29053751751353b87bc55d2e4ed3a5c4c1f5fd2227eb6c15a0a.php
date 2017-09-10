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
        $__internal_6a35639de02cc75d4ba2fa1392076fbd5553fada43681e59587a6e4e588bd41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a35639de02cc75d4ba2fa1392076fbd5553fada43681e59587a6e4e588bd41f->enter($__internal_6a35639de02cc75d4ba2fa1392076fbd5553fada43681e59587a6e4e588bd41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f2c224d3995ae7d8e96a4ab53cae24f08bef38a20b1a7f6d619115cef30e0049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c224d3995ae7d8e96a4ab53cae24f08bef38a20b1a7f6d619115cef30e0049->enter($__internal_f2c224d3995ae7d8e96a4ab53cae24f08bef38a20b1a7f6d619115cef30e0049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_6a35639de02cc75d4ba2fa1392076fbd5553fada43681e59587a6e4e588bd41f->leave($__internal_6a35639de02cc75d4ba2fa1392076fbd5553fada43681e59587a6e4e588bd41f_prof);

        
        $__internal_f2c224d3995ae7d8e96a4ab53cae24f08bef38a20b1a7f6d619115cef30e0049->leave($__internal_f2c224d3995ae7d8e96a4ab53cae24f08bef38a20b1a7f6d619115cef30e0049_prof);

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
