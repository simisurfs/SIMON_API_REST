<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_435bfcbe0a50cbd7c9a32dcc0c4dda9133306bb879dbaea8338d4a46b2f67d2f extends Twig_Template
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
        $__internal_d980e800af0eec3a9e04a71114f4daecde20e9f3f3bebd4dda66f8b15a2e894e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d980e800af0eec3a9e04a71114f4daecde20e9f3f3bebd4dda66f8b15a2e894e->enter($__internal_d980e800af0eec3a9e04a71114f4daecde20e9f3f3bebd4dda66f8b15a2e894e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_81faa8b82ceb884b4ae83f3fc4cd7bbc7faa32f1678ed772dcf78b91ed80d208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81faa8b82ceb884b4ae83f3fc4cd7bbc7faa32f1678ed772dcf78b91ed80d208->enter($__internal_81faa8b82ceb884b4ae83f3fc4cd7bbc7faa32f1678ed772dcf78b91ed80d208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d980e800af0eec3a9e04a71114f4daecde20e9f3f3bebd4dda66f8b15a2e894e->leave($__internal_d980e800af0eec3a9e04a71114f4daecde20e9f3f3bebd4dda66f8b15a2e894e_prof);

        
        $__internal_81faa8b82ceb884b4ae83f3fc4cd7bbc7faa32f1678ed772dcf78b91ed80d208->leave($__internal_81faa8b82ceb884b4ae83f3fc4cd7bbc7faa32f1678ed772dcf78b91ed80d208_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
