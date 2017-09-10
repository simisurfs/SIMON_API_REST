<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ea9640fb5f05306766022bb18d5ddd942697e04c9f17e7aa82ba0886e78ad805 extends Twig_Template
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
        $__internal_e43148449d6f4ad4de9f37d4c58b79d21d941518a9f5544d706b3123bcb3cb2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43148449d6f4ad4de9f37d4c58b79d21d941518a9f5544d706b3123bcb3cb2e->enter($__internal_e43148449d6f4ad4de9f37d4c58b79d21d941518a9f5544d706b3123bcb3cb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1d05d8354fca0d87317978a5e676915854f81acaf27e08ebaede57d675646718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d05d8354fca0d87317978a5e676915854f81acaf27e08ebaede57d675646718->enter($__internal_1d05d8354fca0d87317978a5e676915854f81acaf27e08ebaede57d675646718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e43148449d6f4ad4de9f37d4c58b79d21d941518a9f5544d706b3123bcb3cb2e->leave($__internal_e43148449d6f4ad4de9f37d4c58b79d21d941518a9f5544d706b3123bcb3cb2e_prof);

        
        $__internal_1d05d8354fca0d87317978a5e676915854f81acaf27e08ebaede57d675646718->leave($__internal_1d05d8354fca0d87317978a5e676915854f81acaf27e08ebaede57d675646718_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
