<?php

/* admin/blog/_form.html.twig */
class __TwigTemplate_f396f8b469c6719e30ccbcb1d83edddc0e0ef44fe055c337a19dd7f140a3a69a extends Twig_Template
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
        $__internal_6f0b834eea55486d559dff255ead822d51a66fae46062323b3159d6118e4b4c8 = $this->env->getExtension("native_profiler");
        $__internal_6f0b834eea55486d559dff255ead822d51a66fae46062323b3159d6118e4b4c8->enter($__internal_6f0b834eea55486d559dff255ead822d51a66fae46062323b3159d6118e4b4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_form.html.twig"));

        // line 8
        echo "
";
        // line 9
        if (((array_key_exists("show_confirmation", $context)) ? (_twig_default_filter((isset($context["show_confirmation"]) ? $context["show_confirmation"] : $this->getContext($context, "show_confirmation")), false)) : (false))) {
            // line 10
            echo "    ";
            $context["attr"] = array("data-confirmation" => "true");
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array())) : (array()))));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) ? $context["button_label"] : $this->getContext($context, "button_label")), $this->env->getExtension('translator')->trans("label.create_post"))) : ($this->env->getExtension('translator')->trans("label.create_post"))), "html", null, true);
        echo "\"
           class=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("button_css", $context)) ? (_twig_default_filter((isset($context["button_css"]) ? $context["button_css"] : $this->getContext($context, "button_css")), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
        echo "\" />

    ";
        // line 20
        if (((array_key_exists("include_back_to_home_link", $context)) ? (_twig_default_filter((isset($context["include_back_to_home_link"]) ? $context["include_back_to_home_link"] : $this->getContext($context, "include_back_to_home_link")), false)) : (false))) {
            // line 21
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\" class=\"btn btn-link\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back_to_list"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6f0b834eea55486d559dff255ead822d51a66fae46062323b3159d6118e4b4c8->leave($__internal_6f0b834eea55486d559dff255ead822d51a66fae46062323b3159d6118e4b4c8_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  64 => 22,  59 => 21,  57 => 20,  52 => 18,  48 => 17,  43 => 15,  39 => 14,  36 => 13,  30 => 11,  27 => 10,  25 => 9,  22 => 8,);
    }
}
/* {#*/
/*     By default, forms enable client-side validation. This means that you can't*/
/*     test the server-side validation errors from the browser. To temporarily*/
/*     disable this validation, add the 'novalidate' attribute:*/
/* */
/*     {{ form_start(form, { attr: { novalidate: 'novalidate' } }) }}*/
/* #}*/
/* */
/* {% if show_confirmation|default(false) %}*/
/*     {% set attr = {'data-confirmation': 'true'} %}*/
/*     {{ include('blog/_delete_post_confirmation.html.twig') }}*/
/* {% endif %}*/
/* */
/* {{ form_start(form, { attr: attr|default({}) }) }}*/
/*     {{ form_widget(form) }}*/
/* */
/*     <input type="submit" value="{{ button_label|default('label.create_post'|trans) }}"*/
/*            class="{{ button_css|default("btn btn-primary") }}" />*/
/* */
/*     {% if include_back_to_home_link|default(false) %}*/
/*         <a href="{{ path('admin_post_index') }}" class="btn btn-link">*/
/*             {{ 'action.back_to_list'|trans }}*/
/*         </a>*/
/*     {% endif %}*/
/* {{ form_end(form) }}*/
/* */
