<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8e34281686aa9610fe141252198b9fe8d97ba38ab4ab008682393af9181533c0 extends Twig_Template
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
        $__internal_45b64129ccc5eaff06d751d6a3b2b7dff1430a42b3d30cef683c547cab3c8271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b64129ccc5eaff06d751d6a3b2b7dff1430a42b3d30cef683c547cab3c8271->enter($__internal_45b64129ccc5eaff06d751d6a3b2b7dff1430a42b3d30cef683c547cab3c8271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_41b1a1e163369eae35fa51918c238021f54d334dfff2ce6e6fba1821d7960371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b1a1e163369eae35fa51918c238021f54d334dfff2ce6e6fba1821d7960371->enter($__internal_41b1a1e163369eae35fa51918c238021f54d334dfff2ce6e6fba1821d7960371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_45b64129ccc5eaff06d751d6a3b2b7dff1430a42b3d30cef683c547cab3c8271->leave($__internal_45b64129ccc5eaff06d751d6a3b2b7dff1430a42b3d30cef683c547cab3c8271_prof);

        
        $__internal_41b1a1e163369eae35fa51918c238021f54d334dfff2ce6e6fba1821d7960371->leave($__internal_41b1a1e163369eae35fa51918c238021f54d334dfff2ce6e6fba1821d7960371_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
