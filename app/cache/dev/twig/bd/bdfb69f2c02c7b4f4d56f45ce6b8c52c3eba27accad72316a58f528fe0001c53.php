<?php

/* @MBAdmin/Menu/left-menu.html.twig */
class __TwigTemplate_fec78920b2f293aec8701b55d66ea944d67ff4ed2bd370979a5c8828e612c47a extends Twig_Template
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
        $__internal_5de3e260d99117f04329987c1ab7e88ffbac9737abd737244caef97cc8ed8da9 = $this->env->getExtension("native_profiler");
        $__internal_5de3e260d99117f04329987c1ab7e88ffbac9737abd737244caef97cc8ed8da9->enter($__internal_5de3e260d99117f04329987c1ab7e88ffbac9737abd737244caef97cc8ed8da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MBAdmin/Menu/left-menu.html.twig"));

        // line 1
        echo "<!--sidebar start-->
<aside>
    <div id=\"sidebar\"  class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("mb_admin_homepage");
        echo "\">
                    <i class=\"fa fa-dashboard\"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">
                    <i class=\"fa fa-dashboard\"></i>
                    <span>Gestion des utilisateurs</span>
                </a>
            </li>
            <li>
                <a href=\"index.html\">
                    <i class=\"fa fa-dashboard\"></i>
                    <span>Gestion des devis</span>
                </a>
            </li>
            <li>
                <a href=\"index.html\">
                    <i class=\"fa fa-dashboard\"></i>
                    <span>Gestion des prestations</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                    <i class=\"fa fa-dashboard\"></i>
                    <span>Déconnexion</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->";
        
        $__internal_5de3e260d99117f04329987c1ab7e88ffbac9737abd737244caef97cc8ed8da9->leave($__internal_5de3e260d99117f04329987c1ab7e88ffbac9737abd737244caef97cc8ed8da9_prof);

    }

    public function getTemplateName()
    {
        return "@MBAdmin/Menu/left-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  39 => 13,  30 => 7,  22 => 1,);
    }
}
/* <!--sidebar start-->*/
/* <aside>*/
/*     <div id="sidebar"  class="nav-collapse ">*/
/*         <!-- sidebar menu start-->*/
/*         <ul class="sidebar-menu" id="nav-accordion">*/
/*             <li>*/
/*                 <a href="{{ path('mb_admin_homepage') }}">*/
/*                     <i class="fa fa-dashboard"></i>*/
/*                     <span>Dashboard</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('user_index') }}">*/
/*                     <i class="fa fa-dashboard"></i>*/
/*                     <span>Gestion des utilisateurs</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="index.html">*/
/*                     <i class="fa fa-dashboard"></i>*/
/*                     <span>Gestion des devis</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="index.html">*/
/*                     <i class="fa fa-dashboard"></i>*/
/*                     <span>Gestion des prestations</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     <i class="fa fa-dashboard"></i>*/
/*                     <span>Déconnexion</span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*         <!-- sidebar menu end-->*/
/*     </div>*/
/* </aside>*/
/* <!--sidebar end-->*/
