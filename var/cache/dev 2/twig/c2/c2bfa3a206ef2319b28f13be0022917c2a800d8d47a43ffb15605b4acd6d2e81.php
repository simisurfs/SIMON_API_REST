<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bb5db68f3064ab9804408d7a5ae9cec35a7924f0f11717ec668da2d6d68b7303 extends Twig_Template
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
        $__internal_c94a4d62faad6fabab33b31c19ebbbff681652d223fe020b1bdd6b03030fd007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c94a4d62faad6fabab33b31c19ebbbff681652d223fe020b1bdd6b03030fd007->enter($__internal_c94a4d62faad6fabab33b31c19ebbbff681652d223fe020b1bdd6b03030fd007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d611c3e9736d87df943a2d4b12c07f6217b31ec18e182080eb4635881a172d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d611c3e9736d87df943a2d4b12c07f6217b31ec18e182080eb4635881a172d5a->enter($__internal_d611c3e9736d87df943a2d4b12c07f6217b31ec18e182080eb4635881a172d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c94a4d62faad6fabab33b31c19ebbbff681652d223fe020b1bdd6b03030fd007->leave($__internal_c94a4d62faad6fabab33b31c19ebbbff681652d223fe020b1bdd6b03030fd007_prof);

        
        $__internal_d611c3e9736d87df943a2d4b12c07f6217b31ec18e182080eb4635881a172d5a->leave($__internal_d611c3e9736d87df943a2d4b12c07f6217b31ec18e182080eb4635881a172d5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
