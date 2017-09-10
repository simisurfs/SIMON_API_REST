<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8586bbcaf2a13ea2f7f9c93cc9929b10ed6245f279c194175fec043ef9073802 extends Twig_Template
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
        $__internal_ff25ecc016411d8a7c3d3e5a755f089d038dda180367e86eabfbb74e7e4cbd88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff25ecc016411d8a7c3d3e5a755f089d038dda180367e86eabfbb74e7e4cbd88->enter($__internal_ff25ecc016411d8a7c3d3e5a755f089d038dda180367e86eabfbb74e7e4cbd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f2cec16e5475e8635f4d7ca8ae5a012a3596ad60c4216a127530068fd764fd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cec16e5475e8635f4d7ca8ae5a012a3596ad60c4216a127530068fd764fd27->enter($__internal_f2cec16e5475e8635f4d7ca8ae5a012a3596ad60c4216a127530068fd764fd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ff25ecc016411d8a7c3d3e5a755f089d038dda180367e86eabfbb74e7e4cbd88->leave($__internal_ff25ecc016411d8a7c3d3e5a755f089d038dda180367e86eabfbb74e7e4cbd88_prof);

        
        $__internal_f2cec16e5475e8635f4d7ca8ae5a012a3596ad60c4216a127530068fd764fd27->leave($__internal_f2cec16e5475e8635f4d7ca8ae5a012a3596ad60c4216a127530068fd764fd27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
