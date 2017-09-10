<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_96732b9ec0a2d9a19ee1465ce03e72ee579dd06f1e5ccda6c8aa88a000456b47 extends Twig_Template
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
        $__internal_46dc44f787f8d99128f6b631d02b89a32fdc7df28e2362100e4f98a60bfa7d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dc44f787f8d99128f6b631d02b89a32fdc7df28e2362100e4f98a60bfa7d98->enter($__internal_46dc44f787f8d99128f6b631d02b89a32fdc7df28e2362100e4f98a60bfa7d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_26cf8161508efd43663ac25bae7dda093c954ac964d7e2f6936cc878f5def58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cf8161508efd43663ac25bae7dda093c954ac964d7e2f6936cc878f5def58a->enter($__internal_26cf8161508efd43663ac25bae7dda093c954ac964d7e2f6936cc878f5def58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_46dc44f787f8d99128f6b631d02b89a32fdc7df28e2362100e4f98a60bfa7d98->leave($__internal_46dc44f787f8d99128f6b631d02b89a32fdc7df28e2362100e4f98a60bfa7d98_prof);

        
        $__internal_26cf8161508efd43663ac25bae7dda093c954ac964d7e2f6936cc878f5def58a->leave($__internal_26cf8161508efd43663ac25bae7dda093c954ac964d7e2f6936cc878f5def58a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
