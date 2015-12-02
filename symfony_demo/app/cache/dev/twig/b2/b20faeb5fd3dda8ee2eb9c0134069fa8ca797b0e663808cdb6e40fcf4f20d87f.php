<?php

/* admin/blog/edit.html.twig */
class __TwigTemplate_8399205e14dccfd86c1e79872d216dfe7f091d8d2cda5052c697d22cbe6959ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/edit.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02bf49ced0efb968d56f515c60ac105b14f747c35dff694c843c1dfa58d3d686 = $this->env->getExtension("native_profiler");
        $__internal_02bf49ced0efb968d56f515c60ac105b14f747c35dff694c843c1dfa58d3d686->enter($__internal_02bf49ced0efb968d56f515c60ac105b14f747c35dff694c843c1dfa58d3d686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02bf49ced0efb968d56f515c60ac105b14f747c35dff694c843c1dfa58d3d686->leave($__internal_02bf49ced0efb968d56f515c60ac105b14f747c35dff694c843c1dfa58d3d686_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_45602d77c3290dd30dca637d45e70d8ea0a5bbab79a76d8c568cfb5adbc4613e = $this->env->getExtension("native_profiler");
        $__internal_45602d77c3290dd30dca637d45e70d8ea0a5bbab79a76d8c568cfb5adbc4613e->enter($__internal_45602d77c3290dd30dca637d45e70d8ea0a5bbab79a76d8c568cfb5adbc4613e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_edit";
        
        $__internal_45602d77c3290dd30dca637d45e70d8ea0a5bbab79a76d8c568cfb5adbc4613e->leave($__internal_45602d77c3290dd30dca637d45e70d8ea0a5bbab79a76d8c568cfb5adbc4613e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_4f18d361b8a118b3e80e2021f19d2e3c46538cdf58be146aa3a0e4d54728819b = $this->env->getExtension("native_profiler");
        $__internal_4f18d361b8a118b3e80e2021f19d2e3c46538cdf58be146aa3a0e4d54728819b->enter($__internal_4f18d361b8a118b3e80e2021f19d2e3c46538cdf58be146aa3a0e4d54728819b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit_post", array("%id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

    ";
        // line 10
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 11
(isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "button_label" => $this->env->getExtension('translator')->trans("action.save"), "include_back_to_home_link" => true), false);
        // line 14
        echo "
";
        
        $__internal_4f18d361b8a118b3e80e2021f19d2e3c46538cdf58be146aa3a0e4d54728819b->leave($__internal_4f18d361b8a118b3e80e2021f19d2e3c46538cdf58be146aa3a0e4d54728819b_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4df86025040d9dd33d88b52eff3e106d49302ac58ca74501345e9af2fea2b0cf = $this->env->getExtension("native_profiler");
        $__internal_4df86025040d9dd33d88b52eff3e106d49302ac58ca74501345e9af2fea2b0cf->enter($__internal_4df86025040d9dd33d88b52eff3e106d49302ac58ca74501345e9af2fea2b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "    <div class=\"section actions\">
        ";
        // line 19
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 20
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "button_label" => $this->env->getExtension('translator')->trans("action.delete_post"), "button_css" => "btn btn-lg btn-block btn-danger", "show_confirmation" => true), false);
        // line 24
        echo "
    </div>

    ";
        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 29
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_4df86025040d9dd33d88b52eff3e106d49302ac58ca74501345e9af2fea2b0cf->leave($__internal_4df86025040d9dd33d88b52eff3e106d49302ac58ca74501345e9af2fea2b0cf_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  93 => 27,  88 => 24,  86 => 20,  85 => 19,  82 => 18,  76 => 17,  68 => 14,  66 => 11,  65 => 10,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_edit' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ 'title.edit_post'|trans({'%id%': post.id}) }}</h1>*/
/* */
/*     {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*     {{ include('admin/blog/_form.html.twig', {*/
/*         form: edit_form,*/
/*         button_label: 'action.save'|trans,*/
/*         include_back_to_home_link: true,*/
/*     }, with_context = false) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="section actions">*/
/*         {{ include('admin/blog/_form.html.twig', {*/
/*             form: delete_form,*/
/*             button_label: 'action.delete_post'|trans,*/
/*             button_css: 'btn btn-lg btn-block btn-danger',*/
/*             show_confirmation: true,*/
/*         }, with_context = false) }}*/
/*     </div>*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
