<?php

/* MBAdminBundle:Default:index.html.twig */
class __TwigTemplate_c1e053a45e3d5dbb12a41bf37ddc9f2f08fb70e82615523e812a273941f4f07e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MBAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59823de36e2badaec6f6bfd06a73e6ed296a7bf14a8a55263eed31603a73d535 = $this->env->getExtension("native_profiler");
        $__internal_59823de36e2badaec6f6bfd06a73e6ed296a7bf14a8a55263eed31603a73d535->enter($__internal_59823de36e2badaec6f6bfd06a73e6ed296a7bf14a8a55263eed31603a73d535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MBAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59823de36e2badaec6f6bfd06a73e6ed296a7bf14a8a55263eed31603a73d535->leave($__internal_59823de36e2badaec6f6bfd06a73e6ed296a7bf14a8a55263eed31603a73d535_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_20cdbde687248b4c815da2183bd915937c2aaea6dbec04fbaa8ca83b00c1f208 = $this->env->getExtension("native_profiler");
        $__internal_20cdbde687248b4c815da2183bd915937c2aaea6dbec04fbaa8ca83b00c1f208->enter($__internal_20cdbde687248b4c815da2183bd915937c2aaea6dbec04fbaa8ca83b00c1f208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section id=\"container\">
    <!--header start-->
    ";
        // line 5
        $this->loadTemplate("@MBAdmin/Header/main-header.html.twig", "MBAdminBundle:Default:index.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("@MBAdmin/Menu/left-menu.html.twig", "MBAdminBundle:Default:index.html.twig", 6)->display($context);
        // line 7
        echo "    <!--main content start-->
    <section id=\"main-content\">
        <section class=\"wrapper\">
            ";
        // line 10
        $this->loadTemplate("@MBAdmin/Widget/statesBoard.html.twig", "MBAdminBundle:Default:index.html.twig", 10)->display($context);
        // line 11
        echo "            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <!--custom chart start-->
                    <div class=\"border-head\">
                        <h3>Demande de devis cette année</h3>
                    </div>
                    <div class=\"custom-bar-chart\">
                        <ul class=\"y-axis\">
                            <li><span>100</span></li>
                            <li><span>80</span></li>
                            <li><span>60</span></li>
                            <li><span>40</span></li>
                            <li><span>20</span></li>
                            <li><span>0</span></li>
                        </ul>
                        <div class=\"bar\">
                            <div class=\"title\">JAN</div>
                            <div class=\"value tooltips\" data-original-title=\"80%\" data-toggle=\"tooltip\" data-placement=\"top\">80%</div>
                        </div>
                        <div class=\"bar \">
                            <div class=\"title\">FEB</div>
                            <div class=\"value tooltips\" data-original-title=\"50%\" data-toggle=\"tooltip\" data-placement=\"top\">50%</div>
                        </div>
                        <div class=\"bar \">
                            <div class=\"title\">MAR</div>
                            <div class=\"value tooltips\" data-original-title=\"40%\" data-toggle=\"tooltip\" data-placement=\"top\">40%</div>
                        </div>
                        <div class=\"bar \">
                            <div class=\"title\">APR</div>
                            <div class=\"value tooltips\" data-original-title=\"55%\" data-toggle=\"tooltip\" data-placement=\"top\">55%</div>
                        </div>
                        <div class=\"bar\">
                            <div class=\"title\">MAY</div>
                            <div class=\"value tooltips\" data-original-title=\"20%\" data-toggle=\"tooltip\" data-placement=\"top\">20%</div>
                        </div>
                        <div class=\"bar \">
                            <div class=\"title\">JUN</div>
                            <div class=\"value tooltips\" data-original-title=\"39%\" data-toggle=\"tooltip\" data-placement=\"top\">39%</div>
                        </div>
                        <div class=\"bar\">
                            <div class=\"title\">JUL</div>
                            <div class=\"value tooltips\" data-original-title=\"75%\" data-toggle=\"tooltip\" data-placement=\"top\">75%</div>
                        </div>
                        <div class=\"bar \">
                            <div class=\"title\">AUG</div>
                            <div class=\"value tooltips\" data-original-title=\"45%\" data-toggle=\"tooltip\" data-placement=\"top\">45%</div>
                        </div>
                        <div class=\"bar \">
                            <div class=\"title\">SEP</div>
                            <div class=\"value tooltips\" data-original-title=\"50%\" data-toggle=\"tooltip\" data-placement=\"top\">50%</div>
                        </div>
                        <div class=\"bar \">
                            <div class=\"title\">OCT</div>
                            <div class=\"value tooltips\" data-original-title=\"42%\" data-toggle=\"tooltip\" data-placement=\"top\">42%</div>
                        </div>
                        <div class=\"bar \">
                            <div class=\"title\">NOV</div>
                            <div class=\"value tooltips\" data-original-title=\"60%\" data-toggle=\"tooltip\" data-placement=\"top\">60%</div>
                        </div>
                        <div class=\"bar \">
                            <div class=\"title\">DEC</div>
                            <div class=\"value tooltips\" data-original-title=\"90%\" data-toggle=\"tooltip\" data-placement=\"top\">90%</div>
                        </div>
                    </div>
                    <!--custom chart end-->
                </div>
                <div class=\"col-lg-4\">
                    <!--new earning start-->
                    <div class=\"panel terques-chart\">
                        <div class=\"panel-body chart-texture\">
                            <div class=\"chart\">
                                <div class=\"heading\">
                                    <span>Vendredi</span>
                                    <strong>€ 57,00 | 15%</strong>
                                </div>
                                <div class=\"sparkline\" data-type=\"line\" data-resize=\"true\" data-height=\"75\" data-width=\"90%\" data-line-width=\"1\" data-line-color=\"#fff\" data-spot-color=\"#fff\" data-fill-color=\"\" data-highlight-line-color=\"#fff\" data-spot-radius=\"4\" data-data=\"[200,135,667,333,526,996,564,123,890,564,455]\"></div>
                            </div>
                        </div>
                        <div class=\"chart-tittle\">
                            <span class=\"title\">Évolution de l'activité</span>
                              <span class=\"value\">
                                  <a href=\"#\" class=\"active\">Volume</a>
                                  |
                                  <a href=\"#\">Nouveaux clients</a>
                                  |
                                  <a href=\"#\">Taux de conversion</a>
                              </span>
                        </div>
                    </div>
                    <!--new earning end-->

                    <!--total earning start-->
                    <div class=\"panel green-chart\">
                        <div class=\"panel-body\">
                            <div class=\"chart\">
                                <div class=\"heading\">
                                    <span>June</span>
                                    <strong>23 Jours | 65%</strong>
                                </div>
                                <div id=\"barchart\"></div>
                            </div>
                        </div>
                        <div class=\"chart-tittle\">
                            <span class=\"title\">Chiffre d'affaires</span>
                            <span class=\"value\">€, 76,54,678</span>
                        </div>
                    </div>
                    <!--total earning end-->
                </div>
            </div>
            <div class=\"row\">

                <div class=\"col-lg-12\">
                    <!--work progress start-->
                    <section class=\"panel\">
                        <div class=\"panel-body progress-panel\">
                            <div class=\"task-progress\">
                                <h1>Mes 5 meilleurs clients</h1>
                                <p></p>
                            </div>
                        </div>
                        <table class=\"table table-hover personal-task\">
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Unilever
                                </td>
                                <td>
                                    <span class=\"badge bg-important\">75%</span>
                                </td>
                                <td>
                                    <div id=\"work-progress1\"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Mutuelle des étudiants
                                </td>
                                <td>
                                    <span class=\"badge bg-success\">43%</span>
                                </td>
                                <td>
                                    <div id=\"work-progress2\"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    PSA
                                </td>
                                <td>
                                    <span class=\"badge bg-info\">67%</span>
                                </td>
                                <td>
                                    <div id=\"work-progress3\"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    Sanofi
                                </td>
                                <td>
                                    <span class=\"badge bg-warning\">30%</span>
                                </td>
                                <td>
                                    <div id=\"work-progress4\"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    Prisma média
                                </td>
                                <td>
                                    <span class=\"badge bg-primary\">15%</span>
                                </td>
                                <td>
                                    <div id=\"work-progress5\"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                    <!--work progress end-->
                </div>
            </div>



        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class=\"site-footer\">
        <div class=\"text-center\">
            2016 &copy; Groupe MB-Services by Laurent BRAU
            <a href=\"#\" class=\"go-top\">
                <i class=\"fa fa-angle-up\"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
";
        
        $__internal_20cdbde687248b4c815da2183bd915937c2aaea6dbec04fbaa8ca83b00c1f208->leave($__internal_20cdbde687248b4c815da2183bd915937c2aaea6dbec04fbaa8ca83b00c1f208_prof);

    }

    // line 218
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcd13217f0a9406f98fe13850574880c42a40b754f594f7bca299a0d02714e56 = $this->env->getExtension("native_profiler");
        $__internal_fcd13217f0a9406f98fe13850574880c42a40b754f594f7bca299a0d02714e56->enter($__internal_fcd13217f0a9406f98fe13850574880c42a40b754f594f7bca299a0d02714e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 219
        echo "    <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/common-scripts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/js/count.js"), "html", null, true);
        echo "\"></script>

    <script>

        //owl carousel

        \$(document).ready(function() {
            \$(\"#owl-demo\").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true,
                autoPlay:true

            });
        });

        //custom select box

        \$(function(){
            \$('select.styled').customSelect();
        });

    </script>
";
        
        $__internal_fcd13217f0a9406f98fe13850574880c42a40b754f594f7bca299a0d02714e56->leave($__internal_fcd13217f0a9406f98fe13850574880c42a40b754f594f7bca299a0d02714e56_prof);

    }

    public function getTemplateName()
    {
        return "MBAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 234,  331 => 233,  327 => 232,  323 => 231,  319 => 230,  315 => 229,  311 => 228,  307 => 227,  303 => 226,  299 => 225,  295 => 224,  291 => 223,  287 => 222,  283 => 221,  279 => 220,  276 => 219,  270 => 218,  57 => 11,  55 => 10,  50 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/* <section id="container">*/
/*     <!--header start-->*/
/*     {% include "@MBAdmin/Header/main-header.html.twig" %}*/
/*     {% include "@MBAdmin/Menu/left-menu.html.twig" %}*/
/*     <!--main content start-->*/
/*     <section id="main-content">*/
/*         <section class="wrapper">*/
/*             {% include "@MBAdmin/Widget/statesBoard.html.twig" %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-8">*/
/*                     <!--custom chart start-->*/
/*                     <div class="border-head">*/
/*                         <h3>Demande de devis cette année</h3>*/
/*                     </div>*/
/*                     <div class="custom-bar-chart">*/
/*                         <ul class="y-axis">*/
/*                             <li><span>100</span></li>*/
/*                             <li><span>80</span></li>*/
/*                             <li><span>60</span></li>*/
/*                             <li><span>40</span></li>*/
/*                             <li><span>20</span></li>*/
/*                             <li><span>0</span></li>*/
/*                         </ul>*/
/*                         <div class="bar">*/
/*                             <div class="title">JAN</div>*/
/*                             <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>*/
/*                         </div>*/
/*                         <div class="bar ">*/
/*                             <div class="title">FEB</div>*/
/*                             <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>*/
/*                         </div>*/
/*                         <div class="bar ">*/
/*                             <div class="title">MAR</div>*/
/*                             <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>*/
/*                         </div>*/
/*                         <div class="bar ">*/
/*                             <div class="title">APR</div>*/
/*                             <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>*/
/*                         </div>*/
/*                         <div class="bar">*/
/*                             <div class="title">MAY</div>*/
/*                             <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>*/
/*                         </div>*/
/*                         <div class="bar ">*/
/*                             <div class="title">JUN</div>*/
/*                             <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>*/
/*                         </div>*/
/*                         <div class="bar">*/
/*                             <div class="title">JUL</div>*/
/*                             <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>*/
/*                         </div>*/
/*                         <div class="bar ">*/
/*                             <div class="title">AUG</div>*/
/*                             <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>*/
/*                         </div>*/
/*                         <div class="bar ">*/
/*                             <div class="title">SEP</div>*/
/*                             <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>*/
/*                         </div>*/
/*                         <div class="bar ">*/
/*                             <div class="title">OCT</div>*/
/*                             <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>*/
/*                         </div>*/
/*                         <div class="bar ">*/
/*                             <div class="title">NOV</div>*/
/*                             <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>*/
/*                         </div>*/
/*                         <div class="bar ">*/
/*                             <div class="title">DEC</div>*/
/*                             <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--custom chart end-->*/
/*                 </div>*/
/*                 <div class="col-lg-4">*/
/*                     <!--new earning start-->*/
/*                     <div class="panel terques-chart">*/
/*                         <div class="panel-body chart-texture">*/
/*                             <div class="chart">*/
/*                                 <div class="heading">*/
/*                                     <span>Vendredi</span>*/
/*                                     <strong>€ 57,00 | 15%</strong>*/
/*                                 </div>*/
/*                                 <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="chart-tittle">*/
/*                             <span class="title">Évolution de l'activité</span>*/
/*                               <span class="value">*/
/*                                   <a href="#" class="active">Volume</a>*/
/*                                   |*/
/*                                   <a href="#">Nouveaux clients</a>*/
/*                                   |*/
/*                                   <a href="#">Taux de conversion</a>*/
/*                               </span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--new earning end-->*/
/* */
/*                     <!--total earning start-->*/
/*                     <div class="panel green-chart">*/
/*                         <div class="panel-body">*/
/*                             <div class="chart">*/
/*                                 <div class="heading">*/
/*                                     <span>June</span>*/
/*                                     <strong>23 Jours | 65%</strong>*/
/*                                 </div>*/
/*                                 <div id="barchart"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="chart-tittle">*/
/*                             <span class="title">Chiffre d'affaires</span>*/
/*                             <span class="value">€, 76,54,678</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--total earning end-->*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/* */
/*                 <div class="col-lg-12">*/
/*                     <!--work progress start-->*/
/*                     <section class="panel">*/
/*                         <div class="panel-body progress-panel">*/
/*                             <div class="task-progress">*/
/*                                 <h1>Mes 5 meilleurs clients</h1>*/
/*                                 <p></p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <table class="table table-hover personal-task">*/
/*                             <tbody>*/
/*                             <tr>*/
/*                                 <td>1</td>*/
/*                                 <td>*/
/*                                     Unilever*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <span class="badge bg-important">75%</span>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <div id="work-progress1"></div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>2</td>*/
/*                                 <td>*/
/*                                     Mutuelle des étudiants*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <span class="badge bg-success">43%</span>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <div id="work-progress2"></div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>3</td>*/
/*                                 <td>*/
/*                                     PSA*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <span class="badge bg-info">67%</span>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <div id="work-progress3"></div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>4</td>*/
/*                                 <td>*/
/*                                     Sanofi*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <span class="badge bg-warning">30%</span>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <div id="work-progress4"></div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>5</td>*/
/*                                 <td>*/
/*                                     Prisma média*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <span class="badge bg-primary">15%</span>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <div id="work-progress5"></div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </section>*/
/*                     <!--work progress end-->*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/* */
/*         </section>*/
/*     </section>*/
/*     <!--main content end-->*/
/*     <!--footer start-->*/
/*     <footer class="site-footer">*/
/*         <div class="text-center">*/
/*             2016 &copy; Groupe MB-Services by Laurent BRAU*/
/*             <a href="#" class="go-top">*/
/*                 <i class="fa fa-angle-up"></i>*/
/*             </a>*/
/*         </div>*/
/*     </footer>*/
/*     <!--footer end-->*/
/* </section>*/
/* {% endblock body %}*/
/* {% block javascripts %}*/
/*     <!-- js placed at the end of the document so the pages load faster -->*/
/*     <script src="{{ asset('bundles/mbadmin/js/jquery.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/jquery-1.8.3.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/jquery.scrollTo.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/jquery.nicescroll.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/jquery.sparkline.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/jquery.dcjqaccordion.2.7.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/owl.carousel.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/jquery.customSelect.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/respond.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/common-scripts.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/sparkline-chart.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/easy-pie-chart.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mbadmin/js/count.js') }}"></script>*/
/* */
/*     <script>*/
/* */
/*         //owl carousel*/
/* */
/*         $(document).ready(function() {*/
/*             $("#owl-demo").owlCarousel({*/
/*                 navigation : true,*/
/*                 slideSpeed : 300,*/
/*                 paginationSpeed : 400,*/
/*                 singleItem : true,*/
/*                 autoPlay:true*/
/* */
/*             });*/
/*         });*/
/* */
/*         //custom select box*/
/* */
/*         $(function(){*/
/*             $('select.styled').customSelect();*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock javascripts %}*/
