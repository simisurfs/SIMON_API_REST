<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_869f60424c43ea913918e052d8c82bbf2dec0461accb7e0d0ff0019cc3221250 extends Twig_Template
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
        $__internal_beb1185b929fe7ecb7d55ee8a48496e592307a589af8c3bc4f5e80c45d290052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb1185b929fe7ecb7d55ee8a48496e592307a589af8c3bc4f5e80c45d290052->enter($__internal_beb1185b929fe7ecb7d55ee8a48496e592307a589af8c3bc4f5e80c45d290052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_031647e85d24f6050a9555b761d294a384c7f2e1eac5a375cd1756a7dfb1fa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031647e85d24f6050a9555b761d294a384c7f2e1eac5a375cd1756a7dfb1fa9d->enter($__internal_031647e85d24f6050a9555b761d294a384c7f2e1eac5a375cd1756a7dfb1fa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_beb1185b929fe7ecb7d55ee8a48496e592307a589af8c3bc4f5e80c45d290052->leave($__internal_beb1185b929fe7ecb7d55ee8a48496e592307a589af8c3bc4f5e80c45d290052_prof);

        
        $__internal_031647e85d24f6050a9555b761d294a384c7f2e1eac5a375cd1756a7dfb1fa9d->leave($__internal_031647e85d24f6050a9555b761d294a384c7f2e1eac5a375cd1756a7dfb1fa9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
