<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c1cfa929f37d7dccfb2dd25a33fc02cef1a207ae018345921a620301f0db1aa5 extends Twig_Template
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
        $__internal_e93609c22d2656833e565358372accc16a59d7602f82cee0a8982883e9d899db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93609c22d2656833e565358372accc16a59d7602f82cee0a8982883e9d899db->enter($__internal_e93609c22d2656833e565358372accc16a59d7602f82cee0a8982883e9d899db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7802e5307591d7320d8eab47523c07940b3f17d69c94fd9a4cc6e60ec5edec85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7802e5307591d7320d8eab47523c07940b3f17d69c94fd9a4cc6e60ec5edec85->enter($__internal_7802e5307591d7320d8eab47523c07940b3f17d69c94fd9a4cc6e60ec5edec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e93609c22d2656833e565358372accc16a59d7602f82cee0a8982883e9d899db->leave($__internal_e93609c22d2656833e565358372accc16a59d7602f82cee0a8982883e9d899db_prof);

        
        $__internal_7802e5307591d7320d8eab47523c07940b3f17d69c94fd9a4cc6e60ec5edec85->leave($__internal_7802e5307591d7320d8eab47523c07940b3f17d69c94fd9a4cc6e60ec5edec85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
