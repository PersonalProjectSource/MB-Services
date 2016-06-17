<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f601c68eff623f81ac229ed3bae02ccc1a7ec817521f1433f2658a09167d0a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_259b21be1debd6ce12df14e74107873c73e6afe990905a6e26caff5d29c4616b = $this->env->getExtension("native_profiler");
        $__internal_259b21be1debd6ce12df14e74107873c73e6afe990905a6e26caff5d29c4616b->enter($__internal_259b21be1debd6ce12df14e74107873c73e6afe990905a6e26caff5d29c4616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259b21be1debd6ce12df14e74107873c73e6afe990905a6e26caff5d29c4616b->leave($__internal_259b21be1debd6ce12df14e74107873c73e6afe990905a6e26caff5d29c4616b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_673495bf1a8627e0f4991e63edf027ccc2d91b3151dbc32cbb13d140a6fc3d5e = $this->env->getExtension("native_profiler");
        $__internal_673495bf1a8627e0f4991e63edf027ccc2d91b3151dbc32cbb13d140a6fc3d5e->enter($__internal_673495bf1a8627e0f4991e63edf027ccc2d91b3151dbc32cbb13d140a6fc3d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_673495bf1a8627e0f4991e63edf027ccc2d91b3151dbc32cbb13d140a6fc3d5e->leave($__internal_673495bf1a8627e0f4991e63edf027ccc2d91b3151dbc32cbb13d140a6fc3d5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6e9ec968e986c0bc2ba00afa4442d78dd476d23870bb0668db80c96fd2106f0 = $this->env->getExtension("native_profiler");
        $__internal_f6e9ec968e986c0bc2ba00afa4442d78dd476d23870bb0668db80c96fd2106f0->enter($__internal_f6e9ec968e986c0bc2ba00afa4442d78dd476d23870bb0668db80c96fd2106f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f6e9ec968e986c0bc2ba00afa4442d78dd476d23870bb0668db80c96fd2106f0->leave($__internal_f6e9ec968e986c0bc2ba00afa4442d78dd476d23870bb0668db80c96fd2106f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00bb0125246c09f936ae5581eb38667dea2455a815269565cd5b53c760adddde = $this->env->getExtension("native_profiler");
        $__internal_00bb0125246c09f936ae5581eb38667dea2455a815269565cd5b53c760adddde->enter($__internal_00bb0125246c09f936ae5581eb38667dea2455a815269565cd5b53c760adddde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00bb0125246c09f936ae5581eb38667dea2455a815269565cd5b53c760adddde->leave($__internal_00bb0125246c09f936ae5581eb38667dea2455a815269565cd5b53c760adddde_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
