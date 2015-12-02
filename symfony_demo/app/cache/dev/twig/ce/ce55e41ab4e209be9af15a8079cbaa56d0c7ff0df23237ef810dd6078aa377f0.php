<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e284dd1de729dd0e94c3432556092352cc72ce6ac33d64c93f201b1fd3beabac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b5c54913b5f4f7d2b886674bbede830bc259eba58c1f563496e563427a51e5a = $this->env->getExtension("native_profiler");
        $__internal_4b5c54913b5f4f7d2b886674bbede830bc259eba58c1f563496e563427a51e5a->enter($__internal_4b5c54913b5f4f7d2b886674bbede830bc259eba58c1f563496e563427a51e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b5c54913b5f4f7d2b886674bbede830bc259eba58c1f563496e563427a51e5a->leave($__internal_4b5c54913b5f4f7d2b886674bbede830bc259eba58c1f563496e563427a51e5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15b6f83a717c0684daaf938acc852ba759ba9205ce2bac34af4320093ed09089 = $this->env->getExtension("native_profiler");
        $__internal_15b6f83a717c0684daaf938acc852ba759ba9205ce2bac34af4320093ed09089->enter($__internal_15b6f83a717c0684daaf938acc852ba759ba9205ce2bac34af4320093ed09089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_15b6f83a717c0684daaf938acc852ba759ba9205ce2bac34af4320093ed09089->leave($__internal_15b6f83a717c0684daaf938acc852ba759ba9205ce2bac34af4320093ed09089_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50f046c8957b54e35f77bfae586cef587142ae214ae100592573c335b3694bc0 = $this->env->getExtension("native_profiler");
        $__internal_50f046c8957b54e35f77bfae586cef587142ae214ae100592573c335b3694bc0->enter($__internal_50f046c8957b54e35f77bfae586cef587142ae214ae100592573c335b3694bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50f046c8957b54e35f77bfae586cef587142ae214ae100592573c335b3694bc0->leave($__internal_50f046c8957b54e35f77bfae586cef587142ae214ae100592573c335b3694bc0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_37616ffbacc0a19139505c363e803fa99285a5ac238c1a91b830349c7fba39b8 = $this->env->getExtension("native_profiler");
        $__internal_37616ffbacc0a19139505c363e803fa99285a5ac238c1a91b830349c7fba39b8->enter($__internal_37616ffbacc0a19139505c363e803fa99285a5ac238c1a91b830349c7fba39b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_37616ffbacc0a19139505c363e803fa99285a5ac238c1a91b830349c7fba39b8->leave($__internal_37616ffbacc0a19139505c363e803fa99285a5ac238c1a91b830349c7fba39b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
