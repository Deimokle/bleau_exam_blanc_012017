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
        $__internal_44561190993032594021a5d38e17b763f14cdcc08a9eca041ab225a730889acc = $this->env->getExtension("native_profiler");
        $__internal_44561190993032594021a5d38e17b763f14cdcc08a9eca041ab225a730889acc->enter($__internal_44561190993032594021a5d38e17b763f14cdcc08a9eca041ab225a730889acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ExamBlanc/default/layout.html.twig"));

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
        
        $__internal_44561190993032594021a5d38e17b763f14cdcc08a9eca041ab225a730889acc->leave($__internal_44561190993032594021a5d38e17b763f14cdcc08a9eca041ab225a730889acc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31a4b5940b9189078c8954bccfefff8615acd89688da435f1624993057fdf346 = $this->env->getExtension("native_profiler");
        $__internal_31a4b5940b9189078c8954bccfefff8615acd89688da435f1624993057fdf346->enter($__internal_31a4b5940b9189078c8954bccfefff8615acd89688da435f1624993057fdf346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <!-- Compiled and minified CSS -->
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/examblanc/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_31a4b5940b9189078c8954bccfefff8615acd89688da435f1624993057fdf346->leave($__internal_31a4b5940b9189078c8954bccfefff8615acd89688da435f1624993057fdf346_prof);

    }

    // line 16
    public function block_nav_bar($context, array $blocks = array())
    {
        $__internal_cc3c98e897944245ccd750d6fa718424ef3442a73d961da3c5dd985b3d03efcc = $this->env->getExtension("native_profiler");
        $__internal_cc3c98e897944245ccd750d6fa718424ef3442a73d961da3c5dd985b3d03efcc->enter($__internal_cc3c98e897944245ccd750d6fa718424ef3442a73d961da3c5dd985b3d03efcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_bar"));

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
        
        $__internal_cc3c98e897944245ccd750d6fa718424ef3442a73d961da3c5dd985b3d03efcc->leave($__internal_cc3c98e897944245ccd750d6fa718424ef3442a73d961da3c5dd985b3d03efcc_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_2516e4039bd901cd1272846b558d84b85804b18f9fff8833f22981217325d683 = $this->env->getExtension("native_profiler");
        $__internal_2516e4039bd901cd1272846b558d84b85804b18f9fff8833f22981217325d683->enter($__internal_2516e4039bd901cd1272846b558d84b85804b18f9fff8833f22981217325d683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2516e4039bd901cd1272846b558d84b85804b18f9fff8833f22981217325d683->leave($__internal_2516e4039bd901cd1272846b558d84b85804b18f9fff8833f22981217325d683_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6aae1c2a0086198ef232d7d9c06f385563a761a59db881ae2d7fffba5d41a560 = $this->env->getExtension("native_profiler");
        $__internal_6aae1c2a0086198ef232d7d9c06f385563a761a59db881ae2d7fffba5d41a560->enter($__internal_6aae1c2a0086198ef232d7d9c06f385563a761a59db881ae2d7fffba5d41a560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 37
        echo "            <footer class=\"page-footer\">
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        © 2016 Copyright WCS
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_6aae1c2a0086198ef232d7d9c06f385563a761a59db881ae2d7fffba5d41a560->leave($__internal_6aae1c2a0086198ef232d7d9c06f385563a761a59db881ae2d7fffba5d41a560_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05d2f4965b307af0063313e8bb4b27b56c77a68d2d25a71098c37a7bb1e114ef = $this->env->getExtension("native_profiler");
        $__internal_05d2f4965b307af0063313e8bb4b27b56c77a68d2d25a71098c37a7bb1e114ef->enter($__internal_05d2f4965b307af0063313e8bb4b27b56c77a68d2d25a71098c37a7bb1e114ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "            <script src=\"https://code.jquery.com/jquery-3.1.0.min.js\"   integrity=\"sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=\"   crossorigin=\"anonymous\"></script>
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js\"></script>
        ";
        
        $__internal_05d2f4965b307af0063313e8bb4b27b56c77a68d2d25a71098c37a7bb1e114ef->leave($__internal_05d2f4965b307af0063313e8bb4b27b56c77a68d2d25a71098c37a7bb1e114ef_prof);

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
