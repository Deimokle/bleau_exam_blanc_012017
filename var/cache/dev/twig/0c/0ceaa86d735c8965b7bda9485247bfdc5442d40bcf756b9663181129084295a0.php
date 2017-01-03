<?php

/* @ExamBlanc/SF2/index.html.twig */
class __TwigTemplate_a7aac80a1b54386114b3435accbb5ccaa625055fbe02bea6d565b06236060ca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@ExamBlanc/default/layout.html.twig", "@ExamBlanc/SF2/index.html.twig", 1);
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
        $__internal_56de0cc51115d75f00139325eff76d4185d5973383124465261477db5075c8e6 = $this->env->getExtension("native_profiler");
        $__internal_56de0cc51115d75f00139325eff76d4185d5973383124465261477db5075c8e6->enter($__internal_56de0cc51115d75f00139325eff76d4185d5973383124465261477db5075c8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ExamBlanc/SF2/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56de0cc51115d75f00139325eff76d4185d5973383124465261477db5075c8e6->leave($__internal_56de0cc51115d75f00139325eff76d4185d5973383124465261477db5075c8e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb96cb5487e18298e0432651bccb78468bf9661c145ebe84fbe6f894b9d9f7d0 = $this->env->getExtension("native_profiler");
        $__internal_eb96cb5487e18298e0432651bccb78468bf9661c145ebe84fbe6f894b9d9f7d0->enter($__internal_eb96cb5487e18298e0432651bccb78468bf9661c145ebe84fbe6f894b9d9f7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container sf2\">
        <div class=\"row ennonce\">
            <h1>Symfony / MVC / Intégration</h1>
            <h3>Enoncé</h3>
            <p>En tant qu’organisateur de voyages, tu souhaites connaître la disponibilité de chambres dans un large choix d’hôtels.</p>
            <p>En t’aidant du fichier SQL joint, contenant une liste d'hôtels, leur capacité d’accueil et leur taux de remplissage actuel par chambre, tu vas devoir:</p>
            <ul>
                <li>Créer une interface web afin de saisir simplement le nombre de chambres que tu souhaiterais réserver</li>
                <li>Afficher en retour la liste des hôtels pouvant accueillir ce nombre de personnes</li>
            </ul>
            <p>Le tout avec un minimum de mise en forme</p>
            <p>Bonus: une recherche avancée (par nombre d’étoiles, par ville…)</p>
            <h5>Help</h5>
            <ul>
                <li>Le fichier SQL se trouve à la racine du projet dans le dossier BDD.</li>
                <li>Si le champ book de la table room est à 1, c'est que la chambre n'est pas disponible.</li>
                <li><a href=\"https://www.liquidweb.com/kb/create-a-mysql-database-on-linux-via-command-line/\" target=\"_blank\">Create DATABASE</a></li>
                <li><a href=\"http://stackoverflow.com/questions/17666249/how-to-import-an-sql-file-using-the-command-line-in-mysql\" target=\"_blank\">Import DATABASE</a></li>
            </ul>
        </div>
        <div class=\"instruction row\">
            <p>Crée un nouveau bundle nommé \"TravelBundle\"</p>
            <p>Tu es libre d'utiliser le/les frameworks css/js de ton choix, aucune librairie n'est chargée</p>
            <p>Tu peux également utiliser le fichier base.html.twig si tu en as besoin, tout le reste doit se trouver dans ton bundle</p>
            <p>L'interface que tu vas créer devra être consultable par via le path \"/travel\"</p>
            <p>Pour la suite je te laisse faire !</p>
            <p>Bon courage</p>
        </div>
        <div class=\"row\">
            <div class=\"col m12 button_homepage\">
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("exam_blanc_homepage");
        echo "\" class=\"waves-effect waves-light btn\">Retour à la page d'accueil</a>
            </div>
        </div>
    </div>

";
        
        $__internal_eb96cb5487e18298e0432651bccb78468bf9661c145ebe84fbe6f894b9d9f7d0->leave($__internal_eb96cb5487e18298e0432651bccb78468bf9661c145ebe84fbe6f894b9d9f7d0_prof);

    }

    public function getTemplateName()
    {
        return "@ExamBlanc/SF2/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 35,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@ExamBlanc/default/layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container sf2">*/
/*         <div class="row ennonce">*/
/*             <h1>Symfony / MVC / Intégration</h1>*/
/*             <h3>Enoncé</h3>*/
/*             <p>En tant qu’organisateur de voyages, tu souhaites connaître la disponibilité de chambres dans un large choix d’hôtels.</p>*/
/*             <p>En t’aidant du fichier SQL joint, contenant une liste d'hôtels, leur capacité d’accueil et leur taux de remplissage actuel par chambre, tu vas devoir:</p>*/
/*             <ul>*/
/*                 <li>Créer une interface web afin de saisir simplement le nombre de chambres que tu souhaiterais réserver</li>*/
/*                 <li>Afficher en retour la liste des hôtels pouvant accueillir ce nombre de personnes</li>*/
/*             </ul>*/
/*             <p>Le tout avec un minimum de mise en forme</p>*/
/*             <p>Bonus: une recherche avancée (par nombre d’étoiles, par ville…)</p>*/
/*             <h5>Help</h5>*/
/*             <ul>*/
/*                 <li>Le fichier SQL se trouve à la racine du projet dans le dossier BDD.</li>*/
/*                 <li>Si le champ book de la table room est à 1, c'est que la chambre n'est pas disponible.</li>*/
/*                 <li><a href="https://www.liquidweb.com/kb/create-a-mysql-database-on-linux-via-command-line/" target="_blank">Create DATABASE</a></li>*/
/*                 <li><a href="http://stackoverflow.com/questions/17666249/how-to-import-an-sql-file-using-the-command-line-in-mysql" target="_blank">Import DATABASE</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="instruction row">*/
/*             <p>Crée un nouveau bundle nommé "TravelBundle"</p>*/
/*             <p>Tu es libre d'utiliser le/les frameworks css/js de ton choix, aucune librairie n'est chargée</p>*/
/*             <p>Tu peux également utiliser le fichier base.html.twig si tu en as besoin, tout le reste doit se trouver dans ton bundle</p>*/
/*             <p>L'interface que tu vas créer devra être consultable par via le path "/travel"</p>*/
/*             <p>Pour la suite je te laisse faire !</p>*/
/*             <p>Bon courage</p>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col m12 button_homepage">*/
/*                 <a href="{{ path('exam_blanc_homepage') }}" class="waves-effect waves-light btn">Retour à la page d'accueil</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
