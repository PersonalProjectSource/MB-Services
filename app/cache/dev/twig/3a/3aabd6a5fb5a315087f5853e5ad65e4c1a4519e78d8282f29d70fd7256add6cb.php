<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_feb6c1916c1f8864cbc46dced8f3873670747353d0f3284eaf894249b5caf7c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_995dc992158b99a44047b82d1f5af8f990da54466234974b3c12361413c1c462 = $this->env->getExtension("native_profiler");
        $__internal_995dc992158b99a44047b82d1f5af8f990da54466234974b3c12361413c1c462->enter($__internal_995dc992158b99a44047b82d1f5af8f990da54466234974b3c12361413c1c462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995dc992158b99a44047b82d1f5af8f990da54466234974b3c12361413c1c462->leave($__internal_995dc992158b99a44047b82d1f5af8f990da54466234974b3c12361413c1c462_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64064011c9efb117d22be17997008325b82f7e4c3f5645db789315e164452c2d = $this->env->getExtension("native_profiler");
        $__internal_64064011c9efb117d22be17997008325b82f7e4c3f5645db789315e164452c2d->enter($__internal_64064011c9efb117d22be17997008325b82f7e4c3f5645db789315e164452c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_64064011c9efb117d22be17997008325b82f7e4c3f5645db789315e164452c2d->leave($__internal_64064011c9efb117d22be17997008325b82f7e4c3f5645db789315e164452c2d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5cb3cf09d753b6d19995e013f4d89387a71add74bf8c9300ed9bac31908445f = $this->env->getExtension("native_profiler");
        $__internal_f5cb3cf09d753b6d19995e013f4d89387a71add74bf8c9300ed9bac31908445f->enter($__internal_f5cb3cf09d753b6d19995e013f4d89387a71add74bf8c9300ed9bac31908445f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5cb3cf09d753b6d19995e013f4d89387a71add74bf8c9300ed9bac31908445f->leave($__internal_f5cb3cf09d753b6d19995e013f4d89387a71add74bf8c9300ed9bac31908445f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd2e33491daad9c8eb31e8c51ddc2591f2a055ef477a7f00f6697ca52d2d5bfd = $this->env->getExtension("native_profiler");
        $__internal_cd2e33491daad9c8eb31e8c51ddc2591f2a055ef477a7f00f6697ca52d2d5bfd->enter($__internal_cd2e33491daad9c8eb31e8c51ddc2591f2a055ef477a7f00f6697ca52d2d5bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cd2e33491daad9c8eb31e8c51ddc2591f2a055ef477a7f00f6697ca52d2d5bfd->leave($__internal_cd2e33491daad9c8eb31e8c51ddc2591f2a055ef477a7f00f6697ca52d2d5bfd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
