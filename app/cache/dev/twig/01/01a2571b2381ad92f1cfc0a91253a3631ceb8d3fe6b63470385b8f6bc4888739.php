<?php

/* @MBAdmin/Header/main-header.html.twig */
class __TwigTemplate_d5ca2244f6f579a1dbc64feb0473e61d3b6c372ca6d4cfc574079b0ebaa3a846 extends Twig_Template
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
        $__internal_4275bfb611a7ce43480b1baef46f5494eaddd6bccc18f97580d690d851301795 = $this->env->getExtension("native_profiler");
        $__internal_4275bfb611a7ce43480b1baef46f5494eaddd6bccc18f97580d690d851301795->enter($__internal_4275bfb611a7ce43480b1baef46f5494eaddd6bccc18f97580d690d851301795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MBAdmin/Header/main-header.html.twig"));

        // line 1
        echo "<!--header start-->
<header class=\"header white-bg\">
    <div class=\"sidebar-toggle-box\">
        <div data-original-title=\"Toggle Navigation\" data-placement=\"right\" class=\"fa fa-bars tooltips\"></div>
    </div>
    <!--logo start-->
    <a href=\"index.html\" class=\"logo\" >MB<span>Administration</span></a>
    <!--logo end-->
    <div class=\"nav notify-row\" id=\"top_menu\">
        ";
        // line 11
        echo "        ";
        $this->loadTemplate("MBAdminBundle:Widget:Notification.html.twig", "@MBAdmin/Header/main-header.html.twig", 11)->display($context);
        // line 12
        echo "    </div>
    <div class=\"top-nav \">
        ";
        // line 14
        $this->loadTemplate("MBAdminBundle:Widget:User-top-menu.html.twig", "@MBAdmin/Header/main-header.html.twig", 14)->display($context);
        // line 15
        echo "    </div>
</header>
<!--header end-->";
        
        $__internal_4275bfb611a7ce43480b1baef46f5494eaddd6bccc18f97580d690d851301795->leave($__internal_4275bfb611a7ce43480b1baef46f5494eaddd6bccc18f97580d690d851301795_prof);

    }

    public function getTemplateName()
    {
        return "@MBAdmin/Header/main-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  40 => 14,  36 => 12,  33 => 11,  22 => 1,);
    }
}
/* <!--header start-->*/
/* <header class="header white-bg">*/
/*     <div class="sidebar-toggle-box">*/
/*         <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>*/
/*     </div>*/
/*     <!--logo start-->*/
/*     <a href="index.html" class="logo" >MB<span>Administration</span></a>*/
/*     <!--logo end-->*/
/*     <div class="nav notify-row" id="top_menu">*/
/*         {#TODO faire le modele de données pour la gestion des notifications#}*/
/*         {% include "MBAdminBundle:Widget:Notification.html.twig" %}*/
/*     </div>*/
/*     <div class="top-nav ">*/
/*         {% include  "MBAdminBundle:Widget:User-top-menu.html.twig" %}*/
/*     </div>*/
/* </header>*/
/* <!--header end-->*/
