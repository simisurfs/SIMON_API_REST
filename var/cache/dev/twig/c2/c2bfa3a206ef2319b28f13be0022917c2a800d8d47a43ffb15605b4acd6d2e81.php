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
        $__internal_10493e671aca66ea2dd9b5728bd01ede795cc5a0bfddc69db84244000a0b9b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10493e671aca66ea2dd9b5728bd01ede795cc5a0bfddc69db84244000a0b9b3e->enter($__internal_10493e671aca66ea2dd9b5728bd01ede795cc5a0bfddc69db84244000a0b9b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ba61b296ded4410641affbbc6eb50d8d4404a772e1cca4f4267fd07a6e4a4c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba61b296ded4410641affbbc6eb50d8d4404a772e1cca4f4267fd07a6e4a4c0a->enter($__internal_ba61b296ded4410641affbbc6eb50d8d4404a772e1cca4f4267fd07a6e4a4c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_10493e671aca66ea2dd9b5728bd01ede795cc5a0bfddc69db84244000a0b9b3e->leave($__internal_10493e671aca66ea2dd9b5728bd01ede795cc5a0bfddc69db84244000a0b9b3e_prof);

        
        $__internal_ba61b296ded4410641affbbc6eb50d8d4404a772e1cca4f4267fd07a6e4a4c0a->leave($__internal_ba61b296ded4410641affbbc6eb50d8d4404a772e1cca4f4267fd07a6e4a4c0a_prof);

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
