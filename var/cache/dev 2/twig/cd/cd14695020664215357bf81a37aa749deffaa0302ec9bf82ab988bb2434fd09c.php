<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_af95b32760fe1fe74eefa747fdf1e52f8b63eac31e87e8408cccf2d36c77394e extends Twig_Template
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
        $__internal_99788ce9dac13f2983b3c50e2420efc551f4ff46491ee00635828d40d6114a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99788ce9dac13f2983b3c50e2420efc551f4ff46491ee00635828d40d6114a49->enter($__internal_99788ce9dac13f2983b3c50e2420efc551f4ff46491ee00635828d40d6114a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_b165e0b3c660b1e8b15b425c9da4d58e73a851fa3c3ffd330bb66a716f8805cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b165e0b3c660b1e8b15b425c9da4d58e73a851fa3c3ffd330bb66a716f8805cf->enter($__internal_b165e0b3c660b1e8b15b425c9da4d58e73a851fa3c3ffd330bb66a716f8805cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_99788ce9dac13f2983b3c50e2420efc551f4ff46491ee00635828d40d6114a49->leave($__internal_99788ce9dac13f2983b3c50e2420efc551f4ff46491ee00635828d40d6114a49_prof);

        
        $__internal_b165e0b3c660b1e8b15b425c9da4d58e73a851fa3c3ffd330bb66a716f8805cf->leave($__internal_b165e0b3c660b1e8b15b425c9da4d58e73a851fa3c3ffd330bb66a716f8805cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
