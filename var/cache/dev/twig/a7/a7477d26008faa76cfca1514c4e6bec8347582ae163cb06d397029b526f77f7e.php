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
        $__internal_83ac81ac925110ffcd9b8f84f8c4e3545b8fbd9ef900b604433b2eaeeb4d8517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ac81ac925110ffcd9b8f84f8c4e3545b8fbd9ef900b604433b2eaeeb4d8517->enter($__internal_83ac81ac925110ffcd9b8f84f8c4e3545b8fbd9ef900b604433b2eaeeb4d8517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a1a4153bc94dbff44523c506c4ceac99ddee285588b4d65aa5f03e0b5432121d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a4153bc94dbff44523c506c4ceac99ddee285588b4d65aa5f03e0b5432121d->enter($__internal_a1a4153bc94dbff44523c506c4ceac99ddee285588b4d65aa5f03e0b5432121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_83ac81ac925110ffcd9b8f84f8c4e3545b8fbd9ef900b604433b2eaeeb4d8517->leave($__internal_83ac81ac925110ffcd9b8f84f8c4e3545b8fbd9ef900b604433b2eaeeb4d8517_prof);

        
        $__internal_a1a4153bc94dbff44523c506c4ceac99ddee285588b4d65aa5f03e0b5432121d->leave($__internal_a1a4153bc94dbff44523c506c4ceac99ddee285588b4d65aa5f03e0b5432121d_prof);

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
