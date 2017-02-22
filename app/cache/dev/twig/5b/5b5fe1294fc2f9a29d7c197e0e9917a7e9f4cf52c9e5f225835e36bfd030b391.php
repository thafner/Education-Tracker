<?php

/* LessonBundle:Default:index.html.twig */
class __TwigTemplate_619fe45723c851c811ef7044fe05c31399aa6d32dc0a97e9a3e7be9ee13d6e8c extends Twig_Template
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
        $__internal_d97fee2fe18041486c9d9957033f587b635b26ce24594b5022377642d678163b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97fee2fe18041486c9d9957033f587b635b26ce24594b5022377642d678163b->enter($__internal_d97fee2fe18041486c9d9957033f587b635b26ce24594b5022377642d678163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LessonBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d97fee2fe18041486c9d9957033f587b635b26ce24594b5022377642d678163b->leave($__internal_d97fee2fe18041486c9d9957033f587b635b26ce24594b5022377642d678163b_prof);

    }

    public function getTemplateName()
    {
        return "LessonBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "LessonBundle:Default:index.html.twig", "/home/vagrant/sites/EducationTracker/src/LessonBundle/Resources/views/Default/index.html.twig");
    }
}
