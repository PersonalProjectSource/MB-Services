<?php

/* MBMBServicesBundle:Default:index.html.twig */
class __TwigTemplate_9a98ab150be45ddb489ad6aea30fecae6ca5438b67a7f9024436e23227ba129c extends Twig_Template
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
        $__internal_01aae7b488c8a863d063c82fec26d0afc2cedce8ac756dd4ef5403116a2b8ef2 = $this->env->getExtension("native_profiler");
        $__internal_01aae7b488c8a863d063c82fec26d0afc2cedce8ac756dd4ef5403116a2b8ef2->enter($__internal_01aae7b488c8a863d063c82fec26d0afc2cedce8ac756dd4ef5403116a2b8ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MBMBServicesBundle:Default:index.html.twig"));

        // line 1
        echo "<!doctype html>


<html lang=\"en\" class=\"no-js\">
<head>
    <title>MB-Services</title>

    <meta charset=\"utf-8\">

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/css/jquery.bxslider.css"), "html", null, true);
        echo "\" media=\"screen\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/css/font-awesome.css"), "html", null, true);
        echo "\" media=\"screen\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/css/magnific-popup.css"), "html", null, true);
        echo "\" media=\"screen\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/css/animate.css"), "html", null, true);
        echo "\" media=\"screen\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/css/settings.css"), "html", null, true);
        echo "\" media=\"screen\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/css/style.css"), "html", null, true);
        echo "\" media=\"screen\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\">
</head>
<body>

