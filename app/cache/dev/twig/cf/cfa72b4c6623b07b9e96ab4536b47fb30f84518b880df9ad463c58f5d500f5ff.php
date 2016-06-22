<?php

/* user/show.json.twig */
class __TwigTemplate_9a4ac8a243fb888438aa3b226b62a1942b8a496754c2a466cac76805ab4bcbc2 extends Twig_Template
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
        $__internal_3c5e1a61c32fc763574f4c3be1f32f24bc9a3986ebe50f83fe10d656e4ab6193 = $this->env->getExtension("native_profiler");
        $__internal_3c5e1a61c32fc763574f4c3be1f32f24bc9a3986ebe50f83fe10d656e4ab6193->enter($__internal_3c5e1a61c32fc763574f4c3be1f32f24bc9a3986ebe50f83fe10d656e4ab6193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.json.twig"));

        // line 1
        echo "{
    \"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\":
    {
        \"name\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\",
        \"actif\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled", array()), "html", null, true);
        echo "\"
    }
}
";
        
        $__internal_3c5e1a61c32fc763574f4c3be1f32f24bc9a3986ebe50f83fe10d656e4ab6193->leave($__internal_3c5e1a61c32fc763574f4c3be1f32f24bc9a3986ebe50f83fe10d656e4ab6193_prof);

    }

    public function getTemplateName()
    {
        return "user/show.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* {*/
/*     "{{ user.username }}":*/
/*     {*/
/*         "name": "{{ user.username }}",*/
/*         "actif": "{{ user.enabled }}"*/
/*     }*/
/* }*/
/* */
