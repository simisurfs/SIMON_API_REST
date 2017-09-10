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
        $__internal_1c5b0d4dc723666286959ed1cd1b1861ce81b38fbc061038f09fdb73033a849f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5b0d4dc723666286959ed1cd1b1861ce81b38fbc061038f09fdb73033a849f->enter($__internal_1c5b0d4dc723666286959ed1cd1b1861ce81b38fbc061038f09fdb73033a849f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1dc1fa9d6796f5c2657e7db0844e1c18031b1196b586720d5beb92b4d48c77e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc1fa9d6796f5c2657e7db0844e1c18031b1196b586720d5beb92b4d48c77e9->enter($__internal_1dc1fa9d6796f5c2657e7db0844e1c18031b1196b586720d5beb92b4d48c77e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1c5b0d4dc723666286959ed1cd1b1861ce81b38fbc061038f09fdb73033a849f->leave($__internal_1c5b0d4dc723666286959ed1cd1b1861ce81b38fbc061038f09fdb73033a849f_prof);

        
        $__internal_1dc1fa9d6796f5c2657e7db0844e1c18031b1196b586720d5beb92b4d48c77e9->leave($__internal_1dc1fa9d6796f5c2657e7db0844e1c18031b1196b586720d5beb92b4d48c77e9_prof);

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
