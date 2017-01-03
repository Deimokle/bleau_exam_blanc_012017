<?php

/* base.html.twig */
class __TwigTemplate_0bbfd6aa39033a6bb64294a4b36ce4a32a5fa08a6f20fde611cb722eae8c8670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_398c03278feffafbae193f59c0836e629cf61aebef6fe60ad4407f56ef773706 = $this->env->getExtension("native_profiler");
        $__internal_398c03278feffafbae193f59c0836e629cf61aebef6fe60ad4407f56ef773706->enter($__internal_398c03278feffafbae193f59c0836e629cf61aebef6fe60ad4407f56ef773706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 14
        echo "

        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
    </body>
</html>";
        
        $__internal_398c03278feffafbae193f59c0836e629cf61aebef6fe60ad4407f56ef773706->leave($__internal_398c03278feffafbae193f59c0836e629cf61aebef6fe60ad4407f56ef773706_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_843b62d8b3abb8123b12116ae33a5ac4d3655d01ec62368b5b5d3b13a9d36c83 = $this->env->getExtension("native_profiler");
        $__internal_843b62d8b3abb8123b12116ae33a5ac4d3655d01ec62368b5b5d3b13a9d36c83->enter($__internal_843b62d8b3abb8123b12116ae33a5ac4d3655d01ec62368b5b5d3b13a9d36c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_843b62d8b3abb8123b12116ae33a5ac4d3655d01ec62368b5b5d3b13a9d36c83->leave($__internal_843b62d8b3abb8123b12116ae33a5ac4d3655d01ec62368b5b5d3b13a9d36c83_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0bfe01d03a70c4544258a2377fc0c92260575c5d50a2638b8d895694254dca8 = $this->env->getExtension("native_profiler");
        $__internal_e0bfe01d03a70c4544258a2377fc0c92260575c5d50a2638b8d895694254dca8->enter($__internal_e0bfe01d03a70c4544258a2377fc0c92260575c5d50a2638b8d895694254dca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0bfe01d03a70c4544258a2377fc0c92260575c5d50a2638b8d895694254dca8->leave($__internal_e0bfe01d03a70c4544258a2377fc0c92260575c5d50a2638b8d895694254dca8_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_70b2eeaecead84a127fa15e0b734e0157192c7ae49e1a72ade80f7e6f6c11017 = $this->env->getExtension("native_profiler");
        $__internal_70b2eeaecead84a127fa15e0b734e0157192c7ae49e1a72ade80f7e6f6c11017->enter($__internal_70b2eeaecead84a127fa15e0b734e0157192c7ae49e1a72ade80f7e6f6c11017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_70b2eeaecead84a127fa15e0b734e0157192c7ae49e1a72ade80f7e6f6c11017->leave($__internal_70b2eeaecead84a127fa15e0b734e0157192c7ae49e1a72ade80f7e6f6c11017_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d3d179c056750d102717c91c31efd6a39ab2bf641252fcd42e1049d11f43248 = $this->env->getExtension("native_profiler");
        $__internal_6d3d179c056750d102717c91c31efd6a39ab2bf641252fcd42e1049d11f43248->enter($__internal_6d3d179c056750d102717c91c31efd6a39ab2bf641252fcd42e1049d11f43248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d3d179c056750d102717c91c31efd6a39ab2bf641252fcd42e1049d11f43248->leave($__internal_6d3d179c056750d102717c91c31efd6a39ab2bf641252fcd42e1049d11f43248_prof);

    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7dcf37d28e58885fda0688c00e6beaa3e61ffff67f815dae2e32030d43f7bd49 = $this->env->getExtension("native_profiler");
        $__internal_7dcf37d28e58885fda0688c00e6beaa3e61ffff67f815dae2e32030d43f7bd49->enter($__internal_7dcf37d28e58885fda0688c00e6beaa3e61ffff67f815dae2e32030d43f7bd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_7dcf37d28e58885fda0688c00e6beaa3e61ffff67f815dae2e32030d43f7bd49->leave($__internal_7dcf37d28e58885fda0688c00e6beaa3e61ffff67f815dae2e32030d43f7bd49_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c724d1036a6fb4eb530615d3ac7daff834dca80f65bfedc8829ca9a9298ef4bf = $this->env->getExtension("native_profiler");
        $__internal_c724d1036a6fb4eb530615d3ac7daff834dca80f65bfedc8829ca9a9298ef4bf->enter($__internal_c724d1036a6fb4eb530615d3ac7daff834dca80f65bfedc8829ca9a9298ef4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c724d1036a6fb4eb530615d3ac7daff834dca80f65bfedc8829ca9a9298ef4bf->leave($__internal_c724d1036a6fb4eb530615d3ac7daff834dca80f65bfedc8829ca9a9298ef4bf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 16,  117 => 13,  106 => 12,  94 => 11,  83 => 6,  71 => 5,  62 => 17,  60 => 16,  56 => 14,  53 => 13,  50 => 12,  48 => 11,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/*     <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*             {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         {% block header %} {% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block footer %} {% endblock %}*/
/* */
/* */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
