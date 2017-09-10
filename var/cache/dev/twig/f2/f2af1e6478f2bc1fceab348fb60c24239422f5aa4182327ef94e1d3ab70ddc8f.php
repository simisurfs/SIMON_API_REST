<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2578ed193af9fed9fbcf1176610fdb57da0630b51c7dbe67c11d718427952ae9 extends Twig_Template
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
        $__internal_d0f0f198e39e2ae23e8c34315b40e7c7e1994efef8bf3422f044c31923ddd0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f0f198e39e2ae23e8c34315b40e7c7e1994efef8bf3422f044c31923ddd0c6->enter($__internal_d0f0f198e39e2ae23e8c34315b40e7c7e1994efef8bf3422f044c31923ddd0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_06b5fe299f46522b8e40aee1ebd9898388b1280c8c145a4ce00da2cc0eb149fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b5fe299f46522b8e40aee1ebd9898388b1280c8c145a4ce00da2cc0eb149fb->enter($__internal_06b5fe299f46522b8e40aee1ebd9898388b1280c8c145a4ce00da2cc0eb149fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d0f0f198e39e2ae23e8c34315b40e7c7e1994efef8bf3422f044c31923ddd0c6->leave($__internal_d0f0f198e39e2ae23e8c34315b40e7c7e1994efef8bf3422f044c31923ddd0c6_prof);

        
        $__internal_06b5fe299f46522b8e40aee1ebd9898388b1280c8c145a4ce00da2cc0eb149fb->leave($__internal_06b5fe299f46522b8e40aee1ebd9898388b1280c8c145a4ce00da2cc0eb149fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/simonmasliah/Desktop/SIMON_API_REST/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
