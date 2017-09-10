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
        $__internal_3f3f13b00fe35dd870ad69ea00bea7cbe9029ff11b7837d7b4df01635ae5f0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3f13b00fe35dd870ad69ea00bea7cbe9029ff11b7837d7b4df01635ae5f0c9->enter($__internal_3f3f13b00fe35dd870ad69ea00bea7cbe9029ff11b7837d7b4df01635ae5f0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_70b1ee0e83891afcd27e6d0a9eca61f76b5c9549acad5e96fb1efe47c1921d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b1ee0e83891afcd27e6d0a9eca61f76b5c9549acad5e96fb1efe47c1921d28->enter($__internal_70b1ee0e83891afcd27e6d0a9eca61f76b5c9549acad5e96fb1efe47c1921d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_3f3f13b00fe35dd870ad69ea00bea7cbe9029ff11b7837d7b4df01635ae5f0c9->leave($__internal_3f3f13b00fe35dd870ad69ea00bea7cbe9029ff11b7837d7b4df01635ae5f0c9_prof);

        
        $__internal_70b1ee0e83891afcd27e6d0a9eca61f76b5c9549acad5e96fb1efe47c1921d28->leave($__internal_70b1ee0e83891afcd27e6d0a9eca61f76b5c9549acad5e96fb1efe47c1921d28_prof);

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
