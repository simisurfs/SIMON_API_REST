<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_62d56da4927bceb2dc0f9d5f94cfd79fef37e41ace8b8695ec07b14597365c7a extends Twig_Template
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
        $__internal_c933e8f38e7ebdcc204c12b2d6863da47678639137830205d9f8ae017a872ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c933e8f38e7ebdcc204c12b2d6863da47678639137830205d9f8ae017a872ec4->enter($__internal_c933e8f38e7ebdcc204c12b2d6863da47678639137830205d9f8ae017a872ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_35e223617a75af4fd87f40a06be80e7e9f50e2c5d40b58a0a30a8691c85b9933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e223617a75af4fd87f40a06be80e7e9f50e2c5d40b58a0a30a8691c85b9933->enter($__internal_35e223617a75af4fd87f40a06be80e7e9f50e2c5d40b58a0a30a8691c85b9933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c933e8f38e7ebdcc204c12b2d6863da47678639137830205d9f8ae017a872ec4->leave($__internal_c933e8f38e7ebdcc204c12b2d6863da47678639137830205d9f8ae017a872ec4_prof);

        
        $__internal_35e223617a75af4fd87f40a06be80e7e9f50e2c5d40b58a0a30a8691c85b9933->leave($__internal_35e223617a75af4fd87f40a06be80e7e9f50e2c5d40b58a0a30a8691c85b9933_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
