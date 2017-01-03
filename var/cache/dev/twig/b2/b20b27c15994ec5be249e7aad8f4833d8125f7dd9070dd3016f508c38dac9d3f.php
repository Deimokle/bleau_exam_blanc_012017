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
        $__internal_1a85443f729c02fc0316b7fd25c5f6644dffaac57c6fa1e7542a44782e1f93f9 = $this->env->getExtension("native_profiler");
        $__internal_1a85443f729c02fc0316b7fd25c5f6644dffaac57c6fa1e7542a44782e1f93f9->enter($__internal_1a85443f729c02fc0316b7fd25c5f6644dffaac57c6fa1e7542a44782e1f93f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <!-- Compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travel/main.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 17
        echo "
        <!-- APPEL SCRIPT JQUERY on line -->
        <script   src=\"https://code.jquery.com/jquery-2.2.4.js\"   integrity=\"sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=\"   crossorigin=\"anonymous\"></script>
        <!-- Compiled and minified JavaScript -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js\"></script>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "
    </body>
</html>";
        
        $__internal_1a85443f729c02fc0316b7fd25c5f6644dffaac57c6fa1e7542a44782e1f93f9->leave($__internal_1a85443f729c02fc0316b7fd25c5f6644dffaac57c6fa1e7542a44782e1f93f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdbbab3c4dfea56936d84784a434b24d511f811231deb6bcde1149cb6b4c9b31 = $this->env->getExtension("native_profiler");
        $__internal_bdbbab3c4dfea56936d84784a434b24d511f811231deb6bcde1149cb6b4c9b31->enter($__internal_bdbbab3c4dfea56936d84784a434b24d511f811231deb6bcde1149cb6b4c9b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bdbbab3c4dfea56936d84784a434b24d511f811231deb6bcde1149cb6b4c9b31->leave($__internal_bdbbab3c4dfea56936d84784a434b24d511f811231deb6bcde1149cb6b4c9b31_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2161eeb37165ad2072f074aaa8d84402bf33226e8deb6f59db60e938e619fa84 = $this->env->getExtension("native_profiler");
        $__internal_2161eeb37165ad2072f074aaa8d84402bf33226e8deb6f59db60e938e619fa84->enter($__internal_2161eeb37165ad2072f074aaa8d84402bf33226e8deb6f59db60e938e619fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2161eeb37165ad2072f074aaa8d84402bf33226e8deb6f59db60e938e619fa84->leave($__internal_2161eeb37165ad2072f074aaa8d84402bf33226e8deb6f59db60e938e619fa84_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_e6214919c1806229d3adcab8e6d71688ed3fc267490d4d51cdbac4aa50770cd2 = $this->env->getExtension("native_profiler");
        $__internal_e6214919c1806229d3adcab8e6d71688ed3fc267490d4d51cdbac4aa50770cd2->enter($__internal_e6214919c1806229d3adcab8e6d71688ed3fc267490d4d51cdbac4aa50770cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_e6214919c1806229d3adcab8e6d71688ed3fc267490d4d51cdbac4aa50770cd2->leave($__internal_e6214919c1806229d3adcab8e6d71688ed3fc267490d4d51cdbac4aa50770cd2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f34509467261345401f978a33f5ceee6cee2c142759ee9791c5c816e9b99e2d0 = $this->env->getExtension("native_profiler");
        $__internal_f34509467261345401f978a33f5ceee6cee2c142759ee9791c5c816e9b99e2d0->enter($__internal_f34509467261345401f978a33f5ceee6cee2c142759ee9791c5c816e9b99e2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f34509467261345401f978a33f5ceee6cee2c142759ee9791c5c816e9b99e2d0->leave($__internal_f34509467261345401f978a33f5ceee6cee2c142759ee9791c5c816e9b99e2d0_prof);

    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bd973424147439cdcd0508af63b998f25ea09460aca11b993c77d4c93d85f941 = $this->env->getExtension("native_profiler");
        $__internal_bd973424147439cdcd0508af63b998f25ea09460aca11b993c77d4c93d85f941->enter($__internal_bd973424147439cdcd0508af63b998f25ea09460aca11b993c77d4c93d85f941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_bd973424147439cdcd0508af63b998f25ea09460aca11b993c77d4c93d85f941->leave($__internal_bd973424147439cdcd0508af63b998f25ea09460aca11b993c77d4c93d85f941_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1e2e6c4c9e708ebcdc40b601c98497e120b4e05dc76d3e7a153354af1b9119e = $this->env->getExtension("native_profiler");
        $__internal_f1e2e6c4c9e708ebcdc40b601c98497e120b4e05dc76d3e7a153354af1b9119e->enter($__internal_f1e2e6c4c9e708ebcdc40b601c98497e120b4e05dc76d3e7a153354af1b9119e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f1e2e6c4c9e708ebcdc40b601c98497e120b4e05dc76d3e7a153354af1b9119e->leave($__internal_f1e2e6c4c9e708ebcdc40b601c98497e120b4e05dc76d3e7a153354af1b9119e_prof);

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
        return array (  138 => 22,  126 => 16,  115 => 15,  103 => 14,  92 => 6,  80 => 5,  71 => 23,  69 => 22,  62 => 17,  59 => 16,  56 => 15,  54 => 14,  47 => 10,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/*     <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*             {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <!-- Compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('bundles/travel/main.css') }}">*/
/*     </head>*/
/*     <body>*/
/* */
/*         {% block header %} {% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block footer %} {% endblock %}*/
/* */
/*         <!-- APPEL SCRIPT JQUERY on line -->*/
/*         <script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>*/
/*         <!-- Compiled and minified JavaScript -->*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
