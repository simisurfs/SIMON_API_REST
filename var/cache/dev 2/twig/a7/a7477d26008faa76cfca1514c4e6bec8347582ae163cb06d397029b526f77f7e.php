<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d9683941c7ec951067a3a3fa5f9c1d96355039b6ee8e1e89cf09c3c0399e9201 extends Twig_Template
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
        $__internal_354a3d22ff50a302332949c9332a3aa65b08cdd75676f17698be93b7e362358f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354a3d22ff50a302332949c9332a3aa65b08cdd75676f17698be93b7e362358f->enter($__internal_354a3d22ff50a302332949c9332a3aa65b08cdd75676f17698be93b7e362358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_da3af515a3777a96473814d232eb0bcf9692e0f2447e5f702ce5564a1b75636e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3af515a3777a96473814d232eb0bcf9692e0f2447e5f702ce5564a1b75636e->enter($__internal_da3af515a3777a96473814d232eb0bcf9692e0f2447e5f702ce5564a1b75636e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_354a3d22ff50a302332949c9332a3aa65b08cdd75676f17698be93b7e362358f->leave($__internal_354a3d22ff50a302332949c9332a3aa65b08cdd75676f17698be93b7e362358f_prof);

        
        $__internal_da3af515a3777a96473814d232eb0bcf9692e0f2447e5f702ce5564a1b75636e->leave($__internal_da3af515a3777a96473814d232eb0bcf9692e0f2447e5f702ce5564a1b75636e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
