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

    <div class="row bgColorBlocUn normalize">
        <div class="col-md-2 col-md-offset-1 col-xs-12 percent col-sm-4 ">
            <a href="img/lf1.jpg" target="_blank">
                <img class="carreau" src="img/lf1.jpg"/>
            </a>
        </div>
        <div class="col-md-9 col-xs-12  col-sm-8 blockInline ">
            <ul>
                <li>
                    <i class="fas fa-male"></i>
                    Laude Florian
                </li>
                <li>
                    <i class="fas fa-birthday-cake"></i>
                    Né le 1er Novembre 1988
                </li>
                <li>
                    <i class="fas fa-wheelchair"></i>
                    Reconnaissance MDPH (Autisme - asperger)
                </li>
            </ul>

            <p>Ayant un handicap que j'ai découvert assez tard, je n'ai pas eu la possibilité d'avoir
                une environnement professionnel qui me permette de découvrir les joies de la pause café ou des
                after-work,
                avec en passant le mérite du travail bien accompli. J'ai du apprendre à apprivoiser mon handicap et mon
                environnement avant de me lancer dans l'apprentissage d'un métier qui me plait et dont je me découvre
                une passion.
            </p>
            <p> Je suis aujourd'hui à la recherche de l'entreprise (peut-être toi qui me lis) qui me
                permettra de devenir le développeur que j'ai commencé à construire seul, mais qui s'accomplira au sein
                du service informatique ou développement dans un parcours en contrat de professionnalisation sur 12 ou
                24 mois.</p>


        </div>
    </div>
    <div class="row barreDeLien">
        <div>
            <div class="col-md-12 col-xs-12 col-sm-12 positionnement">
                <!-- Button trigger modal -->
                <button type="button" class=" btn btn-primary " data-toggle="modal"
                        data-target="#exampleModalCenter">
                    <img src="img/apprendre.png">
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title textCenter " id="exampleModalLongTitle">J'apprend</h5>
                            </div>
                            <div class="modal-body textCenter">
                                Apprends à intégrer une page web en utilisant la librairie Bootstrap
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="fr_FR" data-type="horizontal" data-theme="light" data-vanity="deobarto">
                    <a class="LI-simple-link" href="https://fr.linkedin.com/in/deobarto?trk=profile-badge" target="blank">Mon profil LinkedIn. </br> Cliquez ici pour y accéder</a>
                </div>
                <div><a href="https://github.com/Deobarto/cvonline" target="blank"><img src="img/github.png" alt="github" /></a></div>
            </div>
        </div>
    </div>
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

