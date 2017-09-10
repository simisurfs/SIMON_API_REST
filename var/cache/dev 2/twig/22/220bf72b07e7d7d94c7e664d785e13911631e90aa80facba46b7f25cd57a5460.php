<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2c5c7ab50c44c5d6c6187f85a254569164a8506326aebbc76ff3172b8cf5e111 extends Twig_Template
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
        $__internal_d353ee747b5f790c41233f40e08d9a41a979a0ac87ebfcc30c06b6861e4ff493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d353ee747b5f790c41233f40e08d9a41a979a0ac87ebfcc30c06b6861e4ff493->enter($__internal_d353ee747b5f790c41233f40e08d9a41a979a0ac87ebfcc30c06b6861e4ff493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_20bdd7fbead9cf5769659aaebac280615f63356b7eea8238ec6bd0759e45e2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bdd7fbead9cf5769659aaebac280615f63356b7eea8238ec6bd0759e45e2fc->enter($__internal_20bdd7fbead9cf5769659aaebac280615f63356b7eea8238ec6bd0759e45e2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d353ee747b5f790c41233f40e08d9a41a979a0ac87ebfcc30c06b6861e4ff493->leave($__internal_d353ee747b5f790c41233f40e08d9a41a979a0ac87ebfcc30c06b6861e4ff493_prof);

        
        $__internal_20bdd7fbead9cf5769659aaebac280615f63356b7eea8238ec6bd0759e45e2fc->leave($__internal_20bdd7fbead9cf5769659aaebac280615f63356b7eea8238ec6bd0759e45e2fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
