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
        $__internal_5531e7e6a75ca28a0956caf72d6f138725c6198b94f216fd52d20f6b120e43f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5531e7e6a75ca28a0956caf72d6f138725c6198b94f216fd52d20f6b120e43f2->enter($__internal_5531e7e6a75ca28a0956caf72d6f138725c6198b94f216fd52d20f6b120e43f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a36e3bc50c758c513b9071a99141ce1c187da57b63aab0c513611ec2737baf41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36e3bc50c758c513b9071a99141ce1c187da57b63aab0c513611ec2737baf41->enter($__internal_a36e3bc50c758c513b9071a99141ce1c187da57b63aab0c513611ec2737baf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5531e7e6a75ca28a0956caf72d6f138725c6198b94f216fd52d20f6b120e43f2->leave($__internal_5531e7e6a75ca28a0956caf72d6f138725c6198b94f216fd52d20f6b120e43f2_prof);

        
        $__internal_a36e3bc50c758c513b9071a99141ce1c187da57b63aab0c513611ec2737baf41->leave($__internal_a36e3bc50c758c513b9071a99141ce1c187da57b63aab0c513611ec2737baf41_prof);

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
