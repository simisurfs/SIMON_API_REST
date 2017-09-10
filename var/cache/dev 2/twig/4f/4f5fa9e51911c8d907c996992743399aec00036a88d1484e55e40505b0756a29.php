<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_994962dddf6770796682e3c8ac0e461d0cf2cc71603e3a94fff72ef720d5ec13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_61fcd6271c4e425c79b744d3ff5700f33fa744dfb5a4ecb1827648c23633cb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fcd6271c4e425c79b744d3ff5700f33fa744dfb5a4ecb1827648c23633cb1f->enter($__internal_61fcd6271c4e425c79b744d3ff5700f33fa744dfb5a4ecb1827648c23633cb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_55ca88bd38270d5be914f98f1eeb765255375435c6d56fc4d28f9b9b27479e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ca88bd38270d5be914f98f1eeb765255375435c6d56fc4d28f9b9b27479e82->enter($__internal_55ca88bd38270d5be914f98f1eeb765255375435c6d56fc4d28f9b9b27479e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61fcd6271c4e425c79b744d3ff5700f33fa744dfb5a4ecb1827648c23633cb1f->leave($__internal_61fcd6271c4e425c79b744d3ff5700f33fa744dfb5a4ecb1827648c23633cb1f_prof);

        
        $__internal_55ca88bd38270d5be914f98f1eeb765255375435c6d56fc4d28f9b9b27479e82->leave($__internal_55ca88bd38270d5be914f98f1eeb765255375435c6d56fc4d28f9b9b27479e82_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11c08207e32d6026af1757cb4cfbf0adead8860326f5ed794e874ced449f8c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c08207e32d6026af1757cb4cfbf0adead8860326f5ed794e874ced449f8c20->enter($__internal_11c08207e32d6026af1757cb4cfbf0adead8860326f5ed794e874ced449f8c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f3cfda2dc1d2b86c616ce58038763549c327a40cc5762acff98745e4f59e172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3cfda2dc1d2b86c616ce58038763549c327a40cc5762acff98745e4f59e172->enter($__internal_6f3cfda2dc1d2b86c616ce58038763549c327a40cc5762acff98745e4f59e172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f3cfda2dc1d2b86c616ce58038763549c327a40cc5762acff98745e4f59e172->leave($__internal_6f3cfda2dc1d2b86c616ce58038763549c327a40cc5762acff98745e4f59e172_prof);

        
        $__internal_11c08207e32d6026af1757cb4cfbf0adead8860326f5ed794e874ced449f8c20->leave($__internal_11c08207e32d6026af1757cb4cfbf0adead8860326f5ed794e874ced449f8c20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0001a066da11f60c556932d7cc66274906d6b4eb8f6886da3e29cc527c00ccae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0001a066da11f60c556932d7cc66274906d6b4eb8f6886da3e29cc527c00ccae->enter($__internal_0001a066da11f60c556932d7cc66274906d6b4eb8f6886da3e29cc527c00ccae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c8388d99876ee18adb6cd51bc364909ce430c91f67a1efb31865fe52cc242f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8388d99876ee18adb6cd51bc364909ce430c91f67a1efb31865fe52cc242f4f->enter($__internal_c8388d99876ee18adb6cd51bc364909ce430c91f67a1efb31865fe52cc242f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8388d99876ee18adb6cd51bc364909ce430c91f67a1efb31865fe52cc242f4f->leave($__internal_c8388d99876ee18adb6cd51bc364909ce430c91f67a1efb31865fe52cc242f4f_prof);

        
        $__internal_0001a066da11f60c556932d7cc66274906d6b4eb8f6886da3e29cc527c00ccae->leave($__internal_0001a066da11f60c556932d7cc66274906d6b4eb8f6886da3e29cc527c00ccae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e938cb11854095ee3fcf3d702256429fc9223c5b1c1106c5f3554aba2a62e801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e938cb11854095ee3fcf3d702256429fc9223c5b1c1106c5f3554aba2a62e801->enter($__internal_e938cb11854095ee3fcf3d702256429fc9223c5b1c1106c5f3554aba2a62e801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3004dc8461585f867305ee4b588452705d5d151a8b7987d502b060d6844fadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3004dc8461585f867305ee4b588452705d5d151a8b7987d502b060d6844fadf->enter($__internal_c3004dc8461585f867305ee4b588452705d5d151a8b7987d502b060d6844fadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c3004dc8461585f867305ee4b588452705d5d151a8b7987d502b060d6844fadf->leave($__internal_c3004dc8461585f867305ee4b588452705d5d151a8b7987d502b060d6844fadf_prof);

        
        $__internal_e938cb11854095ee3fcf3d702256429fc9223c5b1c1106c5f3554aba2a62e801->leave($__internal_e938cb11854095ee3fcf3d702256429fc9223c5b1c1106c5f3554aba2a62e801_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
