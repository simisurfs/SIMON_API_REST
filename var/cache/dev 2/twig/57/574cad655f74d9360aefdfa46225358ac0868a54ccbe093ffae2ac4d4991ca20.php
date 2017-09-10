<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4d95b93f48018fe01256edd08200498fbb42e9841b136ae3fef98c7ec156d988 extends Twig_Template
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
        $__internal_d68b2bf02094dcd803e625ba6f6e452528309c525dff7d0384e7b4064e81e784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68b2bf02094dcd803e625ba6f6e452528309c525dff7d0384e7b4064e81e784->enter($__internal_d68b2bf02094dcd803e625ba6f6e452528309c525dff7d0384e7b4064e81e784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c1ca61980966ea257e24a3362f2e05989e6fd8729b2926fbd14885de62bb9df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ca61980966ea257e24a3362f2e05989e6fd8729b2926fbd14885de62bb9df8->enter($__internal_c1ca61980966ea257e24a3362f2e05989e6fd8729b2926fbd14885de62bb9df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d68b2bf02094dcd803e625ba6f6e452528309c525dff7d0384e7b4064e81e784->leave($__internal_d68b2bf02094dcd803e625ba6f6e452528309c525dff7d0384e7b4064e81e784_prof);

        
        $__internal_c1ca61980966ea257e24a3362f2e05989e6fd8729b2926fbd14885de62bb9df8->leave($__internal_c1ca61980966ea257e24a3362f2e05989e6fd8729b2926fbd14885de62bb9df8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
