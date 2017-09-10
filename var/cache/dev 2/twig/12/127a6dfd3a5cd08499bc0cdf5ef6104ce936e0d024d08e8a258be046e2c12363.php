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
        $__internal_16f8cf77ba48000e69f9ffaa154ebfa67159a50ea402706bf3f2d92b858e465b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f8cf77ba48000e69f9ffaa154ebfa67159a50ea402706bf3f2d92b858e465b->enter($__internal_16f8cf77ba48000e69f9ffaa154ebfa67159a50ea402706bf3f2d92b858e465b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3770d5f4b743de4ecdf7b7970887dbe5c88552077978441612a53c88a011e75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3770d5f4b743de4ecdf7b7970887dbe5c88552077978441612a53c88a011e75c->enter($__internal_3770d5f4b743de4ecdf7b7970887dbe5c88552077978441612a53c88a011e75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_16f8cf77ba48000e69f9ffaa154ebfa67159a50ea402706bf3f2d92b858e465b->leave($__internal_16f8cf77ba48000e69f9ffaa154ebfa67159a50ea402706bf3f2d92b858e465b_prof);

        
        $__internal_3770d5f4b743de4ecdf7b7970887dbe5c88552077978441612a53c88a011e75c->leave($__internal_3770d5f4b743de4ecdf7b7970887dbe5c88552077978441612a53c88a011e75c_prof);

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
