<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1c9784376ef5e992ad868572808f4ed928e221c01a1935afc2f073864ed18d0f extends Twig_Template
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
        $__internal_4cac5bc9d6e462999f5180be63cfba635af470e4b39dce45adb10549d46b7e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cac5bc9d6e462999f5180be63cfba635af470e4b39dce45adb10549d46b7e7a->enter($__internal_4cac5bc9d6e462999f5180be63cfba635af470e4b39dce45adb10549d46b7e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_dbf9646990d1d93478019f9c9a8511304f89459b86a13ff9a7c96b61e15ed878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf9646990d1d93478019f9c9a8511304f89459b86a13ff9a7c96b61e15ed878->enter($__internal_dbf9646990d1d93478019f9c9a8511304f89459b86a13ff9a7c96b61e15ed878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4cac5bc9d6e462999f5180be63cfba635af470e4b39dce45adb10549d46b7e7a->leave($__internal_4cac5bc9d6e462999f5180be63cfba635af470e4b39dce45adb10549d46b7e7a_prof);

        
        $__internal_dbf9646990d1d93478019f9c9a8511304f89459b86a13ff9a7c96b61e15ed878->leave($__internal_dbf9646990d1d93478019f9c9a8511304f89459b86a13ff9a7c96b61e15ed878_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
