<?php

/* ::base.html.twig */
class __TwigTemplate_b4f8fb2211783c366d3853d5e9f565752db6a4bdc0addd0b9e8f26193fc34d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de226420931c2ed9a42a47d30da49b9f4f5f5a7f0a7089b27fc6c1129bd7ee5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de226420931c2ed9a42a47d30da49b9f4f5f5a7f0a7089b27fc6c1129bd7ee5c->enter($__internal_de226420931c2ed9a42a47d30da49b9f4f5f5a7f0a7089b27fc6c1129bd7ee5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_52bc63b15a8b239527d5864a0267f43d58b4f77df4353f509df8aab52ffa23c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bc63b15a8b239527d5864a0267f43d58b4f77df4353f509df8aab52ffa23c0->enter($__internal_52bc63b15a8b239527d5864a0267f43d58b4f77df4353f509df8aab52ffa23c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_de226420931c2ed9a42a47d30da49b9f4f5f5a7f0a7089b27fc6c1129bd7ee5c->leave($__internal_de226420931c2ed9a42a47d30da49b9f4f5f5a7f0a7089b27fc6c1129bd7ee5c_prof);

        
        $__internal_52bc63b15a8b239527d5864a0267f43d58b4f77df4353f509df8aab52ffa23c0->leave($__internal_52bc63b15a8b239527d5864a0267f43d58b4f77df4353f509df8aab52ffa23c0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_559e4500062bd265d6d8acdea58e25167c9178997e7f7abe066cb746ba1bd280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_559e4500062bd265d6d8acdea58e25167c9178997e7f7abe066cb746ba1bd280->enter($__internal_559e4500062bd265d6d8acdea58e25167c9178997e7f7abe066cb746ba1bd280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4395a0a08194c7bd8fcd866c9d10b9c05fe86031b997b98652fc47f29b24715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4395a0a08194c7bd8fcd866c9d10b9c05fe86031b997b98652fc47f29b24715->enter($__internal_e4395a0a08194c7bd8fcd866c9d10b9c05fe86031b997b98652fc47f29b24715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e4395a0a08194c7bd8fcd866c9d10b9c05fe86031b997b98652fc47f29b24715->leave($__internal_e4395a0a08194c7bd8fcd866c9d10b9c05fe86031b997b98652fc47f29b24715_prof);

        
        $__internal_559e4500062bd265d6d8acdea58e25167c9178997e7f7abe066cb746ba1bd280->leave($__internal_559e4500062bd265d6d8acdea58e25167c9178997e7f7abe066cb746ba1bd280_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0da484d3183e2d3546da501d91e165569f0d70062a4cd27327d3b9c07a402eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0da484d3183e2d3546da501d91e165569f0d70062a4cd27327d3b9c07a402eb->enter($__internal_f0da484d3183e2d3546da501d91e165569f0d70062a4cd27327d3b9c07a402eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d8e10515d9fb5aed2ce9e6712f6ff787834aed99d7d9265e164e28f32f2af3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e10515d9fb5aed2ce9e6712f6ff787834aed99d7d9265e164e28f32f2af3a4->enter($__internal_d8e10515d9fb5aed2ce9e6712f6ff787834aed99d7d9265e164e28f32f2af3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8e10515d9fb5aed2ce9e6712f6ff787834aed99d7d9265e164e28f32f2af3a4->leave($__internal_d8e10515d9fb5aed2ce9e6712f6ff787834aed99d7d9265e164e28f32f2af3a4_prof);

        
        $__internal_f0da484d3183e2d3546da501d91e165569f0d70062a4cd27327d3b9c07a402eb->leave($__internal_f0da484d3183e2d3546da501d91e165569f0d70062a4cd27327d3b9c07a402eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb4b4b8c80bc5acefa49416b46c6cf78f895b3e95d3116ac9d0c316af5d290b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4b4b8c80bc5acefa49416b46c6cf78f895b3e95d3116ac9d0c316af5d290b1->enter($__internal_bb4b4b8c80bc5acefa49416b46c6cf78f895b3e95d3116ac9d0c316af5d290b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19c04e24698ad216bb4be50ded498dbb9aa2b4abf557ae4387f24a751a46ef8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c04e24698ad216bb4be50ded498dbb9aa2b4abf557ae4387f24a751a46ef8f->enter($__internal_19c04e24698ad216bb4be50ded498dbb9aa2b4abf557ae4387f24a751a46ef8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19c04e24698ad216bb4be50ded498dbb9aa2b4abf557ae4387f24a751a46ef8f->leave($__internal_19c04e24698ad216bb4be50ded498dbb9aa2b4abf557ae4387f24a751a46ef8f_prof);

        
        $__internal_bb4b4b8c80bc5acefa49416b46c6cf78f895b3e95d3116ac9d0c316af5d290b1->leave($__internal_bb4b4b8c80bc5acefa49416b46c6cf78f895b3e95d3116ac9d0c316af5d290b1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8357d80dc52bdfa2729bbbd7789456826b63723ba610f0b2db717e27e31b223c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8357d80dc52bdfa2729bbbd7789456826b63723ba610f0b2db717e27e31b223c->enter($__internal_8357d80dc52bdfa2729bbbd7789456826b63723ba610f0b2db717e27e31b223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd2aadfa286699c8c3108cd9979953aaf71934150739ad9a8c90978606fd314a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2aadfa286699c8c3108cd9979953aaf71934150739ad9a8c90978606fd314a->enter($__internal_dd2aadfa286699c8c3108cd9979953aaf71934150739ad9a8c90978606fd314a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dd2aadfa286699c8c3108cd9979953aaf71934150739ad9a8c90978606fd314a->leave($__internal_dd2aadfa286699c8c3108cd9979953aaf71934150739ad9a8c90978606fd314a_prof);

        
        $__internal_8357d80dc52bdfa2729bbbd7789456826b63723ba610f0b2db717e27e31b223c->leave($__internal_8357d80dc52bdfa2729bbbd7789456826b63723ba610f0b2db717e27e31b223c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/app/Resources/views/base.html.twig");
    }
}
