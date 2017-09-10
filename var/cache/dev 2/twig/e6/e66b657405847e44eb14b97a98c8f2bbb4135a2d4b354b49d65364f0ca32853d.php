<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b90a944b063e32603ed2e6361a8f6a4b155f935470208a51bd4fa099a6fbbfad extends Twig_Template
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
        $__internal_67621bafe8a496e78a2b596e0998c992d79653968e374bc02f54efe420c89d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67621bafe8a496e78a2b596e0998c992d79653968e374bc02f54efe420c89d28->enter($__internal_67621bafe8a496e78a2b596e0998c992d79653968e374bc02f54efe420c89d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b6b0f0f6f4b67a48cd7f7d81c090d87ddaafffe238154357a4f6805157cd1ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b0f0f6f4b67a48cd7f7d81c090d87ddaafffe238154357a4f6805157cd1ae2->enter($__internal_b6b0f0f6f4b67a48cd7f7d81c090d87ddaafffe238154357a4f6805157cd1ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_67621bafe8a496e78a2b596e0998c992d79653968e374bc02f54efe420c89d28->leave($__internal_67621bafe8a496e78a2b596e0998c992d79653968e374bc02f54efe420c89d28_prof);

        
        $__internal_b6b0f0f6f4b67a48cd7f7d81c090d87ddaafffe238154357a4f6805157cd1ae2->leave($__internal_b6b0f0f6f4b67a48cd7f7d81c090d87ddaafffe238154357a4f6805157cd1ae2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
