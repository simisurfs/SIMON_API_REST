<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9fdf57936453dae9e7c2506ea9169997d7644e3c3c02c77dd17ad5a02fd57dd6 extends Twig_Template
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
        $__internal_9e23caba0b05bdacdb9422a95600b9861af017f5f1c61d4b5e3a2045e6d2d160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e23caba0b05bdacdb9422a95600b9861af017f5f1c61d4b5e3a2045e6d2d160->enter($__internal_9e23caba0b05bdacdb9422a95600b9861af017f5f1c61d4b5e3a2045e6d2d160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8058df705e0c165554de411a7d1dff05e9626f39f7fc48479993eb7eccf6ae43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8058df705e0c165554de411a7d1dff05e9626f39f7fc48479993eb7eccf6ae43->enter($__internal_8058df705e0c165554de411a7d1dff05e9626f39f7fc48479993eb7eccf6ae43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9e23caba0b05bdacdb9422a95600b9861af017f5f1c61d4b5e3a2045e6d2d160->leave($__internal_9e23caba0b05bdacdb9422a95600b9861af017f5f1c61d4b5e3a2045e6d2d160_prof);

        
        $__internal_8058df705e0c165554de411a7d1dff05e9626f39f7fc48479993eb7eccf6ae43->leave($__internal_8058df705e0c165554de411a7d1dff05e9626f39f7fc48479993eb7eccf6ae43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
