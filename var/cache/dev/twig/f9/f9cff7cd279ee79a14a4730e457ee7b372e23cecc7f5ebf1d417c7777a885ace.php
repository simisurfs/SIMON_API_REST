<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_865991aee1503db9c73d526001a6548b55c4f185d3f5c998bbb7533c0f525e46 extends Twig_Template
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
        $__internal_f5663e42f5e14c5771a405c33d91c24089aac460720bfe6c29eb707f15bc54ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5663e42f5e14c5771a405c33d91c24089aac460720bfe6c29eb707f15bc54ad->enter($__internal_f5663e42f5e14c5771a405c33d91c24089aac460720bfe6c29eb707f15bc54ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_84cbc991b1dafd0a3af327f4ec4ad66e88217eb9e0ff91ec190e55fb1efae7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cbc991b1dafd0a3af327f4ec4ad66e88217eb9e0ff91ec190e55fb1efae7cc->enter($__internal_84cbc991b1dafd0a3af327f4ec4ad66e88217eb9e0ff91ec190e55fb1efae7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f5663e42f5e14c5771a405c33d91c24089aac460720bfe6c29eb707f15bc54ad->leave($__internal_f5663e42f5e14c5771a405c33d91c24089aac460720bfe6c29eb707f15bc54ad_prof);

        
        $__internal_84cbc991b1dafd0a3af327f4ec4ad66e88217eb9e0ff91ec190e55fb1efae7cc->leave($__internal_84cbc991b1dafd0a3af327f4ec4ad66e88217eb9e0ff91ec190e55fb1efae7cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
