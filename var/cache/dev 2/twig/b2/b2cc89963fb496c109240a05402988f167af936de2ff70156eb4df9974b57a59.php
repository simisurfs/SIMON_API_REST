<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5e4abfe1cc67a4253638730c4f0c4a7e5af477c243ba3a99593cc247ee000e90 extends Twig_Template
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
        $__internal_050e63d50f461a8538c1e4178e5ecd6c836177e497d9fa06002597993c33f9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050e63d50f461a8538c1e4178e5ecd6c836177e497d9fa06002597993c33f9b5->enter($__internal_050e63d50f461a8538c1e4178e5ecd6c836177e497d9fa06002597993c33f9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_74951dbe8f793563a93e9b04918768404bb438a17bfb1501a722a82d945b1665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74951dbe8f793563a93e9b04918768404bb438a17bfb1501a722a82d945b1665->enter($__internal_74951dbe8f793563a93e9b04918768404bb438a17bfb1501a722a82d945b1665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_050e63d50f461a8538c1e4178e5ecd6c836177e497d9fa06002597993c33f9b5->leave($__internal_050e63d50f461a8538c1e4178e5ecd6c836177e497d9fa06002597993c33f9b5_prof);

        
        $__internal_74951dbe8f793563a93e9b04918768404bb438a17bfb1501a722a82d945b1665->leave($__internal_74951dbe8f793563a93e9b04918768404bb438a17bfb1501a722a82d945b1665_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
