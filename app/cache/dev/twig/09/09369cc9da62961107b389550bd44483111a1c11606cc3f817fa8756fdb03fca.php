<?php

/* user/show.html.twig */
class __TwigTemplate_705d33a93d865fd5100521c3e122d5da3095c87e7075cdc6cb22d814afe34e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_3ce8a48381784c7c155b333870b86fd596aeee8c93c260da0757da0d265177e5 = $this->env->getExtension("native_profiler");
        $__internal_3ce8a48381784c7c155b333870b86fd596aeee8c93c260da0757da0d265177e5->enter($__internal_3ce8a48381784c7c155b333870b86fd596aeee8c93c260da0757da0d265177e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ce8a48381784c7c155b333870b86fd596aeee8c93c260da0757da0d265177e5->leave($__internal_3ce8a48381784c7c155b333870b86fd596aeee8c93c260da0757da0d265177e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_61cbd2934b552ddc0060db595c4cbfde05f967fe5e06aa58bcc5d884c1582226 = $this->env->getExtension("native_profiler");
        $__internal_61cbd2934b552ddc0060db595c4cbfde05f967fe5e06aa58bcc5d884c1582226->enter($__internal_61cbd2934b552ddc0060db595c4cbfde05f967fe5e06aa58bcc5d884c1582226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

";
        
        $__internal_61cbd2934b552ddc0060db595c4cbfde05f967fe5e06aa58bcc5d884c1582226->leave($__internal_61cbd2934b552ddc0060db595c4cbfde05f967fe5e06aa58bcc5d884c1582226_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ user.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': user.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
