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
        $__internal_dc7ccef5f060e9426adf4cad365247efaf7a336fe95dbf6f197ecafea49c241a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7ccef5f060e9426adf4cad365247efaf7a336fe95dbf6f197ecafea49c241a->enter($__internal_dc7ccef5f060e9426adf4cad365247efaf7a336fe95dbf6f197ecafea49c241a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_15021d37c759b4116cb3b6b55170698aeaff979784d1f8e4cf3cf5c92ccd1d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15021d37c759b4116cb3b6b55170698aeaff979784d1f8e4cf3cf5c92ccd1d57->enter($__internal_15021d37c759b4116cb3b6b55170698aeaff979784d1f8e4cf3cf5c92ccd1d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dc7ccef5f060e9426adf4cad365247efaf7a336fe95dbf6f197ecafea49c241a->leave($__internal_dc7ccef5f060e9426adf4cad365247efaf7a336fe95dbf6f197ecafea49c241a_prof);

        
        $__internal_15021d37c759b4116cb3b6b55170698aeaff979784d1f8e4cf3cf5c92ccd1d57->leave($__internal_15021d37c759b4116cb3b6b55170698aeaff979784d1f8e4cf3cf5c92ccd1d57_prof);

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
