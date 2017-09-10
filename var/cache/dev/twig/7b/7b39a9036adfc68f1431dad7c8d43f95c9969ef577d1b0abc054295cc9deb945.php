<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_3a26151ff55c2048062eb342b76ba8b0aee492c014c4dbc310bbbfc984c6015f extends Twig_Template
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
        $__internal_69ec3d7a124cd5a65c9c081887ceb936f509fabcd492e74a018ae66dce50d1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ec3d7a124cd5a65c9c081887ceb936f509fabcd492e74a018ae66dce50d1fd->enter($__internal_69ec3d7a124cd5a65c9c081887ceb936f509fabcd492e74a018ae66dce50d1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_2b4479b513e10c47f4a24a2d049c0f51f2ece6cbb4c6e5d9c9ec3ffe965b72a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4479b513e10c47f4a24a2d049c0f51f2ece6cbb4c6e5d9c9ec3ffe965b72a2->enter($__internal_2b4479b513e10c47f4a24a2d049c0f51f2ece6cbb4c6e5d9c9ec3ffe965b72a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_69ec3d7a124cd5a65c9c081887ceb936f509fabcd492e74a018ae66dce50d1fd->leave($__internal_69ec3d7a124cd5a65c9c081887ceb936f509fabcd492e74a018ae66dce50d1fd_prof);

        
        $__internal_2b4479b513e10c47f4a24a2d049c0f51f2ece6cbb4c6e5d9c9ec3ffe965b72a2->leave($__internal_2b4479b513e10c47f4a24a2d049c0f51f2ece6cbb4c6e5d9c9ec3ffe965b72a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
