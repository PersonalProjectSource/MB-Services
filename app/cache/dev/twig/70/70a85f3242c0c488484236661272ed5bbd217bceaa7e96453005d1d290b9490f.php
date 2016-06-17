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
        $__internal_e939059bd952274bdc48691ce5a888a88a84819f10b571ceff3ff97aa45460bc = $this->env->getExtension("native_profiler");
        $__internal_e939059bd952274bdc48691ce5a888a88a84819f10b571ceff3ff97aa45460bc->enter($__internal_e939059bd952274bdc48691ce5a888a88a84819f10b571ceff3ff97aa45460bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MBAdminBundle:Widget:User-top-menu.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : $this->getContext($context, "currentUser")), "username", array()), "html", null, true);
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
        
        $__internal_e939059bd952274bdc48691ce5a888a88a84819f10b571ceff3ff97aa45460bc->leave($__internal_e939059bd952274bdc48691ce5a888a88a84819f10b571ceff3ff97aa45460bc_prof);

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
/*             <span class="username">Bonjour {{ currentUser.username }} !</span>*/
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
