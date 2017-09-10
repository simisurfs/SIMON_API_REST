<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c1e111211c1f4d73625a242df5334e6f03e137f85368deee8f428c1e596a0a18 extends Twig_Template
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
        $__internal_73425a83118bbbf758d7d42fa0afd957234a50c8245e003c7d49043bad43b1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73425a83118bbbf758d7d42fa0afd957234a50c8245e003c7d49043bad43b1fd->enter($__internal_73425a83118bbbf758d7d42fa0afd957234a50c8245e003c7d49043bad43b1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_945285b893b877ffa42b98767ba4a59a65e5779f0d755390be5fc06fc02aa1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945285b893b877ffa42b98767ba4a59a65e5779f0d755390be5fc06fc02aa1b8->enter($__internal_945285b893b877ffa42b98767ba4a59a65e5779f0d755390be5fc06fc02aa1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_73425a83118bbbf758d7d42fa0afd957234a50c8245e003c7d49043bad43b1fd->leave($__internal_73425a83118bbbf758d7d42fa0afd957234a50c8245e003c7d49043bad43b1fd_prof);

        
        $__internal_945285b893b877ffa42b98767ba4a59a65e5779f0d755390be5fc06fc02aa1b8->leave($__internal_945285b893b877ffa42b98767ba4a59a65e5779f0d755390be5fc06fc02aa1b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
