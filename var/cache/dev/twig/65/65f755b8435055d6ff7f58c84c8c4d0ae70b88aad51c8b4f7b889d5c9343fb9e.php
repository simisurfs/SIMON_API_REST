<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a35bb59a7ac0c63209f0f60d6fb9d5f3e54157d4d9b9bdf85a6f683c69bff53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4954f22cab34a4ee8283a45296eddfa82cd8d6eb282a2de04d9c2d78ecbaf9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4954f22cab34a4ee8283a45296eddfa82cd8d6eb282a2de04d9c2d78ecbaf9b5->enter($__internal_4954f22cab34a4ee8283a45296eddfa82cd8d6eb282a2de04d9c2d78ecbaf9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c43073ee6b5d68a4a00de224f23d193ad8c0561143731f82fca71001727cbc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43073ee6b5d68a4a00de224f23d193ad8c0561143731f82fca71001727cbc84->enter($__internal_c43073ee6b5d68a4a00de224f23d193ad8c0561143731f82fca71001727cbc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4954f22cab34a4ee8283a45296eddfa82cd8d6eb282a2de04d9c2d78ecbaf9b5->leave($__internal_4954f22cab34a4ee8283a45296eddfa82cd8d6eb282a2de04d9c2d78ecbaf9b5_prof);

        
        $__internal_c43073ee6b5d68a4a00de224f23d193ad8c0561143731f82fca71001727cbc84->leave($__internal_c43073ee6b5d68a4a00de224f23d193ad8c0561143731f82fca71001727cbc84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c5a7d1d7c7d2104af14dffb3a5ce83e616e2b04ffbd675d114dbddd70339b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5a7d1d7c7d2104af14dffb3a5ce83e616e2b04ffbd675d114dbddd70339b35->enter($__internal_3c5a7d1d7c7d2104af14dffb3a5ce83e616e2b04ffbd675d114dbddd70339b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f69dcbc971652618ebaab774f808004db6a3e792d9a28debcdd7592f7d6af7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f69dcbc971652618ebaab774f808004db6a3e792d9a28debcdd7592f7d6af7e->enter($__internal_9f69dcbc971652618ebaab774f808004db6a3e792d9a28debcdd7592f7d6af7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9f69dcbc971652618ebaab774f808004db6a3e792d9a28debcdd7592f7d6af7e->leave($__internal_9f69dcbc971652618ebaab774f808004db6a3e792d9a28debcdd7592f7d6af7e_prof);

        
        $__internal_3c5a7d1d7c7d2104af14dffb3a5ce83e616e2b04ffbd675d114dbddd70339b35->leave($__internal_3c5a7d1d7c7d2104af14dffb3a5ce83e616e2b04ffbd675d114dbddd70339b35_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fee65fa5323f9b1b85b912c14b74a29bd868e4679a9cb7911df4bde899dd4be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee65fa5323f9b1b85b912c14b74a29bd868e4679a9cb7911df4bde899dd4be4->enter($__internal_fee65fa5323f9b1b85b912c14b74a29bd868e4679a9cb7911df4bde899dd4be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4dac284dc7a6ebe18259af9ba81353d8a76e2e6c423f2394886b3343168b62b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dac284dc7a6ebe18259af9ba81353d8a76e2e6c423f2394886b3343168b62b6->enter($__internal_4dac284dc7a6ebe18259af9ba81353d8a76e2e6c423f2394886b3343168b62b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4dac284dc7a6ebe18259af9ba81353d8a76e2e6c423f2394886b3343168b62b6->leave($__internal_4dac284dc7a6ebe18259af9ba81353d8a76e2e6c423f2394886b3343168b62b6_prof);

        
        $__internal_fee65fa5323f9b1b85b912c14b74a29bd868e4679a9cb7911df4bde899dd4be4->leave($__internal_fee65fa5323f9b1b85b912c14b74a29bd868e4679a9cb7911df4bde899dd4be4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9488778ecc672f61f74a6899662debb3c0b804cfb33d43aa775909b2638e4964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9488778ecc672f61f74a6899662debb3c0b804cfb33d43aa775909b2638e4964->enter($__internal_9488778ecc672f61f74a6899662debb3c0b804cfb33d43aa775909b2638e4964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96c7d723508fe35a6c9b63d25bfda2802c6ba85d2d0928dd4a8fe739a3694da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c7d723508fe35a6c9b63d25bfda2802c6ba85d2d0928dd4a8fe739a3694da6->enter($__internal_96c7d723508fe35a6c9b63d25bfda2802c6ba85d2d0928dd4a8fe739a3694da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_96c7d723508fe35a6c9b63d25bfda2802c6ba85d2d0928dd4a8fe739a3694da6->leave($__internal_96c7d723508fe35a6c9b63d25bfda2802c6ba85d2d0928dd4a8fe739a3694da6_prof);

        
        $__internal_9488778ecc672f61f74a6899662debb3c0b804cfb33d43aa775909b2638e4964->leave($__internal_9488778ecc672f61f74a6899662debb3c0b804cfb33d43aa775909b2638e4964_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
