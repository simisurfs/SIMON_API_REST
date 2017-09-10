<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_dc71b742ed3863e5712fb7bfdce455122652f5788b02b9b092ee7ec77470c4b3 extends Twig_Template
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
        $__internal_05da9b413463d6d55b70451afa99807c1421985cc0cc0cb5da0e926f3c0efdf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05da9b413463d6d55b70451afa99807c1421985cc0cc0cb5da0e926f3c0efdf5->enter($__internal_05da9b413463d6d55b70451afa99807c1421985cc0cc0cb5da0e926f3c0efdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_76edfa92e5c893532efa088b32ca6dd5d432c2ae097d457614cd3013d01ba6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76edfa92e5c893532efa088b32ca6dd5d432c2ae097d457614cd3013d01ba6f8->enter($__internal_76edfa92e5c893532efa088b32ca6dd5d432c2ae097d457614cd3013d01ba6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_05da9b413463d6d55b70451afa99807c1421985cc0cc0cb5da0e926f3c0efdf5->leave($__internal_05da9b413463d6d55b70451afa99807c1421985cc0cc0cb5da0e926f3c0efdf5_prof);

        
        $__internal_76edfa92e5c893532efa088b32ca6dd5d432c2ae097d457614cd3013d01ba6f8->leave($__internal_76edfa92e5c893532efa088b32ca6dd5d432c2ae097d457614cd3013d01ba6f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
