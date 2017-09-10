<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_dc71b742ed3863e5712fb7bfdce455122652f5788b02b9b092ee7ec77470c4b3 extends Twig_Template
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
        $__internal_9740cc61137ef78ac79a378b4a5bd0d5b946fe3a9a2b64504e5a9be2b72f0d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9740cc61137ef78ac79a378b4a5bd0d5b946fe3a9a2b64504e5a9be2b72f0d6e->enter($__internal_9740cc61137ef78ac79a378b4a5bd0d5b946fe3a9a2b64504e5a9be2b72f0d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7c49a3bf875f006144ee6c3f46a5d1a04fa88d0022926ffc86dd4ff90e67389a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c49a3bf875f006144ee6c3f46a5d1a04fa88d0022926ffc86dd4ff90e67389a->enter($__internal_7c49a3bf875f006144ee6c3f46a5d1a04fa88d0022926ffc86dd4ff90e67389a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9740cc61137ef78ac79a378b4a5bd0d5b946fe3a9a2b64504e5a9be2b72f0d6e->leave($__internal_9740cc61137ef78ac79a378b4a5bd0d5b946fe3a9a2b64504e5a9be2b72f0d6e_prof);

        
        $__internal_7c49a3bf875f006144ee6c3f46a5d1a04fa88d0022926ffc86dd4ff90e67389a->leave($__internal_7c49a3bf875f006144ee6c3f46a5d1a04fa88d0022926ffc86dd4ff90e67389a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