<!-- Container -->
<div id=\"container\">

    ";
        // line 31
        $this->loadTemplate("@MBMBServices/Menu/main_left_menu.html.twig", "MBMBServicesBundle:Default:index.html.twig", 31)->display($context);
        // line 32
        echo "
    <!-- content
        ================================================== -->
    <div id=\"content\">
        <div class=\"inner-content\">
            <div class=\"top-line\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-8\">
                            <ul class=\"info-list\">
                                <li>
                                    <p><i class=\"fa fa-phone\"></i>Appelez-nous<span>06 76 47 42 72</span></p>
                                </li>
                                <li>
                                    <p><i class=\"fa fa-clock-o\"></i>Horaires <span>08:00 - 20:00</span></p>
                                </li>
                                <li>
                                    <p><i class=\"fa fa-envelope\"></i>Ecrivez-nous <span>laurent.brau@gmail.com</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-sm-4\">
                            <ul class=\"social-icons\">
                                <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a class=\"rss\" href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                                <li><a class=\"google\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                <li><a class=\"linkedin\" href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("mb_admin_login");
        echo "\"><img style=\"width:40px\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/admin.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- home-section
                ================================================== -->
            <section id=\"home-section\" class=\"slider1\">
                <!--
                #################################
                    - THEMEPUNCH BANNER -
                #################################
                -->
                <div class=\"tp-banner-container\">
                    <div class=\"tp-banner\" >
                        <ul>\t<!-- SLIDE  -->
                            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"500\" data-saveperformance=\"on\"  data-title=\"Intro Slide\">
                                <!-- MAIN IMAGE -->
                                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/camion1.jpg"), "html", null, true);
        echo "\"  alt=\"slidebg1\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/camion1.jpg"), "html", null, true);
        echo "\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class=\"tp-caption lft tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"200\"
                                     data-y=\"190\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"left-top corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class=\"tp-caption lfb tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"200\"
                                     data-y=\"330\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"left-bottom corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class=\"tp-caption lft tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"900\"
                                     data-y=\"190\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"right-top corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class=\"tp-caption lfb tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"900\"
                                     data-y=\"330\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"right-bottom corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class=\"tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"320\"
                                     data-y=\"270\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1200\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\">Déménager n'est jamais<br>facile
                                </div>

                            </li>

                            <!-- SLIDE  -->
                            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"2000\" data-saveperformance=\"on\"  data-title=\"Ken Burns Slide\">
                                <!-- MAIN IMAGE -->
                                <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/camion2.jpg"), "html", null, true);
        echo "\"  alt=\"2\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/camion3.jpg"), "html", null, true);
        echo "\" data-bgposition=\"right top\" data-kenburns=\"on\" data-duration=\"12000\" data-ease=\"Power0.easeInOut\" data-bgfit=\"115\" data-bgfitend=\"100\" data-bgpositionend=\"center bottom\">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class=\"tp-caption lft tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"200\"
                                     data-y=\"190\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"left-top corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class=\"tp-caption lfb tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"200\"
                                     data-y=\"330\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"left-bottom corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class=\"tp-caption lft tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"900\"
                                     data-y=\"190\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"right-top corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class=\"tp-caption lfb tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"900\"
                                     data-y=\"330\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"right-bottom corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class=\"tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"340\"
                                     data-y=\"270\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1200\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\">Satisfaire nos clients
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"1000\" data-saveperformance=\"on\"  data-title=\"Parallax 3D\">
                                <!-- MAIN IMAGE -->
                                <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/camion3.jpg"), "html", null, true);
        echo "\"  alt=\"3dbg\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/camion2.jpg"), "html", null, true);
        echo "\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class=\"tp-caption lft tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"200\"
                                     data-y=\"190\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"left-top corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class=\"tp-caption lfb tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"200\"
                                     data-y=\"330\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"left-bottom corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class=\"tp-caption lft tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"900\"
                                     data-y=\"190\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"right-top corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class=\"tp-caption lfb tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"900\"
                                     data-y=\"330\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1000\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\"><span class=\"right-bottom corner-border\"></span>
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class=\"tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0\"
                                     data-x=\"345\"
                                     data-y=\"270\"
                                     data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
                                     data-speed=\"1000\"
                                     data-start=\"1200\"
                                     data-easing=\"Power3.easeInOut\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-elementdelay=\"0.1\"
                                     data-endelementdelay=\"0.1\"
                                     style=\"z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;\">Telle est notre devise
                                </div>
                            </li>
                        </ul>
                        <div class=\"tp-bannertimer\"></div>
                    </div>
                </div>
            </section>
            <!-- End home section -->

            <!-- banner-section
                ================================================== -->
            <section class=\"banner-section\">
                <div class=\"container\">
                    <h2>MB Services, votre déménagement clé en main<a href=\"projects.html\" class=\"button-one\">En savoir plus</a></h2>
                </div>
            </section>
            <!-- End banner section -->

            <!-- services-offer
                ================================================== -->
            <section class=\"services-offer-section\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"offer-post\">
                                <a href=\"services.html\"><img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/others/con22.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <h2><a href=\"services.html\">Préparation</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"offer-post\">
                                <a href=\"services.html\"><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/others/con2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <h2><a href=\"services.html\">Collecte</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"offer-post\">
                                <a href=\"services.html\"><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/others/con3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <h2><a href=\"services.html\">Rangement</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End services-offer section -->

            <!-- tabs-section
                ================================================== -->
            <section class=\"tabs-section\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-sm-7\">
                            <div class=\"about-us-box\">
                                <h1>Nos priorités et valeurs</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"about-us-post\">
                                            <a href=\"#\"><i class=\"fa fa-dropbox\"></i></a>
                                            <h2>Emballage</h2>
                                            <span>Nous prépararons et transportons</span>
                                        </div>
                                        <div class=\"about-us-post\">
                                            <a href=\"#\"><i class=\"fa fa-globe\"></i></a>
                                            <h2>Autour du monde</h2>
                                            <span>N'importe ou</span>
                                        </div>
                                        <div class=\"about-us-post\">
                                            <a href=\"#\"><i class=\"fa fa-plane\"></i></a>
                                            <h2>Avion</h2>
                                            <span>Ca va plus vite en avion</span>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"about-us-post\">
                                            <a href=\"#\"><i class=\"fa fa-truck\"></i></a>
                                            <h2>Transport routier</h2>
                                            <span>100% fiable</span>
                                        </div>
                                        <div class=\"about-us-post\">
                                            <a href=\"#\"><i class=\"fa fa-hand-lizard-o\"></i></a>
                                            <h2>Garanties</h2>
                                            <span>Nos transports sont sécurisés</span>
                                        </div>
                                        <div class=\"about-us-post\">
                                            <a href=\"#\"><i class=\"fa fa-user-secret\"></i></a>
                                            <h2>Sécurité</h2>
                                            <span>Nous garantissons les délais et la marchandises</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-sm-5\">

                            <div class=\"about-box\">
                                <img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/others/iso1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <h2>Qui sommes nous ?</h2>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore.</p>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <!-- End tabs section -->

            <!-- news-section
                ================================================== -->
            <section class=\"news-section\">
                <div class=\"container\">
                    <div class=\"news-title\">
                        <h2>Les dernières prestations</h2>
                    </div>
                    <div class=\"news-box\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <div class=\"news-post\">
                                    <div class=\"news-gallery\">
                                        <img src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/others/ser1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"date-post\">
                                            <p>Juin <span>15</span></p>
                                        </div>
                                    </div>
                                    <div class=\"news-content\">
                                        <h2><a href=\"single-post.html\">Notre post 1</a></h2>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href=\"single-post.html\">Détails <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"news-post\">
                                    <div class=\"news-gallery\">
                                        <img src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/others/ser2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"date-post\">
                                            <p>Juin <span>17</span></p>
                                        </div>
                                    </div>
                                    <div class=\"news-content\">
                                        <h2><a href=\"single-post.html\">Notre post 2</a></h2>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href=\"single-post.html\">Détails <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"news-post\">
                                    <div class=\"news-gallery\">
                                        <img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/others/ser3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"date-post\">
                                            <p>Juin <span>20</span></p>
                                        </div>
                                    </div>
                                    <div class=\"news-content\">
                                        <h2><a href=\"single-post.html\">Notre post 3</a></h2>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href=\"single-post.html\">Détails <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End news section -->

            <!-- projects
                ================================================== -->
            <section class=\"projects-section\">
                <div class=\"container\">
                    <div class=\"project-title\">
                        <h2>Notre galerie</h2>
                    </div>
                    <div class=\"project-box iso-call\">
                        <div class=\"project-post buildings isolation\">
                            <img src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/projects/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"hover-box\">
                                <a class=\"zoom\" href=\"upload/projects/1.jpg\"><i class=\"fa fa-search\"></i></a>
                            </div>
                        </div>
                        <div class=\"project-post interior\">
                            <img src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/projects/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"hover-box\">
                                <a class=\"zoom\" href=\"upload/projects/2.jpg\"><i class=\"fa fa-search\"></i></a>
                            </div>
                        </div>
                        <div class=\"project-post buildings isolation\">
                            <img src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/projects/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"hover-box\">
                                <a class=\"zoom\" href=\"upload/projects/3.jpg\"><i class=\"fa fa-search\"></i></a>
                            </div>
                        </div>
                        <div class=\"project-post buildings\">
                            <img src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/projects/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"hover-box\">
                                <a class=\"zoom\" href=\"upload/projects/4.jpg\"><i class=\"fa fa-search\"></i></a>
                            </div>
                        </div>s
                        <div class=\"project-post interior isolation\">
                            <img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/projects/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"hover-box\">
                                <a class=\"zoom\" href=\"upload/projects/5.jpg\"><i class=\"fa fa-search\"></i></a>
                            </div>
                        </div>
                        <div class=\"project-post energy\">
                            <img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/projects/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"hover-box\">
                                <a class=\"zoom\" href=\"upload/projects/6.jpg\"><i class=\"fa fa-search\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End projects -->

            <!-- quote-section
                ================================================== -->
            <section class=\"quote-section\">

                <div id=\"map\"></div>

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-5 col-sm-offset-7\">

                            <div class=\"quote-box\">
                                <h1>Demande de devis gratuit</h1>

                                ";
        // line 564
        echo "                                    ";
        // line 565
        echo "                                    ";
        // line 566
        echo "                                    ";
        // line 567
        echo "                                    ";
        // line 568
        echo "                                    ";
        // line 569
        echo "                                    ";
        // line 570
        echo "                                ";
        // line 571
        echo "
                                <form id=\"contact-form\" data-route=\"";
        // line 572
        echo $this->env->getExtension('routing')->getPath("add_devis_ajax");
        echo "\">
                                    ";
        // line 573
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                                    ";
        // line 575
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomSociete", array()), 'widget', array("attr" => array("placeholder" => "Nom de la société", "id" => "name")));
        echo "
                                    ";
        // line 576
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "E-mail")));
        echo "
                                    ";
        // line 577
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("placeholder" => "Téléphone")));
        echo "
                                    ";
        // line 578
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("placeholder" => "Message")));
        echo "
                                    ";
        // line 579
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fichierJoint", array()), 'widget', array("attr" => array("class" => "default")));
        echo "<br>
                                    <input type=\"submit\" id=\"submit_contact\" value=\"Envoyer\">
                                    <div id=\"msg\" class=\"message\"></div>


                                    ";
        // line 585
        echo "                                    ";
        // line 586
        echo "                                    ";
        // line 587
        echo "                                    ";
        // line 588
        echo "                                    ";
        // line 589
        echo "                                    ";
        // line 590
        echo "                                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            <!-- End quote section -->

            <!-- testimonial-section
                ================================================== -->
            <section class=\"testimonial-section\">
                <div class=\"container\">

                    <div class=\"title-section\">
                        <h1>L'équipe</h1>
                    </div>

                    <div class=\"testimonial-box\">
                        <ul class=\"bxslider\">
                            <li>
                                <h2>Jérôme BROSSARD</h2>
                                <span>Président</span>
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. <br> Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a,<br> ultricies in, diam. Sed arcu. Cras consequat.</p>
                            </li>
                            <li>
                                <h2>Quazi modo</h2>
                                <span>Notre costaud de service</span>
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. <br> Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a,<br> ultricies in, diam. Sed arcu. Cras consequat.</p>
                            </li>
                            <li>
                                <h2>Prince Charmant</h2>
                                <span>Notre beau gosse de service</span>
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. <br> Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a,<br> ultricies in, diam. Sed arcu. Cras consequat.</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>
            <!-- End testimonial section -->

            <!-- clients-section
                ================================================== -->
            <section class=\"clients-section\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <ul class=\"client-list\">
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/clients/client1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/clients/client2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/clients/client3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/clients/client4.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/clients/client5.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/clients/client6.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/clients/client1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/clients/client2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <blockquote>
                                <p>Nombreux sont les clients et partenaires qui nous font confiance tous les jours <br><span>Voulez-vous être le prochain </span> ?</p>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End clients section -->

            <!-- footer
                ================================================== -->
            <footer>
                <div class=\"up-footer\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"footer-widget\">
                                    <h2>A propos de nous</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna.</p>
                                    <img style=\"width: 200px\" src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/images/logo_MB.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"footer-widget\">
                                    <h2>Flickr widget</h2>
                                    <ul class=\"flickr\">
                                        <li><a href=\"#\"><img src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/flickr/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/flickr/4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/flickr/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/flickr/6.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/flickr/7.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/upload/flickr/8.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"footer-widget info-widget\">
                                    <h2>Infos</h2>
                                    <p class=\"first-par\">Vous pouvez venir nous voir directement</p>
                                    <p><span>Tel: </span> 06 76 47 42 72</p>
                                    <p><span>Email: </span> laurent.brau@gmail.com</p>
                                    <p><span>Horaires: </span> 8:00 - 17:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class=\"copyright\">
                    MB-Services group &copy; Copyright 2016 by Laurent BRAU. All rights reserved.
                </p>
            </footer>
            <!-- End footer -->
        </div>
    </div>
    <!-- End Content -->

