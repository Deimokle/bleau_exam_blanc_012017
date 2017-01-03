<?php

/* TravelBundle:Default:index.html.twig */
class __TwigTemplate_4b507ad7926edfafc57d1a3b1cbdb361816d9dce4bb53280b5549a16b72b6236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Travel/layout.html.twig", "TravelBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Travel/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c24ccdc5a80ad2b658d9761d01f772356ac85ef79ffa0aa7b8e1ff071261699c = $this->env->getExtension("native_profiler");
        $__internal_c24ccdc5a80ad2b658d9761d01f772356ac85ef79ffa0aa7b8e1ff071261699c->enter($__internal_c24ccdc5a80ad2b658d9761d01f772356ac85ef79ffa0aa7b8e1ff071261699c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24ccdc5a80ad2b658d9761d01f772356ac85ef79ffa0aa7b8e1ff071261699c->leave($__internal_c24ccdc5a80ad2b658d9761d01f772356ac85ef79ffa0aa7b8e1ff071261699c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d99d185a0c399b7bfd1d9d172317114ee69d393e39a0fe6b7814bb4de5f8d4ea = $this->env->getExtension("native_profiler");
        $__internal_d99d185a0c399b7bfd1d9d172317114ee69d393e39a0fe6b7814bb4de5f8d4ea->enter($__internal_d99d185a0c399b7bfd1d9d172317114ee69d393e39a0fe6b7814bb4de5f8d4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <p>BONJOUR A TOUS !!</p>
";
        
        $__internal_d99d185a0c399b7bfd1d9d172317114ee69d393e39a0fe6b7814bb4de5f8d4ea->leave($__internal_d99d185a0c399b7bfd1d9d172317114ee69d393e39a0fe6b7814bb4de5f8d4ea_prof);

    }

    public function getTemplateName()
    {
        return "TravelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@Travel/layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <p>BONJOUR A TOUS !!</p>*/
/* {% endblock %}*/
