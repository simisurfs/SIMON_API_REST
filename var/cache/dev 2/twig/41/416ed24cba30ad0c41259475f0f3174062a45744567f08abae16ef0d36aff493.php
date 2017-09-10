<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bf725b35b2dd14c0f0af93aeddbda97549844f555a087d0db6363e83608a1b7f extends Twig_Template
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
        $__internal_d007190a5133847d7b5f61f1910c201137036dba8e195883b7fb4545309f2f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d007190a5133847d7b5f61f1910c201137036dba8e195883b7fb4545309f2f37->enter($__internal_d007190a5133847d7b5f61f1910c201137036dba8e195883b7fb4545309f2f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6d9d17b8bc2457c2c6db88e16927b58bca435ce75e79b69b6046bc752a122ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9d17b8bc2457c2c6db88e16927b58bca435ce75e79b69b6046bc752a122ae5->enter($__internal_6d9d17b8bc2457c2c6db88e16927b58bca435ce75e79b69b6046bc752a122ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d007190a5133847d7b5f61f1910c201137036dba8e195883b7fb4545309f2f37->leave($__internal_d007190a5133847d7b5f61f1910c201137036dba8e195883b7fb4545309f2f37_prof);

        
        $__internal_6d9d17b8bc2457c2c6db88e16927b58bca435ce75e79b69b6046bc752a122ae5->leave($__internal_6d9d17b8bc2457c2c6db88e16927b58bca435ce75e79b69b6046bc752a122ae5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
