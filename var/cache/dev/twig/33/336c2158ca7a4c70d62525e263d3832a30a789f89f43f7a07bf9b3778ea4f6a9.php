<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3175a1028da7c0a13c40212813a9ba22115f236122fb80a9582d20d3cdee4e6e extends Twig_Template
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
        $__internal_6847e89fbb73d9844d64a6d10dde77b61b9d26a5d9957cda0048d1c9a927538f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6847e89fbb73d9844d64a6d10dde77b61b9d26a5d9957cda0048d1c9a927538f->enter($__internal_6847e89fbb73d9844d64a6d10dde77b61b9d26a5d9957cda0048d1c9a927538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5b86f53cf683dc3005c79ec19293784994fe327bacb50f802ac34c360da4cfed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b86f53cf683dc3005c79ec19293784994fe327bacb50f802ac34c360da4cfed->enter($__internal_5b86f53cf683dc3005c79ec19293784994fe327bacb50f802ac34c360da4cfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6847e89fbb73d9844d64a6d10dde77b61b9d26a5d9957cda0048d1c9a927538f->leave($__internal_6847e89fbb73d9844d64a6d10dde77b61b9d26a5d9957cda0048d1c9a927538f_prof);

        
        $__internal_5b86f53cf683dc3005c79ec19293784994fe327bacb50f802ac34c360da4cfed->leave($__internal_5b86f53cf683dc3005c79ec19293784994fe327bacb50f802ac34c360da4cfed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
