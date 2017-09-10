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
        $__internal_72dae2ca4c1ad91017849a37f78d4b4b50461d927353333337badec6652c9b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72dae2ca4c1ad91017849a37f78d4b4b50461d927353333337badec6652c9b62->enter($__internal_72dae2ca4c1ad91017849a37f78d4b4b50461d927353333337badec6652c9b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_44348cc5f9babd64d2e951fa77541d4805e26a8ced9e2a5374b4f20fc0c5e9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44348cc5f9babd64d2e951fa77541d4805e26a8ced9e2a5374b4f20fc0c5e9f2->enter($__internal_44348cc5f9babd64d2e951fa77541d4805e26a8ced9e2a5374b4f20fc0c5e9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_72dae2ca4c1ad91017849a37f78d4b4b50461d927353333337badec6652c9b62->leave($__internal_72dae2ca4c1ad91017849a37f78d4b4b50461d927353333337badec6652c9b62_prof);

        
        $__internal_44348cc5f9babd64d2e951fa77541d4805e26a8ced9e2a5374b4f20fc0c5e9f2->leave($__internal_44348cc5f9babd64d2e951fa77541d4805e26a8ced9e2a5374b4f20fc0c5e9f2_prof);

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
