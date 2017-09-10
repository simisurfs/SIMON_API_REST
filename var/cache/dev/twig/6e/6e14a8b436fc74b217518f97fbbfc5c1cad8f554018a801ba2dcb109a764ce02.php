<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c40fdbc93aae4cc6d043c09c7ca83926d8c49b964a65bb6df236f383e7891b92 extends Twig_Template
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
        $__internal_52fcab257b0aaa9491bc046143bfaed3387896244cce2a916d63d8da78c30379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fcab257b0aaa9491bc046143bfaed3387896244cce2a916d63d8da78c30379->enter($__internal_52fcab257b0aaa9491bc046143bfaed3387896244cce2a916d63d8da78c30379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_1653236a2b4a1c5c70ef55148aa4c19777f409d7adaf7128d6306ef04ac017f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1653236a2b4a1c5c70ef55148aa4c19777f409d7adaf7128d6306ef04ac017f2->enter($__internal_1653236a2b4a1c5c70ef55148aa4c19777f409d7adaf7128d6306ef04ac017f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_52fcab257b0aaa9491bc046143bfaed3387896244cce2a916d63d8da78c30379->leave($__internal_52fcab257b0aaa9491bc046143bfaed3387896244cce2a916d63d8da78c30379_prof);

        
        $__internal_1653236a2b4a1c5c70ef55148aa4c19777f409d7adaf7128d6306ef04ac017f2->leave($__internal_1653236a2b4a1c5c70ef55148aa4c19777f409d7adaf7128d6306ef04ac017f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
