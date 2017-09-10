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
        $__internal_302563e9671829f964c0e686733a49b10a25d01b7d64dbb778bcba5889e15ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302563e9671829f964c0e686733a49b10a25d01b7d64dbb778bcba5889e15ac8->enter($__internal_302563e9671829f964c0e686733a49b10a25d01b7d64dbb778bcba5889e15ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_fe448e1c958a27235fa40befc77750dd0b6d84207a84674fbd35b9eb6e2cf5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe448e1c958a27235fa40befc77750dd0b6d84207a84674fbd35b9eb6e2cf5f8->enter($__internal_fe448e1c958a27235fa40befc77750dd0b6d84207a84674fbd35b9eb6e2cf5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_302563e9671829f964c0e686733a49b10a25d01b7d64dbb778bcba5889e15ac8->leave($__internal_302563e9671829f964c0e686733a49b10a25d01b7d64dbb778bcba5889e15ac8_prof);

        
        $__internal_fe448e1c958a27235fa40befc77750dd0b6d84207a84674fbd35b9eb6e2cf5f8->leave($__internal_fe448e1c958a27235fa40befc77750dd0b6d84207a84674fbd35b9eb6e2cf5f8_prof);

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
