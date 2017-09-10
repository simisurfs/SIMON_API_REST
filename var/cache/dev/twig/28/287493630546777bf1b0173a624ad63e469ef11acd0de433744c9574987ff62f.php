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
        $__internal_4ebd00eb85448de377db006aa633744b676466a5b749749d0ecf923061e49598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebd00eb85448de377db006aa633744b676466a5b749749d0ecf923061e49598->enter($__internal_4ebd00eb85448de377db006aa633744b676466a5b749749d0ecf923061e49598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_aef025941e490881961d7af071dc3afff4ff442532d2c219ae19443c9f6cc50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef025941e490881961d7af071dc3afff4ff442532d2c219ae19443c9f6cc50b->enter($__internal_aef025941e490881961d7af071dc3afff4ff442532d2c219ae19443c9f6cc50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4ebd00eb85448de377db006aa633744b676466a5b749749d0ecf923061e49598->leave($__internal_4ebd00eb85448de377db006aa633744b676466a5b749749d0ecf923061e49598_prof);

        
        $__internal_aef025941e490881961d7af071dc3afff4ff442532d2c219ae19443c9f6cc50b->leave($__internal_aef025941e490881961d7af071dc3afff4ff442532d2c219ae19443c9f6cc50b_prof);

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
