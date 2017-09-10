<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7b3a922812d0c6e0c109fbc0ab5a0fc4625a9a24ebe645a53b76ba214d119507 extends Twig_Template
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
        $__internal_807d2d98b0c789a761d5b5bd738a40dd744431424cef0b741772c8544b2b1f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807d2d98b0c789a761d5b5bd738a40dd744431424cef0b741772c8544b2b1f23->enter($__internal_807d2d98b0c789a761d5b5bd738a40dd744431424cef0b741772c8544b2b1f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b3b692cdccfc4ce1be6114bbd3f231aad18648b218ef0469267e36fe01bd4cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b692cdccfc4ce1be6114bbd3f231aad18648b218ef0469267e36fe01bd4cdc->enter($__internal_b3b692cdccfc4ce1be6114bbd3f231aad18648b218ef0469267e36fe01bd4cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_807d2d98b0c789a761d5b5bd738a40dd744431424cef0b741772c8544b2b1f23->leave($__internal_807d2d98b0c789a761d5b5bd738a40dd744431424cef0b741772c8544b2b1f23_prof);

        
        $__internal_b3b692cdccfc4ce1be6114bbd3f231aad18648b218ef0469267e36fe01bd4cdc->leave($__internal_b3b692cdccfc4ce1be6114bbd3f231aad18648b218ef0469267e36fe01bd4cdc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
