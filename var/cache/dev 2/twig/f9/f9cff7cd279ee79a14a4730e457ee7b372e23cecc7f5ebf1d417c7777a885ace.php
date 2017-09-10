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
        $__internal_ecc7eda6b97b91b531ff9c6b579bc0d14964c1de4b1c041eb20f0368ca698fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc7eda6b97b91b531ff9c6b579bc0d14964c1de4b1c041eb20f0368ca698fb0->enter($__internal_ecc7eda6b97b91b531ff9c6b579bc0d14964c1de4b1c041eb20f0368ca698fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e3bad9407c2c689cb2da9eb6400a503c0b38ff0cfa04ada8086107ab5f953cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bad9407c2c689cb2da9eb6400a503c0b38ff0cfa04ada8086107ab5f953cf1->enter($__internal_e3bad9407c2c689cb2da9eb6400a503c0b38ff0cfa04ada8086107ab5f953cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ecc7eda6b97b91b531ff9c6b579bc0d14964c1de4b1c041eb20f0368ca698fb0->leave($__internal_ecc7eda6b97b91b531ff9c6b579bc0d14964c1de4b1c041eb20f0368ca698fb0_prof);

        
        $__internal_e3bad9407c2c689cb2da9eb6400a503c0b38ff0cfa04ada8086107ab5f953cf1->leave($__internal_e3bad9407c2c689cb2da9eb6400a503c0b38ff0cfa04ada8086107ab5f953cf1_prof);

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
