<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_219a1191cf1a7edb66ac3fc3295e41c6ab9dd2753197d104ee3d87ac94f46720 extends Twig_Template
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
        $__internal_abe1d83e59f1e86dfa83cec67d1a7a2ac0c1eb06ea26aa308b9470317af8b7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe1d83e59f1e86dfa83cec67d1a7a2ac0c1eb06ea26aa308b9470317af8b7ff->enter($__internal_abe1d83e59f1e86dfa83cec67d1a7a2ac0c1eb06ea26aa308b9470317af8b7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5077ce3b3ca26308ea3cec6bdc25f14da9c3de16fc7735c89d116e184275caf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5077ce3b3ca26308ea3cec6bdc25f14da9c3de16fc7735c89d116e184275caf9->enter($__internal_5077ce3b3ca26308ea3cec6bdc25f14da9c3de16fc7735c89d116e184275caf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_abe1d83e59f1e86dfa83cec67d1a7a2ac0c1eb06ea26aa308b9470317af8b7ff->leave($__internal_abe1d83e59f1e86dfa83cec67d1a7a2ac0c1eb06ea26aa308b9470317af8b7ff_prof);

        
        $__internal_5077ce3b3ca26308ea3cec6bdc25f14da9c3de16fc7735c89d116e184275caf9->leave($__internal_5077ce3b3ca26308ea3cec6bdc25f14da9c3de16fc7735c89d116e184275caf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
