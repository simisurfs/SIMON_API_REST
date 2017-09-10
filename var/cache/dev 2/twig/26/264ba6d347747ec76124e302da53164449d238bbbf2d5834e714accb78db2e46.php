<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_b3f91cefe7852822037947ff3bc635dcc1e36a5dce91ce20692cef693b3f6dbe extends Twig_Template
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
        $__internal_2fc70b0ae3dae438261b9775c9714d3e8b5a4e36f743055663be6733edb3f751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc70b0ae3dae438261b9775c9714d3e8b5a4e36f743055663be6733edb3f751->enter($__internal_2fc70b0ae3dae438261b9775c9714d3e8b5a4e36f743055663be6733edb3f751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d004b90b0dbd512a44280daf57b4be95401239a70b594e31d798af9a874690d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d004b90b0dbd512a44280daf57b4be95401239a70b594e31d798af9a874690d8->enter($__internal_d004b90b0dbd512a44280daf57b4be95401239a70b594e31d798af9a874690d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2fc70b0ae3dae438261b9775c9714d3e8b5a4e36f743055663be6733edb3f751->leave($__internal_2fc70b0ae3dae438261b9775c9714d3e8b5a4e36f743055663be6733edb3f751_prof);

        
        $__internal_d004b90b0dbd512a44280daf57b4be95401239a70b594e31d798af9a874690d8->leave($__internal_d004b90b0dbd512a44280daf57b4be95401239a70b594e31d798af9a874690d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
