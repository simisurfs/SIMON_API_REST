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
        $__internal_5fe76896e070d69835eb000bd2e6c1bbea1a7199054f7c3af118d07852b7ee0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe76896e070d69835eb000bd2e6c1bbea1a7199054f7c3af118d07852b7ee0d->enter($__internal_5fe76896e070d69835eb000bd2e6c1bbea1a7199054f7c3af118d07852b7ee0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ebb6b8b0a997cc248b1e423191e15e63ae43421051d85f5562c369f96dd8462f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb6b8b0a997cc248b1e423191e15e63ae43421051d85f5562c369f96dd8462f->enter($__internal_ebb6b8b0a997cc248b1e423191e15e63ae43421051d85f5562c369f96dd8462f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5fe76896e070d69835eb000bd2e6c1bbea1a7199054f7c3af118d07852b7ee0d->leave($__internal_5fe76896e070d69835eb000bd2e6c1bbea1a7199054f7c3af118d07852b7ee0d_prof);

        
        $__internal_ebb6b8b0a997cc248b1e423191e15e63ae43421051d85f5562c369f96dd8462f->leave($__internal_ebb6b8b0a997cc248b1e423191e15e63ae43421051d85f5562c369f96dd8462f_prof);

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
