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
        $__internal_9177580ea3ee1ea5630cdc471062973afffd9b80e2a7eb4e4f4d91f5d758ada5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9177580ea3ee1ea5630cdc471062973afffd9b80e2a7eb4e4f4d91f5d758ada5->enter($__internal_9177580ea3ee1ea5630cdc471062973afffd9b80e2a7eb4e4f4d91f5d758ada5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8bc694c4e200516a15bed5b976d419c05140ba4af605d6270bbe2b3610a11dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc694c4e200516a15bed5b976d419c05140ba4af605d6270bbe2b3610a11dd0->enter($__internal_8bc694c4e200516a15bed5b976d419c05140ba4af605d6270bbe2b3610a11dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9177580ea3ee1ea5630cdc471062973afffd9b80e2a7eb4e4f4d91f5d758ada5->leave($__internal_9177580ea3ee1ea5630cdc471062973afffd9b80e2a7eb4e4f4d91f5d758ada5_prof);

        
        $__internal_8bc694c4e200516a15bed5b976d419c05140ba4af605d6270bbe2b3610a11dd0->leave($__internal_8bc694c4e200516a15bed5b976d419c05140ba4af605d6270bbe2b3610a11dd0_prof);

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
