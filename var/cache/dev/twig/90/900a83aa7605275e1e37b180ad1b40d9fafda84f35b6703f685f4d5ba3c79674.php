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
        $__internal_b25701375b58d5f0cbc6ebd2d6318a3e150bcc570b593a3580ef0430f79644ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25701375b58d5f0cbc6ebd2d6318a3e150bcc570b593a3580ef0430f79644ae->enter($__internal_b25701375b58d5f0cbc6ebd2d6318a3e150bcc570b593a3580ef0430f79644ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8306b742b638a5e41dcd7266776b9d29bdd0057423c26e7ae224318239656f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8306b742b638a5e41dcd7266776b9d29bdd0057423c26e7ae224318239656f83->enter($__internal_8306b742b638a5e41dcd7266776b9d29bdd0057423c26e7ae224318239656f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b25701375b58d5f0cbc6ebd2d6318a3e150bcc570b593a3580ef0430f79644ae->leave($__internal_b25701375b58d5f0cbc6ebd2d6318a3e150bcc570b593a3580ef0430f79644ae_prof);

        
        $__internal_8306b742b638a5e41dcd7266776b9d29bdd0057423c26e7ae224318239656f83->leave($__internal_8306b742b638a5e41dcd7266776b9d29bdd0057423c26e7ae224318239656f83_prof);

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
