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
        $__internal_d53903f6f5160f3ec16a5b64080554983e9f140360f515de42e15125e7b75a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53903f6f5160f3ec16a5b64080554983e9f140360f515de42e15125e7b75a33->enter($__internal_d53903f6f5160f3ec16a5b64080554983e9f140360f515de42e15125e7b75a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6944ad3a946a5629a4ad81262f49be0944617099dec3a925a914e797c77faf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6944ad3a946a5629a4ad81262f49be0944617099dec3a925a914e797c77faf90->enter($__internal_6944ad3a946a5629a4ad81262f49be0944617099dec3a925a914e797c77faf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d53903f6f5160f3ec16a5b64080554983e9f140360f515de42e15125e7b75a33->leave($__internal_d53903f6f5160f3ec16a5b64080554983e9f140360f515de42e15125e7b75a33_prof);

        
        $__internal_6944ad3a946a5629a4ad81262f49be0944617099dec3a925a914e797c77faf90->leave($__internal_6944ad3a946a5629a4ad81262f49be0944617099dec3a925a914e797c77faf90_prof);

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
