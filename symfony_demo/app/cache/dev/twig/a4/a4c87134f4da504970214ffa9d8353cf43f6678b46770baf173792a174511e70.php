<?php

/* blog/_delete_post_confirmation.html.twig */
class __TwigTemplate_c11d1984a9fdd4c411e2d8307f44aa0981d92859f679ce00e321fe52572e47df extends Twig_Template
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
        $__internal_e2a74c70c795b4cce776aa27a0202ec1489b33cfea4163d5a59a23a4f3a0ed1d = $this->env->getExtension("native_profiler");
        $__internal_e2a74c70c795b4cce776aa27a0202ec1489b33cfea4163d5a59a23a4f3a0ed1d->enter($__internal_e2a74c70c795b4cce776aa27a0202ec1489b33cfea4163d5a59a23a4f3a0ed1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_delete_post_confirmation.html.twig"));

        // line 2
        echo "<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_post_modal.title"), "html", null, true);
        echo "</h4>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_post_modal.body"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"btnNo\" data-dismiss=\"modal\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cancel"), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnYes\" data-dismiss=\"modal\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.delete_post"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_e2a74c70c795b4cce776aa27a0202ec1489b33cfea4163d5a59a23a4f3a0ed1d->leave($__internal_e2a74c70c795b4cce776aa27a0202ec1489b33cfea4163d5a59a23a4f3a0ed1d_prof);

    }

    public function getTemplateName()
    {
        return "blog/_delete_post_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  39 => 11,  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {# Bootstrap modal, see http://getbootstrap.com/javascript/#modals #}*/
/* <div class="modal fade" id="confirmationModal" tabindex="-1">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-body">*/
/*                 <h4>{{ 'delete_post_modal.title'|trans }}</h4>*/
/*                 <p>{{ 'delete_post_modal.body'|trans }}</p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default" id="btnNo" data-dismiss="modal">*/
/*                     {{ 'label.cancel'|trans }}*/
/*                 </button>*/
/*                 <button type="button" class="btn btn-danger" id="btnYes" data-dismiss="modal">*/
/*                     {{ 'label.delete_post'|trans }}*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
