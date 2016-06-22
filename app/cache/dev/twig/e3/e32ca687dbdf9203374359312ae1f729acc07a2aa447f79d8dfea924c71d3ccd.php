<?php

/* user/new.html.twig */
class __TwigTemplate_0aa66505b2f52c7acd11866e565934a4315d0b2b7027d73d07c747db8807f2b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7056ac14bc358ffc24c791baea7a521642df3f18b76ae37c96a80395ee6980d6 = $this->env->getExtension("native_profiler");
        $__internal_7056ac14bc358ffc24c791baea7a521642df3f18b76ae37c96a80395ee6980d6->enter($__internal_7056ac14bc358ffc24c791baea7a521642df3f18b76ae37c96a80395ee6980d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7056ac14bc358ffc24c791baea7a521642df3f18b76ae37c96a80395ee6980d6->leave($__internal_7056ac14bc358ffc24c791baea7a521642df3f18b76ae37c96a80395ee6980d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8abd8a317ddb42065ea3e9344210ccca5d1b607e519745e82913d106ab77829 = $this->env->getExtension("native_profiler");
        $__internal_f8abd8a317ddb42065ea3e9344210ccca5d1b607e519745e82913d106ab77829->enter($__internal_f8abd8a317ddb42065ea3e9344210ccca5d1b607e519745e82913d106ab77829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f8abd8a317ddb42065ea3e9344210ccca5d1b607e519745e82913d106ab77829->leave($__internal_f8abd8a317ddb42065ea3e9344210ccca5d1b607e519745e82913d106ab77829_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
