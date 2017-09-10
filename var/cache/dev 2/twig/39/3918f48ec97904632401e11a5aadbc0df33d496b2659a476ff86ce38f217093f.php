<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8f7d48fb6aa3abf2ea5b89bb67324c7963374a941702eb291e3227e3cd8890ae extends Twig_Template
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
        $__internal_765e8187ed6ea4cf700886102724f3ef96b2166c7565bea579d125a7cae979c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765e8187ed6ea4cf700886102724f3ef96b2166c7565bea579d125a7cae979c8->enter($__internal_765e8187ed6ea4cf700886102724f3ef96b2166c7565bea579d125a7cae979c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9c6b3f631f44d4085b296a550451772af6a1cce292a0e01e1d94c219086d51a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6b3f631f44d4085b296a550451772af6a1cce292a0e01e1d94c219086d51a8->enter($__internal_9c6b3f631f44d4085b296a550451772af6a1cce292a0e01e1d94c219086d51a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_765e8187ed6ea4cf700886102724f3ef96b2166c7565bea579d125a7cae979c8->leave($__internal_765e8187ed6ea4cf700886102724f3ef96b2166c7565bea579d125a7cae979c8_prof);

        
        $__internal_9c6b3f631f44d4085b296a550451772af6a1cce292a0e01e1d94c219086d51a8->leave($__internal_9c6b3f631f44d4085b296a550451772af6a1cce292a0e01e1d94c219086d51a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
