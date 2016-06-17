<?php

/* ::base.html.twig */
class __TwigTemplate_cc54885807df2c15b69a32f3dcf6e27d9b86594cccb665de3b26812349a924e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css_design' => array($this, 'block_css_design'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19e04f83af43dbac3e61a8e4d1bebdad62bc4bca6f1f91ab0b8bb0ecbaec6bcf = $this->env->getExtension("native_profiler");
        $__internal_19e04f83af43dbac3e61a8e4d1bebdad62bc4bca6f1f91ab0b8bb0ecbaec6bcf->enter($__internal_19e04f83af43dbac3e61a8e4d1bebdad62bc4bca6f1f91ab0b8bb0ecbaec6bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Mosaddek\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('css_design', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    </head>

    <body class=\"";
        // line 29
        $this->displayBlock('bodyclass', $context, $blocks);
        echo "\">
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
        
        $__internal_19e04f83af43dbac3e61a8e4d1bebdad62bc4bca6f1f91ab0b8bb0ecbaec6bcf->leave($__internal_19e04f83af43dbac3e61a8e4d1bebdad62bc4bca6f1f91ab0b8bb0ecbaec6bcf_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3abd85ca7659dbe73f717259677f7d8306c901b5ee6abbb89490bb98cefd053f = $this->env->getExtension("native_profiler");
        $__internal_3abd85ca7659dbe73f717259677f7d8306c901b5ee6abbb89490bb98cefd053f->enter($__internal_3abd85ca7659dbe73f717259677f7d8306c901b5ee6abbb89490bb98cefd053f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MB-Services, votre partenaire confiance";
        
        $__internal_3abd85ca7659dbe73f717259677f7d8306c901b5ee6abbb89490bb98cefd053f->leave($__internal_3abd85ca7659dbe73f717259677f7d8306c901b5ee6abbb89490bb98cefd053f_prof);

    }

    // line 11
    public function block_css_design($context, array $blocks = array())
    {
        $__internal_01b0ea00e5e05afc8043774636c6ba4a26e0c0d7768681517bd9b759a97ef122 = $this->env->getExtension("native_profiler");
        $__internal_01b0ea00e5e05afc8043774636c6ba4a26e0c0d7768681517bd9b759a97ef122->enter($__internal_01b0ea00e5e05afc8043774636c6ba4a26e0c0d7768681517bd9b759a97ef122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css_design"));

        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src=\"js/html5shiv.js\"></script>
        <script src=\"js/respond.min.js\"></script>
        <![endif]-->
        ";
        
        $__internal_01b0ea00e5e05afc8043774636c6ba4a26e0c0d7768681517bd9b759a97ef122->leave($__internal_01b0ea00e5e05afc8043774636c6ba4a26e0c0d7768681517bd9b759a97ef122_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0ca30652980140629fbe4a25f976339dfdcf0b0558545d206d383e0dfb9a1cd = $this->env->getExtension("native_profiler");
        $__internal_f0ca30652980140629fbe4a25f976339dfdcf0b0558545d206d383e0dfb9a1cd->enter($__internal_f0ca30652980140629fbe4a25f976339dfdcf0b0558545d206d383e0dfb9a1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0ca30652980140629fbe4a25f976339dfdcf0b0558545d206d383e0dfb9a1cd->leave($__internal_f0ca30652980140629fbe4a25f976339dfdcf0b0558545d206d383e0dfb9a1cd_prof);

    }

    // line 29
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_ac16d7bbc855633ddf8424a40fa6f946b05236c0b698000e3cd48df919b58847 = $this->env->getExtension("native_profiler");
        $__internal_ac16d7bbc855633ddf8424a40fa6f946b05236c0b698000e3cd48df919b58847->enter($__internal_ac16d7bbc855633ddf8424a40fa6f946b05236c0b698000e3cd48df919b58847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        
        $__internal_ac16d7bbc855633ddf8424a40fa6f946b05236c0b698000e3cd48df919b58847->leave($__internal_ac16d7bbc855633ddf8424a40fa6f946b05236c0b698000e3cd48df919b58847_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_86d3ff2eaf80d5e5b73a865a8759a610cdab2d753f6c5036cbd8feeb42df13cd = $this->env->getExtension("native_profiler");
        $__internal_86d3ff2eaf80d5e5b73a865a8759a610cdab2d753f6c5036cbd8feeb42df13cd->enter($__internal_86d3ff2eaf80d5e5b73a865a8759a610cdab2d753f6c5036cbd8feeb42df13cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "        ";
        
        $__internal_86d3ff2eaf80d5e5b73a865a8759a610cdab2d753f6c5036cbd8feeb42df13cd->leave($__internal_86d3ff2eaf80d5e5b73a865a8759a610cdab2d753f6c5036cbd8feeb42df13cd_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fe11a20d1663f2c0ae517a2b025e34f6d52882ee9a0b12daf8a3b6d8ca6ba21 = $this->env->getExtension("native_profiler");
        $__internal_0fe11a20d1663f2c0ae517a2b025e34f6d52882ee9a0b12daf8a3b6d8ca6ba21->enter($__internal_0fe11a20d1663f2c0ae517a2b025e34f6d52882ee9a0b12daf8a3b6d8ca6ba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "        ";
        
        $__internal_0fe11a20d1663f2c0ae517a2b025e34f6d52882ee9a0b12daf8a3b6d8ca6ba21->leave($__internal_0fe11a20d1663f2c0ae517a2b025e34f6d52882ee9a0b12daf8a3b6d8ca6ba21_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 33,  160 => 32,  153 => 31,  147 => 30,  136 => 29,  125 => 26,  110 => 18,  105 => 16,  101 => 15,  97 => 14,  93 => 13,  88 => 12,  82 => 11,  70 => 9,  61 => 34,  58 => 32,  56 => 30,  52 => 29,  48 => 27,  45 => 26,  43 => 11,  38 => 9,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="Mosaddek">*/
/* */
/*         <title>{% block title %}MB-Services, votre partenaire confiance{% endblock %}</title>*/
/* */
/*         {% block css_design %}*/
/*         <link href="{{ asset('bundles/mbadmin/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/mbadmin/css/bootstrap-reset.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/mbadmin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/mbadmin/css/style.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/mbadmin/css/style-responsive.css') }}" rel="stylesheet">*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="js/html5shiv.js"></script>*/
/*         <script src="js/respond.min.js"></script>*/
/*         <![endif]-->*/
/*         {% endblock css_design %}*/
/*         {% block stylesheets %}{% endblock stylesheets %}*/
/*     </head>*/
/* */
/*     <body class="{%  block bodyclass %}{% endblock bodyclass %}">*/
/*         {% block body %}*/
/*         {% endblock body %}*/
/*         {% block javascripts %}*/
/*         {% endblock javascripts %}*/
/*     </body>*/
/* </html>*/
/* */
