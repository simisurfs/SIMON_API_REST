<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ad5ccb3332e94680c072e56f09271ed6e8caca563c92f6c714b4ce790ccef80a extends Twig_Template
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
        $__internal_cabd88fd7e210a6555c1dcbce6a7e8faa13843f81544cd6321cec37cdaac2a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabd88fd7e210a6555c1dcbce6a7e8faa13843f81544cd6321cec37cdaac2a34->enter($__internal_cabd88fd7e210a6555c1dcbce6a7e8faa13843f81544cd6321cec37cdaac2a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8f567222ea53780116b2f18c69525292daebb28d7dec689b7964fc2160ac365f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f567222ea53780116b2f18c69525292daebb28d7dec689b7964fc2160ac365f->enter($__internal_8f567222ea53780116b2f18c69525292daebb28d7dec689b7964fc2160ac365f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cabd88fd7e210a6555c1dcbce6a7e8faa13843f81544cd6321cec37cdaac2a34->leave($__internal_cabd88fd7e210a6555c1dcbce6a7e8faa13843f81544cd6321cec37cdaac2a34_prof);

        
        $__internal_8f567222ea53780116b2f18c69525292daebb28d7dec689b7964fc2160ac365f->leave($__internal_8f567222ea53780116b2f18c69525292daebb28d7dec689b7964fc2160ac365f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
