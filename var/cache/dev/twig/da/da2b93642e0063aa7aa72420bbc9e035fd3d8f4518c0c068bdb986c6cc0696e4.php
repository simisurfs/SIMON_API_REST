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
        $__internal_3ec7bc691b111116a9a47ff7474905910c599dca28e34d391122e0672198302b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec7bc691b111116a9a47ff7474905910c599dca28e34d391122e0672198302b->enter($__internal_3ec7bc691b111116a9a47ff7474905910c599dca28e34d391122e0672198302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7536e2b8dc7c51569e568222303fe4b35e6555ea82c37f7aad290a326000e8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7536e2b8dc7c51569e568222303fe4b35e6555ea82c37f7aad290a326000e8f2->enter($__internal_7536e2b8dc7c51569e568222303fe4b35e6555ea82c37f7aad290a326000e8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec7bc691b111116a9a47ff7474905910c599dca28e34d391122e0672198302b->leave($__internal_3ec7bc691b111116a9a47ff7474905910c599dca28e34d391122e0672198302b_prof);

        
        $__internal_7536e2b8dc7c51569e568222303fe4b35e6555ea82c37f7aad290a326000e8f2->leave($__internal_7536e2b8dc7c51569e568222303fe4b35e6555ea82c37f7aad290a326000e8f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45f163d66484592def7b46639bd59233b133fdc524dc6cae2bae75c8ff7acd04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f163d66484592def7b46639bd59233b133fdc524dc6cae2bae75c8ff7acd04->enter($__internal_45f163d66484592def7b46639bd59233b133fdc524dc6cae2bae75c8ff7acd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05d970627651887afe377ffecb48eb546612d2c76278f8e0912c34211d63eced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d970627651887afe377ffecb48eb546612d2c76278f8e0912c34211d63eced->enter($__internal_05d970627651887afe377ffecb48eb546612d2c76278f8e0912c34211d63eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_05d970627651887afe377ffecb48eb546612d2c76278f8e0912c34211d63eced->leave($__internal_05d970627651887afe377ffecb48eb546612d2c76278f8e0912c34211d63eced_prof);

        
        $__internal_45f163d66484592def7b46639bd59233b133fdc524dc6cae2bae75c8ff7acd04->leave($__internal_45f163d66484592def7b46639bd59233b133fdc524dc6cae2bae75c8ff7acd04_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3c2dbc2a36466d80083d7154034f938a782200639722fbe545c749a628bddee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c2dbc2a36466d80083d7154034f938a782200639722fbe545c749a628bddee->enter($__internal_e3c2dbc2a36466d80083d7154034f938a782200639722fbe545c749a628bddee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b95ee2ee419e7f53357b9788ec3a4e3b228602ab270d9f0bfd42abf790c70da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b95ee2ee419e7f53357b9788ec3a4e3b228602ab270d9f0bfd42abf790c70da->enter($__internal_7b95ee2ee419e7f53357b9788ec3a4e3b228602ab270d9f0bfd42abf790c70da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b95ee2ee419e7f53357b9788ec3a4e3b228602ab270d9f0bfd42abf790c70da->leave($__internal_7b95ee2ee419e7f53357b9788ec3a4e3b228602ab270d9f0bfd42abf790c70da_prof);

        
        $__internal_e3c2dbc2a36466d80083d7154034f938a782200639722fbe545c749a628bddee->leave($__internal_e3c2dbc2a36466d80083d7154034f938a782200639722fbe545c749a628bddee_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d875bf1ded73261487b3702881ece0410644e3125d7b1b8b0218f3c6af05ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d875bf1ded73261487b3702881ece0410644e3125d7b1b8b0218f3c6af05ac6->enter($__internal_3d875bf1ded73261487b3702881ece0410644e3125d7b1b8b0218f3c6af05ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94891c23db0f5157b065e61f959bcdc2d8928addd7ab303de1c776e5a18cda66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94891c23db0f5157b065e61f959bcdc2d8928addd7ab303de1c776e5a18cda66->enter($__internal_94891c23db0f5157b065e61f959bcdc2d8928addd7ab303de1c776e5a18cda66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_94891c23db0f5157b065e61f959bcdc2d8928addd7ab303de1c776e5a18cda66->leave($__internal_94891c23db0f5157b065e61f959bcdc2d8928addd7ab303de1c776e5a18cda66_prof);

        
        $__internal_3d875bf1ded73261487b3702881ece0410644e3125d7b1b8b0218f3c6af05ac6->leave($__internal_3d875bf1ded73261487b3702881ece0410644e3125d7b1b8b0218f3c6af05ac6_prof);

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
