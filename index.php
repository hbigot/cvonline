<?php include "variables.php" ?>
<html>
<?php
require 'header.php';
?>
<body>
<?php
require 'nav.php';
?>

<div class="container col-md-12 col-xs-12 col-sm-12">

    <?php
    require 'bloc_un.php'
    ?>
    <?php
    require 'barreDeNav.php'
    ?>
       <div class="row bgColorBlocDeux">
        <div class="col-md-2 col-md-offset-1 col-xs-12 col-sm-4 percent">
            <h2> Competences</h2>
            <ul>
                <?php foreach ($mes_competences as $nb_etoiles => $listeCompetences): ?>
                    <?php
                    $etoiles = afficher_etoiles($nb_etoiles, $max_etoiles);
                    ?>
                    <?php foreach ($listeCompetences as $competence): ?>

                        <li>
                            <?php echo $etoiles . $competence ?>
                        </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-9 col-xs-12 col-sm-8 margeUl">
            <h2>
                Experiences
            </h2>
            <h3>
                Juin 2018 - Création d'un CV en ligne
            </h3>
            <ul>
                <li> Définition du besoin</li>
                <li> Analyse des outils utilisés</li>
                <li> Intérgation d'une maquette, inpirée de mes cours en HTML5 et CSS3</li>
                <li> Utilisation de Bootstrap pour le système de grilles et les icones</li>
                <li> Déploiement du site web sur un serveur gratuit</li>
            </ul>
            <div class="normalize">
                <div>
                    <h3>
                        Sep. 2011 - Déc. 2012 Agent de sous traitance - Le Centre La Gabrielle - 77
                        Claye-Souilly</h3>
                </div>

                <div>
                    <h3> Fév. 2011 Magasinier (intérim) – Sté. 1 2 3 - 77 Compans
                    </h3>
                </div>
                <div>
                    <h3>Déc. 2010 Préparateur de commandes (intérim) – Savoy Technologie – 77 Quincy
                        Voisin
                    </h3>
                </div>

            </div>

        </div>
    </div>
    <div class="row bgColorBlocTrois">
        <div class="col-md-2 col-md-offset-1 col-xs-12 col-sm-4 percent BlocGaucheTrois">
            <h2>
                Outils
            </h2>
            <ul>
                <?php foreach ($mes_outils as $nb_etoiles => $liste_outils): ?>
                    <?php
                    $etoiles = afficher_etoiles($nb_etoiles, $max_etoiles);
                    ?>
                    <?php foreach ($liste_outils as $outils): ?>

                        <li>
                            <?php echo $etoiles . $outils ?>
                        </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
            <h2>Languages</h2>
            <ul>
                <?php foreach ($mes_langages as $nb_etoiles => $liste_langages): ?>
                    <?php
                    $etoiles = afficher_etoiles($nb_etoiles, $max_etoiles);

                    ?>
                    <?php foreach ($liste_langages as $langages): ?>

                        <li class="typeBlack">
                            <?php echo $etoiles . $langages ?>
                        </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
            <div class="mini margeTop">
                <p>Légende</p>
                <ul>

                    <?php foreach ($la_legende as $nb_etoiles => $listeLegende): ?>
                        <?php
                        $etoiles = afficher_etoiles($nb_etoiles, $max_etoiles);
                        ?>
                        <?php foreach ($listeLegende as $legende): ?>

                            <li>
                                <?php echo $etoiles . $legende ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
        <div class="col-md-9 col-xs-12 col-sm-8 margeUl normalize">
            <h2>
                Formations
            </h2>
            <ul>
                <li>
                    Mars 2018 - Certification "Comprendre le Web" - Formation suivie en autodidacte - openclassrooms.com
                </li>
                <li>
                    Avril 2018 - Certification "Apprenez a créer votre site web avec HTML5 et CSS3" - Formation suivie
                    en
                    autodidacte - openclassrooms.com
                </li>
                <li>
                    Mai 2018 - Certification "Découpage et intégration d'une maquette" en HTML et CSS - Formation suivie
                    en
                    autodidacte - openclassrooms.com
                </li>
                <li>
                    Mai 2018 - Certification "Apprenez a coder avec JavaScript" - Formation suivie en autodidacte -
                    openclassrooms.com
                </li>
                <li>
                    2006 Brevet des Collèges
                </li>
                <li>
                    2005 – 2006 1ère année de BEP Comptabilité - Lycée Jacques Amiot – 77 -
                    Neufmoutier
                </li>
                <li>
                    2004 – 2005 1ère année de BEP Secrétariat - L.P. '' Le champ de Claye '' - 77
                    Claye-Souilly
                </li>
                <li>
                    2004 Attestation de Sécurité Routière (ASSR) niveau 1 et 2
                </li>
                <li>
                    2004 Brevet d'informatique et d'Internet (B2I) niveau 1 et 2 Collège des Tourelles –
                    77 - Claye Souilly
                </li>
            </ul>
        </div>
    </div>
   <?php
   require 'footer.php'
   ?>
</div>
</body>
</html>

