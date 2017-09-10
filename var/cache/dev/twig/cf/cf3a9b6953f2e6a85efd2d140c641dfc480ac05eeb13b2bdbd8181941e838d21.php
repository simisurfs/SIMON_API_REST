<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3c3dbc0a723e4961bdf33e17da65675dd1d4283cb1c4e40a4fe9a0e2476a32c2 extends Twig_Template
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
        $__internal_1c2dede7852585e3aa081933c525ab88a30265540d84a6f4280f00a3df82815d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2dede7852585e3aa081933c525ab88a30265540d84a6f4280f00a3df82815d->enter($__internal_1c2dede7852585e3aa081933c525ab88a30265540d84a6f4280f00a3df82815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e9c46bba0bdec2487b9cf8ab8caeacac90c93c15f9724eff1282a4abdc9f9e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c46bba0bdec2487b9cf8ab8caeacac90c93c15f9724eff1282a4abdc9f9e6e->enter($__internal_e9c46bba0bdec2487b9cf8ab8caeacac90c93c15f9724eff1282a4abdc9f9e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1c2dede7852585e3aa081933c525ab88a30265540d84a6f4280f00a3df82815d->leave($__internal_1c2dede7852585e3aa081933c525ab88a30265540d84a6f4280f00a3df82815d_prof);

        
        $__internal_e9c46bba0bdec2487b9cf8ab8caeacac90c93c15f9724eff1282a4abdc9f9e6e->leave($__internal_e9c46bba0bdec2487b9cf8ab8caeacac90c93c15f9724eff1282a4abdc9f9e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
