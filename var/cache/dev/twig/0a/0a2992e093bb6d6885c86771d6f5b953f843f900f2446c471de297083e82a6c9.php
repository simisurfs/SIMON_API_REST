<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_420f0673552dc4ee22470ef51df53c8ab2bcbe629648118eabce95c0d66167e4 extends Twig_Template
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
        $__internal_0c6229708f9284b6d179d66a45eb4fe5db2b646760568954ed784fbae3fc1e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6229708f9284b6d179d66a45eb4fe5db2b646760568954ed784fbae3fc1e0f->enter($__internal_0c6229708f9284b6d179d66a45eb4fe5db2b646760568954ed784fbae3fc1e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_26213fd473b25e8393d10dce71aa74d8ed8c46b86288ca62dac19a39406fc809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26213fd473b25e8393d10dce71aa74d8ed8c46b86288ca62dac19a39406fc809->enter($__internal_26213fd473b25e8393d10dce71aa74d8ed8c46b86288ca62dac19a39406fc809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0c6229708f9284b6d179d66a45eb4fe5db2b646760568954ed784fbae3fc1e0f->leave($__internal_0c6229708f9284b6d179d66a45eb4fe5db2b646760568954ed784fbae3fc1e0f_prof);

        
        $__internal_26213fd473b25e8393d10dce71aa74d8ed8c46b86288ca62dac19a39406fc809->leave($__internal_26213fd473b25e8393d10dce71aa74d8ed8c46b86288ca62dac19a39406fc809_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
