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
        $__internal_14db49ce7d541ed3feba7aeb794d3fc319f680b609cfc487dbbebccf5d354a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14db49ce7d541ed3feba7aeb794d3fc319f680b609cfc487dbbebccf5d354a59->enter($__internal_14db49ce7d541ed3feba7aeb794d3fc319f680b609cfc487dbbebccf5d354a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ec167a21bc3287dbd0bba76435745e5377b49913fa5817c6e28e5a906b42f0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec167a21bc3287dbd0bba76435745e5377b49913fa5817c6e28e5a906b42f0d5->enter($__internal_ec167a21bc3287dbd0bba76435745e5377b49913fa5817c6e28e5a906b42f0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_14db49ce7d541ed3feba7aeb794d3fc319f680b609cfc487dbbebccf5d354a59->leave($__internal_14db49ce7d541ed3feba7aeb794d3fc319f680b609cfc487dbbebccf5d354a59_prof);

        
        $__internal_ec167a21bc3287dbd0bba76435745e5377b49913fa5817c6e28e5a906b42f0d5->leave($__internal_ec167a21bc3287dbd0bba76435745e5377b49913fa5817c6e28e5a906b42f0d5_prof);

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
