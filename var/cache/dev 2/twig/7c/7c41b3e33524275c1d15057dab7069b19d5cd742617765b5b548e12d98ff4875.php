<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bfe7d68b42e536dcd81fe9d16145c70df1956bd91b92205d5bdb3700d9cfcf40 extends Twig_Template
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
        $__internal_f4e12536dc0afc48fb8e8d5b67c1e9fc6e317c3230de15f24b1979fcba4a4a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e12536dc0afc48fb8e8d5b67c1e9fc6e317c3230de15f24b1979fcba4a4a73->enter($__internal_f4e12536dc0afc48fb8e8d5b67c1e9fc6e317c3230de15f24b1979fcba4a4a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_92a052aae7ed651f49bf973eaf54fc0f5c7f5c0b66fae024ae29492f3521b7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a052aae7ed651f49bf973eaf54fc0f5c7f5c0b66fae024ae29492f3521b7f4->enter($__internal_92a052aae7ed651f49bf973eaf54fc0f5c7f5c0b66fae024ae29492f3521b7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f4e12536dc0afc48fb8e8d5b67c1e9fc6e317c3230de15f24b1979fcba4a4a73->leave($__internal_f4e12536dc0afc48fb8e8d5b67c1e9fc6e317c3230de15f24b1979fcba4a4a73_prof);

        
        $__internal_92a052aae7ed651f49bf973eaf54fc0f5c7f5c0b66fae024ae29492f3521b7f4->leave($__internal_92a052aae7ed651f49bf973eaf54fc0f5c7f5c0b66fae024ae29492f3521b7f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
