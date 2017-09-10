<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fc374cdc6e640560f50810e4172b4a3620c2f0cd8942ab5ad9239f0781a95cfb extends Twig_Template
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
        $__internal_e265e467bd2bdddb4578a84f54b9e35a61b1b8e01750f9f422b8944ac207b53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e265e467bd2bdddb4578a84f54b9e35a61b1b8e01750f9f422b8944ac207b53b->enter($__internal_e265e467bd2bdddb4578a84f54b9e35a61b1b8e01750f9f422b8944ac207b53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5401b021fdb75e35b02baf73b855f0ec3c8d92938048716f66f04c89b412beb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5401b021fdb75e35b02baf73b855f0ec3c8d92938048716f66f04c89b412beb7->enter($__internal_5401b021fdb75e35b02baf73b855f0ec3c8d92938048716f66f04c89b412beb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e265e467bd2bdddb4578a84f54b9e35a61b1b8e01750f9f422b8944ac207b53b->leave($__internal_e265e467bd2bdddb4578a84f54b9e35a61b1b8e01750f9f422b8944ac207b53b_prof);

        
        $__internal_5401b021fdb75e35b02baf73b855f0ec3c8d92938048716f66f04c89b412beb7->leave($__internal_5401b021fdb75e35b02baf73b855f0ec3c8d92938048716f66f04c89b412beb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
