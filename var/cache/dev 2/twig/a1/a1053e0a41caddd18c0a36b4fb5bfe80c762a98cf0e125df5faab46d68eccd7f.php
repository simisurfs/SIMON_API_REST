<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8e34281686aa9610fe141252198b9fe8d97ba38ab4ab008682393af9181533c0 extends Twig_Template
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
        $__internal_d0798d3fff8a68687ac5f89d7227e6bfa8fa2805c864eae8279b33f45419788f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0798d3fff8a68687ac5f89d7227e6bfa8fa2805c864eae8279b33f45419788f->enter($__internal_d0798d3fff8a68687ac5f89d7227e6bfa8fa2805c864eae8279b33f45419788f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_615c2c167293b976aac1df45d75b343fa4e41eff155badfe4eda3b1e8d58ab65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615c2c167293b976aac1df45d75b343fa4e41eff155badfe4eda3b1e8d58ab65->enter($__internal_615c2c167293b976aac1df45d75b343fa4e41eff155badfe4eda3b1e8d58ab65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d0798d3fff8a68687ac5f89d7227e6bfa8fa2805c864eae8279b33f45419788f->leave($__internal_d0798d3fff8a68687ac5f89d7227e6bfa8fa2805c864eae8279b33f45419788f_prof);

        
        $__internal_615c2c167293b976aac1df45d75b343fa4e41eff155badfe4eda3b1e8d58ab65->leave($__internal_615c2c167293b976aac1df45d75b343fa4e41eff155badfe4eda3b1e8d58ab65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
