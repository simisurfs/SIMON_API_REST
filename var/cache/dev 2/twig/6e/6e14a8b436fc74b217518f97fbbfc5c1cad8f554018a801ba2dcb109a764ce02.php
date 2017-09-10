<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c40fdbc93aae4cc6d043c09c7ca83926d8c49b964a65bb6df236f383e7891b92 extends Twig_Template
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
        $__internal_fc225d0aefd296217a539553e8ca07334492ace0bc0bbe245c9bae00b6808f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc225d0aefd296217a539553e8ca07334492ace0bc0bbe245c9bae00b6808f81->enter($__internal_fc225d0aefd296217a539553e8ca07334492ace0bc0bbe245c9bae00b6808f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_d08e2d6ffe52fe1da620334ec9da18e60bc1d51794b2e6f148ee628bea67b308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08e2d6ffe52fe1da620334ec9da18e60bc1d51794b2e6f148ee628bea67b308->enter($__internal_d08e2d6ffe52fe1da620334ec9da18e60bc1d51794b2e6f148ee628bea67b308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fc225d0aefd296217a539553e8ca07334492ace0bc0bbe245c9bae00b6808f81->leave($__internal_fc225d0aefd296217a539553e8ca07334492ace0bc0bbe245c9bae00b6808f81_prof);

        
        $__internal_d08e2d6ffe52fe1da620334ec9da18e60bc1d51794b2e6f148ee628bea67b308->leave($__internal_d08e2d6ffe52fe1da620334ec9da18e60bc1d51794b2e6f148ee628bea67b308_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
