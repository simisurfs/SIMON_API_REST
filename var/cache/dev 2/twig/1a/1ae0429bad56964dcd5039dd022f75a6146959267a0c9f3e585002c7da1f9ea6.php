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
        $__internal_a478801cd88132dbbb1af602f5380408d34370934b9cb700a35b0400a09c5e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a478801cd88132dbbb1af602f5380408d34370934b9cb700a35b0400a09c5e5d->enter($__internal_a478801cd88132dbbb1af602f5380408d34370934b9cb700a35b0400a09c5e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3347ea4846d9ff272afd2d9d7688be724d4a7e258385754924b595a1268c1e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3347ea4846d9ff272afd2d9d7688be724d4a7e258385754924b595a1268c1e9e->enter($__internal_3347ea4846d9ff272afd2d9d7688be724d4a7e258385754924b595a1268c1e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_a478801cd88132dbbb1af602f5380408d34370934b9cb700a35b0400a09c5e5d->leave($__internal_a478801cd88132dbbb1af602f5380408d34370934b9cb700a35b0400a09c5e5d_prof);

        
        $__internal_3347ea4846d9ff272afd2d9d7688be724d4a7e258385754924b595a1268c1e9e->leave($__internal_3347ea4846d9ff272afd2d9d7688be724d4a7e258385754924b595a1268c1e9e_prof);

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
