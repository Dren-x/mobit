<?php

/* default/homepage.html.twig */
class __TwigTemplate_73430471fae540639e0d5fc8309cc0403c0daffe27bd8c93a85a3e4017b8d0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a15775aedcea83f026e08060c1dd2b71f6493fef90b74329fb969c07869dfb99 = $this->env->getExtension("native_profiler");
        $__internal_a15775aedcea83f026e08060c1dd2b71f6493fef90b74329fb969c07869dfb99->enter($__internal_a15775aedcea83f026e08060c1dd2b71f6493fef90b74329fb969c07869dfb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a15775aedcea83f026e08060c1dd2b71f6493fef90b74329fb969c07869dfb99->leave($__internal_a15775aedcea83f026e08060c1dd2b71f6493fef90b74329fb969c07869dfb99_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fcdf7b67a331ff20338bf6be9fa28907d5ee7d3b193b07ffe3bc8750e03d3a74 = $this->env->getExtension("native_profiler");
        $__internal_fcdf7b67a331ff20338bf6be9fa28907d5ee7d3b193b07ffe3bc8750e03d3a74->enter($__internal_fcdf7b67a331ff20338bf6be9fa28907d5ee7d3b193b07ffe3bc8750e03d3a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_fcdf7b67a331ff20338bf6be9fa28907d5ee7d3b193b07ffe3bc8750e03d3a74->leave($__internal_fcdf7b67a331ff20338bf6be9fa28907d5ee7d3b193b07ffe3bc8750e03d3a74_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_8abd0b04809a739610643cac0cdd34c04d3896bb421911ac7cc1af8371183c1d = $this->env->getExtension("native_profiler");
        $__internal_8abd0b04809a739610643cac0cdd34c04d3896bb421911ac7cc1af8371183c1d->enter($__internal_8abd0b04809a739610643cac0cdd34c04d3896bb421911ac7cc1af8371183c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_8abd0b04809a739610643cac0cdd34c04d3896bb421911ac7cc1af8371183c1d->leave($__internal_8abd0b04809a739610643cac0cdd34c04d3896bb421911ac7cc1af8371183c1d_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b866576286764f2d0947e3d6898997b07505c479de6e7bbf34ab740cc01fc3c0 = $this->env->getExtension("native_profiler");
        $__internal_b866576286764f2d0947e3d6898997b07505c479de6e7bbf34ab740cc01fc3c0->enter($__internal_b866576286764f2d0947e3d6898997b07505c479de6e7bbf34ab740cc01fc3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b866576286764f2d0947e3d6898997b07505c479de6e7bbf34ab740cc01fc3c0->leave($__internal_b866576286764f2d0947e3d6898997b07505c479de6e7bbf34ab740cc01fc3c0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_137a5140c5127ec6278df4635e0ad72445eb8bb8f62c70cda4e80c350b8aa385 = $this->env->getExtension("native_profiler");
        $__internal_137a5140c5127ec6278df4635e0ad72445eb8bb8f62c70cda4e80c350b8aa385->enter($__internal_137a5140c5127ec6278df4635e0ad72445eb8bb8f62c70cda4e80c350b8aa385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_137a5140c5127ec6278df4635e0ad72445eb8bb8f62c70cda4e80c350b8aa385->leave($__internal_137a5140c5127ec6278df4635e0ad72445eb8bb8f62c70cda4e80c350b8aa385_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ 'title.homepage'|trans|raw }}</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_app'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('blog_index') }}">*/
/*                         <i class="fa fa-users"></i> {{ 'action.browse_app'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_admin'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('admin_index') }}">*/
/*                         <i class="fa fa-lock"></i> {{ 'action.browse_admin'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
