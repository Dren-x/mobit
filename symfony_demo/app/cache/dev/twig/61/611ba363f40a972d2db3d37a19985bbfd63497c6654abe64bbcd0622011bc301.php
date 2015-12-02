<?php

/* blog/index.html.twig */
class __TwigTemplate_2fe81c0cfeed7bc30caafa048420402e7b561dc6d6b26a0473cb5a0cb429436b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ffc5fe463a0b979ea2b091704c226f480f4fc54921cdafa989fad437668c974 = $this->env->getExtension("native_profiler");
        $__internal_5ffc5fe463a0b979ea2b091704c226f480f4fc54921cdafa989fad437668c974->enter($__internal_5ffc5fe463a0b979ea2b091704c226f480f4fc54921cdafa989fad437668c974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ffc5fe463a0b979ea2b091704c226f480f4fc54921cdafa989fad437668c974->leave($__internal_5ffc5fe463a0b979ea2b091704c226f480f4fc54921cdafa989fad437668c974_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8c94ad293c5ca3a2f4db66f9601a83d1c16763b7a993a8a516617119aafd0d17 = $this->env->getExtension("native_profiler");
        $__internal_8c94ad293c5ca3a2f4db66f9601a83d1c16763b7a993a8a516617119aafd0d17->enter($__internal_8c94ad293c5ca3a2f4db66f9601a83d1c16763b7a993a8a516617119aafd0d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_8c94ad293c5ca3a2f4db66f9601a83d1c16763b7a993a8a516617119aafd0d17->leave($__internal_8c94ad293c5ca3a2f4db66f9601a83d1c16763b7a993a8a516617119aafd0d17_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_18b92347f619f350a1aab7436b43ad4254c149bb8fe35119de1ca2ac7fbec3f4 = $this->env->getExtension("native_profiler");
        $__internal_18b92347f619f350a1aab7436b43ad4254c149bb8fe35119de1ca2ac7fbec3f4->enter($__internal_18b92347f619f350a1aab7436b43ad4254c149bb8fe35119de1ca2ac7fbec3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 21
        echo $this->env->getExtension('knp_pagination')->render((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "
    </div>
";
        
        $__internal_18b92347f619f350a1aab7436b43ad4254c149bb8fe35119de1ca2ac7fbec3f4->leave($__internal_18b92347f619f350a1aab7436b43ad4254c149bb8fe35119de1ca2ac7fbec3f4_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3d2fdaa5ffa77628f4100364d4a23145c7a27ffe351030addb4346e77c55ecc1 = $this->env->getExtension("native_profiler");
        $__internal_3d2fdaa5ffa77628f4100364d4a23145c7a27ffe351030addb4346e77c55ecc1->enter($__internal_3d2fdaa5ffa77628f4100364d4a23145c7a27ffe351030addb4346e77c55ecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_3d2fdaa5ffa77628f4100364d4a23145c7a27ffe351030addb4346e77c55ecc1->leave($__internal_3d2fdaa5ffa77628f4100364d4a23145c7a27ffe351030addb4346e77c55ecc1_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  112 => 26,  106 => 25,  96 => 21,  92 => 19,  83 => 17,  75 => 14,  68 => 10,  64 => 9,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_index' %}*/
/* */
/* {% block main %}*/
/*     {% for post in posts %}*/
/*         <article class="post">*/
/*             <h2>*/
/*                 <a href="{{ path('blog_post', { slug: post.slug }) }}">*/
/*                     {{ post.title }}*/
/*                 </a>*/
/*             </h2>*/
/* */
/*             {{ post.summary|md2html }}*/
/*         </article>*/
/*     {% else %}*/
/*         <div class="well">{{ 'post.no_posts_found'|trans }}</div>*/
/*     {% endfor %}*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ knp_pagination_render(posts) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
