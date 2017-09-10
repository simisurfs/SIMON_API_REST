<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_92ac0cf6dfb2153287cf4d2a498662ba4a77cabcf08c5f590c3d6576925dc0b1 extends Twig_Template
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
        $__internal_33546c4096d5a3ff8312f0b5c34c74da109107ff858c23d33e958d9ae61d9ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33546c4096d5a3ff8312f0b5c34c74da109107ff858c23d33e958d9ae61d9ef6->enter($__internal_33546c4096d5a3ff8312f0b5c34c74da109107ff858c23d33e958d9ae61d9ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0bc070ca9c327b270388f32d7e683843be022929c76e2bd9b8d2752375fa8ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc070ca9c327b270388f32d7e683843be022929c76e2bd9b8d2752375fa8ec1->enter($__internal_0bc070ca9c327b270388f32d7e683843be022929c76e2bd9b8d2752375fa8ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_33546c4096d5a3ff8312f0b5c34c74da109107ff858c23d33e958d9ae61d9ef6->leave($__internal_33546c4096d5a3ff8312f0b5c34c74da109107ff858c23d33e958d9ae61d9ef6_prof);

        
        $__internal_0bc070ca9c327b270388f32d7e683843be022929c76e2bd9b8d2752375fa8ec1->leave($__internal_0bc070ca9c327b270388f32d7e683843be022929c76e2bd9b8d2752375fa8ec1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
