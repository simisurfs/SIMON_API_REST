<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6c6e357704f89989bba1dce39e5cb7e74b4d9b66cab1b93b5e9206d47ae5e49e extends Twig_Template
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
        $__internal_417d63854a9891e03120e19e446d1292b6f850c02ef21b5674add2246a0d6f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417d63854a9891e03120e19e446d1292b6f850c02ef21b5674add2246a0d6f71->enter($__internal_417d63854a9891e03120e19e446d1292b6f850c02ef21b5674add2246a0d6f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_fa3c2365227889a41f2c8f24bf4e06096b8efe09236267846ec6345148c22303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3c2365227889a41f2c8f24bf4e06096b8efe09236267846ec6345148c22303->enter($__internal_fa3c2365227889a41f2c8f24bf4e06096b8efe09236267846ec6345148c22303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_417d63854a9891e03120e19e446d1292b6f850c02ef21b5674add2246a0d6f71->leave($__internal_417d63854a9891e03120e19e446d1292b6f850c02ef21b5674add2246a0d6f71_prof);

        
        $__internal_fa3c2365227889a41f2c8f24bf4e06096b8efe09236267846ec6345148c22303->leave($__internal_fa3c2365227889a41f2c8f24bf4e06096b8efe09236267846ec6345148c22303_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
