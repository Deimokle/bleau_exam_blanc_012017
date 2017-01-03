<?php

/* @ExamBlanc/default/layout.html.twig */
class __TwigTemplate_afa7791a84e1a499090fceef0c37c82c24367e5a44ef2bf0a45fdfd6b21f37cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a09e86e098517a0d4146f933eeb10e6d35f66a8c25c4428fcdfbb1a101fcb79c = $this->env->getExtension("native_profiler");
        $__internal_a09e86e098517a0d4146f933eeb10e6d35f66a8c25c4428fcdfbb1a101fcb79c->enter($__internal_a09e86e098517a0d4146f933eeb10e6d35f66a8c25c4428fcdfbb1a101fcb79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ExamBlanc/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>W.C.S - Examen Blanc</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"https://avatars1.githubusercontent.com/u/8874047?v=3&s=200\" />
    </head>

    <body id=\"body\">
        ";
        // line 16
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>";
        
        $__internal_a09e86e098517a0d4146f933eeb10e6d35f66a8c25c4428fcdfbb1a101fcb79c->leave($__internal_a09e86e098517a0d4146f933eeb10e6d35f66a8c25c4428fcdfbb1a101fcb79c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f531c54bb27ad48a9902ca990878d7f83bc4cded4dfd33565d1070d0c76fd55c = $this->env->getExtension("native_profiler");
        $__internal_f531c54bb27ad48a9902ca990878d7f83bc4cded4dfd33565d1070d0c76fd55c->enter($__internal_f531c54bb27ad48a9902ca990878d7f83bc4cded4dfd33565d1070d0c76fd55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <!-- Compiled and minified CSS -->
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/examblanc/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_f531c54bb27ad48a9902ca990878d7f83bc4cded4dfd33565d1070d0c76fd55c->leave($__internal_f531c54bb27ad48a9902ca990878d7f83bc4cded4dfd33565d1070d0c76fd55c_prof);

    }

    // line 16
    public function block_nav_bar($context, array $blocks = array())
    {
        $__internal_cf780f7b9c5eca2a287f462875063afe2001877d8f1a3244704ec78d2ebc46c6 = $this->env->getExtension("native_profiler");
        $__internal_cf780f7b9c5eca2a287f462875063afe2001877d8f1a3244704ec78d2ebc46c6->enter($__internal_cf780f7b9c5eca2a287f462875063afe2001877d8f1a3244704ec78d2ebc46c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_bar"));

        // line 17
        echo "            <ul id=\"dropdown1\" class=\"dropdown-content\">
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("exam_blanc_homepage");
        echo "\">Accueil</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("exam_blanc_algo");
        echo "\">Algorithmique</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("exam_blanc_sf2");
        echo "\">Symfony / MVC / Intégration</a></li>
            </ul>
            <nav>
                <div class=\"nav-wrapper\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("exam_blanc_homepage");
        echo "\" class=\"brand-logo center nav_bar_logo\"><img src=\"https://avatars1.githubusercontent.com/u/8874047?v=3&s=200\" alt=\"logo wcs\"/></a>
                    <ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\">
                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Menu</a></li>
                    </ul>
                </div>
            </nav>
        ";
        
        $__internal_cf780f7b9c5eca2a287f462875063afe2001877d8f1a3244704ec78d2ebc46c6->leave($__internal_cf780f7b9c5eca2a287f462875063afe2001877d8f1a3244704ec78d2ebc46c6_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6b05062e5439d0d9bc08ae5473de137526591d6ff9df7a4933fcd234c7633ef = $this->env->getExtension("native_profiler");
        $__internal_c6b05062e5439d0d9bc08ae5473de137526591d6ff9df7a4933fcd234c7633ef->enter($__internal_c6b05062e5439d0d9bc08ae5473de137526591d6ff9df7a4933fcd234c7633ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6b05062e5439d0d9bc08ae5473de137526591d6ff9df7a4933fcd234c7633ef->leave($__internal_c6b05062e5439d0d9bc08ae5473de137526591d6ff9df7a4933fcd234c7633ef_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0a7ae08986e54279f0feecf585b103296e7e20db15e59146ece4b4494fc00337 = $this->env->getExtension("native_profiler");
        $__internal_0a7ae08986e54279f0feecf585b103296e7e20db15e59146ece4b4494fc00337->enter($__internal_0a7ae08986e54279f0feecf585b103296e7e20db15e59146ece4b4494fc00337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 37
        echo "            <footer class=\"page-footer\">
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        © 2016 Copyright WCS
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_0a7ae08986e54279f0feecf585b103296e7e20db15e59146ece4b4494fc00337->leave($__internal_0a7ae08986e54279f0feecf585b103296e7e20db15e59146ece4b4494fc00337_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a14130bf40f93cfcfc74aceaf762dbb18ccaa4b0c129eea02c6ce218d929f33 = $this->env->getExtension("native_profiler");
        $__internal_2a14130bf40f93cfcfc74aceaf762dbb18ccaa4b0c129eea02c6ce218d929f33->enter($__internal_2a14130bf40f93cfcfc74aceaf762dbb18ccaa4b0c129eea02c6ce218d929f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "            <script src=\"https://code.jquery.com/jquery-3.1.0.min.js\"   integrity=\"sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=\"   crossorigin=\"anonymous\"></script>
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js\"></script>
        ";
        
        $__internal_2a14130bf40f93cfcfc74aceaf762dbb18ccaa4b0c129eea02c6ce218d929f33->leave($__internal_2a14130bf40f93cfcfc74aceaf762dbb18ccaa4b0c129eea02c6ce218d929f33_prof);

    }

    public function getTemplateName()
    {
        return "@ExamBlanc/default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 47,  158 => 46,  144 => 37,  138 => 36,  127 => 34,  113 => 26,  106 => 22,  101 => 20,  96 => 18,  93 => 17,  87 => 16,  78 => 10,  73 => 7,  67 => 6,  59 => 51,  57 => 46,  54 => 45,  52 => 36,  49 => 35,  47 => 34,  44 => 33,  42 => 16,  36 => 12,  34 => 6,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>W.C.S - Examen Blanc</title>*/
/*         {% block stylesheets %}*/
/*             <!-- Compiled and minified CSS -->*/
/*             <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/examblanc/css/style.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="https://avatars1.githubusercontent.com/u/8874047?v=3&s=200" />*/
/*     </head>*/
/* */
/*     <body id="body">*/
/*         {% block nav_bar %}*/
/*             <ul id="dropdown1" class="dropdown-content">*/
/*                 <li><a href="{{ path('exam_blanc_homepage') }}">Accueil</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="{{ path('exam_blanc_algo') }}">Algorithmique</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="{{ path('exam_blanc_sf2') }}">Symfony / MVC / Intégration</a></li>*/
/*             </ul>*/
/*             <nav>*/
/*                 <div class="nav-wrapper">*/
/*                     <a href="{{ path('exam_blanc_homepage') }}" class="brand-logo center nav_bar_logo"><img src="https://avatars1.githubusercontent.com/u/8874047?v=3&s=200" alt="logo wcs"/></a>*/
/*                     <ul id="nav-mobile" class="left hide-on-med-and-down">*/
/*                         <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Menu</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </nav>*/
/*         {% endblock %}*/
/* */
/*         {% block body %}{% endblock %}*/
/* */
/*         {% block footer %}*/
/*             <footer class="page-footer">*/
/*                 <div class="footer-copyright">*/
/*                     <div class="container">*/
/*                         © 2016 Copyright WCS*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>*/
/*             <!-- Compiled and minified JavaScript -->*/
/*             <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
