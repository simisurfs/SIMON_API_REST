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
        $__internal_e75e126fe9192b121a9d865edb92a3e9e431ffa4ffef88189fb85a84276c4748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75e126fe9192b121a9d865edb92a3e9e431ffa4ffef88189fb85a84276c4748->enter($__internal_e75e126fe9192b121a9d865edb92a3e9e431ffa4ffef88189fb85a84276c4748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4499fb14ddc016ea875f473f140f0d2aec2f79ed5184c9cd5714aa1f3747c709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4499fb14ddc016ea875f473f140f0d2aec2f79ed5184c9cd5714aa1f3747c709->enter($__internal_4499fb14ddc016ea875f473f140f0d2aec2f79ed5184c9cd5714aa1f3747c709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e75e126fe9192b121a9d865edb92a3e9e431ffa4ffef88189fb85a84276c4748->leave($__internal_e75e126fe9192b121a9d865edb92a3e9e431ffa4ffef88189fb85a84276c4748_prof);

        
        $__internal_4499fb14ddc016ea875f473f140f0d2aec2f79ed5184c9cd5714aa1f3747c709->leave($__internal_4499fb14ddc016ea875f473f140f0d2aec2f79ed5184c9cd5714aa1f3747c709_prof);

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
