<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_337d43315cbda1b2d646d2e70e18d4f8937b5c533fdc33cea09d390f30e26eeb extends Twig_Template
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
        $__internal_8ebedd960d6bc004da24df63bf6c04051400664e0e456b21f748793cd0cdf366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebedd960d6bc004da24df63bf6c04051400664e0e456b21f748793cd0cdf366->enter($__internal_8ebedd960d6bc004da24df63bf6c04051400664e0e456b21f748793cd0cdf366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_22bba847c34cec9abf5a8f9267a1eeb1e89b809155d15ebdb2c3fb8e2ef1e824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bba847c34cec9abf5a8f9267a1eeb1e89b809155d15ebdb2c3fb8e2ef1e824->enter($__internal_22bba847c34cec9abf5a8f9267a1eeb1e89b809155d15ebdb2c3fb8e2ef1e824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8ebedd960d6bc004da24df63bf6c04051400664e0e456b21f748793cd0cdf366->leave($__internal_8ebedd960d6bc004da24df63bf6c04051400664e0e456b21f748793cd0cdf366_prof);

        
        $__internal_22bba847c34cec9abf5a8f9267a1eeb1e89b809155d15ebdb2c3fb8e2ef1e824->leave($__internal_22bba847c34cec9abf5a8f9267a1eeb1e89b809155d15ebdb2c3fb8e2ef1e824_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
