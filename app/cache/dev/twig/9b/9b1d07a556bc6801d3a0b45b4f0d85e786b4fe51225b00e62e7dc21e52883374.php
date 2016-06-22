<?php

/* user/index.html.twig */
class __TwigTemplate_c8f449de635cb571cf1f59919a4ef33e0e55b2b6581c1e36da32d730626ad385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'css_design' => array($this, 'block_css_design'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfad227db4ffbcd21b6b0a40f9609a6f3c1f516a1f3939fc850dd8a83628e4a4 = $this->env->getExtension("native_profiler");
        $__internal_dfad227db4ffbcd21b6b0a40f9609a6f3c1f516a1f3939fc850dd8a83628e4a4->enter($__internal_dfad227db4ffbcd21b6b0a40f9609a6f3c1f516a1f3939fc850dd8a83628e4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfad227db4ffbcd21b6b0a40f9609a6f3c1f516a1f3939fc850dd8a83628e4a4->leave($__internal_dfad227db4ffbcd21b6b0a40f9609a6f3c1f516a1f3939fc850dd8a83628e4a4_prof);

    }

    // line 3
    public function block_css_design($context, array $blocks = array())
    {
        $__internal_f1f86232179c5341d853f295daebfbc457bbc42483377435ff677393388d5aac = $this->env->getExtension("native_profiler");
        $__internal_f1f86232179c5341d853f295daebfbc457bbc42483377435ff677393388d5aac->enter($__internal_f1f86232179c5341d853f295daebfbc457bbc42483377435ff677393388d5aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css_design"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/css/bootstrap-reset.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/css/style-responsive.css"), "html", null, true);
        echo "\">
";
        
        $__internal_f1f86232179c5341d853f295daebfbc457bbc42483377435ff677393388d5aac->leave($__internal_f1f86232179c5341d853f295daebfbc457bbc42483377435ff677393388d5aac_prof);

    }

    // line 11
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_7f0ac98b16a7e0ccaf4146789b4369c26abd219f7227cc6b974af996b9218ac7 = $this->env->getExtension("native_profiler");
        $__internal_7f0ac98b16a7e0ccaf4146789b4369c26abd219f7227cc6b974af996b9218ac7->enter($__internal_7f0ac98b16a7e0ccaf4146789b4369c26abd219f7227cc6b974af996b9218ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        echo "login-body";
        
        $__internal_7f0ac98b16a7e0ccaf4146789b4369c26abd219f7227cc6b974af996b9218ac7->leave($__internal_7f0ac98b16a7e0ccaf4146789b4369c26abd219f7227cc6b974af996b9218ac7_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c6c7423af13b6369b61d123cfddd827001868decb8078ff184c4015799f78f = $this->env->getExtension("native_profiler");
        $__internal_a3c6c7423af13b6369b61d123cfddd827001868decb8078ff184c4015799f78f->enter($__internal_a3c6c7423af13b6369b61d123cfddd827001868decb8078ff184c4015799f78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<section id=\"container\" class=\"\">

    ";
        // line 16
        $this->loadTemplate("@MBAdmin/Header/main-header.html.twig", "user/index.html.twig", 16)->display($context);
        // line 17
        echo "    ";
        $this->loadTemplate("@MBAdmin/Menu/left-menu.html.twig", "user/index.html.twig", 17)->display($context);
        // line 18
        echo "
    <section id=\"main-content\">
        <section class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" class=\"btn btn-info\">ajouter un administrateur</a><br><br>
                    <section class=\"panel\">
                        <header class=\"panel-heading\">
                            Liste des administrateurs
                        </header>
                        <table class=\"table table-striped table-advance table-hover\">
                            <thead>
                                <tr>
                                    ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "                                    <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
                                    ";
        }
        // line 34
        echo "                                    <th class=\"hidden-phone\"><i class=\"fa fa-question-circle\"></i> Nom</th>
                                    <th><i class=\"fa fa-bookmark\"></i> E-mail</th>
                                    <th><i class=\"fa fa-bookmark\"></i> Rôles</th>
                                    <th><i class=\" fa fa-edit\"></i> Status</th>
                                    ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "                                        <th>Action</th>
                                    ";
        }
        // line 41
        echo "                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 45
            echo "                                <tr>
                                    ";
            // line 46
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 47
                echo "                                    <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "</a></td>
                                    ";
            }
            // line 49
            echo "                                    <td class=\"hidden-phone\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 52
            echo "                                    <td>";
            echo twig_escape_filter($this->env, $this->env->getExtension('user_manager_extension')->displayUserRoles($this->getAttribute($context["user"], "roles", array())), "html", null, true);
            echo "</td>

                                    ";
            // line 54
            if ((1 == $this->getAttribute($context["user"], "enabled", array()))) {
                // line 55
                echo "                                        ";
                $context["statusClass"] = "success";
                // line 56
                echo "                                        ";
                $context["statusLabel"] = "Actif";
                // line 57
                echo "                                    ";
            } else {
                // line 58
                echo "                                        ";
                $context["statusClass"] = "danger";
                // line 59
                echo "                                        ";
                $context["statusLabel"] = "Inactif";
                // line 60
                echo "                                    ";
            }
            // line 61
            echo "
                                    <td>
                                        <img style=\"width: 20px;\" class=\"loader center hidden\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mbadmin/img/loader_design.jpg"), "html", null, true);
            echo "\" alt=\"\" />
                                        <span data-class=\"label-";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["statusClass"]) ? $context["statusClass"] : $this->getContext($context, "statusClass")), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" data-status=\"";
            echo twig_escape_filter($this->env, (isset($context["statusLabel"]) ? $context["statusLabel"] : $this->getContext($context, "statusLabel")), "html", null, true);
            echo "\" class=\"item-status status label label-mini\">";
            echo twig_escape_filter($this->env, (isset($context["statusLabel"]) ? $context["statusLabel"] : $this->getContext($context, "statusLabel")), "html", null, true);
            echo "</span>
                                    </td>

                                    ";
            // line 67
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 68
                echo "                                        <td>
                                            <a class=\"btn btn-primary btn-xs\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
                                            <a class=\"btn btn-danger btn-xs\" href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete_btn", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash-o \"></i></a>
                                        </td>
                                    ";
            }
            // line 73
            echo "
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </section>
    </section>
