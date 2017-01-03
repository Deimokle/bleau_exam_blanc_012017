<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_03abf7b9cb1297d3553bb030f1a8fdfe1c735c2df06e80c18217b8fae8cc638f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b2b257c35f0421fa869bed79546ff527fa375d0bcf311433db35d92f6104bf0 = $this->env->getExtension("native_profiler");
        $__internal_1b2b257c35f0421fa869bed79546ff527fa375d0bcf311433db35d92f6104bf0->enter($__internal_1b2b257c35f0421fa869bed79546ff527fa375d0bcf311433db35d92f6104bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b2b257c35f0421fa869bed79546ff527fa375d0bcf311433db35d92f6104bf0->leave($__internal_1b2b257c35f0421fa869bed79546ff527fa375d0bcf311433db35d92f6104bf0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_707e443b1828525ab979b19e058ef61bb5acc7a872759e868ed9f95fa0de81d7 = $this->env->getExtension("native_profiler");
        $__internal_707e443b1828525ab979b19e058ef61bb5acc7a872759e868ed9f95fa0de81d7->enter($__internal_707e443b1828525ab979b19e058ef61bb5acc7a872759e868ed9f95fa0de81d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_707e443b1828525ab979b19e058ef61bb5acc7a872759e868ed9f95fa0de81d7->leave($__internal_707e443b1828525ab979b19e058ef61bb5acc7a872759e868ed9f95fa0de81d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d10eb224a7441edd653a90a5b06711965ab0858066275fd1f97080f60c596de = $this->env->getExtension("native_profiler");
        $__internal_5d10eb224a7441edd653a90a5b06711965ab0858066275fd1f97080f60c596de->enter($__internal_5d10eb224a7441edd653a90a5b06711965ab0858066275fd1f97080f60c596de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d10eb224a7441edd653a90a5b06711965ab0858066275fd1f97080f60c596de->leave($__internal_5d10eb224a7441edd653a90a5b06711965ab0858066275fd1f97080f60c596de_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_da3b253718fae917b091a6ec6bdde3b3c7976a4a77c9ad554360fc6c4c979a29 = $this->env->getExtension("native_profiler");
        $__internal_da3b253718fae917b091a6ec6bdde3b3c7976a4a77c9ad554360fc6c4c979a29->enter($__internal_da3b253718fae917b091a6ec6bdde3b3c7976a4a77c9ad554360fc6c4c979a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_da3b253718fae917b091a6ec6bdde3b3c7976a4a77c9ad554360fc6c4c979a29->leave($__internal_da3b253718fae917b091a6ec6bdde3b3c7976a4a77c9ad554360fc6c4c979a29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
