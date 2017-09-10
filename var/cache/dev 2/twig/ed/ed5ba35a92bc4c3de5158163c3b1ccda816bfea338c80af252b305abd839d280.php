<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9c4f9bbd47b2c166eb56df1ed2eeedea6531253a1a4446b1e376545b0b7035c4 extends Twig_Template
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
        $__internal_fbfb928764c3d0612253a02c24fed14ebc460d39d9c5e841be73e6d76ccc9110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbfb928764c3d0612253a02c24fed14ebc460d39d9c5e841be73e6d76ccc9110->enter($__internal_fbfb928764c3d0612253a02c24fed14ebc460d39d9c5e841be73e6d76ccc9110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5cf2262c22fe31d9dd91ba2a5f0badd6a24d4a86621206770c939809ff37fa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf2262c22fe31d9dd91ba2a5f0badd6a24d4a86621206770c939809ff37fa1d->enter($__internal_5cf2262c22fe31d9dd91ba2a5f0badd6a24d4a86621206770c939809ff37fa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fbfb928764c3d0612253a02c24fed14ebc460d39d9c5e841be73e6d76ccc9110->leave($__internal_fbfb928764c3d0612253a02c24fed14ebc460d39d9c5e841be73e6d76ccc9110_prof);

        
        $__internal_5cf2262c22fe31d9dd91ba2a5f0badd6a24d4a86621206770c939809ff37fa1d->leave($__internal_5cf2262c22fe31d9dd91ba2a5f0badd6a24d4a86621206770c939809ff37fa1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
