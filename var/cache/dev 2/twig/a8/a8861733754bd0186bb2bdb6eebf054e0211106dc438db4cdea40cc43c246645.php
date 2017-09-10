<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f6105acefc1adb169c81d3b68e6c4b826f9e97f6137f545b9e03025ba7a54890 extends Twig_Template
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
        $__internal_4677603c81150e2f8b227f6be553ce620327dd068e9dda6345e9b2a7952142f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4677603c81150e2f8b227f6be553ce620327dd068e9dda6345e9b2a7952142f1->enter($__internal_4677603c81150e2f8b227f6be553ce620327dd068e9dda6345e9b2a7952142f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_63bf7c4da2aeca637aa3e0dcef4337ccd83183ced4421d3289ba0f2acda5cb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bf7c4da2aeca637aa3e0dcef4337ccd83183ced4421d3289ba0f2acda5cb71->enter($__internal_63bf7c4da2aeca637aa3e0dcef4337ccd83183ced4421d3289ba0f2acda5cb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4677603c81150e2f8b227f6be553ce620327dd068e9dda6345e9b2a7952142f1->leave($__internal_4677603c81150e2f8b227f6be553ce620327dd068e9dda6345e9b2a7952142f1_prof);

        
        $__internal_63bf7c4da2aeca637aa3e0dcef4337ccd83183ced4421d3289ba0f2acda5cb71->leave($__internal_63bf7c4da2aeca637aa3e0dcef4337ccd83183ced4421d3289ba0f2acda5cb71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