</div>
<!-- End Container -->

<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false\"></script>

<script type=\"text/javascript\" src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/jquery.migrate.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/jquery.imagesloaded.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/retina-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/plugins-scroll.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/gmap3.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 743
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbmbservices/js/script.js"), "html", null, true);
        echo "\"></script>

<!-- Revolution slider -->
<script type=\"text/javascript\">

    jQuery(document).ready(function() {

        \$('#contact-form').on('submit', function(e) {
//        \$('#submit_contact').on('click', function(e) {
            console.log('get submit event');

            e.preventDefault();
        });

        jQuery('.tp-banner').show().revolution(
                {
                    dottedOverlay:\"none\",
                    delay:10000,
                    startwidth:1140,
                    startheight:560,
                    hideThumbs:200,

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:5,

                    navigationType:\"bullet\",

                    touchenabled:\"on\",
                    onHoverStop:\"off\",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax:\"mouse\",
                    parallaxBgFreeze:\"on\",
                    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                    keyboardNavigation:\"off\",

                    navigationHAlign:\"center\",
                    navigationVAlign:\"bottom\",
                    navigationHOffset:0,
                    navigationVOffset:40,

                    shadow:0,

                    spinner:\"spinner4\",

                    stopLoop:\"off\",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,

                    shuffle:\"off\",

                    autoHeight:\"off\",
                    forceFullWidth:\"off\",



                    hideThumbsOnMobile:\"off\",
                    hideNavDelayOnMobile:1500,
                    hideBulletsOnMobile:\"off\",
                    hideArrowsOnMobile:\"off\",
                    hideThumbsUnderResolution:0,

                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    startWithSlide:0,
                    fullScreenOffsetContainer: \".header\"
                });



    });\t//ready

