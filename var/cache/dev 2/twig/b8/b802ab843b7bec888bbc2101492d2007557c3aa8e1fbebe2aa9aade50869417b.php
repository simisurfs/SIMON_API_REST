<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_266f3e2d098a5ce0fb84ed34d5d7e9530a8588e85081db4217f6e9398b0013ab extends Twig_Template
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
        $__internal_624ad950cb1c7c44a71dbfa31758ca96137de2bcc130d5bdc6b4bcd722028a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624ad950cb1c7c44a71dbfa31758ca96137de2bcc130d5bdc6b4bcd722028a79->enter($__internal_624ad950cb1c7c44a71dbfa31758ca96137de2bcc130d5bdc6b4bcd722028a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d86e839c0c55f7968727f2e9fe98d02b28cb6a353ea769bed9f311f82696897b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86e839c0c55f7968727f2e9fe98d02b28cb6a353ea769bed9f311f82696897b->enter($__internal_d86e839c0c55f7968727f2e9fe98d02b28cb6a353ea769bed9f311f82696897b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_624ad950cb1c7c44a71dbfa31758ca96137de2bcc130d5bdc6b4bcd722028a79->leave($__internal_624ad950cb1c7c44a71dbfa31758ca96137de2bcc130d5bdc6b4bcd722028a79_prof);

        
        $__internal_d86e839c0c55f7968727f2e9fe98d02b28cb6a353ea769bed9f311f82696897b->leave($__internal_d86e839c0c55f7968727f2e9fe98d02b28cb6a353ea769bed9f311f82696897b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
