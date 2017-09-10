<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_bf3784e9dca016d5d388dea800b898f5df1be979812e5075978ab2ad2a833b29 extends Twig_Template
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
        $__internal_9894fcc9c81f6a6d0673c4dcb6199439e39253b3b31ada5fb17d99a33af1b9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9894fcc9c81f6a6d0673c4dcb6199439e39253b3b31ada5fb17d99a33af1b9ff->enter($__internal_9894fcc9c81f6a6d0673c4dcb6199439e39253b3b31ada5fb17d99a33af1b9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_4d5fc22051ff52de0b39ec1b0d55bc8d37e559ae0f3e315c631fd368a7e77b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5fc22051ff52de0b39ec1b0d55bc8d37e559ae0f3e315c631fd368a7e77b33->enter($__internal_4d5fc22051ff52de0b39ec1b0d55bc8d37e559ae0f3e315c631fd368a7e77b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9894fcc9c81f6a6d0673c4dcb6199439e39253b3b31ada5fb17d99a33af1b9ff->leave($__internal_9894fcc9c81f6a6d0673c4dcb6199439e39253b3b31ada5fb17d99a33af1b9ff_prof);

        
        $__internal_4d5fc22051ff52de0b39ec1b0d55bc8d37e559ae0f3e315c631fd368a7e77b33->leave($__internal_4d5fc22051ff52de0b39ec1b0d55bc8d37e559ae0f3e315c631fd368a7e77b33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
