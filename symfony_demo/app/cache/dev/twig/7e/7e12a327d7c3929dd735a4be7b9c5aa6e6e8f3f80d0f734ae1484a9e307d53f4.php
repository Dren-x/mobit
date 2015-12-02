<?php

/* admin/layout.html.twig */
class __TwigTemplate_dc8dbf9a6177c9d6c915daec84533ce03227e928a50f1da4d4fd79d1d7fec1ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 8);
        $this->blocks = array(
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04aec1c09ab1aef047cfd2aeb3f9fbebe8acfdc25a407e5e4f6f905bbc74228f = $this->env->getExtension("native_profiler");
        $__internal_04aec1c09ab1aef047cfd2aeb3f9fbebe8acfdc25a407e5e4f6f905bbc74228f->enter($__internal_04aec1c09ab1aef047cfd2aeb3f9fbebe8acfdc25a407e5e4f6f905bbc74228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04aec1c09ab1aef047cfd2aeb3f9fbebe8acfdc25a407e5e4f6f905bbc74228f->leave($__internal_04aec1c09ab1aef047cfd2aeb3f9fbebe8acfdc25a407e5e4f6f905bbc74228f_prof);

    }

    // line 10
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_f3b8b0c84179f92f20129f465ac39e2d7b0f5d317963976934b5b0762418e704 = $this->env->getExtension("native_profiler");
        $__internal_f3b8b0c84179f92f20129f465ac39e2d7b0f5d317963976934b5b0762418e704->enter($__internal_f3b8b0c84179f92f20129f465ac39e2d7b0f5d317963976934b5b0762418e704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 11
        echo "    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_post_index");
        echo "\">
            <i class=\"fa fa-list-alt\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.post_list"), "html", null, true);
        echo "
        </a>
    </li>
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
            <i class=\"fa fa-home\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.back_to_blog"), "html", null, true);
        echo "
        </a>
    </li>
";
        
        $__internal_f3b8b0c84179f92f20129f465ac39e2d7b0f5d317963976934b5b0762418e704->leave($__internal_f3b8b0c84179f92f20129f465ac39e2d7b0f5d317963976934b5b0762418e704_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  54 => 17,  47 => 13,  43 => 12,  40 => 11,  34 => 10,  11 => 8,);
    }
}
/* {#*/
/*    This is the base template of the all backend pages. Since this layout is similar*/
/*    to the global layout, we inherit from it to just change the contents of some*/
/*    blocks. In practice, backend templates are using a three-level inheritance,*/
/*    showing how powerful, yet easy to use, is Twig's inheritance mechanism.*/
/*    See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts*/
/* #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block header_navigation_links %}*/
/*     <li>*/
/*         <a href="{{ path('admin_post_index') }}">*/
/*             <i class="fa fa-list-alt"></i> {{ 'menu.post_list'|trans }}*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('blog_index') }}">*/
/*             <i class="fa fa-home"></i> {{ 'menu.back_to_blog'|trans }}*/
/*         </a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
