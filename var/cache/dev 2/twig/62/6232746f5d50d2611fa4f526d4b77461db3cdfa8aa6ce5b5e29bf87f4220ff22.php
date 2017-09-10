<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_337d43315cbda1b2d646d2e70e18d4f8937b5c533fdc33cea09d390f30e26eeb extends Twig_Template
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
        $__internal_618a4cef70a97334ea4dacd4a54582b5357dc8ca8673faa88ab4f147aa8f64cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618a4cef70a97334ea4dacd4a54582b5357dc8ca8673faa88ab4f147aa8f64cb->enter($__internal_618a4cef70a97334ea4dacd4a54582b5357dc8ca8673faa88ab4f147aa8f64cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4645087f6d99d9cb998f3ae17cd089fc583b15a2f59c06c100c9b504fb8af9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4645087f6d99d9cb998f3ae17cd089fc583b15a2f59c06c100c9b504fb8af9ed->enter($__internal_4645087f6d99d9cb998f3ae17cd089fc583b15a2f59c06c100c9b504fb8af9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_618a4cef70a97334ea4dacd4a54582b5357dc8ca8673faa88ab4f147aa8f64cb->leave($__internal_618a4cef70a97334ea4dacd4a54582b5357dc8ca8673faa88ab4f147aa8f64cb_prof);

        
        $__internal_4645087f6d99d9cb998f3ae17cd089fc583b15a2f59c06c100c9b504fb8af9ed->leave($__internal_4645087f6d99d9cb998f3ae17cd089fc583b15a2f59c06c100c9b504fb8af9ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