</section>
";
        
        $__internal_a3c6c7423af13b6369b61d123cfddd827001868decb8078ff184c4015799f78f->leave($__internal_a3c6c7423af13b6369b61d123cfddd827001868decb8078ff184c4015799f78f_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7236b560a4d8a8717d48dd1129248ff9093d73dff67a8dfd3a38a02860bda82b = $this->env->getExtension("native_profiler");
        $__internal_7236b560a4d8a8717d48dd1129248ff9093d73dff67a8dfd3a38a02860bda82b->enter($__internal_7236b560a4d8a8717d48dd1129248ff9093d73dff67a8dfd3a38a02860bda82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    <script type=\"application/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        function refresh(oldClass) {
            console.log('refresh');
            console.log(oldClass);
            \$('.item-status').each(function() {
                if (null != oldClass) {
                    \$(this).removeClass(oldClass);
                }
//                console.log(\$(this).attr('data-class'));
                \$(this).addClass(\$(this).attr('data-class'));
            });
        }
        refresh(null);

        \$('.item-status').on('click', function() {

            var oldClass = \$(this).attr('data-class');
            \$(this).addClass('hidden');
            \$(this).closest('td').find('img').removeClass('hidden');

//                console.log(\$(this).attr('data-class'));
                if ('label-success' == \$(this).attr('data-class')) {
//                    console.log('success to dangers');
                    var that = \$(this);
                        \$.ajax({
                            type: \"POST\",
                            url: \"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("status_change");
        echo "\",
                            data: { userId: that.attr('data-user'), location: \"Boston\" }
                        })
                        .success(function( msg ) {
                            that.removeClass('hidden');
                            that.closest('td').find('img').addClass('hidden');
                            that.attr('data-class', 'label-danger');
                            that.text('Inactif');
                            refresh(oldClass);
                        })
                        .fail(function(){
                            // TODO faire une gestion d'erreur par flashbag.
                        });
                } else {
                    var that = \$(this);
                    \$.ajax({
                                type: \"POST\",
                                url: \"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("status_change");
        echo "\",
                                data: { userId: that.attr('data-user'), location: \"Boston\" }
                            })
                            .success(function( msg ) {
                                that.removeClass('hidden');
                                that.closest('td').find('img').addClass('hidden');
                                that.attr('data-class', 'label-success');
                                that.text('Actif');
                                refresh(oldClass);
                            })
                            .fail(function(){
                                // TODO faire une gestion d'erreur par flashbag.
                            });
//                    console.log('dangers to success');
                    refresh(oldClass);
                }
        });
        var response;
        function sendStatusChanged() {
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("status_change");
        echo "\",
                data: { name: \"John\", location: \"Boston\" }
            })
            .success(function( msg ) {
                \$(this).attr('data-class', 'label-danger');
                \$(this).text('Inactif');
            })
            .fail(function(){
                return false;
            });
        }


    </script>
";
        
        $__internal_7236b560a4d8a8717d48dd1129248ff9093d73dff67a8dfd3a38a02860bda82b->leave($__internal_7236b560a4d8a8717d48dd1129248ff9093d73dff67a8dfd3a38a02860bda82b_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 151,  304 => 130,  284 => 113,  255 => 86,  249 => 85,  234 => 76,  226 => 73,  220 => 70,  216 => 69,  213 => 68,  211 => 67,  199 => 64,  195 => 63,  191 => 61,  188 => 60,  185 => 59,  182 => 58,  179 => 57,  176 => 56,  173 => 55,  171 => 54,  165 => 52,  161 => 50,  154 => 49,  146 => 47,  144 => 46,  141 => 45,  137 => 44,  132 => 41,  128 => 39,  126 => 38,  120 => 34,  116 => 32,  114 => 31,  103 => 23,  96 => 18,  93 => 17,  91 => 16,  87 => 14,  81 => 13,  69 => 11,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block css_design %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/mbadmin/css/bootstrap.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/mbadmin/css/bootstrap-reset.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/mbadmin/assets/font-awesome/css/font-awesome.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/mbadmin/css/style.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/mbadmin/css/style-responsive.css') }}">*/
/* {% endblock %}*/
/* */
/* {%  block bodyclass %}login-body{% endblock bodyclass %}*/
/* */
/* {% block body %}*/
/* <section id="container" class="">*/
/* */
/*     {% include "@MBAdmin/Header/main-header.html.twig" %}*/
/*     {% include "@MBAdmin/Menu/left-menu.html.twig" %}*/
/* */
/*     <section id="main-content">*/
/*         <section class="wrapper">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <a href="{{ path('user_new') }}" class="btn btn-info">ajouter un administrateur</a><br><br>*/
/*                     <section class="panel">*/
/*                         <header class="panel-heading">*/
/*                             Liste des administrateurs*/
/*                         </header>*/
/*                         <table class="table table-striped table-advance table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <th><i class="fa fa-bullhorn"></i> Identifiant</th>*/
/*                                     {% endif %}*/
/*                                     <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nom</th>*/
/*                                     <th><i class="fa fa-bookmark"></i> E-mail</th>*/
/*                                     <th><i class="fa fa-bookmark"></i> Rôles</th>*/
/*                                     <th><i class=" fa fa-edit"></i> Status</th>*/
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                         <th>Action</th>*/
/*                                     {% endif %}*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for user in users %}*/
/*                                 <tr>*/
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                                     {% endif %}*/
/*                                     <td class="hidden-phone"><a href="{{ path('user_show', { 'id': user.username }) }}">{{ user.username }}</a></td>*/
/*                                     <td>{{ user.email }}</td>*/
/*                                     {#TODO ameliorer la l'affichage des roles par code couleur#}*/
/*                                     <td>{{ user.roles | displayUserRoles }}</td>*/
/* */
/*                                     {% if 1 == user.enabled %}*/
/*                                         {% set statusClass = 'success' %}*/
/*                                         {% set statusLabel = 'Actif' %}*/
/*                                     {% else %}*/
/*                                         {% set statusClass = 'danger' %}*/
/*                                         {% set statusLabel = 'Inactif' %}*/
/*                                     {% endif %}*/
/* */
/*                                     <td>*/
/*                                         <img style="width: 20px;" class="loader center hidden" src="{{ asset('bundles/mbadmin/img/loader_design.jpg') }}" alt="" />*/
/*                                         <span data-class="label-{{ statusClass }}" data-user="{{ user.id }}" data-status="{{ statusLabel }}" class="item-status status label label-mini">{{ statusLabel }}</span>*/
/*                                     </td>*/
/* */
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                         <td>*/
/*                                             <a class="btn btn-primary btn-xs" href="{{ path('user_edit', { 'id': user.id }) }}"><i class="fa fa-pencil"></i></a>*/
/*                                             <a class="btn btn-danger btn-xs" href="{{ path('user_delete_btn', { 'id': user.id }) }}"><i class="fa fa-trash-o "></i></a>*/
/*                                         </td>*/
/*                                     {% endif %}*/
/* */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </section>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*     </section>*/
/* </section>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>*/
/*     <script type="text/javascript">*/
/*         function refresh(oldClass) {*/
/*             console.log('refresh');*/
/*             console.log(oldClass);*/
/*             $('.item-status').each(function() {*/
/*                 if (null != oldClass) {*/
/*                     $(this).removeClass(oldClass);*/
/*                 }*/
/* //                console.log($(this).attr('data-class'));*/
/*                 $(this).addClass($(this).attr('data-class'));*/
/*             });*/
/*         }*/
/*         refresh(null);*/
/* */
/*         $('.item-status').on('click', function() {*/
/* */
/*             var oldClass = $(this).attr('data-class');*/
/*             $(this).addClass('hidden');*/
/*             $(this).closest('td').find('img').removeClass('hidden');*/
/* */
/* //                console.log($(this).attr('data-class'));*/
/*                 if ('label-success' == $(this).attr('data-class')) {*/
/* //                    console.log('success to dangers');*/
/*                     var that = $(this);*/
/*                         $.ajax({*/
/*                             type: "POST",*/
/*                             url: "{{ path('status_change') }}",*/
/*                             data: { userId: that.attr('data-user'), location: "Boston" }*/
/*                         })*/
/*                         .success(function( msg ) {*/
/*                             that.removeClass('hidden');*/
/*                             that.closest('td').find('img').addClass('hidden');*/
/*                             that.attr('data-class', 'label-danger');*/
/*                             that.text('Inactif');*/
/*                             refresh(oldClass);*/
/*                         })*/
/*                         .fail(function(){*/
/*                             // TODO faire une gestion d'erreur par flashbag.*/
/*                         });*/
/*                 } else {*/
/*                     var that = $(this);*/
/*                     $.ajax({*/
/*                                 type: "POST",*/
/*                                 url: "{{ path('status_change') }}",*/
/*                                 data: { userId: that.attr('data-user'), location: "Boston" }*/
/*                             })*/
/*                             .success(function( msg ) {*/
/*                                 that.removeClass('hidden');*/
/*                                 that.closest('td').find('img').addClass('hidden');*/
/*                                 that.attr('data-class', 'label-success');*/
/*                                 that.text('Actif');*/
/*                                 refresh(oldClass);*/
/*                             })*/
/*                             .fail(function(){*/
/*                                 // TODO faire une gestion d'erreur par flashbag.*/
/*                             });*/
/* //                    console.log('dangers to success');*/
/*                     refresh(oldClass);*/
/*                 }*/
/*         });*/
/*         var response;*/
/*         function sendStatusChanged() {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: "{{ path('status_change') }}",*/
/*                 data: { name: "John", location: "Boston" }*/
/*             })*/
/*             .success(function( msg ) {*/
/*                 $(this).attr('data-class', 'label-danger');*/
/*                 $(this).text('Inactif');*/
/*             })*/
/*             .fail(function(){*/
/*                 return false;*/
/*             });*/
/*         }*/
/* */
/* */
/*     </script>*/
/* {% endblock javascripts %}*/
/* */
