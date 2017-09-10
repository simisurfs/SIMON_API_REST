<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c1cfa929f37d7dccfb2dd25a33fc02cef1a207ae018345921a620301f0db1aa5 extends Twig_Template
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
        $__internal_c611e4dfe500de1ce8daa37099f5e1d20b4c4c70e83ccee6cb486877e6bc640e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c611e4dfe500de1ce8daa37099f5e1d20b4c4c70e83ccee6cb486877e6bc640e->enter($__internal_c611e4dfe500de1ce8daa37099f5e1d20b4c4c70e83ccee6cb486877e6bc640e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f2b1d136533c0b33349eae2b8825c19e20f254eeb9c61bd9c2732a5e58cf641a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b1d136533c0b33349eae2b8825c19e20f254eeb9c61bd9c2732a5e58cf641a->enter($__internal_f2b1d136533c0b33349eae2b8825c19e20f254eeb9c61bd9c2732a5e58cf641a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c611e4dfe500de1ce8daa37099f5e1d20b4c4c70e83ccee6cb486877e6bc640e->leave($__internal_c611e4dfe500de1ce8daa37099f5e1d20b4c4c70e83ccee6cb486877e6bc640e_prof);

        
        $__internal_f2b1d136533c0b33349eae2b8825c19e20f254eeb9c61bd9c2732a5e58cf641a->leave($__internal_f2b1d136533c0b33349eae2b8825c19e20f254eeb9c61bd9c2732a5e58cf641a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
