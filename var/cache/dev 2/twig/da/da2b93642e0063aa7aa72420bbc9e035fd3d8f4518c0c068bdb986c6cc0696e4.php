<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d9f367d91cf1ef4bb113d82b0f4b941e0e8e1a20c166af0b0b3ffb0dddedd354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2336a16ce280bae7a62a945ba48e5ddb346668b276aad06930d4d518dd840539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2336a16ce280bae7a62a945ba48e5ddb346668b276aad06930d4d518dd840539->enter($__internal_2336a16ce280bae7a62a945ba48e5ddb346668b276aad06930d4d518dd840539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_3581df74c9e0b9b87b76160b00b71bd2ebfe19d35311b5c5eb20702efdb21563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3581df74c9e0b9b87b76160b00b71bd2ebfe19d35311b5c5eb20702efdb21563->enter($__internal_3581df74c9e0b9b87b76160b00b71bd2ebfe19d35311b5c5eb20702efdb21563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2336a16ce280bae7a62a945ba48e5ddb346668b276aad06930d4d518dd840539->leave($__internal_2336a16ce280bae7a62a945ba48e5ddb346668b276aad06930d4d518dd840539_prof);

        
        $__internal_3581df74c9e0b9b87b76160b00b71bd2ebfe19d35311b5c5eb20702efdb21563->leave($__internal_3581df74c9e0b9b87b76160b00b71bd2ebfe19d35311b5c5eb20702efdb21563_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c560a90bf270dd3bee3454b800507b109a52d986137172d73f7e0cf7d3c9f11a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c560a90bf270dd3bee3454b800507b109a52d986137172d73f7e0cf7d3c9f11a->enter($__internal_c560a90bf270dd3bee3454b800507b109a52d986137172d73f7e0cf7d3c9f11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c8b93c0bbdcd7c5d3f2ad4f9ca4e9496e3ff7461cbd075a091dc109476e543c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8b93c0bbdcd7c5d3f2ad4f9ca4e9496e3ff7461cbd075a091dc109476e543c->enter($__internal_8c8b93c0bbdcd7c5d3f2ad4f9ca4e9496e3ff7461cbd075a091dc109476e543c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8c8b93c0bbdcd7c5d3f2ad4f9ca4e9496e3ff7461cbd075a091dc109476e543c->leave($__internal_8c8b93c0bbdcd7c5d3f2ad4f9ca4e9496e3ff7461cbd075a091dc109476e543c_prof);

        
        $__internal_c560a90bf270dd3bee3454b800507b109a52d986137172d73f7e0cf7d3c9f11a->leave($__internal_c560a90bf270dd3bee3454b800507b109a52d986137172d73f7e0cf7d3c9f11a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c722d1c491c72260a7c1ae761253cfa68ecf44ab19c176763c0116b72105df18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c722d1c491c72260a7c1ae761253cfa68ecf44ab19c176763c0116b72105df18->enter($__internal_c722d1c491c72260a7c1ae761253cfa68ecf44ab19c176763c0116b72105df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da3e4524f792a96fdc8064713a9a45e9e19f868242fa4b6dac45efd5f512f242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3e4524f792a96fdc8064713a9a45e9e19f868242fa4b6dac45efd5f512f242->enter($__internal_da3e4524f792a96fdc8064713a9a45e9e19f868242fa4b6dac45efd5f512f242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da3e4524f792a96fdc8064713a9a45e9e19f868242fa4b6dac45efd5f512f242->leave($__internal_da3e4524f792a96fdc8064713a9a45e9e19f868242fa4b6dac45efd5f512f242_prof);

        
        $__internal_c722d1c491c72260a7c1ae761253cfa68ecf44ab19c176763c0116b72105df18->leave($__internal_c722d1c491c72260a7c1ae761253cfa68ecf44ab19c176763c0116b72105df18_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_962be06ad08ff3405c311561521265c3ace3659b7fcdcc6befd891e9420be834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962be06ad08ff3405c311561521265c3ace3659b7fcdcc6befd891e9420be834->enter($__internal_962be06ad08ff3405c311561521265c3ace3659b7fcdcc6befd891e9420be834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0638c25fbbb353af5d36b8ba193e7de652621abb4a410375ee30157c57c47a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0638c25fbbb353af5d36b8ba193e7de652621abb4a410375ee30157c57c47a4c->enter($__internal_0638c25fbbb353af5d36b8ba193e7de652621abb4a410375ee30157c57c47a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0638c25fbbb353af5d36b8ba193e7de652621abb4a410375ee30157c57c47a4c->leave($__internal_0638c25fbbb353af5d36b8ba193e7de652621abb4a410375ee30157c57c47a4c_prof);

        
        $__internal_962be06ad08ff3405c311561521265c3ace3659b7fcdcc6befd891e9420be834->leave($__internal_962be06ad08ff3405c311561521265c3ace3659b7fcdcc6befd891e9420be834_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
