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
        $__internal_a1994e7774ae305fbb3ea2a3b2642ed26183385ac525cf50d361d5ad2a5b7342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1994e7774ae305fbb3ea2a3b2642ed26183385ac525cf50d361d5ad2a5b7342->enter($__internal_a1994e7774ae305fbb3ea2a3b2642ed26183385ac525cf50d361d5ad2a5b7342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3f602a3f1042009de057ccc944ce732cc53d68ce5e7cfd6afd9bc2223a081fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f602a3f1042009de057ccc944ce732cc53d68ce5e7cfd6afd9bc2223a081fe9->enter($__internal_3f602a3f1042009de057ccc944ce732cc53d68ce5e7cfd6afd9bc2223a081fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1994e7774ae305fbb3ea2a3b2642ed26183385ac525cf50d361d5ad2a5b7342->leave($__internal_a1994e7774ae305fbb3ea2a3b2642ed26183385ac525cf50d361d5ad2a5b7342_prof);

        
        $__internal_3f602a3f1042009de057ccc944ce732cc53d68ce5e7cfd6afd9bc2223a081fe9->leave($__internal_3f602a3f1042009de057ccc944ce732cc53d68ce5e7cfd6afd9bc2223a081fe9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e054952b2ca383d18c5e799fd3547484dabf6fda0c5b916442818a36ee6fd53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e054952b2ca383d18c5e799fd3547484dabf6fda0c5b916442818a36ee6fd53a->enter($__internal_e054952b2ca383d18c5e799fd3547484dabf6fda0c5b916442818a36ee6fd53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_69f3c7ac1d922df488dda36de07ad2593b01fd5b58a1d5ff613910bbd674fe17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f3c7ac1d922df488dda36de07ad2593b01fd5b58a1d5ff613910bbd674fe17->enter($__internal_69f3c7ac1d922df488dda36de07ad2593b01fd5b58a1d5ff613910bbd674fe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_69f3c7ac1d922df488dda36de07ad2593b01fd5b58a1d5ff613910bbd674fe17->leave($__internal_69f3c7ac1d922df488dda36de07ad2593b01fd5b58a1d5ff613910bbd674fe17_prof);

        
        $__internal_e054952b2ca383d18c5e799fd3547484dabf6fda0c5b916442818a36ee6fd53a->leave($__internal_e054952b2ca383d18c5e799fd3547484dabf6fda0c5b916442818a36ee6fd53a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aeddf33d50a7e8dffb8fcce7a96e19732dcdb7362be404772d13168677cb258d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeddf33d50a7e8dffb8fcce7a96e19732dcdb7362be404772d13168677cb258d->enter($__internal_aeddf33d50a7e8dffb8fcce7a96e19732dcdb7362be404772d13168677cb258d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d081ef383d77d50be334cfa560fd13322f7cb6f73d29484598859dd28b457006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d081ef383d77d50be334cfa560fd13322f7cb6f73d29484598859dd28b457006->enter($__internal_d081ef383d77d50be334cfa560fd13322f7cb6f73d29484598859dd28b457006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d081ef383d77d50be334cfa560fd13322f7cb6f73d29484598859dd28b457006->leave($__internal_d081ef383d77d50be334cfa560fd13322f7cb6f73d29484598859dd28b457006_prof);

        
        $__internal_aeddf33d50a7e8dffb8fcce7a96e19732dcdb7362be404772d13168677cb258d->leave($__internal_aeddf33d50a7e8dffb8fcce7a96e19732dcdb7362be404772d13168677cb258d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9aea3be7ae62a58fb722a8df79a5e585465769dc1eaca9dcdee71aa4bd52be63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aea3be7ae62a58fb722a8df79a5e585465769dc1eaca9dcdee71aa4bd52be63->enter($__internal_9aea3be7ae62a58fb722a8df79a5e585465769dc1eaca9dcdee71aa4bd52be63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06b24902098016ba8de0891b942532513f4419fedec21ed46467c1833013e53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b24902098016ba8de0891b942532513f4419fedec21ed46467c1833013e53e->enter($__internal_06b24902098016ba8de0891b942532513f4419fedec21ed46467c1833013e53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_06b24902098016ba8de0891b942532513f4419fedec21ed46467c1833013e53e->leave($__internal_06b24902098016ba8de0891b942532513f4419fedec21ed46467c1833013e53e_prof);

        
        $__internal_9aea3be7ae62a58fb722a8df79a5e585465769dc1eaca9dcdee71aa4bd52be63->leave($__internal_9aea3be7ae62a58fb722a8df79a5e585465769dc1eaca9dcdee71aa4bd52be63_prof);

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
