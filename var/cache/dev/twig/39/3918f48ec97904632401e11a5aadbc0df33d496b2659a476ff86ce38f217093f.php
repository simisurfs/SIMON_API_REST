<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8f7d48fb6aa3abf2ea5b89bb67324c7963374a941702eb291e3227e3cd8890ae extends Twig_Template
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
        $__internal_0527b206eb5320a4c96220635180c905cace687a6f0f1a5d504425ad4ee4fc16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0527b206eb5320a4c96220635180c905cace687a6f0f1a5d504425ad4ee4fc16->enter($__internal_0527b206eb5320a4c96220635180c905cace687a6f0f1a5d504425ad4ee4fc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_34c16e3e7e1e03fc8247dafda71977adad936d529929ba962e955c6cc16ddb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c16e3e7e1e03fc8247dafda71977adad936d529929ba962e955c6cc16ddb67->enter($__internal_34c16e3e7e1e03fc8247dafda71977adad936d529929ba962e955c6cc16ddb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0527b206eb5320a4c96220635180c905cace687a6f0f1a5d504425ad4ee4fc16->leave($__internal_0527b206eb5320a4c96220635180c905cace687a6f0f1a5d504425ad4ee4fc16_prof);

        
        $__internal_34c16e3e7e1e03fc8247dafda71977adad936d529929ba962e955c6cc16ddb67->leave($__internal_34c16e3e7e1e03fc8247dafda71977adad936d529929ba962e955c6cc16ddb67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
