<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2578ed193af9fed9fbcf1176610fdb57da0630b51c7dbe67c11d718427952ae9 extends Twig_Template
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
        $__internal_4e4b42ed3c6625bb4030f47918123723524b8f8e8fe76f08c0c3bb86f2338bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4b42ed3c6625bb4030f47918123723524b8f8e8fe76f08c0c3bb86f2338bf7->enter($__internal_4e4b42ed3c6625bb4030f47918123723524b8f8e8fe76f08c0c3bb86f2338bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1f655c333c6f96b802b78112a18740a437893dbc6202072fb8f8e500713f0a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f655c333c6f96b802b78112a18740a437893dbc6202072fb8f8e500713f0a9d->enter($__internal_1f655c333c6f96b802b78112a18740a437893dbc6202072fb8f8e500713f0a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_4e4b42ed3c6625bb4030f47918123723524b8f8e8fe76f08c0c3bb86f2338bf7->leave($__internal_4e4b42ed3c6625bb4030f47918123723524b8f8e8fe76f08c0c3bb86f2338bf7_prof);

        
        $__internal_1f655c333c6f96b802b78112a18740a437893dbc6202072fb8f8e500713f0a9d->leave($__internal_1f655c333c6f96b802b78112a18740a437893dbc6202072fb8f8e500713f0a9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
