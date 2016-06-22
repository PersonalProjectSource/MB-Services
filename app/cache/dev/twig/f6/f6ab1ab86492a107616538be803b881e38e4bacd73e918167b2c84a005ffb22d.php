<?php

/* MBAdminBundle:Security:login.html.twig */
class __TwigTemplate_b3b96093e21e58119564b184f45ad984835a047675a3e19aef8e71ccd38db8b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MBAdminBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c6580dfc64175a91ea9999bf67adb6c9c7258a2bfcb02f7db1c1a9209672ac1 = $this->env->getExtension("native_profiler");
        $__internal_2c6580dfc64175a91ea9999bf67adb6c9c7258a2bfcb02f7db1c1a9209672ac1->enter($__internal_2c6580dfc64175a91ea9999bf67adb6c9c7258a2bfcb02f7db1c1a9209672ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MBAdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c6580dfc64175a91ea9999bf67adb6c9c7258a2bfcb02f7db1c1a9209672ac1->leave($__internal_2c6580dfc64175a91ea9999bf67adb6c9c7258a2bfcb02f7db1c1a9209672ac1_prof);

    }

    // line 2
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_5e8ab17b5baf05bd0fcef02890fb81b5be471bdc274ef45584eb7bb539c70f78 = $this->env->getExtension("native_profiler");
        $__internal_5e8ab17b5baf05bd0fcef02890fb81b5be471bdc274ef45584eb7bb539c70f78->enter($__internal_5e8ab17b5baf05bd0fcef02890fb81b5be471bdc274ef45584eb7bb539c70f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        echo "login-body";
        
        $__internal_5e8ab17b5baf05bd0fcef02890fb81b5be471bdc274ef45584eb7bb539c70f78->leave($__internal_5e8ab17b5baf05bd0fcef02890fb81b5be471bdc274ef45584eb7bb539c70f78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c0c0c119c429f5b798a989a7731c80c10337a2b761917c8effb36ec457ad46 = $this->env->getExtension("native_profiler");
        $__internal_23c0c0c119c429f5b798a989a7731c80c10337a2b761917c8effb36ec457ad46->enter($__internal_23c0c0c119c429f5b798a989a7731c80c10337a2b761917c8effb36ec457ad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <form class=\"form-signin\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <h2 class=\"form-signin-heading\">Espace administrateur</h2>
        <div class=\"login-wrap\">
            <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"E-mail\" autofocus>
            <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\">
            <label class=\"checkbox\">
                <input type=\"checkbox\" value=\"remember-me\"> Se souvenir de moi
                <span class=\"pull-right\">
                    <a data-toggle=\"modal\" href=\"#myModal\"> Mot de passe oublié ?</a>

                </span>
            </label>
            <button class=\"btn btn-lg btn-login btn-block\" name=\"_submit\" type=\"submit\">Connecter</button>
            <p>ou connextez-vous avec les réseaux sociaux</p>
            <div class=\"login-social-link\">
                <a href=\"index.html\" class=\"facebook\">
                    <i class=\"fa fa-facebook\"></i>
                    Facebook
                </a>
                <a href=\"index.html\" class=\"twitter\">
                    <i class=\"fa fa-twitter\"></i>
                    Twitter
                </a>
            </div>
            <div class=\"registration\">
                Vous n'avez pas de comptes ?
                <a class=\"\" href=\"registration.html\">
                    Créer votre compte
                </a>
            </div>
        </div>

        <!-- Modal -->
        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Forgot Password ?</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type=\"text\" name=\"email\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">

                    </div>
                    <div class=\"modal-footer\">
                        <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                        <button class=\"btn btn-success\" type=\"button\">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
    </form>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src=\"js/jquery.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
";
        
        $__internal_23c0c0c119c429f5b798a989a7731c80c10337a2b761917c8effb36ec457ad46->leave($__internal_23c0c0c119c429f5b798a989a7731c80c10337a2b761917c8effb36ec457ad46_prof);

    }

    public function getTemplateName()
    {
        return "MBAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {%  block bodyclass %}login-body{% endblock bodyclass %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <form class="form-signin" action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*         <h2 class="form-signin-heading">Espace administrateur</h2>*/
/*         <div class="login-wrap">*/
/*             <input type="text" name="_username" class="form-control" placeholder="E-mail" autofocus>*/
/*             <input type="password" name="_password" class="form-control" placeholder="Mot de passe">*/
/*             <label class="checkbox">*/
/*                 <input type="checkbox" value="remember-me"> Se souvenir de moi*/
/*                 <span class="pull-right">*/
/*                     <a data-toggle="modal" href="#myModal"> Mot de passe oublié ?</a>*/
/* */
/*                 </span>*/
/*             </label>*/
/*             <button class="btn btn-lg btn-login btn-block" name="_submit" type="submit">Connecter</button>*/
/*             <p>ou connextez-vous avec les réseaux sociaux</p>*/
/*             <div class="login-social-link">*/
/*                 <a href="index.html" class="facebook">*/
/*                     <i class="fa fa-facebook"></i>*/
/*                     Facebook*/
/*                 </a>*/
/*                 <a href="index.html" class="twitter">*/
/*                     <i class="fa fa-twitter"></i>*/
/*                     Twitter*/
/*                 </a>*/
/*             </div>*/
/*             <div class="registration">*/
/*                 Vous n'avez pas de comptes ?*/
/*                 <a class="" href="registration.html">*/
/*                     Créer votre compte*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Modal -->*/
/*         <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title">Forgot Password ?</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <p>Enter your e-mail address below to reset your password.</p>*/
/*                         <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">*/
/* */
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>*/
/*                         <button class="btn btn-success" type="button">Submit</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- modal -->*/
/*     </form>*/
/* </div>*/
/* */
/* <!-- js placed at the end of the document so the pages load faster -->*/
/* <script src="js/jquery.js"></script>*/
/* <script src="js/bootstrap.min.js"></script>*/
/* {% endblock body %}*/
