<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9ae40928d3d0da3f5fdfa52ae1bf77aabe731b5996fcdce84a2cae8b92e9ab95 extends Twig_Template
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
        $__internal_d94e5a6f6b54e2b7e919905b64e915a97714a5eb06db05a0183f71e8e4e1854e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94e5a6f6b54e2b7e919905b64e915a97714a5eb06db05a0183f71e8e4e1854e->enter($__internal_d94e5a6f6b54e2b7e919905b64e915a97714a5eb06db05a0183f71e8e4e1854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0bee665dcce43e61a78a95df4735e4ab92d75fa50d73634b0eb684f33d5dd421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bee665dcce43e61a78a95df4735e4ab92d75fa50d73634b0eb684f33d5dd421->enter($__internal_0bee665dcce43e61a78a95df4735e4ab92d75fa50d73634b0eb684f33d5dd421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d94e5a6f6b54e2b7e919905b64e915a97714a5eb06db05a0183f71e8e4e1854e->leave($__internal_d94e5a6f6b54e2b7e919905b64e915a97714a5eb06db05a0183f71e8e4e1854e_prof);

        
        $__internal_0bee665dcce43e61a78a95df4735e4ab92d75fa50d73634b0eb684f33d5dd421->leave($__internal_0bee665dcce43e61a78a95df4735e4ab92d75fa50d73634b0eb684f33d5dd421_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
