<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_496849558183616aa67763a6e3bc98e7f7b69abc31ab27e6f422f14f1cdff969 extends Twig_Template
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
        $__internal_e4b65e512a4349a5a55d486d8eb224d3e6986dd77e080ef9196ec8ea5560a6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b65e512a4349a5a55d486d8eb224d3e6986dd77e080ef9196ec8ea5560a6b1->enter($__internal_e4b65e512a4349a5a55d486d8eb224d3e6986dd77e080ef9196ec8ea5560a6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d8d5fdab3ef352971a6fb4deb09939169ca073ae66b27b53c106ec72f2698035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d5fdab3ef352971a6fb4deb09939169ca073ae66b27b53c106ec72f2698035->enter($__internal_d8d5fdab3ef352971a6fb4deb09939169ca073ae66b27b53c106ec72f2698035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e4b65e512a4349a5a55d486d8eb224d3e6986dd77e080ef9196ec8ea5560a6b1->leave($__internal_e4b65e512a4349a5a55d486d8eb224d3e6986dd77e080ef9196ec8ea5560a6b1_prof);

        
        $__internal_d8d5fdab3ef352971a6fb4deb09939169ca073ae66b27b53c106ec72f2698035->leave($__internal_d8d5fdab3ef352971a6fb4deb09939169ca073ae66b27b53c106ec72f2698035_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
