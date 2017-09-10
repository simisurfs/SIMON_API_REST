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
        $__internal_082e9a10f47e77e79d04d8e3677667193e6d38e0dba8de88ffe29ae026882997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082e9a10f47e77e79d04d8e3677667193e6d38e0dba8de88ffe29ae026882997->enter($__internal_082e9a10f47e77e79d04d8e3677667193e6d38e0dba8de88ffe29ae026882997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0942b7ec3f7b6736b6ed2ee3afa7fbc1595d3049cc85642052ad9963bee40150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0942b7ec3f7b6736b6ed2ee3afa7fbc1595d3049cc85642052ad9963bee40150->enter($__internal_0942b7ec3f7b6736b6ed2ee3afa7fbc1595d3049cc85642052ad9963bee40150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_082e9a10f47e77e79d04d8e3677667193e6d38e0dba8de88ffe29ae026882997->leave($__internal_082e9a10f47e77e79d04d8e3677667193e6d38e0dba8de88ffe29ae026882997_prof);

        
        $__internal_0942b7ec3f7b6736b6ed2ee3afa7fbc1595d3049cc85642052ad9963bee40150->leave($__internal_0942b7ec3f7b6736b6ed2ee3afa7fbc1595d3049cc85642052ad9963bee40150_prof);

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
