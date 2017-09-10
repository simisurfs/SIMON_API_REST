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
        $__internal_649809ca37bc2e4f1966b7a4ef322a0d9afbabea352fe7c03f1fcf347813f90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649809ca37bc2e4f1966b7a4ef322a0d9afbabea352fe7c03f1fcf347813f90b->enter($__internal_649809ca37bc2e4f1966b7a4ef322a0d9afbabea352fe7c03f1fcf347813f90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_9c8b010f82467c034ddd0b141fd125d49d4b6941b65dbf37e4704a33b5a96455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8b010f82467c034ddd0b141fd125d49d4b6941b65dbf37e4704a33b5a96455->enter($__internal_9c8b010f82467c034ddd0b141fd125d49d4b6941b65dbf37e4704a33b5a96455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_649809ca37bc2e4f1966b7a4ef322a0d9afbabea352fe7c03f1fcf347813f90b->leave($__internal_649809ca37bc2e4f1966b7a4ef322a0d9afbabea352fe7c03f1fcf347813f90b_prof);

        
        $__internal_9c8b010f82467c034ddd0b141fd125d49d4b6941b65dbf37e4704a33b5a96455->leave($__internal_9c8b010f82467c034ddd0b141fd125d49d4b6941b65dbf37e4704a33b5a96455_prof);

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
