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
        $__internal_6e048e9295b74f2ed9daa1695b27c63d56c28ec6d11d8418eaa051b816ed46c1 = $this->env->getExtension("native_profiler");
        $__internal_6e048e9295b74f2ed9daa1695b27c63d56c28ec6d11d8418eaa051b816ed46c1->enter($__internal_6e048e9295b74f2ed9daa1695b27c63d56c28ec6d11d8418eaa051b816ed46c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e048e9295b74f2ed9daa1695b27c63d56c28ec6d11d8418eaa051b816ed46c1->leave($__internal_6e048e9295b74f2ed9daa1695b27c63d56c28ec6d11d8418eaa051b816ed46c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95ee5d52450ec79967f537c6266f4b5f32bf288d891f8784db72673d4ef8823f = $this->env->getExtension("native_profiler");
        $__internal_95ee5d52450ec79967f537c6266f4b5f32bf288d891f8784db72673d4ef8823f->enter($__internal_95ee5d52450ec79967f537c6266f4b5f32bf288d891f8784db72673d4ef8823f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95ee5d52450ec79967f537c6266f4b5f32bf288d891f8784db72673d4ef8823f->leave($__internal_95ee5d52450ec79967f537c6266f4b5f32bf288d891f8784db72673d4ef8823f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ac8ce7b794f1d91f37f19eef38c1a70fd3b8c2359647f35ae03a56a84a36da4 = $this->env->getExtension("native_profiler");
        $__internal_2ac8ce7b794f1d91f37f19eef38c1a70fd3b8c2359647f35ae03a56a84a36da4->enter($__internal_2ac8ce7b794f1d91f37f19eef38c1a70fd3b8c2359647f35ae03a56a84a36da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ac8ce7b794f1d91f37f19eef38c1a70fd3b8c2359647f35ae03a56a84a36da4->leave($__internal_2ac8ce7b794f1d91f37f19eef38c1a70fd3b8c2359647f35ae03a56a84a36da4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f85db6f3c273dbbdc9b6fe330a31cc66595e0d3057bf4318bad39d61dcd902a7 = $this->env->getExtension("native_profiler");
        $__internal_f85db6f3c273dbbdc9b6fe330a31cc66595e0d3057bf4318bad39d61dcd902a7->enter($__internal_f85db6f3c273dbbdc9b6fe330a31cc66595e0d3057bf4318bad39d61dcd902a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f85db6f3c273dbbdc9b6fe330a31cc66595e0d3057bf4318bad39d61dcd902a7->leave($__internal_f85db6f3c273dbbdc9b6fe330a31cc66595e0d3057bf4318bad39d61dcd902a7_prof);

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
