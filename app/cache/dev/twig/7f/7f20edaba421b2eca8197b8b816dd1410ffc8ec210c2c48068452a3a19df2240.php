<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cc5200cf15cd7b68666b7309486330df8b6f9b83e0c512e142e8a6f90160ad80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6d1e936834b36f6c88896d0483bd1de41e259ebf4a8240275767db529c659fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d1e936834b36f6c88896d0483bd1de41e259ebf4a8240275767db529c659fc->enter($__internal_f6d1e936834b36f6c88896d0483bd1de41e259ebf4a8240275767db529c659fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d1e936834b36f6c88896d0483bd1de41e259ebf4a8240275767db529c659fc->leave($__internal_f6d1e936834b36f6c88896d0483bd1de41e259ebf4a8240275767db529c659fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77ef05ff063a379269756576d8b6a719b4f9f41dbf25c69114b11f3bc2b7f672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ef05ff063a379269756576d8b6a719b4f9f41dbf25c69114b11f3bc2b7f672->enter($__internal_77ef05ff063a379269756576d8b6a719b4f9f41dbf25c69114b11f3bc2b7f672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77ef05ff063a379269756576d8b6a719b4f9f41dbf25c69114b11f3bc2b7f672->leave($__internal_77ef05ff063a379269756576d8b6a719b4f9f41dbf25c69114b11f3bc2b7f672_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fd361b9662c66afa4f056f79fdd3eece99e92c0830e5224fed4b68ea83c3fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd361b9662c66afa4f056f79fdd3eece99e92c0830e5224fed4b68ea83c3fd3->enter($__internal_5fd361b9662c66afa4f056f79fdd3eece99e92c0830e5224fed4b68ea83c3fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5fd361b9662c66afa4f056f79fdd3eece99e92c0830e5224fed4b68ea83c3fd3->leave($__internal_5fd361b9662c66afa4f056f79fdd3eece99e92c0830e5224fed4b68ea83c3fd3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c702996582b3f29c6509116bb96e750a0a94687300d98c3fb426e9ae28092956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c702996582b3f29c6509116bb96e750a0a94687300d98c3fb426e9ae28092956->enter($__internal_c702996582b3f29c6509116bb96e750a0a94687300d98c3fb426e9ae28092956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c702996582b3f29c6509116bb96e750a0a94687300d98c3fb426e9ae28092956->leave($__internal_c702996582b3f29c6509116bb96e750a0a94687300d98c3fb426e9ae28092956_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vagrant/sites/EducationTracker/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
