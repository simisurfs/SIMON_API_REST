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
        $__internal_1d51c5be0056a3ae85f6799953b3f4344633bd6682ccf90d6ec0f16f90f3823a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d51c5be0056a3ae85f6799953b3f4344633bd6682ccf90d6ec0f16f90f3823a->enter($__internal_1d51c5be0056a3ae85f6799953b3f4344633bd6682ccf90d6ec0f16f90f3823a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_40bac7738424ad60e56753264e480ffd0e57cd1188f2803ae49ede176035f8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bac7738424ad60e56753264e480ffd0e57cd1188f2803ae49ede176035f8cf->enter($__internal_40bac7738424ad60e56753264e480ffd0e57cd1188f2803ae49ede176035f8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1d51c5be0056a3ae85f6799953b3f4344633bd6682ccf90d6ec0f16f90f3823a->leave($__internal_1d51c5be0056a3ae85f6799953b3f4344633bd6682ccf90d6ec0f16f90f3823a_prof);

        
        $__internal_40bac7738424ad60e56753264e480ffd0e57cd1188f2803ae49ede176035f8cf->leave($__internal_40bac7738424ad60e56753264e480ffd0e57cd1188f2803ae49ede176035f8cf_prof);

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
