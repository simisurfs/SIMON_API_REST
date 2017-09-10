<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_54a2c9753be42b44135c4da854531f6d814fd507fa9455268ee41f1486a79d90 extends Twig_Template
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
        $__internal_693ba4e58ef60ffc16ebf47842c5b058a22b8babd96bf260a029e66f70d8c48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693ba4e58ef60ffc16ebf47842c5b058a22b8babd96bf260a029e66f70d8c48b->enter($__internal_693ba4e58ef60ffc16ebf47842c5b058a22b8babd96bf260a029e66f70d8c48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f1e9c36e6d07dd1a360415dab468c60a4cdddfbbf803d22c73a0774eb87f323e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e9c36e6d07dd1a360415dab468c60a4cdddfbbf803d22c73a0774eb87f323e->enter($__internal_f1e9c36e6d07dd1a360415dab468c60a4cdddfbbf803d22c73a0774eb87f323e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_693ba4e58ef60ffc16ebf47842c5b058a22b8babd96bf260a029e66f70d8c48b->leave($__internal_693ba4e58ef60ffc16ebf47842c5b058a22b8babd96bf260a029e66f70d8c48b_prof);

        
        $__internal_f1e9c36e6d07dd1a360415dab468c60a4cdddfbbf803d22c73a0774eb87f323e->leave($__internal_f1e9c36e6d07dd1a360415dab468c60a4cdddfbbf803d22c73a0774eb87f323e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
