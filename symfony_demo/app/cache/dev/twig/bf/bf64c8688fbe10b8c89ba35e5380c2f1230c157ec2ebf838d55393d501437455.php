<?php

/* form/fields.html.twig */
class __TwigTemplate_6e250c9441f3da16da6fbfd2698186215870e2b0988c3e82d5bb44b760247cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'app_datetimepicker_widget' => array($this, 'block_app_datetimepicker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9c6f199a6337d61590e4885d7f32402ab24550b59df5de0a8f38f05784c1e1e = $this->env->getExtension("native_profiler");
        $__internal_a9c6f199a6337d61590e4885d7f32402ab24550b59df5de0a8f38f05784c1e1e->enter($__internal_a9c6f199a6337d61590e4885d7f32402ab24550b59df5de0a8f38f05784c1e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 7
        echo "
";
        // line 8
        $this->displayBlock('app_datetimepicker_widget', $context, $blocks);
        
        $__internal_a9c6f199a6337d61590e4885d7f32402ab24550b59df5de0a8f38f05784c1e1e->leave($__internal_a9c6f199a6337d61590e4885d7f32402ab24550b59df5de0a8f38f05784c1e1e_prof);

    }

    public function block_app_datetimepicker_widget($context, array $blocks = array())
    {
        $__internal_d246a70315abf7436abb0f6f3490aa0f0f8f06b55f1267a4273f96806f617250 = $this->env->getExtension("native_profiler");
        $__internal_d246a70315abf7436abb0f6f3490aa0f0f8f06b55f1267a4273f96806f617250->enter($__internal_d246a70315abf7436abb0f6f3490aa0f0f8f06b55f1267a4273f96806f617250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_datetimepicker_widget"));

        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 11
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d246a70315abf7436abb0f6f3490aa0f0f8f06b55f1267a4273f96806f617250->leave($__internal_d246a70315abf7436abb0f6f3490aa0f0f8f06b55f1267a4273f96806f617250_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  41 => 10,  38 => 9,  26 => 8,  23 => 7,);
    }
}
/* {#*/
/*    Each field type is rendered by a template fragment, which is determined*/
/*    by the value of your getName() method and the suffix _widget.*/
/* */
/*    See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field*/
/* #}*/
/* */
/* {% block app_datetimepicker_widget %}*/
/*     {% spaceless %}*/
/*         <div class="input-group date" data-toggle="datetimepicker">*/
/*             {{ block('datetime_widget') }}*/
/*             <span class="input-group-addon">*/
/*                 <span class="fa fa-calendar"></span>*/
/*             </span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
