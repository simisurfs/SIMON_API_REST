<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_95d08e7a92be59cfe132b82ca3d8d3b6de8c81794bc673762adde715631fe9ce extends Twig_Template
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
        $__internal_a7fe7bd0c8bccf7d72ac19bc28ce33f0981421eed3b51f82353ae53a64c6f7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fe7bd0c8bccf7d72ac19bc28ce33f0981421eed3b51f82353ae53a64c6f7af->enter($__internal_a7fe7bd0c8bccf7d72ac19bc28ce33f0981421eed3b51f82353ae53a64c6f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_cc4bd9a05025772fd30b7f7a48b761bd79b1312733eae6193d4552d02a7f0048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4bd9a05025772fd30b7f7a48b761bd79b1312733eae6193d4552d02a7f0048->enter($__internal_cc4bd9a05025772fd30b7f7a48b761bd79b1312733eae6193d4552d02a7f0048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a7fe7bd0c8bccf7d72ac19bc28ce33f0981421eed3b51f82353ae53a64c6f7af->leave($__internal_a7fe7bd0c8bccf7d72ac19bc28ce33f0981421eed3b51f82353ae53a64c6f7af_prof);

        
        $__internal_cc4bd9a05025772fd30b7f7a48b761bd79b1312733eae6193d4552d02a7f0048->leave($__internal_cc4bd9a05025772fd30b7f7a48b761bd79b1312733eae6193d4552d02a7f0048_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
