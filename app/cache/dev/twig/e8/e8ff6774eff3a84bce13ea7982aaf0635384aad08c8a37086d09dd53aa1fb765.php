<?php

/* ::base.html.twig */
class __TwigTemplate_bee1cf7c7906a0ed8893ae70f011a6880d595d920665852f138bcef2284b0d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5343117b084f3a9aad170215c48b314d4a41cfb553303ca5ec2826749bde226e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5343117b084f3a9aad170215c48b314d4a41cfb553303ca5ec2826749bde226e->enter($__internal_5343117b084f3a9aad170215c48b314d4a41cfb553303ca5ec2826749bde226e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5343117b084f3a9aad170215c48b314d4a41cfb553303ca5ec2826749bde226e->leave($__internal_5343117b084f3a9aad170215c48b314d4a41cfb553303ca5ec2826749bde226e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78ab6f67ed96bb2abb40409592e2c30785586c783fc3238add53b219a5853f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ab6f67ed96bb2abb40409592e2c30785586c783fc3238add53b219a5853f3f->enter($__internal_78ab6f67ed96bb2abb40409592e2c30785586c783fc3238add53b219a5853f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_78ab6f67ed96bb2abb40409592e2c30785586c783fc3238add53b219a5853f3f->leave($__internal_78ab6f67ed96bb2abb40409592e2c30785586c783fc3238add53b219a5853f3f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4fd8e3f173cd79a0a5809f484d32e53f91516acf23ec812589d88ac4bc2724f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd8e3f173cd79a0a5809f484d32e53f91516acf23ec812589d88ac4bc2724f8->enter($__internal_4fd8e3f173cd79a0a5809f484d32e53f91516acf23ec812589d88ac4bc2724f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4fd8e3f173cd79a0a5809f484d32e53f91516acf23ec812589d88ac4bc2724f8->leave($__internal_4fd8e3f173cd79a0a5809f484d32e53f91516acf23ec812589d88ac4bc2724f8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d3771d7bd2cfdf53ac5266873842082636dc8d8c6217070a676f66a4b4d50a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3771d7bd2cfdf53ac5266873842082636dc8d8c6217070a676f66a4b4d50a5->enter($__internal_8d3771d7bd2cfdf53ac5266873842082636dc8d8c6217070a676f66a4b4d50a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8d3771d7bd2cfdf53ac5266873842082636dc8d8c6217070a676f66a4b4d50a5->leave($__internal_8d3771d7bd2cfdf53ac5266873842082636dc8d8c6217070a676f66a4b4d50a5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5fc0e34dbbb1f7660c7482c248d017bca83765634f99feb3f1dbccea1a8d02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fc0e34dbbb1f7660c7482c248d017bca83765634f99feb3f1dbccea1a8d02b->enter($__internal_e5fc0e34dbbb1f7660c7482c248d017bca83765634f99feb3f1dbccea1a8d02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5fc0e34dbbb1f7660c7482c248d017bca83765634f99feb3f1dbccea1a8d02b->leave($__internal_e5fc0e34dbbb1f7660c7482c248d017bca83765634f99feb3f1dbccea1a8d02b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/vagrant/sites/EducationTracker/app/Resources/views/base.html.twig");
    }
}
