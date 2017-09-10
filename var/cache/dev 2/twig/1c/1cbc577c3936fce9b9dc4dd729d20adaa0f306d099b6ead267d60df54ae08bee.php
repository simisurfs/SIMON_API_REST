<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_958f035bb2bcd5fecf43441680ee30138f496344409aafc98666b28b70e3578d extends Twig_Template
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
        $__internal_69301dc4ca380bf6ccb8dab6945c825259ec8d0fdd01d1ec4c86654c09f7931a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69301dc4ca380bf6ccb8dab6945c825259ec8d0fdd01d1ec4c86654c09f7931a->enter($__internal_69301dc4ca380bf6ccb8dab6945c825259ec8d0fdd01d1ec4c86654c09f7931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_05c6ba59a325918238a25a8ebfb32ae9b04799e77f4da436db92b372ccd5c473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c6ba59a325918238a25a8ebfb32ae9b04799e77f4da436db92b372ccd5c473->enter($__internal_05c6ba59a325918238a25a8ebfb32ae9b04799e77f4da436db92b372ccd5c473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_69301dc4ca380bf6ccb8dab6945c825259ec8d0fdd01d1ec4c86654c09f7931a->leave($__internal_69301dc4ca380bf6ccb8dab6945c825259ec8d0fdd01d1ec4c86654c09f7931a_prof);

        
        $__internal_05c6ba59a325918238a25a8ebfb32ae9b04799e77f4da436db92b372ccd5c473->leave($__internal_05c6ba59a325918238a25a8ebfb32ae9b04799e77f4da436db92b372ccd5c473_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
