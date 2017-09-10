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
        $__internal_9d142a8f1ac0ee7d70468dd857402cbd222419f4466db365c0adad6c0b65c35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d142a8f1ac0ee7d70468dd857402cbd222419f4466db365c0adad6c0b65c35a->enter($__internal_9d142a8f1ac0ee7d70468dd857402cbd222419f4466db365c0adad6c0b65c35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a9b01a756fdf4d7a209f47f0a4daf4ee38fe33b841b504ca9146d92ca985df27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b01a756fdf4d7a209f47f0a4daf4ee38fe33b841b504ca9146d92ca985df27->enter($__internal_a9b01a756fdf4d7a209f47f0a4daf4ee38fe33b841b504ca9146d92ca985df27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_9d142a8f1ac0ee7d70468dd857402cbd222419f4466db365c0adad6c0b65c35a->leave($__internal_9d142a8f1ac0ee7d70468dd857402cbd222419f4466db365c0adad6c0b65c35a_prof);

        
        $__internal_a9b01a756fdf4d7a209f47f0a4daf4ee38fe33b841b504ca9146d92ca985df27->leave($__internal_a9b01a756fdf4d7a209f47f0a4daf4ee38fe33b841b504ca9146d92ca985df27_prof);

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
