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
        $__internal_9e5014d44a6c03e5d5c676aa0bc04bb9efa910c2b07f627ba74523c1e97fcd05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5014d44a6c03e5d5c676aa0bc04bb9efa910c2b07f627ba74523c1e97fcd05->enter($__internal_9e5014d44a6c03e5d5c676aa0bc04bb9efa910c2b07f627ba74523c1e97fcd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_427653eeb9cf96e958a8251ae4d19d055e1ffcb0ca7f87d91cff888d28918f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427653eeb9cf96e958a8251ae4d19d055e1ffcb0ca7f87d91cff888d28918f51->enter($__internal_427653eeb9cf96e958a8251ae4d19d055e1ffcb0ca7f87d91cff888d28918f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9e5014d44a6c03e5d5c676aa0bc04bb9efa910c2b07f627ba74523c1e97fcd05->leave($__internal_9e5014d44a6c03e5d5c676aa0bc04bb9efa910c2b07f627ba74523c1e97fcd05_prof);

        
        $__internal_427653eeb9cf96e958a8251ae4d19d055e1ffcb0ca7f87d91cff888d28918f51->leave($__internal_427653eeb9cf96e958a8251ae4d19d055e1ffcb0ca7f87d91cff888d28918f51_prof);

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
