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
        $__internal_e34b17ae8b9265cb0bb3c7cfdd1ff918a827c213993b509ee39e2e4657ea9f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34b17ae8b9265cb0bb3c7cfdd1ff918a827c213993b509ee39e2e4657ea9f28->enter($__internal_e34b17ae8b9265cb0bb3c7cfdd1ff918a827c213993b509ee39e2e4657ea9f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8cdfaef118e54fd0bf9710d775c574f4050a7ea2393066247610c03d01ed2572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdfaef118e54fd0bf9710d775c574f4050a7ea2393066247610c03d01ed2572->enter($__internal_8cdfaef118e54fd0bf9710d775c574f4050a7ea2393066247610c03d01ed2572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e34b17ae8b9265cb0bb3c7cfdd1ff918a827c213993b509ee39e2e4657ea9f28->leave($__internal_e34b17ae8b9265cb0bb3c7cfdd1ff918a827c213993b509ee39e2e4657ea9f28_prof);

        
        $__internal_8cdfaef118e54fd0bf9710d775c574f4050a7ea2393066247610c03d01ed2572->leave($__internal_8cdfaef118e54fd0bf9710d775c574f4050a7ea2393066247610c03d01ed2572_prof);

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
