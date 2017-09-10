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
        $__internal_b04e35487ed08e9319812b05bafa6875b5787bcb57227d3fd312198d304d6ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b04e35487ed08e9319812b05bafa6875b5787bcb57227d3fd312198d304d6ae1->enter($__internal_b04e35487ed08e9319812b05bafa6875b5787bcb57227d3fd312198d304d6ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d9f348c6c398a993aef19102494c0795bae1df81c3927decd57758a583e067f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f348c6c398a993aef19102494c0795bae1df81c3927decd57758a583e067f2->enter($__internal_d9f348c6c398a993aef19102494c0795bae1df81c3927decd57758a583e067f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b04e35487ed08e9319812b05bafa6875b5787bcb57227d3fd312198d304d6ae1->leave($__internal_b04e35487ed08e9319812b05bafa6875b5787bcb57227d3fd312198d304d6ae1_prof);

        
        $__internal_d9f348c6c398a993aef19102494c0795bae1df81c3927decd57758a583e067f2->leave($__internal_d9f348c6c398a993aef19102494c0795bae1df81c3927decd57758a583e067f2_prof);

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
