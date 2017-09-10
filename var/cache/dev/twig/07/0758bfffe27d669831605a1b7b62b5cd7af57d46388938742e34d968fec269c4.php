<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_95d08e7a92be59cfe132b82ca3d8d3b6de8c81794bc673762adde715631fe9ce extends Twig_Template
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
        $__internal_2dbe726a92b05150f764fc6294d1be8662cc64b8ec59d3be2e26bfc55f5794c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dbe726a92b05150f764fc6294d1be8662cc64b8ec59d3be2e26bfc55f5794c9->enter($__internal_2dbe726a92b05150f764fc6294d1be8662cc64b8ec59d3be2e26bfc55f5794c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a772184fc727956f48235cde9671790c371612ffbf9801c2152388e8cb7f0526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a772184fc727956f48235cde9671790c371612ffbf9801c2152388e8cb7f0526->enter($__internal_a772184fc727956f48235cde9671790c371612ffbf9801c2152388e8cb7f0526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2dbe726a92b05150f764fc6294d1be8662cc64b8ec59d3be2e26bfc55f5794c9->leave($__internal_2dbe726a92b05150f764fc6294d1be8662cc64b8ec59d3be2e26bfc55f5794c9_prof);

        
        $__internal_a772184fc727956f48235cde9671790c371612ffbf9801c2152388e8cb7f0526->leave($__internal_a772184fc727956f48235cde9671790c371612ffbf9801c2152388e8cb7f0526_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
