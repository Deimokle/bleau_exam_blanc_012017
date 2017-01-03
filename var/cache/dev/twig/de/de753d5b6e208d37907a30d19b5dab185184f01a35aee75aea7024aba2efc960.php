<?php

/* ExamBlancBundle:Algorithmique:index.html.twig */
class __TwigTemplate_b9650ba12cb0dbccb508bcbeb00e304bebccc2381098414a218c738138ec9dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@ExamBlanc/default/layout.html.twig", "ExamBlancBundle:Algorithmique:index.html.twig", 1);
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
        $__internal_9cafea4bda9d89d818dcebf563c835b6e19d7260e1c364753cdea5039b3e3f2a = $this->env->getExtension("native_profiler");
        $__internal_9cafea4bda9d89d818dcebf563c835b6e19d7260e1c364753cdea5039b3e3f2a->enter($__internal_9cafea4bda9d89d818dcebf563c835b6e19d7260e1c364753cdea5039b3e3f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ExamBlancBundle:Algorithmique:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cafea4bda9d89d818dcebf563c835b6e19d7260e1c364753cdea5039b3e3f2a->leave($__internal_9cafea4bda9d89d818dcebf563c835b6e19d7260e1c364753cdea5039b3e3f2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1d871a29cdd6b78f113650f09f4f4ec090d4dcbfebe89f3b5570c38142473d0 = $this->env->getExtension("native_profiler");
        $__internal_b1d871a29cdd6b78f113650f09f4f4ec090d4dcbfebe89f3b5570c38142473d0->enter($__internal_b1d871a29cdd6b78f113650f09f4f4ec090d4dcbfebe89f3b5570c38142473d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"algo container\">
        <div class=\"row>\">
            <h1>Algorithmique</h1>
            <p>Bienvenu sur le test d'algorithmique</p>
            <p>Ci-dessous deux sujets d'algo, du plus facile au plus difficile.</p>
            <p>Ouvre le projet avec PHP Storm et rend toi dans le controlleur \"AlgoController\", c'est ici que tu devras travailler.</p>
            <p>Tu n'as normalement rien à modifier dans les autres fichiers pour cette étape</p>
            <p>Si ton algo est bon, les tests passent au vert.</p>
            <p>Bon courage</p>
        </div>

        <div class=\"row\">
            <div class=\"row exo\">
                <div class=\"row ennoncé\">
                    <h3>Exercice 1</h3>
                    <p>Créer une fonction qui trie les lettres par fréquence d'utilisation (seules les lettres de a-z sont à prendre en compte)</p>
                    <p>On ne prend en compte que les lettres présentes dans la phrase.</p>
                    <p>Les majuscules et minuscules ne sont pas différenciées.</p>
                    <p>Les lettres accentuées sont à ignorer</p>
                    <p><strong>En entrée,</strong> une chaine de caractères (la phrase à analyser)</p>
                    <p><strong>En sortie,</strong> un tableau des résultats, triés par lettres, les plus utilisées en premier.</p>
                </div>
                <div class=\"row exemples line_divider\">
                    <div class=\"col m6\">
                        <strong>Exemple 1 :</strong>
                        <p><strong>Entrée :</strong> Seul, on va plus vite, ensemble, on va plus loin</p>
                        <p>
                            <strong>Sortie:</strong> array:13 [<br>
                            <span class=\"marge\">\"e\" => 5<br></span>
                            <span class=\"marge\">\"l\" => 5<br></span>
                            <span class=\"marge\">\"s\" => 4<br></span>
                            <span class=\"marge\">\"n\" => 4<br></span>
                            <span class=\"marge\">\"u\" => 3<br></span>
                            <span class=\"marge\">\"o\" => 3<br></span>
                            <span class=\"marge\">\"v\" => 3<br></span>
                            <span class=\"marge\">\"a\" => 2<br></span>
                            <span class=\"marge\">\"p\" => 2<br></span>
                            <span class=\"marge\">\"i\" => 2<br></span>
                            <span class=\"marge\">\"t\" => 1<br></span>
                            <span class=\"marge\">\"m\" => 1<br></span>
                            <span class=\"marge\">\"b\" => 1 ]<br></span>
                        </p>
                    </div>
                    <div class=\"col m6\">
                        <strong>Exemple 2 :</strong>
                        <p><strong>Entrée :</strong> Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés.</p>
                        <p>
                            <strong>Sortie:</strong> array:16 [<br>
                            <span class=\"marge\">\"e\" => 14<br></span>
                            <span class=\"marge\">\"u\" => 7<br></span>
                            <span class=\"marge\">\"t\" => 7<br></span>
                            <span class=\"marge\">\"s\" => 7<br></span>
                            <span class=\"marge\">\"a\" => 6<br></span>
                            <span class=\"marge\">\"n\" => 6<br></span>
                            <span class=\"marge\">\"i\" => 5<br></span>
                            <span class=\"marge\">\"o\" => 4<br></span>
                            <span class=\"marge\">\"p\" => 4<br></span>
                            <span class=\"marge\">\"d\" => 4<br></span>
                            <span class=\"marge\">\"r\" => 3<br></span>
                            <span class=\"marge\">\"g\" => 2<br></span>
                            <span class=\"marge\">\"b\" => 2<br></span>
                            <span class=\"marge\">\"c\" => 2<br></span>
                            <span class=\"marge\">\"m\" => 2<br></span>
                            <span class=\"marge\">\"x\" => 1 ]</span>
                        </p>
                    </div>
                </div>
                <div class=\"row\">
                    <h5>Lancer les tests:</h5>
                    <p>Dans le dossier de votre projet, via le terminal, exécuter la commande <span class=\"commande_style\">phpunit tests/ExamBlancBundle/Controller/Exercice1ControllerTest.php</span></p>
                </div>
                <div class=\"row\">
                    <h5>Fonctions utiles, mais non obligatoires</h5>
                    <ul>
                        <li><a href=\"http://php.net/manual/fr/function.str-split.php\" target=\"_blank\">str_split</a></li>
                        <li><a href=\"http://php.net/manual/fr/function.strtolower.php\" target=\"_blank\">strtolower</a></li>
                        <li><a href=\"http://php.net/manual/fr/function.ctype-alnum.php\" target=\"_blank\">ctype_alnum</a></li>
                        <li><a href=\"http://php.net/manual/fr/function.preg-match.php\" target=\"_blank\">preg_match</a></li>
                        <li><a href=\"http://php.net/manual/fr/function.array-key-exists.php\" target=\"_blank\">array_key_exists</a></li>
                        <li><a href=\"http://php.net/manual/fr/function.arsort.php\" target=\"_blank\">arsort</a></li>
                    </ul>
                </div>
            </div>

            <div class=\"exo row\">
                <div class=\"row ennoncé\">
                    <h3>Exercice 2</h3>
                    <p>Créer une fonction qui calcule le total d'un panier en fonction des règles suivantes :</p>
                    <p>Le résultat doit intégrer: </p>
                    <ul>
                        <li>Le total TTC</li>
                        <li>Le total HT (avec remise)</li>
                        <li>Le total de remise: calculé sur le total HT</li>
                        <li>Le total TVA à 5% (code tva 1): calculé sur le total après remise</li>
                        <li>Le total TVA à 20% (code tva 2): calculé sur le total après remise</li>
                    </ul>
                    <p>Si un même article est commandé au moins 3 fois, on applique 5% de remise sur le total HT de la ligne</p>
                    <p>Si un même article est commandé au moins 10 fois, on applique 10% de remise sur le total HT de la ligne</p>
                    <p>Les resultats devront être affichés en monétaire (deux chiffres après la virgule). L'arrondi se fera le plus tard possible afin de garder une précision maximale. </p>
                    <p><strong>En entrée,</strong> un tableau contenant les produits.</p>
                    <p><strong>En sortie,</strong> un tableau des résultats.</p>
                </div>
                <div class=\"row exemples\">
                    <div class=\"row line_divider\">
                        <h5>Exemple panier 1</h5>
                        <div class=\"col m6\">
                            <p><strong>Entrée: </strong></p>
                            <p>
                                array( <br>
                                <span class=\"marge\">array(<br></span>
                                <span class=\"marge_double\">'name' \t=> 'figurine maitre yoda',<br></span>
                                <span class=\"marge_double\">'price_ht'\t=> 47.50,<br></span>
                                <span class=\"marge_double\">'code_tva'\t=> 2,<br></span>
                                <span class=\"marge_double\">'qty'\t\t=> 3<br></span>
                                <span class=\"marge\">),<br></span>
                                <span class=\"marge\">array(<br></span>
                                <span class=\"marge_double\">'name' \t=> 'Chewing gum Chewbaka',<br></span>
                                <span class=\"marge_double\">'price_ht'\t=> 1.45,<br></span>
                                <span class=\"marge_double\">'code_tva'\t=> 1,<br></span>
                                <span class=\"marge_double\">'qty'\t\t=> 15<br></span>
                                <span class=\"marge\">),<br></span>
                                <span class=\"marge\">array(<br></span>
                                <span class=\"marge_double\">'name' \t=> 'Taille crayon R2D2',<br></span>
                                <span class=\"marge_double\">'price_ht'\t=> 7.80,<br></span>
                                <span class=\"marge_double\">'code_tva'\t=> 2,<br></span>
                                <span class=\"marge_double\">'qty'\t\t=> 2<br></span>
                                <span class=\"marge\">),<br></span>
                                <span class=\"marge\">array(<br></span>
                                <span class=\"marge_double\">'name' \t=> 'Boules de pétanque BB-8 (x2)',<br></span>
                                <span class=\"marge_double\">'price_ht'\t=> 34.80,<br></span>
                                <span class=\"marge_double\">'code_tva'\t=> 2,<br></span>
                                <span class=\"marge_double\">'qty'\t\t=> 3<br></span>
                                <span class=\"marge\">),<br></span>
                                );
                            </p>
                        </div>
                        <div class=\"col m6\">
                            <p><strong>Sortie: </strong></p>
                            <p>
                                Array(<br>
                                <span class=\"marge\">[total_ht] => 269.73<br></span>
                                <span class=\"marge\">[total_discount] => 14.52<br></span>
                                <span class=\"marge\">[total_tva5] => 0.98<br></span>
                                <span class=\"marge\">[total_tva20] => 50.03<br></span>
                                <span class=\"marge\">[total_ttc] => 320.74<br></span>
                                )
                            </p>
                        </div>
                    </div>
                    <div class=\"row line_divider\">
                        <h5>Exemple panier 2</h5>
                        <div class=\"col m6\">
                            <p><strong>Entrée: </strong></p>
                            <p>
                                array( <br>
                                <span class=\"marge\">array(<br></span>
                                <span class=\"marge_double\">'name' \t=> 'Vaisseau mère empire lego',<br></span>
                                <span class=\"marge_double\">'price_ht'\t=> 447.50,<br></span>
                                <span class=\"marge_double\">'code_tva'\t=> 2,<br></span>
                                <span class=\"marge_double\">'qty'\t\t=> 1<br></span>
                                <span class=\"marge\">),<br></span>
                                <span class=\"marge\">array(<br></span>
                                <span class=\"marge_double\">'name' \t=> 'Costume 6PO',<br></span>
                                <span class=\"marge_double\">'price_ht'\t=> 99.95,<br></span>
                                <span class=\"marge_double\">'code_tva'\t=> 2,<br></span>
                                <span class=\"marge_double\">'qty'\t\t=> 1<br></span>
                                <span class=\"marge\">),<br></span>
                                <span class=\"marge\">array(<br></span>
                                <span class=\"marge_double\">'name' \t=> 'recharge distributeur bonbon pez Ewoks',<br></span>
                                <span class=\"marge_double\">'price_ht'\t=> 1.15,<br></span>
                                <span class=\"marge_double\">'code_tva'\t=> 1,<br></span>
                                <span class=\"marge_double\">'qty'\t\t=> 20<br></span>
                                <span class=\"marge\">),<br></span>
                                <span class=\"marge\">array(<br></span>
                                <span class=\"marge_double\">'name' \t=> 'Lampe de bureau étoile de la mort',<br></span>
                                <span class=\"marge_double\">'price_ht'\t=> 52.25,<br></span>
                                <span class=\"marge_double\">'code_tva'\t=> 2,<br></span>
                                <span class=\"marge_double\">'qty'\t\t=> 3<br></span>
                                <span class=\"marge\">),<br></span>
                                );
                            </p>
                        </div>
                        <div class=\"col m6\">
                            <p><strong>Sortie: </strong></p>
                            <p>
                                Array(<br>
                                <span class=\"marge\">[total_ht] => 717.06<br></span>
                                <span class=\"marge\">[total_discount] => 10.14<br></span>
                                <span class=\"marge\">[total_tva5] => 1.04<br></span>
                                <span class=\"marge\">[total_tva20] => 139.27<br></span>
                                <span class=\"marge\">[total_ttc] => 857.37<br></span>
                                )
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <h5>Lancer les tests:</h5>
                    <p>Dans le dossier de votre projet, via le terminal, exécuter la commande <span class=\"commande_style\">phpunit tests/ExamBlancBundle/Controller/Exercice2ControllerTest.php</span></p>
                </div>
                <div class=\"row\">
                    <h5>Fonctions utiles</h5>
                    <ul>
                        <li><a href=\"http://php.net/manual/fr/function.round.php\" target=\"_blank\">round</a></li>
                        <li><a href=\"http://www.capte-les-maths.com/tva/tva.php#ancre9\" target=\"_blank\">Calculer une TVA</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"button_homepage\">
                <a href=\"";
        // line 217
        echo $this->env->getExtension('routing')->getPath("exam_blanc_homepage");
        echo "\" class=\"waves-effect waves-light btn\">Retour à la page d'accueil</a>
            </div>
        </div>
    </div>
";
        
        $__internal_b1d871a29cdd6b78f113650f09f4f4ec090d4dcbfebe89f3b5570c38142473d0->leave($__internal_b1d871a29cdd6b78f113650f09f4f4ec090d4dcbfebe89f3b5570c38142473d0_prof);

    }

    public function getTemplateName()
    {
        return "ExamBlancBundle:Algorithmique:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 217,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@ExamBlanc/default/layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="algo container">*/
/*         <div class="row>">*/
/*             <h1>Algorithmique</h1>*/
/*             <p>Bienvenu sur le test d'algorithmique</p>*/
/*             <p>Ci-dessous deux sujets d'algo, du plus facile au plus difficile.</p>*/
/*             <p>Ouvre le projet avec PHP Storm et rend toi dans le controlleur "AlgoController", c'est ici que tu devras travailler.</p>*/
/*             <p>Tu n'as normalement rien à modifier dans les autres fichiers pour cette étape</p>*/
/*             <p>Si ton algo est bon, les tests passent au vert.</p>*/
/*             <p>Bon courage</p>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="row exo">*/
/*                 <div class="row ennoncé">*/
/*                     <h3>Exercice 1</h3>*/
/*                     <p>Créer une fonction qui trie les lettres par fréquence d'utilisation (seules les lettres de a-z sont à prendre en compte)</p>*/
/*                     <p>On ne prend en compte que les lettres présentes dans la phrase.</p>*/
/*                     <p>Les majuscules et minuscules ne sont pas différenciées.</p>*/
/*                     <p>Les lettres accentuées sont à ignorer</p>*/
/*                     <p><strong>En entrée,</strong> une chaine de caractères (la phrase à analyser)</p>*/
/*                     <p><strong>En sortie,</strong> un tableau des résultats, triés par lettres, les plus utilisées en premier.</p>*/
/*                 </div>*/
/*                 <div class="row exemples line_divider">*/
/*                     <div class="col m6">*/
/*                         <strong>Exemple 1 :</strong>*/
/*                         <p><strong>Entrée :</strong> Seul, on va plus vite, ensemble, on va plus loin</p>*/
/*                         <p>*/
/*                             <strong>Sortie:</strong> array:13 [<br>*/
/*                             <span class="marge">"e" => 5<br></span>*/
/*                             <span class="marge">"l" => 5<br></span>*/
/*                             <span class="marge">"s" => 4<br></span>*/
/*                             <span class="marge">"n" => 4<br></span>*/
/*                             <span class="marge">"u" => 3<br></span>*/
/*                             <span class="marge">"o" => 3<br></span>*/
/*                             <span class="marge">"v" => 3<br></span>*/
/*                             <span class="marge">"a" => 2<br></span>*/
/*                             <span class="marge">"p" => 2<br></span>*/
/*                             <span class="marge">"i" => 2<br></span>*/
/*                             <span class="marge">"t" => 1<br></span>*/
/*                             <span class="marge">"m" => 1<br></span>*/
/*                             <span class="marge">"b" => 1 ]<br></span>*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="col m6">*/
/*                         <strong>Exemple 2 :</strong>*/
/*                         <p><strong>Entrée :</strong> Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés.</p>*/
/*                         <p>*/
/*                             <strong>Sortie:</strong> array:16 [<br>*/
/*                             <span class="marge">"e" => 14<br></span>*/
/*                             <span class="marge">"u" => 7<br></span>*/
/*                             <span class="marge">"t" => 7<br></span>*/
/*                             <span class="marge">"s" => 7<br></span>*/
/*                             <span class="marge">"a" => 6<br></span>*/
/*                             <span class="marge">"n" => 6<br></span>*/
/*                             <span class="marge">"i" => 5<br></span>*/
/*                             <span class="marge">"o" => 4<br></span>*/
/*                             <span class="marge">"p" => 4<br></span>*/
/*                             <span class="marge">"d" => 4<br></span>*/
/*                             <span class="marge">"r" => 3<br></span>*/
/*                             <span class="marge">"g" => 2<br></span>*/
/*                             <span class="marge">"b" => 2<br></span>*/
/*                             <span class="marge">"c" => 2<br></span>*/
/*                             <span class="marge">"m" => 2<br></span>*/
/*                             <span class="marge">"x" => 1 ]</span>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <h5>Lancer les tests:</h5>*/
/*                     <p>Dans le dossier de votre projet, via le terminal, exécuter la commande <span class="commande_style">phpunit tests/ExamBlancBundle/Controller/Exercice1ControllerTest.php</span></p>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <h5>Fonctions utiles, mais non obligatoires</h5>*/
/*                     <ul>*/
/*                         <li><a href="http://php.net/manual/fr/function.str-split.php" target="_blank">str_split</a></li>*/
/*                         <li><a href="http://php.net/manual/fr/function.strtolower.php" target="_blank">strtolower</a></li>*/
/*                         <li><a href="http://php.net/manual/fr/function.ctype-alnum.php" target="_blank">ctype_alnum</a></li>*/
/*                         <li><a href="http://php.net/manual/fr/function.preg-match.php" target="_blank">preg_match</a></li>*/
/*                         <li><a href="http://php.net/manual/fr/function.array-key-exists.php" target="_blank">array_key_exists</a></li>*/
/*                         <li><a href="http://php.net/manual/fr/function.arsort.php" target="_blank">arsort</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="exo row">*/
/*                 <div class="row ennoncé">*/
/*                     <h3>Exercice 2</h3>*/
/*                     <p>Créer une fonction qui calcule le total d'un panier en fonction des règles suivantes :</p>*/
/*                     <p>Le résultat doit intégrer: </p>*/
/*                     <ul>*/
/*                         <li>Le total TTC</li>*/
/*                         <li>Le total HT (avec remise)</li>*/
/*                         <li>Le total de remise: calculé sur le total HT</li>*/
/*                         <li>Le total TVA à 5% (code tva 1): calculé sur le total après remise</li>*/
/*                         <li>Le total TVA à 20% (code tva 2): calculé sur le total après remise</li>*/
/*                     </ul>*/
/*                     <p>Si un même article est commandé au moins 3 fois, on applique 5% de remise sur le total HT de la ligne</p>*/
/*                     <p>Si un même article est commandé au moins 10 fois, on applique 10% de remise sur le total HT de la ligne</p>*/
/*                     <p>Les resultats devront être affichés en monétaire (deux chiffres après la virgule). L'arrondi se fera le plus tard possible afin de garder une précision maximale. </p>*/
/*                     <p><strong>En entrée,</strong> un tableau contenant les produits.</p>*/
/*                     <p><strong>En sortie,</strong> un tableau des résultats.</p>*/
/*                 </div>*/
/*                 <div class="row exemples">*/
/*                     <div class="row line_divider">*/
/*                         <h5>Exemple panier 1</h5>*/
/*                         <div class="col m6">*/
/*                             <p><strong>Entrée: </strong></p>*/
/*                             <p>*/
/*                                 array( <br>*/
/*                                 <span class="marge">array(<br></span>*/
/*                                 <span class="marge_double">'name' 	=> 'figurine maitre yoda',<br></span>*/
/*                                 <span class="marge_double">'price_ht'	=> 47.50,<br></span>*/
/*                                 <span class="marge_double">'code_tva'	=> 2,<br></span>*/
/*                                 <span class="marge_double">'qty'		=> 3<br></span>*/
/*                                 <span class="marge">),<br></span>*/
/*                                 <span class="marge">array(<br></span>*/
/*                                 <span class="marge_double">'name' 	=> 'Chewing gum Chewbaka',<br></span>*/
/*                                 <span class="marge_double">'price_ht'	=> 1.45,<br></span>*/
/*                                 <span class="marge_double">'code_tva'	=> 1,<br></span>*/
/*                                 <span class="marge_double">'qty'		=> 15<br></span>*/
/*                                 <span class="marge">),<br></span>*/
/*                                 <span class="marge">array(<br></span>*/
/*                                 <span class="marge_double">'name' 	=> 'Taille crayon R2D2',<br></span>*/
/*                                 <span class="marge_double">'price_ht'	=> 7.80,<br></span>*/
/*                                 <span class="marge_double">'code_tva'	=> 2,<br></span>*/
/*                                 <span class="marge_double">'qty'		=> 2<br></span>*/
/*                                 <span class="marge">),<br></span>*/
/*                                 <span class="marge">array(<br></span>*/
/*                                 <span class="marge_double">'name' 	=> 'Boules de pétanque BB-8 (x2)',<br></span>*/
/*                                 <span class="marge_double">'price_ht'	=> 34.80,<br></span>*/
/*                                 <span class="marge_double">'code_tva'	=> 2,<br></span>*/
/*                                 <span class="marge_double">'qty'		=> 3<br></span>*/
/*                                 <span class="marge">),<br></span>*/
/*                                 );*/
/*                             </p>*/
/*                         </div>*/
/*                         <div class="col m6">*/
/*                             <p><strong>Sortie: </strong></p>*/
/*                             <p>*/
/*                                 Array(<br>*/
/*                                 <span class="marge">[total_ht] => 269.73<br></span>*/
/*                                 <span class="marge">[total_discount] => 14.52<br></span>*/
/*                                 <span class="marge">[total_tva5] => 0.98<br></span>*/
/*                                 <span class="marge">[total_tva20] => 50.03<br></span>*/
/*                                 <span class="marge">[total_ttc] => 320.74<br></span>*/
/*                                 )*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row line_divider">*/
/*                         <h5>Exemple panier 2</h5>*/
/*                         <div class="col m6">*/
/*                             <p><strong>Entrée: </strong></p>*/
/*                             <p>*/
/*                                 array( <br>*/
/*                                 <span class="marge">array(<br></span>*/
/*                                 <span class="marge_double">'name' 	=> 'Vaisseau mère empire lego',<br></span>*/
/*                                 <span class="marge_double">'price_ht'	=> 447.50,<br></span>*/
/*                                 <span class="marge_double">'code_tva'	=> 2,<br></span>*/
/*                                 <span class="marge_double">'qty'		=> 1<br></span>*/
/*                                 <span class="marge">),<br></span>*/
/*                                 <span class="marge">array(<br></span>*/
/*                                 <span class="marge_double">'name' 	=> 'Costume 6PO',<br></span>*/
/*                                 <span class="marge_double">'price_ht'	=> 99.95,<br></span>*/
/*                                 <span class="marge_double">'code_tva'	=> 2,<br></span>*/
/*                                 <span class="marge_double">'qty'		=> 1<br></span>*/
/*                                 <span class="marge">),<br></span>*/
/*                                 <span class="marge">array(<br></span>*/
/*                                 <span class="marge_double">'name' 	=> 'recharge distributeur bonbon pez Ewoks',<br></span>*/
/*                                 <span class="marge_double">'price_ht'	=> 1.15,<br></span>*/
/*                                 <span class="marge_double">'code_tva'	=> 1,<br></span>*/
/*                                 <span class="marge_double">'qty'		=> 20<br></span>*/
/*                                 <span class="marge">),<br></span>*/
/*                                 <span class="marge">array(<br></span>*/
/*                                 <span class="marge_double">'name' 	=> 'Lampe de bureau étoile de la mort',<br></span>*/
/*                                 <span class="marge_double">'price_ht'	=> 52.25,<br></span>*/
/*                                 <span class="marge_double">'code_tva'	=> 2,<br></span>*/
/*                                 <span class="marge_double">'qty'		=> 3<br></span>*/
/*                                 <span class="marge">),<br></span>*/
/*                                 );*/
/*                             </p>*/
/*                         </div>*/
/*                         <div class="col m6">*/
/*                             <p><strong>Sortie: </strong></p>*/
/*                             <p>*/
/*                                 Array(<br>*/
/*                                 <span class="marge">[total_ht] => 717.06<br></span>*/
/*                                 <span class="marge">[total_discount] => 10.14<br></span>*/
/*                                 <span class="marge">[total_tva5] => 1.04<br></span>*/
/*                                 <span class="marge">[total_tva20] => 139.27<br></span>*/
/*                                 <span class="marge">[total_ttc] => 857.37<br></span>*/
/*                                 )*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <h5>Lancer les tests:</h5>*/
/*                     <p>Dans le dossier de votre projet, via le terminal, exécuter la commande <span class="commande_style">phpunit tests/ExamBlancBundle/Controller/Exercice2ControllerTest.php</span></p>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <h5>Fonctions utiles</h5>*/
/*                     <ul>*/
/*                         <li><a href="http://php.net/manual/fr/function.round.php" target="_blank">round</a></li>*/
/*                         <li><a href="http://www.capte-les-maths.com/tva/tva.php#ancre9" target="_blank">Calculer une TVA</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="button_homepage">*/
/*                 <a href="{{ path('exam_blanc_homepage') }}" class="waves-effect waves-light btn">Retour à la page d'accueil</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
