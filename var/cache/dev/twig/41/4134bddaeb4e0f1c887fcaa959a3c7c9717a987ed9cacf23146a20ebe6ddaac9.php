<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4a1f555c8f529ba194f0f288a2ce59127836e421d4e7ca05f1da5049c229909c extends Twig_Template
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
        $__internal_643df2f6c857ec3a48c5ce092645852da119f93b5e83d9d3eea7475297ed1789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643df2f6c857ec3a48c5ce092645852da119f93b5e83d9d3eea7475297ed1789->enter($__internal_643df2f6c857ec3a48c5ce092645852da119f93b5e83d9d3eea7475297ed1789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_407e0d4d06fae430f741f1364dbe4c7c7fa146b5e20bf0566a3ecaa6a1c4675f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407e0d4d06fae430f741f1364dbe4c7c7fa146b5e20bf0566a3ecaa6a1c4675f->enter($__internal_407e0d4d06fae430f741f1364dbe4c7c7fa146b5e20bf0566a3ecaa6a1c4675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_643df2f6c857ec3a48c5ce092645852da119f93b5e83d9d3eea7475297ed1789->leave($__internal_643df2f6c857ec3a48c5ce092645852da119f93b5e83d9d3eea7475297ed1789_prof);

        
        $__internal_407e0d4d06fae430f741f1364dbe4c7c7fa146b5e20bf0566a3ecaa6a1c4675f->leave($__internal_407e0d4d06fae430f741f1364dbe4c7c7fa146b5e20bf0566a3ecaa6a1c4675f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
