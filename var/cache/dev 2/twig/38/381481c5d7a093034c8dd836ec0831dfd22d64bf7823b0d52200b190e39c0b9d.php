<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f28f3976b7db0ecd30c6093259530afb14adc4a2c59cb2155ed434a7c3596637 extends Twig_Template
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
        $__internal_270e13601b48a404a7761ec9085f5590429660265f4b71fec22baa3271690144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270e13601b48a404a7761ec9085f5590429660265f4b71fec22baa3271690144->enter($__internal_270e13601b48a404a7761ec9085f5590429660265f4b71fec22baa3271690144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_d331de748775e6b01d578caba6f59d5c3b1d6c584ac623b2f183b33bdf1904e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d331de748775e6b01d578caba6f59d5c3b1d6c584ac623b2f183b33bdf1904e2->enter($__internal_d331de748775e6b01d578caba6f59d5c3b1d6c584ac623b2f183b33bdf1904e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_270e13601b48a404a7761ec9085f5590429660265f4b71fec22baa3271690144->leave($__internal_270e13601b48a404a7761ec9085f5590429660265f4b71fec22baa3271690144_prof);

        
        $__internal_d331de748775e6b01d578caba6f59d5c3b1d6c584ac623b2f183b33bdf1904e2->leave($__internal_d331de748775e6b01d578caba6f59d5c3b1d6c584ac623b2f183b33bdf1904e2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
