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
        $__internal_272bf67fb3bb4338cdf9ec23a656a11d7bf545339d6b5674ab2a2b1d972039b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272bf67fb3bb4338cdf9ec23a656a11d7bf545339d6b5674ab2a2b1d972039b4->enter($__internal_272bf67fb3bb4338cdf9ec23a656a11d7bf545339d6b5674ab2a2b1d972039b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_be3a8d6aa230309c9a62f2effdb46602a28433be3e23ecce9b2839dc085d766f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3a8d6aa230309c9a62f2effdb46602a28433be3e23ecce9b2839dc085d766f->enter($__internal_be3a8d6aa230309c9a62f2effdb46602a28433be3e23ecce9b2839dc085d766f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_272bf67fb3bb4338cdf9ec23a656a11d7bf545339d6b5674ab2a2b1d972039b4->leave($__internal_272bf67fb3bb4338cdf9ec23a656a11d7bf545339d6b5674ab2a2b1d972039b4_prof);

        
        $__internal_be3a8d6aa230309c9a62f2effdb46602a28433be3e23ecce9b2839dc085d766f->leave($__internal_be3a8d6aa230309c9a62f2effdb46602a28433be3e23ecce9b2839dc085d766f_prof);

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
