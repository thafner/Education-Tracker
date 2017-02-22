<?php

/* LessonBundle:Lesson:list_lesson.html.twig */
class __TwigTemplate_c484cfc7ea967c27b3c834eb11de4bee9374595bd446804a2b71bf3b99a176ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LessonBundle:Lesson:list_lesson.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71a41e641a05b5b6ca893f477825c744ab13ff5035b609105cbead963b054eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a41e641a05b5b6ca893f477825c744ab13ff5035b609105cbead963b054eb9->enter($__internal_71a41e641a05b5b6ca893f477825c744ab13ff5035b609105cbead963b054eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LessonBundle:Lesson:list_lesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a41e641a05b5b6ca893f477825c744ab13ff5035b609105cbead963b054eb9->leave($__internal_71a41e641a05b5b6ca893f477825c744ab13ff5035b609105cbead963b054eb9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d631b869cb5f47a5ca03cabd6436433cf2619e7538f82e1207230fe029c84361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d631b869cb5f47a5ca03cabd6436433cf2619e7538f82e1207230fe029c84361->enter($__internal_d631b869cb5f47a5ca03cabd6436433cf2619e7538f82e1207230fe029c84361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LessonBundle:Lesson:listLesson";
        
        $__internal_d631b869cb5f47a5ca03cabd6436433cf2619e7538f82e1207230fe029c84361->leave($__internal_d631b869cb5f47a5ca03cabd6436433cf2619e7538f82e1207230fe029c84361_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fea93148ebaf07138cd88f4d892318efbf8e75792b87da14e4b75a3964595a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea93148ebaf07138cd88f4d892318efbf8e75792b87da14e4b75a3964595a78->enter($__internal_fea93148ebaf07138cd88f4d892318efbf8e75792b87da14e4b75a3964595a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Lesson:listLesson page</h1>
";
        
        $__internal_fea93148ebaf07138cd88f4d892318efbf8e75792b87da14e4b75a3964595a78->leave($__internal_fea93148ebaf07138cd88f4d892318efbf8e75792b87da14e4b75a3964595a78_prof);

    }

    public function getTemplateName()
    {
        return "LessonBundle:Lesson:list_lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}LessonBundle:Lesson:listLesson{% endblock %}

{% block body %}
<h1>Welcome to the Lesson:listLesson page</h1>
{% endblock %}
", "LessonBundle:Lesson:list_lesson.html.twig", "/home/vagrant/sites/EducationTracker/src/LessonBundle/Resources/views/Lesson/list_lesson.html.twig");
    }
}
