<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2125669a685f1d3dd30b28ba8562f96927bb40951f43744d20449824bf2d9555 extends Twig_Template
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
        $__internal_ad672680eaa3cd470b7a72ddae943e026c3aa4f37b8a4393b90112332fd10f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad672680eaa3cd470b7a72ddae943e026c3aa4f37b8a4393b90112332fd10f05->enter($__internal_ad672680eaa3cd470b7a72ddae943e026c3aa4f37b8a4393b90112332fd10f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f55586164a0b217d754c4f9ec78ac69420eb24badc82ff0002ba29edf5e16eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55586164a0b217d754c4f9ec78ac69420eb24badc82ff0002ba29edf5e16eda->enter($__internal_f55586164a0b217d754c4f9ec78ac69420eb24badc82ff0002ba29edf5e16eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ad672680eaa3cd470b7a72ddae943e026c3aa4f37b8a4393b90112332fd10f05->leave($__internal_ad672680eaa3cd470b7a72ddae943e026c3aa4f37b8a4393b90112332fd10f05_prof);

        
        $__internal_f55586164a0b217d754c4f9ec78ac69420eb24badc82ff0002ba29edf5e16eda->leave($__internal_f55586164a0b217d754c4f9ec78ac69420eb24badc82ff0002ba29edf5e16eda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
