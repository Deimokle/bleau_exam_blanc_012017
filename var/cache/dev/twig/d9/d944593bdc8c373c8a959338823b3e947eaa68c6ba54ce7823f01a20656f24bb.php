<?php

/* @ExamBlanc/default/index.html.twig */
class __TwigTemplate_b0fff149458799cb4a21c8fb4553bf14d20ae7239cdc041e604b7c0c0ffc747a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@ExamBlanc/default/layout.html.twig", "@ExamBlanc/default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@ExamBlanc/default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db0af86c90faad23ba4e5b131e886b8406fd8895feba2debdab482042a28414 = $this->env->getExtension("native_profiler");
        $__internal_5db0af86c90faad23ba4e5b131e886b8406fd8895feba2debdab482042a28414->enter($__internal_5db0af86c90faad23ba4e5b131e886b8406fd8895feba2debdab482042a28414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ExamBlanc/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db0af86c90faad23ba4e5b131e886b8406fd8895feba2debdab482042a28414->leave($__internal_5db0af86c90faad23ba4e5b131e886b8406fd8895feba2debdab482042a28414_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa784d77d97d1a4146b4a09e39f19926db3614e8b272e57beecd379168dfaf6d = $this->env->getExtension("native_profiler");
        $__internal_fa784d77d97d1a4146b4a09e39f19926db3614e8b272e57beecd379168dfaf6d->enter($__internal_fa784d77d97d1a4146b4a09e39f19926db3614e8b272e57beecd379168dfaf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"intro container\">
        <div class=\"row>\">
            <h1>Examen Blanc - ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h1>
            <p>L'examen blanc technique se découpe en deux étapes, tu peux réaliser les deux étapes distinctement les unes des autres, elles ne sont pas liées.</p>
            <p>La partie sur Symfony / MVC / Intégration se decoupe en plusieurs étapes.</p>
            <p>Même si tu ne parviens pas à réaliser la totalité de l'étape, laisse le code, il manque parfois peu de chose pour que ce soit fonctionnel.</p>
            <p><span>Petite précision, nous sommes sur la version 3.1 de Symfony</span></p>
            <div class=\"row attention line_divider\">
                <div class=\"col m2\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/examblanc/images/attention.png"), "html", null, true);
        echo "\" alt=\"attention\"/>
                </div>
                <div class=\"col m8\">
                    <p>Avant toute chose, crée toi une branche sur git portant ton nom, c'est sur cette dernière que tu travailleras, une fois le travail effectué tu pousseras ton travail dessus</p>
                </div>
                <div class=\"col m2\">
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/examblanc/images/attention.png"), "html", null, true);
        echo "\" alt=\"attention\"/>
                </div>
            </div>
        </div>
        <div class=\"row etapes\">
            <div class=\"col m6\">
                <h4>Algorithmique</h4>
                <div><a class=\"waves-effect waves-light btn\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("exam_blanc_algo");
        echo "\">C'est parti</a></div>
            </div>
            <div class=\"col m6\">
                <h4>Symfony / MVC / Intégration</h4>
                <div><a class=\"waves-effect waves-light btn\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("exam_blanc_sf2");
        echo "\">C'est parti</a></div>
            </div>
        </div>
    </div>

";
        
        $__internal_fa784d77d97d1a4146b4a09e39f19926db3614e8b272e57beecd379168dfaf6d->leave($__internal_fa784d77d97d1a4146b4a09e39f19926db3614e8b272e57beecd379168dfaf6d_prof);

    }

    public function getTemplateName()
    {
        return "@ExamBlanc/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  74 => 27,  64 => 20,  55 => 14,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@ExamBlanc/default/layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="intro container">*/
/*         <div class="row>">*/
/*             <h1>Examen Blanc - {{ "now"|date("d/m/Y") }}</h1>*/
/*             <p>L'examen blanc technique se découpe en deux étapes, tu peux réaliser les deux étapes distinctement les unes des autres, elles ne sont pas liées.</p>*/
/*             <p>La partie sur Symfony / MVC / Intégration se decoupe en plusieurs étapes.</p>*/
/*             <p>Même si tu ne parviens pas à réaliser la totalité de l'étape, laisse le code, il manque parfois peu de chose pour que ce soit fonctionnel.</p>*/
/*             <p><span>Petite précision, nous sommes sur la version 3.1 de Symfony</span></p>*/
/*             <div class="row attention line_divider">*/
/*                 <div class="col m2">*/
/*                     <img src="{{ asset('bundles/examblanc/images/attention.png') }}" alt="attention"/>*/
/*                 </div>*/
/*                 <div class="col m8">*/
/*                     <p>Avant toute chose, crée toi une branche sur git portant ton nom, c'est sur cette dernière que tu travailleras, une fois le travail effectué tu pousseras ton travail dessus</p>*/
/*                 </div>*/
/*                 <div class="col m2">*/
/*                     <img src="{{ asset('bundles/examblanc/images/attention.png') }}" alt="attention"/>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row etapes">*/
/*             <div class="col m6">*/
/*                 <h4>Algorithmique</h4>*/
/*                 <div><a class="waves-effect waves-light btn" href="{{ path('exam_blanc_algo') }}">C'est parti</a></div>*/
/*             </div>*/
/*             <div class="col m6">*/
/*                 <h4>Symfony / MVC / Intégration</h4>*/
/*                 <div><a class="waves-effect waves-light btn" href="{{ path('exam_blanc_sf2') }}">C'est parti</a></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
