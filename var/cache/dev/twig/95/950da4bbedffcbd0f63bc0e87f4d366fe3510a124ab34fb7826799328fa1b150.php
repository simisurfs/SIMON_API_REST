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
        $__internal_ee9e827ab6386c8b094d3269163650c5a956d4261a22a1e4fbfd39d914f55f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9e827ab6386c8b094d3269163650c5a956d4261a22a1e4fbfd39d914f55f90->enter($__internal_ee9e827ab6386c8b094d3269163650c5a956d4261a22a1e4fbfd39d914f55f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_986b094d54eedfa8598a5e31078e4a6341bf5b264ee74407be47391cb9b578c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986b094d54eedfa8598a5e31078e4a6341bf5b264ee74407be47391cb9b578c6->enter($__internal_986b094d54eedfa8598a5e31078e4a6341bf5b264ee74407be47391cb9b578c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ee9e827ab6386c8b094d3269163650c5a956d4261a22a1e4fbfd39d914f55f90->leave($__internal_ee9e827ab6386c8b094d3269163650c5a956d4261a22a1e4fbfd39d914f55f90_prof);

        
        $__internal_986b094d54eedfa8598a5e31078e4a6341bf5b264ee74407be47391cb9b578c6->leave($__internal_986b094d54eedfa8598a5e31078e4a6341bf5b264ee74407be47391cb9b578c6_prof);

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
