<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2ad2dd3c30ae1fdf4dc9d1f5ae24a0441bbd3251833590d4a358e0129faff013 extends Twig_Template
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
        $__internal_c9e246ad198513a70dbe992f8357c4176d270864ec5b914e11f08bbca5af6cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e246ad198513a70dbe992f8357c4176d270864ec5b914e11f08bbca5af6cc0->enter($__internal_c9e246ad198513a70dbe992f8357c4176d270864ec5b914e11f08bbca5af6cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_f1e74b220bdfa2ea456e25d66a3add3a145dc18aea7d8d5883234a26d9d399e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e74b220bdfa2ea456e25d66a3add3a145dc18aea7d8d5883234a26d9d399e6->enter($__internal_f1e74b220bdfa2ea456e25d66a3add3a145dc18aea7d8d5883234a26d9d399e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c9e246ad198513a70dbe992f8357c4176d270864ec5b914e11f08bbca5af6cc0->leave($__internal_c9e246ad198513a70dbe992f8357c4176d270864ec5b914e11f08bbca5af6cc0_prof);

        
        $__internal_f1e74b220bdfa2ea456e25d66a3add3a145dc18aea7d8d5883234a26d9d399e6->leave($__internal_f1e74b220bdfa2ea456e25d66a3add3a145dc18aea7d8d5883234a26d9d399e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
