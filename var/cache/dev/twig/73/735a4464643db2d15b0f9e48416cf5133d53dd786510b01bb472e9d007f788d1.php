<?php

/* @Travel/layout.html.twig */
class __TwigTemplate_ccd068d173b50419908449508a121d3964f00ef7f518ca03c13f666571c387cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Travel/layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62b3cdffa9fb1a2ac3bfce12bb2c47c65c553c0a5c9eb596f14a974e18d1bc49 = $this->env->getExtension("native_profiler");
        $__internal_62b3cdffa9fb1a2ac3bfce12bb2c47c65c553c0a5c9eb596f14a974e18d1bc49->enter($__internal_62b3cdffa9fb1a2ac3bfce12bb2c47c65c553c0a5c9eb596f14a974e18d1bc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Travel/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b3cdffa9fb1a2ac3bfce12bb2c47c65c553c0a5c9eb596f14a974e18d1bc49->leave($__internal_62b3cdffa9fb1a2ac3bfce12bb2c47c65c553c0a5c9eb596f14a974e18d1bc49_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_468ef9f7c1f1a0be378800ba818ab1b1e0bb60f1a35df7dd14a5c480f27ba7fc = $this->env->getExtension("native_profiler");
        $__internal_468ef9f7c1f1a0be378800ba818ab1b1e0bb60f1a35df7dd14a5c480f27ba7fc->enter($__internal_468ef9f7c1f1a0be378800ba818ab1b1e0bb60f1a35df7dd14a5c480f27ba7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_468ef9f7c1f1a0be378800ba818ab1b1e0bb60f1a35df7dd14a5c480f27ba7fc->leave($__internal_468ef9f7c1f1a0be378800ba818ab1b1e0bb60f1a35df7dd14a5c480f27ba7fc_prof);

    }

    // line 6
    public function block_footer($context, array $blocks = array())
    {
        $__internal_368fc4f11b15e9be5c760d6d2a490805b1994130c68cc6321b2bcaf8069c8a7e = $this->env->getExtension("native_profiler");
        $__internal_368fc4f11b15e9be5c760d6d2a490805b1994130c68cc6321b2bcaf8069c8a7e->enter($__internal_368fc4f11b15e9be5c760d6d2a490805b1994130c68cc6321b2bcaf8069c8a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_368fc4f11b15e9be5c760d6d2a490805b1994130c68cc6321b2bcaf8069c8a7e->leave($__internal_368fc4f11b15e9be5c760d6d2a490805b1994130c68cc6321b2bcaf8069c8a7e_prof);

    }

    public function getTemplateName()
    {
        return "@Travel/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
