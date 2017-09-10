<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e0ddf05aec8dd3d826c87fd6b36eae373b5852ee7ac941d15947b629fdb57c3c extends Twig_Template
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
        $__internal_15f8f2e410d4e32a209a054f06c455c1a21c291ccb9aa965357ef94d9e3fcc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f8f2e410d4e32a209a054f06c455c1a21c291ccb9aa965357ef94d9e3fcc3d->enter($__internal_15f8f2e410d4e32a209a054f06c455c1a21c291ccb9aa965357ef94d9e3fcc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_f383c1d38b671740bdee2055e038c11521489470ab54027508b11e566b248077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f383c1d38b671740bdee2055e038c11521489470ab54027508b11e566b248077->enter($__internal_f383c1d38b671740bdee2055e038c11521489470ab54027508b11e566b248077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_15f8f2e410d4e32a209a054f06c455c1a21c291ccb9aa965357ef94d9e3fcc3d->leave($__internal_15f8f2e410d4e32a209a054f06c455c1a21c291ccb9aa965357ef94d9e3fcc3d_prof);

        
        $__internal_f383c1d38b671740bdee2055e038c11521489470ab54027508b11e566b248077->leave($__internal_f383c1d38b671740bdee2055e038c11521489470ab54027508b11e566b248077_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
