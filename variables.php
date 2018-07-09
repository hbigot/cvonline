<?php
$mes_competences = array(
    4 => array("Déploiement du projet sur serveur", "Responsive Design", "Gestion des réseau et outils connectés au réseaux"),
    3 => array("Concevoir et développer des programmes et applications informatiques ", "Intégration de maquette", "Déterminer des mesures correctives "),
    2 => array("Analyser et comprendre les besoins du client "),
    1 => array("Etablir un cachier des charges ")
);
$mes_outils = array(
    4 => array("Internet", "Outils de débug navigateur", "PhotofiltreStudio", " FileZilla"),
    3 => array("PhpStorm"),
    2 => array("Netbeans", "Bootstrap"),
);
$mes_langages = array(
    3 => array("Html", "Css"),
    2 => array("Javascript"),
    1 => array("Php"),
);
$la_legende = array(
    4 => array("Je gère !"),
    3 => array("Je trouve mon chemin, meme sinueux !"),
    2 => array("Encore quelques efforts !"),
    1 => array("Notions à pratiquer pour apprendre !"),
);

$max_etoiles = 4;


/**
 *
 * @param $nb_etoiles
 * @param $max_etoiles
 */
function afficher_etoiles($nb_etoiles,$max_etoiles)
{
    $etoile_html = "<i class=\"fas fa-star\"></i>";
    $etoile_vide_html = "<i class=\"far fa-star\"></i>";
    $etoiles = "";
    for ($i = 0; $i < $nb_etoiles; $i++) {
        $etoiles .= $etoile_html;
    }
    for ($i = $max_etoiles; $i > $nb_etoiles; $i--) {
        $etoiles .= $etoile_vide_html;
    }
    return $etoiles;
}