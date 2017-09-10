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
        $__internal_2b438ab48cd7f250c53bc812e3b2779cf2290cd581ea35b423447b30de733971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b438ab48cd7f250c53bc812e3b2779cf2290cd581ea35b423447b30de733971->enter($__internal_2b438ab48cd7f250c53bc812e3b2779cf2290cd581ea35b423447b30de733971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c750654112c27fb253ef496ea1d793502e41a4d11b29a168defe579ad00fd3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c750654112c27fb253ef496ea1d793502e41a4d11b29a168defe579ad00fd3f7->enter($__internal_c750654112c27fb253ef496ea1d793502e41a4d11b29a168defe579ad00fd3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2b438ab48cd7f250c53bc812e3b2779cf2290cd581ea35b423447b30de733971->leave($__internal_2b438ab48cd7f250c53bc812e3b2779cf2290cd581ea35b423447b30de733971_prof);

        
        $__internal_c750654112c27fb253ef496ea1d793502e41a4d11b29a168defe579ad00fd3f7->leave($__internal_c750654112c27fb253ef496ea1d793502e41a4d11b29a168defe579ad00fd3f7_prof);

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
