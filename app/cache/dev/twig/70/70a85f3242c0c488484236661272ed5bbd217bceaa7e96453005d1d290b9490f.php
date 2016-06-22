<?php

/* MBAdminBundle:Widget:User-top-menu.html.twig */
class __TwigTemplate_3b7252da8a4e10ee7fc43264d3e7db3964050001193d4fad6784316423a987a6 extends Twig_Template
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
        $__internal_eca3d346c0c1b1ce6728a1e1ba4196f570ab999d8898d5000ac19fdee746bb4f = $this->env->getExtension("native_profiler");
        $__internal_eca3d346c0c1b1ce6728a1e1ba4196f570ab999d8898d5000ac19fdee746bb4f->enter($__internal_eca3d346c0c1b1ce6728a1e1ba4196f570ab999d8898d5000ac19fdee746bb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MBAdminBundle:Widget:User-top-menu.html.twig"));

        // line 1
        echo "<ul class=\"nav pull-right top-menu\">
    <li>
        <input type=\"text\" class=\"form-control search\" placeholder=\"Search\">
    </li>
    <!-- user login dropdown start-->
    <li class=\"dropdown\">
        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
            <img alt=\"\" src=\"img/avatar1_small.jpg\">
            <span class=\"username\">Bonjour ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo " !</span>
            <b class=\"caret\"></b>
        </a>
        <ul class=\"dropdown-menu extended logout\">
            <div class=\"log-arrow-up\"></div>
            <li><a href=\"#\"><i class=\" fa fa-suitcase\"></i>Profile</a></li>
            <li><a href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a></li>
            <li><a href=\"#\"><i class=\"fa fa-bell-o\"></i> Notification</a></li>
            <li><a href=\"login.html\"><i class=\"fa fa-key\"></i> Log Out</a></li>
        </ul>
    </li>
    <!-- user login dropdown end -->
</ul>";
        
        $__internal_eca3d346c0c1b1ce6728a1e1ba4196f570ab999d8898d5000ac19fdee746bb4f->leave($__internal_eca3d346c0c1b1ce6728a1e1ba4196f570ab999d8898d5000ac19fdee746bb4f_prof);

    }

    public function getTemplateName()
    {
        return "MBAdminBundle:Widget:User-top-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  22 => 1,);
    }
}
/* <ul class="nav pull-right top-menu">*/
/*     <li>*/
/*         <input type="text" class="form-control search" placeholder="Search">*/
/*     </li>*/
/*     <!-- user login dropdown start-->*/
/*     <li class="dropdown">*/
/*         <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*             <img alt="" src="img/avatar1_small.jpg">*/
/*             <span class="username">Bonjour {{ app.user }} !</span>*/
/*             <b class="caret"></b>*/
/*         </a>*/
/*         <ul class="dropdown-menu extended logout">*/
/*             <div class="log-arrow-up"></div>*/
/*             <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>*/
/*             <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>*/
/*             <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>*/
/*             <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>*/
/*         </ul>*/
/*     </li>*/
/*     <!-- user login dropdown end -->*/
/* </ul>*/
