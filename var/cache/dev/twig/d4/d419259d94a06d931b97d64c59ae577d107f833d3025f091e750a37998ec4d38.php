<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d8ba664e98967e62c1a21ae5d8080fa2ec1d8cc8845aa3eb41f37b483aca00f3 extends Twig_Template
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
        $__internal_363780e8103a35949d8070ec6d783806350542e4d4f9fcf2e04075e6dc04273d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363780e8103a35949d8070ec6d783806350542e4d4f9fcf2e04075e6dc04273d->enter($__internal_363780e8103a35949d8070ec6d783806350542e4d4f9fcf2e04075e6dc04273d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_16ee5c83cc2ff471c7d7e0c3e85377580dcb187b655fd283a27b7757b61c2afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ee5c83cc2ff471c7d7e0c3e85377580dcb187b655fd283a27b7757b61c2afb->enter($__internal_16ee5c83cc2ff471c7d7e0c3e85377580dcb187b655fd283a27b7757b61c2afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_363780e8103a35949d8070ec6d783806350542e4d4f9fcf2e04075e6dc04273d->leave($__internal_363780e8103a35949d8070ec6d783806350542e4d4f9fcf2e04075e6dc04273d_prof);

        
        $__internal_16ee5c83cc2ff471c7d7e0c3e85377580dcb187b655fd283a27b7757b61c2afb->leave($__internal_16ee5c83cc2ff471c7d7e0c3e85377580dcb187b655fd283a27b7757b61c2afb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
