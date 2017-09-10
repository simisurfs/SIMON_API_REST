<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_49bdfcd0c2febbf04e8055d8fb809b920c8273c6c4545c16ed23b4c428293a1f extends Twig_Template
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
        $__internal_ba636cf1e1a0b0416d7a6b59eb01502b4efc8357814cde4d808018cdb4d79967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba636cf1e1a0b0416d7a6b59eb01502b4efc8357814cde4d808018cdb4d79967->enter($__internal_ba636cf1e1a0b0416d7a6b59eb01502b4efc8357814cde4d808018cdb4d79967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_081cc8dff3413925616df3cf246f41d88f001dc59b8ddd09eec619450471e542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081cc8dff3413925616df3cf246f41d88f001dc59b8ddd09eec619450471e542->enter($__internal_081cc8dff3413925616df3cf246f41d88f001dc59b8ddd09eec619450471e542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ba636cf1e1a0b0416d7a6b59eb01502b4efc8357814cde4d808018cdb4d79967->leave($__internal_ba636cf1e1a0b0416d7a6b59eb01502b4efc8357814cde4d808018cdb4d79967_prof);

        
        $__internal_081cc8dff3413925616df3cf246f41d88f001dc59b8ddd09eec619450471e542->leave($__internal_081cc8dff3413925616df3cf246f41d88f001dc59b8ddd09eec619450471e542_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
