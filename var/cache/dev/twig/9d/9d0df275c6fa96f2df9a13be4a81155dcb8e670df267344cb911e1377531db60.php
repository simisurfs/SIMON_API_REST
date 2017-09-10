<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6629c6214b0e1d6f7b4e0a6207c8b6456f887ad17fc465f3c6737a6827513f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22a31b9f48451bfeafd0480034608340cf25029749de926997fbf475c9f37efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a31b9f48451bfeafd0480034608340cf25029749de926997fbf475c9f37efd->enter($__internal_22a31b9f48451bfeafd0480034608340cf25029749de926997fbf475c9f37efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e8bc55f5f5fbce9d4d1ed0db212acc76d0709a63866b0dadc9cc460929ad8156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bc55f5f5fbce9d4d1ed0db212acc76d0709a63866b0dadc9cc460929ad8156->enter($__internal_e8bc55f5f5fbce9d4d1ed0db212acc76d0709a63866b0dadc9cc460929ad8156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_22a31b9f48451bfeafd0480034608340cf25029749de926997fbf475c9f37efd->leave($__internal_22a31b9f48451bfeafd0480034608340cf25029749de926997fbf475c9f37efd_prof);

        
        $__internal_e8bc55f5f5fbce9d4d1ed0db212acc76d0709a63866b0dadc9cc460929ad8156->leave($__internal_e8bc55f5f5fbce9d4d1ed0db212acc76d0709a63866b0dadc9cc460929ad8156_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_52fc5d45afdad31b64f634636cafe23170a14caac4fe2671201395415fc4bb33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fc5d45afdad31b64f634636cafe23170a14caac4fe2671201395415fc4bb33->enter($__internal_52fc5d45afdad31b64f634636cafe23170a14caac4fe2671201395415fc4bb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1303149cdfe14e28a29e72fb654abdc12659a46da2c763c549107e474474b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1303149cdfe14e28a29e72fb654abdc12659a46da2c763c549107e474474b13->enter($__internal_e1303149cdfe14e28a29e72fb654abdc12659a46da2c763c549107e474474b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e1303149cdfe14e28a29e72fb654abdc12659a46da2c763c549107e474474b13->leave($__internal_e1303149cdfe14e28a29e72fb654abdc12659a46da2c763c549107e474474b13_prof);

        
        $__internal_52fc5d45afdad31b64f634636cafe23170a14caac4fe2671201395415fc4bb33->leave($__internal_52fc5d45afdad31b64f634636cafe23170a14caac4fe2671201395415fc4bb33_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_23b147e42a8bfe504fc694780bac867c31c15f9cd8093dd876b3fef7fe72fea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b147e42a8bfe504fc694780bac867c31c15f9cd8093dd876b3fef7fe72fea6->enter($__internal_23b147e42a8bfe504fc694780bac867c31c15f9cd8093dd876b3fef7fe72fea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af7f86b92ba8834d252e36390888adf8f5bc171eae9756d965354fa8956f28be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7f86b92ba8834d252e36390888adf8f5bc171eae9756d965354fa8956f28be->enter($__internal_af7f86b92ba8834d252e36390888adf8f5bc171eae9756d965354fa8956f28be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_af7f86b92ba8834d252e36390888adf8f5bc171eae9756d965354fa8956f28be->leave($__internal_af7f86b92ba8834d252e36390888adf8f5bc171eae9756d965354fa8956f28be_prof);

        
        $__internal_23b147e42a8bfe504fc694780bac867c31c15f9cd8093dd876b3fef7fe72fea6->leave($__internal_23b147e42a8bfe504fc694780bac867c31c15f9cd8093dd876b3fef7fe72fea6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_38df7d4ed51c2adaa3dddb036a3be3569aca97a067d2f2a7e806027ad85f3cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38df7d4ed51c2adaa3dddb036a3be3569aca97a067d2f2a7e806027ad85f3cd2->enter($__internal_38df7d4ed51c2adaa3dddb036a3be3569aca97a067d2f2a7e806027ad85f3cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f08025c8fda33b651febdee59c244b69703db0bc135d26efa5b14801b4e7cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f08025c8fda33b651febdee59c244b69703db0bc135d26efa5b14801b4e7cde->enter($__internal_4f08025c8fda33b651febdee59c244b69703db0bc135d26efa5b14801b4e7cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f08025c8fda33b651febdee59c244b69703db0bc135d26efa5b14801b4e7cde->leave($__internal_4f08025c8fda33b651febdee59c244b69703db0bc135d26efa5b14801b4e7cde_prof);

        
        $__internal_38df7d4ed51c2adaa3dddb036a3be3569aca97a067d2f2a7e806027ad85f3cd2->leave($__internal_38df7d4ed51c2adaa3dddb036a3be3569aca97a067d2f2a7e806027ad85f3cd2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
