<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c3ce4c23537a55221c0684ec813a0d23316e4e89fe05ca70cd99358422d09b58 extends Twig_Template
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
        $__internal_f4aa6572d540e19d64c1503c270a0f0fc1641901a9655652d887d0ac7381c8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4aa6572d540e19d64c1503c270a0f0fc1641901a9655652d887d0ac7381c8b9->enter($__internal_f4aa6572d540e19d64c1503c270a0f0fc1641901a9655652d887d0ac7381c8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ffd7d6f99a2f3ff865abe4dd45a87fb08a8244e31f1ab40f577001cd94fa55bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd7d6f99a2f3ff865abe4dd45a87fb08a8244e31f1ab40f577001cd94fa55bb->enter($__internal_ffd7d6f99a2f3ff865abe4dd45a87fb08a8244e31f1ab40f577001cd94fa55bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f4aa6572d540e19d64c1503c270a0f0fc1641901a9655652d887d0ac7381c8b9->leave($__internal_f4aa6572d540e19d64c1503c270a0f0fc1641901a9655652d887d0ac7381c8b9_prof);

        
        $__internal_ffd7d6f99a2f3ff865abe4dd45a87fb08a8244e31f1ab40f577001cd94fa55bb->leave($__internal_ffd7d6f99a2f3ff865abe4dd45a87fb08a8244e31f1ab40f577001cd94fa55bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
