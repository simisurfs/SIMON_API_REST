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
        $__internal_7a1334b2e4165a92e2a1e6f1d27f47a254203c7017550008e9a853765d1ed2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1334b2e4165a92e2a1e6f1d27f47a254203c7017550008e9a853765d1ed2ea->enter($__internal_7a1334b2e4165a92e2a1e6f1d27f47a254203c7017550008e9a853765d1ed2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_be0c3339abcdcfdba61ce106cfb8eb93f481b5522dd101ff1c023fbf678a2009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0c3339abcdcfdba61ce106cfb8eb93f481b5522dd101ff1c023fbf678a2009->enter($__internal_be0c3339abcdcfdba61ce106cfb8eb93f481b5522dd101ff1c023fbf678a2009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7a1334b2e4165a92e2a1e6f1d27f47a254203c7017550008e9a853765d1ed2ea->leave($__internal_7a1334b2e4165a92e2a1e6f1d27f47a254203c7017550008e9a853765d1ed2ea_prof);

        
        $__internal_be0c3339abcdcfdba61ce106cfb8eb93f481b5522dd101ff1c023fbf678a2009->leave($__internal_be0c3339abcdcfdba61ce106cfb8eb93f481b5522dd101ff1c023fbf678a2009_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_16864dace119bf892faa78221fd7332343131f1dec8d6fe4cc3bcb1c61655c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16864dace119bf892faa78221fd7332343131f1dec8d6fe4cc3bcb1c61655c46->enter($__internal_16864dace119bf892faa78221fd7332343131f1dec8d6fe4cc3bcb1c61655c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2f3a7fcccad9f115fca738fa8c83ecf211c408f975ce8894c76c71dc2f55bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f3a7fcccad9f115fca738fa8c83ecf211c408f975ce8894c76c71dc2f55bf9->enter($__internal_c2f3a7fcccad9f115fca738fa8c83ecf211c408f975ce8894c76c71dc2f55bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c2f3a7fcccad9f115fca738fa8c83ecf211c408f975ce8894c76c71dc2f55bf9->leave($__internal_c2f3a7fcccad9f115fca738fa8c83ecf211c408f975ce8894c76c71dc2f55bf9_prof);

        
        $__internal_16864dace119bf892faa78221fd7332343131f1dec8d6fe4cc3bcb1c61655c46->leave($__internal_16864dace119bf892faa78221fd7332343131f1dec8d6fe4cc3bcb1c61655c46_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a8ac2c7b326a573850f3f7e984e753d2d44bdcfc49c4ba8d019119c1699debd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8ac2c7b326a573850f3f7e984e753d2d44bdcfc49c4ba8d019119c1699debd->enter($__internal_9a8ac2c7b326a573850f3f7e984e753d2d44bdcfc49c4ba8d019119c1699debd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ccda911f8d5d17c8f8e255cc45d52066ac82d019b4403ea4755135e099f468c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccda911f8d5d17c8f8e255cc45d52066ac82d019b4403ea4755135e099f468c->enter($__internal_7ccda911f8d5d17c8f8e255cc45d52066ac82d019b4403ea4755135e099f468c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7ccda911f8d5d17c8f8e255cc45d52066ac82d019b4403ea4755135e099f468c->leave($__internal_7ccda911f8d5d17c8f8e255cc45d52066ac82d019b4403ea4755135e099f468c_prof);

        
        $__internal_9a8ac2c7b326a573850f3f7e984e753d2d44bdcfc49c4ba8d019119c1699debd->leave($__internal_9a8ac2c7b326a573850f3f7e984e753d2d44bdcfc49c4ba8d019119c1699debd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cb5f634487c940e109e02f42107fe8b17590b7316df3070e4fbac76d57ef8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb5f634487c940e109e02f42107fe8b17590b7316df3070e4fbac76d57ef8b5->enter($__internal_7cb5f634487c940e109e02f42107fe8b17590b7316df3070e4fbac76d57ef8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_955271bf813ce489727ab0fabc11861b53c6a9952fdb4c83665ec3b121b8d028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955271bf813ce489727ab0fabc11861b53c6a9952fdb4c83665ec3b121b8d028->enter($__internal_955271bf813ce489727ab0fabc11861b53c6a9952fdb4c83665ec3b121b8d028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_955271bf813ce489727ab0fabc11861b53c6a9952fdb4c83665ec3b121b8d028->leave($__internal_955271bf813ce489727ab0fabc11861b53c6a9952fdb4c83665ec3b121b8d028_prof);

        
        $__internal_7cb5f634487c940e109e02f42107fe8b17590b7316df3070e4fbac76d57ef8b5->leave($__internal_7cb5f634487c940e109e02f42107fe8b17590b7316df3070e4fbac76d57ef8b5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_220324693277beb4bb58782031a413c5898646ebb66cdbaa34bf53f5fa33c73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220324693277beb4bb58782031a413c5898646ebb66cdbaa34bf53f5fa33c73a->enter($__internal_220324693277beb4bb58782031a413c5898646ebb66cdbaa34bf53f5fa33c73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_861f84d299787dbf813a834d2e3f1beb256291fb4d3cf696793077a49221ec8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861f84d299787dbf813a834d2e3f1beb256291fb4d3cf696793077a49221ec8f->enter($__internal_861f84d299787dbf813a834d2e3f1beb256291fb4d3cf696793077a49221ec8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_861f84d299787dbf813a834d2e3f1beb256291fb4d3cf696793077a49221ec8f->leave($__internal_861f84d299787dbf813a834d2e3f1beb256291fb4d3cf696793077a49221ec8f_prof);

        
        $__internal_220324693277beb4bb58782031a413c5898646ebb66cdbaa34bf53f5fa33c73a->leave($__internal_220324693277beb4bb58782031a413c5898646ebb66cdbaa34bf53f5fa33c73a_prof);

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
