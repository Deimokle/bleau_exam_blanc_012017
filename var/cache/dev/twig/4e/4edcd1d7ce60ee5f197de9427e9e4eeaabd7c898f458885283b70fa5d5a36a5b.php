<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20c488375c0e025499f823d72fdf53dc1c8667922cff1f12fae8d4c93f5d1c21 extends Twig_Template
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
        $__internal_10a4ce4ed1e9030520aab277e9cf16c275ff4b2e368397542036b3a085580a2b = $this->env->getExtension("native_profiler");
        $__internal_10a4ce4ed1e9030520aab277e9cf16c275ff4b2e368397542036b3a085580a2b->enter($__internal_10a4ce4ed1e9030520aab277e9cf16c275ff4b2e368397542036b3a085580a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a4ce4ed1e9030520aab277e9cf16c275ff4b2e368397542036b3a085580a2b->leave($__internal_10a4ce4ed1e9030520aab277e9cf16c275ff4b2e368397542036b3a085580a2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c728c26068892cbf935547537c6869cd40be974771544f12d479065d4b19c72 = $this->env->getExtension("native_profiler");
        $__internal_2c728c26068892cbf935547537c6869cd40be974771544f12d479065d4b19c72->enter($__internal_2c728c26068892cbf935547537c6869cd40be974771544f12d479065d4b19c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c728c26068892cbf935547537c6869cd40be974771544f12d479065d4b19c72->leave($__internal_2c728c26068892cbf935547537c6869cd40be974771544f12d479065d4b19c72_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e24fc4e8e1885c2e70527352bb09fdfb61c211eb38f9df0c6b3acdcdb70c71bb = $this->env->getExtension("native_profiler");
        $__internal_e24fc4e8e1885c2e70527352bb09fdfb61c211eb38f9df0c6b3acdcdb70c71bb->enter($__internal_e24fc4e8e1885c2e70527352bb09fdfb61c211eb38f9df0c6b3acdcdb70c71bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e24fc4e8e1885c2e70527352bb09fdfb61c211eb38f9df0c6b3acdcdb70c71bb->leave($__internal_e24fc4e8e1885c2e70527352bb09fdfb61c211eb38f9df0c6b3acdcdb70c71bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1b5c9a677c3eafd6de8f68113692728400ac5ca4815729255495e655b99592c = $this->env->getExtension("native_profiler");
        $__internal_d1b5c9a677c3eafd6de8f68113692728400ac5ca4815729255495e655b99592c->enter($__internal_d1b5c9a677c3eafd6de8f68113692728400ac5ca4815729255495e655b99592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1b5c9a677c3eafd6de8f68113692728400ac5ca4815729255495e655b99592c->leave($__internal_d1b5c9a677c3eafd6de8f68113692728400ac5ca4815729255495e655b99592c_prof);

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
