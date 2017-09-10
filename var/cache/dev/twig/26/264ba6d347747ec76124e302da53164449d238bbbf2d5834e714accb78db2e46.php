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
        $__internal_34a9c8355b6a567d8b8c29a3ea6f9c92bbd6b9cd29bf6e35fd3885ade81569d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a9c8355b6a567d8b8c29a3ea6f9c92bbd6b9cd29bf6e35fd3885ade81569d8->enter($__internal_34a9c8355b6a567d8b8c29a3ea6f9c92bbd6b9cd29bf6e35fd3885ade81569d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a5c67d934ffa8a840cd6ec4757c9690309dee0c0b33dbbdf29c2886c81949353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c67d934ffa8a840cd6ec4757c9690309dee0c0b33dbbdf29c2886c81949353->enter($__internal_a5c67d934ffa8a840cd6ec4757c9690309dee0c0b33dbbdf29c2886c81949353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_34a9c8355b6a567d8b8c29a3ea6f9c92bbd6b9cd29bf6e35fd3885ade81569d8->leave($__internal_34a9c8355b6a567d8b8c29a3ea6f9c92bbd6b9cd29bf6e35fd3885ade81569d8_prof);

        
        $__internal_a5c67d934ffa8a840cd6ec4757c9690309dee0c0b33dbbdf29c2886c81949353->leave($__internal_a5c67d934ffa8a840cd6ec4757c9690309dee0c0b33dbbdf29c2886c81949353_prof);

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
