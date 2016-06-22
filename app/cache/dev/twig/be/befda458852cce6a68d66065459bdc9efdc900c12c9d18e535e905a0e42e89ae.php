<?php

/* demandedevis/new.html.twig */
class __TwigTemplate_894006d9364fa01c9f7dfc25c89cf147066327d0fa41a5d1deaabc45b69feeba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "demandedevis/new.html.twig", 1);
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
        $__internal_8344563ba96d9b2d585138020de73ca7be054483605c422066b58155d97c837f = $this->env->getExtension("native_profiler");
        $__internal_8344563ba96d9b2d585138020de73ca7be054483605c422066b58155d97c837f->enter($__internal_8344563ba96d9b2d585138020de73ca7be054483605c422066b58155d97c837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandedevis/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8344563ba96d9b2d585138020de73ca7be054483605c422066b58155d97c837f->leave($__internal_8344563ba96d9b2d585138020de73ca7be054483605c422066b58155d97c837f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c17c57ca2703066006928bc7fae9026e7451c05a3cc07aa9515f2bdc7c108cf4 = $this->env->getExtension("native_profiler");
        $__internal_c17c57ca2703066006928bc7fae9026e7451c05a3cc07aa9515f2bdc7c108cf4->enter($__internal_c17c57ca2703066006928bc7fae9026e7451c05a3cc07aa9515f2bdc7c108cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>DemandeDevis creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("demandedevis_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c17c57ca2703066006928bc7fae9026e7451c05a3cc07aa9515f2bdc7c108cf4->leave($__internal_c17c57ca2703066006928bc7fae9026e7451c05a3cc07aa9515f2bdc7c108cf4_prof);

    }

    public function getTemplateName()
    {
        return "demandedevis/new.html.twig";
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
/*     <h1>DemandeDevis creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('demandedevis_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