</script>
</body>
</html>";
        
        $__internal_01aae7b488c8a863d063c82fec26d0afc2cedce8ac756dd4ef5403116a2b8ef2->leave($__internal_01aae7b488c8a863d063c82fec26d0afc2cedce8ac756dd4ef5403116a2b8ef2_prof);

    }

    public function getTemplateName()
    {
        return "MBMBServicesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  970 => 743,  966 => 742,  962 => 741,  958 => 740,  954 => 739,  950 => 738,  946 => 737,  942 => 736,  938 => 735,  934 => 734,  930 => 733,  926 => 732,  922 => 731,  889 => 701,  885 => 700,  881 => 699,  877 => 698,  873 => 697,  869 => 696,  859 => 689,  830 => 663,  824 => 660,  818 => 657,  812 => 654,  806 => 651,  800 => 648,  794 => 645,  788 => 642,  732 => 590,  730 => 589,  728 => 588,  726 => 587,  724 => 586,  722 => 585,  714 => 579,  710 => 578,  706 => 577,  702 => 576,  698 => 575,  693 => 573,  689 => 572,  686 => 571,  684 => 570,  682 => 569,  680 => 568,  678 => 567,  676 => 566,  674 => 565,  672 => 564,  646 => 540,  637 => 534,  628 => 528,  619 => 522,  610 => 516,  601 => 510,  569 => 481,  550 => 465,  531 => 449,  502 => 423,  434 => 358,  424 => 351,  414 => 344,  308 => 243,  222 => 162,  134 => 79,  109 => 59,  80 => 32,  78 => 31,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  44 => 18,  40 => 17,  22 => 1,);
    }
}
/* <!doctype html>*/
/* */
/* */
/* <html lang="en" class="no-js">*/
/* <head>*/
/*     <title>MB-Services</title>*/
/* */
/*     <meta charset="utf-8">*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
/* */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/mbmbservices/css/bootstrap.min.css') }}" media="screen">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/mbmbservices/css/jquery.bxslider.css') }}" media="screen">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/mbmbservices/css/font-awesome.css') }}" media="screen">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/mbmbservices/css/magnific-popup.css') }}" media="screen">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/mbmbservices/css/animate.css') }}" media="screen">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/mbmbservices/css/settings.css') }}" media="screen">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/mbmbservices/css/style.css') }}" media="screen">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/mbmbservices/css/bootstrap.min.css') }}" media="screen">*/
/* </head>*/
/* <body>*/
/* */
/* <!-- Container -->*/
/* <div id="container">*/
/* */
/*     {% include "@MBMBServices/Menu/main_left_menu.html.twig" %}*/
/* */
/*     <!-- content*/
/*         ================================================== -->*/
/*     <div id="content">*/
/*         <div class="inner-content">*/
/*             <div class="top-line">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-8">*/
/*                             <ul class="info-list">*/
/*                                 <li>*/
/*                                     <p><i class="fa fa-phone"></i>Appelez-nous<span>06 76 47 42 72</span></p>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <p><i class="fa fa-clock-o"></i>Horaires <span>08:00 - 20:00</span></p>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <p><i class="fa fa-envelope"></i>Ecrivez-nous <span>laurent.brau@gmail.com</span></p>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <ul class="social-icons">*/
/*                                 <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>*/
/*                                 <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                                 <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>*/
/*                                 <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                                 <li><a class="linkedin" href="{{ path('mb_admin_login') }}"><img style="width:40px" src="{{ asset('bundles/mbmbservices/images/admin.png') }}" alt=""></a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- home-section*/
/*                 ================================================== -->*/
/*             <section id="home-section" class="slider1">*/
/*                 <!--*/
/*                 #################################*/
/*                     - THEMEPUNCH BANNER -*/
/*                 #################################*/
/*                 -->*/
/*                 <div class="tp-banner-container">*/
/*                     <div class="tp-banner" >*/
/*                         <ul>	<!-- SLIDE  -->*/
/*                             <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">*/
/*                                 <!-- MAIN IMAGE -->*/
/*                                 <img src="{{ asset('bundles/mbmbservices/images/camion1.jpg') }}"  alt="slidebg1" data-lazyload="{{ asset('bundles/mbmbservices/images/camion1.jpg') }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">*/
/*                                 <!-- LAYERS -->*/
/* */
/*                                 <!-- LAYER NR. 1 -->*/
/*                                 <div class="tp-caption lft tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="200"*/
/*                                      data-y="190"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="left-top corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 2 -->*/
/*                                 <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="200"*/
/*                                      data-y="330"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="left-bottom corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 3 -->*/
/*                                 <div class="tp-caption lft tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="900"*/
/*                                      data-y="190"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="right-top corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 4 -->*/
/*                                 <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="900"*/
/*                                      data-y="330"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="right-bottom corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 5 -->*/
/*                                 <div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="320"*/
/*                                      data-y="270"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1200"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Déménager n'est jamais<br>facile*/
/*                                 </div>*/
/* */
/*                             </li>*/
/* */
/*                             <!-- SLIDE  -->*/
/*                             <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="Ken Burns Slide">*/
/*                                 <!-- MAIN IMAGE -->*/
/*                                 <img src="{{ asset('bundles/mbmbservices/images/camion2.jpg') }}"  alt="2" data-lazyload="{{ asset('bundles/mbmbservices/images/camion3.jpg') }}" data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">*/
/*                                 <!-- LAYERS -->*/
/* */
/*                                 <!-- LAYER NR. 1 -->*/
/*                                 <div class="tp-caption lft tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="200"*/
/*                                      data-y="190"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="left-top corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 2 -->*/
/*                                 <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="200"*/
/*                                      data-y="330"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="left-bottom corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 3 -->*/
/*                                 <div class="tp-caption lft tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="900"*/
/*                                      data-y="190"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="right-top corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 4 -->*/
/*                                 <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="900"*/
/*                                      data-y="330"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="right-bottom corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 5 -->*/
/*                                 <div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="340"*/
/*                                      data-y="270"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1200"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Satisfaire nos clients*/
/*                                 </div>*/
/*                             </li>*/
/*                             <!-- SLIDE  -->*/
/*                             <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="Parallax 3D">*/
/*                                 <!-- MAIN IMAGE -->*/
/*                                 <img src="{{ asset('bundles/mbmbservices/images/camion3.jpg') }}"  alt="3dbg" data-lazyload="{{ asset('bundles/mbmbservices/images/camion2.jpg') }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">*/
/*                                 <!-- LAYERS -->*/
/* */
/*                                 <!-- LAYER NR. 1 -->*/
/*                                 <div class="tp-caption lft tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="200"*/
/*                                      data-y="190"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="left-top corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 2 -->*/
/*                                 <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="200"*/
/*                                      data-y="330"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="left-bottom corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 3 -->*/
/*                                 <div class="tp-caption lft tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="900"*/
/*                                      data-y="190"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="right-top corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 4 -->*/
/*                                 <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="900"*/
/*                                      data-y="330"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1000"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><span class="right-bottom corner-border"></span>*/
/*                                 </div>*/
/* */
/*                                 <!-- LAYER NR. 5 -->*/
/*                                 <div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"*/
/*                                      data-x="345"*/
/*                                      data-y="270"*/
/*                                      data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/*                                      data-speed="1000"*/
/*                                      data-start="1200"*/
/*                                      data-easing="Power3.easeInOut"*/
/*                                      data-splitin="none"*/
/*                                      data-splitout="none"*/
/*                                      data-elementdelay="0.1"*/
/*                                      data-endelementdelay="0.1"*/
/*                                      style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Telle est notre devise*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div class="tp-bannertimer"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- End home section -->*/
/* */
/*             <!-- banner-section*/
/*                 ================================================== -->*/
/*             <section class="banner-section">*/
/*                 <div class="container">*/
/*                     <h2>MB Services, votre déménagement clé en main<a href="projects.html" class="button-one">En savoir plus</a></h2>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- End banner section -->*/
/* */
/*             <!-- services-offer*/
/*                 ================================================== -->*/
/*             <section class="services-offer-section">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                             <div class="offer-post">*/
/*                                 <a href="services.html"><img src="{{ asset('bundles/mbmbservices/upload/others/con22.jpg') }}" alt=""></a>*/
/*                                 <h2><a href="services.html">Préparation</a></h2>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <div class="offer-post">*/
/*                                 <a href="services.html"><img src="{{ asset('bundles/mbmbservices/upload/others/con2.jpg') }}" alt=""></a>*/
/*                                 <h2><a href="services.html">Collecte</a></h2>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <div class="offer-post">*/
/*                                 <a href="services.html"><img src="{{ asset('bundles/mbmbservices/upload/others/con3.jpg') }}" alt=""></a>*/
/*                                 <h2><a href="services.html">Rangement</a></h2>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- End services-offer section -->*/
/* */
/*             <!-- tabs-section*/
/*                 ================================================== -->*/
/*             <section class="tabs-section">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/* */
/*                         <div class="col-sm-7">*/
/*                             <div class="about-us-box">*/
/*                                 <h1>Nos priorités et valeurs</h1>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                                     consequat.</p>*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <div class="about-us-post">*/
/*                                             <a href="#"><i class="fa fa-dropbox"></i></a>*/
/*                                             <h2>Emballage</h2>*/
/*                                             <span>Nous prépararons et transportons</span>*/
/*                                         </div>*/
/*                                         <div class="about-us-post">*/
/*                                             <a href="#"><i class="fa fa-globe"></i></a>*/
/*                                             <h2>Autour du monde</h2>*/
/*                                             <span>N'importe ou</span>*/
/*                                         </div>*/
/*                                         <div class="about-us-post">*/
/*                                             <a href="#"><i class="fa fa-plane"></i></a>*/
/*                                             <h2>Avion</h2>*/
/*                                             <span>Ca va plus vite en avion</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <div class="about-us-post">*/
/*                                             <a href="#"><i class="fa fa-truck"></i></a>*/
/*                                             <h2>Transport routier</h2>*/
/*                                             <span>100% fiable</span>*/
/*                                         </div>*/
/*                                         <div class="about-us-post">*/
/*                                             <a href="#"><i class="fa fa-hand-lizard-o"></i></a>*/
/*                                             <h2>Garanties</h2>*/
/*                                             <span>Nos transports sont sécurisés</span>*/
/*                                         </div>*/
/*                                         <div class="about-us-post">*/
/*                                             <a href="#"><i class="fa fa-user-secret"></i></a>*/
/*                                             <h2>Sécurité</h2>*/
/*                                             <span>Nous garantissons les délais et la marchandises</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="col-sm-5">*/
/* */
/*                             <div class="about-box">*/
/*                                 <img src="{{ asset('bundles/mbmbservices/upload/others/iso1.jpg') }}" alt="">*/
/*                                 <h2>Qui sommes nous ?</h2>*/
/*                                 <p>Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                     cillum dolore eu fugiat nulla pariatur adipisicing elit, sed do eiusmod*/
/*                                     tempor incididunt ut labore et dolore.</p>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- End tabs section -->*/
/* */
/*             <!-- news-section*/
/*                 ================================================== -->*/
/*             <section class="news-section">*/
/*                 <div class="container">*/
/*                     <div class="news-title">*/
/*                         <h2>Les dernières prestations</h2>*/
/*                     </div>*/
/*                     <div class="news-box">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4">*/
/*                                 <div class="news-post">*/
/*                                     <div class="news-gallery">*/
/*                                         <img src="{{ asset('bundles/mbmbservices/upload/others/ser1.jpg') }}" alt="">*/
/*                                         <div class="date-post">*/
/*                                             <p>Juin <span>15</span></p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="news-content">*/
/*                                         <h2><a href="single-post.html">Notre post 1</a></h2>*/
/*                                         <p>Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                             cillum dolore eu fugiat nulla pariatur.</p>*/
/*                                         <a href="single-post.html">Détails <i class="fa fa-angle-right"></i></a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div class="news-post">*/
/*                                     <div class="news-gallery">*/
/*                                         <img src="{{ asset('bundles/mbmbservices/upload/others/ser2.jpg') }}" alt="">*/
/*                                         <div class="date-post">*/
/*                                             <p>Juin <span>17</span></p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="news-content">*/
/*                                         <h2><a href="single-post.html">Notre post 2</a></h2>*/
/*                                         <p>Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                             cillum dolore eu fugiat nulla pariatur.</p>*/
/*                                         <a href="single-post.html">Détails <i class="fa fa-angle-right"></i></a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div class="news-post">*/
/*                                     <div class="news-gallery">*/
/*                                         <img src="{{ asset('bundles/mbmbservices/upload/others/ser3.jpg') }}" alt="">*/
/*                                         <div class="date-post">*/
/*                                             <p>Juin <span>20</span></p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="news-content">*/
/*                                         <h2><a href="single-post.html">Notre post 3</a></h2>*/
/*                                         <p>Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                             cillum dolore eu fugiat nulla pariatur.</p>*/
/*                                         <a href="single-post.html">Détails <i class="fa fa-angle-right"></i></a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </section>*/
/*             <!-- End news section -->*/
/* */
/*             <!-- projects*/
/*                 ================================================== -->*/
/*             <section class="projects-section">*/
/*                 <div class="container">*/
/*                     <div class="project-title">*/
/*                         <h2>Notre galerie</h2>*/
/*                     </div>*/
/*                     <div class="project-box iso-call">*/
/*                         <div class="project-post buildings isolation">*/
/*                             <img src="{{ asset('bundles/mbmbservices/upload/projects/1.jpg') }}" alt="">*/
/*                             <div class="hover-box">*/
/*                                 <a class="zoom" href="upload/projects/1.jpg"><i class="fa fa-search"></i></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="project-post interior">*/
/*                             <img src="{{ asset('bundles/mbmbservices/upload/projects/2.jpg') }}" alt="">*/
/*                             <div class="hover-box">*/
/*                                 <a class="zoom" href="upload/projects/2.jpg"><i class="fa fa-search"></i></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="project-post buildings isolation">*/
/*                             <img src="{{ asset('bundles/mbmbservices/upload/projects/3.jpg') }}" alt="">*/
/*                             <div class="hover-box">*/
/*                                 <a class="zoom" href="upload/projects/3.jpg"><i class="fa fa-search"></i></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="project-post buildings">*/
/*                             <img src="{{ asset('bundles/mbmbservices/upload/projects/4.jpg') }}" alt="">*/
/*                             <div class="hover-box">*/
/*                                 <a class="zoom" href="upload/projects/4.jpg"><i class="fa fa-search"></i></a>*/
/*                             </div>*/
/*                         </div>s*/
/*                         <div class="project-post interior isolation">*/
/*                             <img src="{{ asset('bundles/mbmbservices/upload/projects/5.jpg') }}" alt="">*/
/*                             <div class="hover-box">*/
/*                                 <a class="zoom" href="upload/projects/5.jpg"><i class="fa fa-search"></i></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="project-post energy">*/
/*                             <img src="{{ asset('bundles/mbmbservices/upload/projects/6.jpg') }}" alt="">*/
/*                             <div class="hover-box">*/
/*                                 <a class="zoom" href="upload/projects/6.jpg"><i class="fa fa-search"></i></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- End projects -->*/
/* */
/*             <!-- quote-section*/
/*                 ================================================== -->*/
/*             <section class="quote-section">*/
/* */
/*                 <div id="map"></div>*/
/* */
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-5 col-sm-offset-7">*/
/* */
/*                             <div class="quote-box">*/
/*                                 <h1>Demande de devis gratuit</h1>*/
/* */
/*                                 {#<form id="contact-form" data-route="{{ path('add_devis_ajax')}}">#}*/
/*                                     {#<input name="name" id="name" type="text" placeholder="Nom">#}*/
/*                                     {#<input name="mail" id="mail" type="text" placeholder="Email">#}*/
/*                                     {#<input name="tel-number" id="tel-number" type="text" placeholder="Téléphone">#}*/
/*                                     {#<textarea name="comment" id="comment" placeholder="Message"></textarea>#}*/
/*                                     {#<input type="submit" id="submit_contact" value="Envoyer">#}*/
/*                                     {#<div id="msg" class="message"></div>#}*/
/*                                 {#</form>#}*/
/* */
/*                                 <form id="contact-form" data-route="{{ path('add_devis_ajax')}}">*/
/*                                     {{ form_start(form) }}*/
/* */
/*                                     {{ form_widget(form.nomSociete, {'attr': {'placeholder': 'Nom de la société', 'id': 'name'}}) }}*/
/*                                     {{ form_widget(form.email,{'attr':{'placeholder': 'E-mail'}}) }}*/
/*                                     {{ form_widget(form.telephone, {'attr':{'placeholder': 'Téléphone'}}) }}*/
/*                                     {{ form_widget(form.message, {'attr':{'placeholder': 'Message'}}) }}*/
/*                                     {{ form_widget(form.fichierJoint, {'attr':{'class': 'default'}}) }}<br>*/
/*                                     <input type="submit" id="submit_contact" value="Envoyer">*/
/*                                     <div id="msg" class="message"></div>*/
/* */
/* */
/*                                     {#<input name="name" id="name" type="text" placeholder="Nom">#}*/
/*                                     {#<input name="mail" id="mail" type="text" placeholder="Email">#}*/
/*                                     {#<input name="tel-number" id="tel-number" type="text" placeholder="Téléphone">#}*/
/*                                     {#<textarea name="comment" id="comment" placeholder="Message"></textarea>#}*/
/*                                     {#<input type="submit" id="submit_contact" value="Envoyer">#}*/
/*                                     {#<div id="msg" class="message"></div>#}*/
/*                                     {{ form_end(form) }}*/
/*                                 </form>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </section>*/
/*             <!-- End quote section -->*/
/* */
/*             <!-- testimonial-section*/
/*                 ================================================== -->*/
/*             <section class="testimonial-section">*/
/*                 <div class="container">*/
/* */
/*                     <div class="title-section">*/
/*                         <h1>L'équipe</h1>*/
/*                     </div>*/
/* */
/*                     <div class="testimonial-box">*/
/*                         <ul class="bxslider">*/
/*                             <li>*/
/*                                 <h2>Jérôme BROSSARD</h2>*/
/*                                 <span>Président</span>*/
/*                                 <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. <br> Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a,<br> ultricies in, diam. Sed arcu. Cras consequat.</p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <h2>Quazi modo</h2>*/
/*                                 <span>Notre costaud de service</span>*/
/*                                 <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. <br> Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a,<br> ultricies in, diam. Sed arcu. Cras consequat.</p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <h2>Prince Charmant</h2>*/
/*                                 <span>Notre beau gosse de service</span>*/
/*                                 <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. <br> Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a,<br> ultricies in, diam. Sed arcu. Cras consequat.</p>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </section>*/
/*             <!-- End testimonial section -->*/
/* */
/*             <!-- clients-section*/
/*                 ================================================== -->*/
/*             <section class="clients-section">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-6">*/
/*                             <ul class="client-list">*/
/*                                 <li>*/
/*                                     <a href="#"><img src="{{ asset('bundles/mbmbservices/images/clients/client1.png') }}" alt=""></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><img src="{{ asset('bundles/mbmbservices/images/clients/client2.png') }}" alt=""></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><img src="{{ asset('bundles/mbmbservices/images/clients/client3.png') }}" alt=""></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><img src="{{ asset('bundles/mbmbservices/images/clients/client4.png') }}" alt=""></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><img src="{{ asset('bundles/mbmbservices/images/clients/client5.png') }}" alt=""></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><img src="{{ asset('bundles/mbmbservices/images/clients/client6.png') }}" alt=""></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><img src="{{ asset('bundles/mbmbservices/images/clients/client1.png') }}" alt=""></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><img src="{{ asset('bundles/mbmbservices/images/clients/client2.png') }}" alt=""></a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-sm-6">*/
/*                             <blockquote>*/
/*                                 <p>Nombreux sont les clients et partenaires qui nous font confiance tous les jours <br><span>Voulez-vous être le prochain </span> ?</p>*/
/*                             </blockquote>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </section>*/
/*             <!-- End clients section -->*/
/* */
/*             <!-- footer*/
/*                 ================================================== -->*/
/*             <footer>*/
/*                 <div class="up-footer">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-md-4">*/
/*                                 <div class="footer-widget">*/
/*                                     <h2>A propos de nous</h2>*/
/*                                     <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod*/
/*                                         tempor incididunt ut labore et dolore magna.</p>*/
/*                                     <img style="width: 200px" src="{{ asset('bundles/mbmbservices/images/logo_MB.jpg') }}" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4">*/
/*                                 <div class="footer-widget">*/
/*                                     <h2>Flickr widget</h2>*/
/*                                     <ul class="flickr">*/
/*                                         <li><a href="#"><img src="{{ asset('bundles/mbmbservices/upload/flickr/1.jpg') }}" alt=""></a></li>*/
/*                                         <li><a href="#"><img src="{{ asset('bundles/mbmbservices/upload/flickr/4.jpg') }}" alt=""></a></li>*/
/*                                         <li><a href="#"><img src="{{ asset('bundles/mbmbservices/upload/flickr/5.jpg') }}" alt=""></a></li>*/
/*                                         <li><a href="#"><img src="{{ asset('bundles/mbmbservices/upload/flickr/6.jpg') }}" alt=""></a></li>*/
/*                                         <li><a href="#"><img src="{{ asset('bundles/mbmbservices/upload/flickr/7.jpg') }}" alt=""></a></li>*/
/*                                         <li><a href="#"><img src="{{ asset('bundles/mbmbservices/upload/flickr/8.jpg') }}" alt=""></a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4">*/
/*                                 <div class="footer-widget info-widget">*/
/*                                     <h2>Infos</h2>*/
/*                                     <p class="first-par">Vous pouvez venir nous voir directement</p>*/
/*                                     <p><span>Tel: </span> 06 76 47 42 72</p>*/
/*                                     <p><span>Email: </span> laurent.brau@gmail.com</p>*/
/*                                     <p><span>Horaires: </span> 8:00 - 17:00</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <p class="copyright">*/
/*                     MB-Services group &copy; Copyright 2016 by Laurent BRAU. All rights reserved.*/
/*                 </p>*/
/*             </footer>*/
/*             <!-- End footer -->*/
/*         </div>*/
/*     </div>*/
/*     <!-- End Content -->*/
/* */
/* </div>*/
/* <!-- End Container -->*/
/* */
/* <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>*/
/* */
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/jquery.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/jquery.migrate.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/jquery.bxslider.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/bootstrap.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/jquery.imagesloaded.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/jquery.magnific-popup.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/jquery.isotope.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/retina-1.1.0.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/plugins-scroll.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/jquery.themepunch.tools.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/jquery.themepunch.revolution.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/gmap3.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/mbmbservices/js/script.js') }}"></script>*/
/* */
/* <!-- Revolution slider -->*/
/* <script type="text/javascript">*/
/* */
/*     jQuery(document).ready(function() {*/
/* */
/*         $('#contact-form').on('submit', function(e) {*/
/* //        $('#submit_contact').on('click', function(e) {*/
/*             console.log('get submit event');*/
/* */
/*             e.preventDefault();*/
/*         });*/
/* */
/*         jQuery('.tp-banner').show().revolution(*/
/*                 {*/
/*                     dottedOverlay:"none",*/
/*                     delay:10000,*/
/*                     startwidth:1140,*/
/*                     startheight:560,*/
/*                     hideThumbs:200,*/
/* */
/*                     thumbWidth:100,*/
/*                     thumbHeight:50,*/
/*                     thumbAmount:5,*/
/* */
/*                     navigationType:"bullet",*/
/* */
/*                     touchenabled:"on",*/
/*                     onHoverStop:"off",*/
/* */
/*                     swipe_velocity: 0.7,*/
/*                     swipe_min_touches: 1,*/
/*                     swipe_max_touches: 1,*/
/*                     drag_block_vertical: false,*/
/* */
/*                     parallax:"mouse",*/
/*                     parallaxBgFreeze:"on",*/
/*                     parallaxLevels:[7,4,3,2,5,4,3,2,1,0],*/
/* */
/*                     keyboardNavigation:"off",*/
/* */
/*                     navigationHAlign:"center",*/
/*                     navigationVAlign:"bottom",*/
/*                     navigationHOffset:0,*/
/*                     navigationVOffset:40,*/
/* */
/*                     shadow:0,*/
/* */
/*                     spinner:"spinner4",*/
/* */
/*                     stopLoop:"off",*/
/*                     stopAfterLoops:-1,*/
/*                     stopAtSlide:-1,*/
/* */
/*                     shuffle:"off",*/
/* */
/*                     autoHeight:"off",*/
/*                     forceFullWidth:"off",*/
/* */
/* */
/* */
/*                     hideThumbsOnMobile:"off",*/
/*                     hideNavDelayOnMobile:1500,*/
/*                     hideBulletsOnMobile:"off",*/
/*                     hideArrowsOnMobile:"off",*/
/*                     hideThumbsUnderResolution:0,*/
/* */
/*                     hideSliderAtLimit:0,*/
/*                     hideCaptionAtLimit:0,*/
/*                     hideAllCaptionAtLilmit:0,*/
/*                     startWithSlide:0,*/
/*                     fullScreenOffsetContainer: ".header"*/
/*                 });*/
/* */
/* */
/* */
/*     });	//ready*/
/* */
/* </script>*/
/* </body>*/
/* </html>*/
