<?php include "variables.php" ?>
<html>
<head>
    <title>Laude Florian</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>


</head>
<body class="navbar">

<nav id="navbar" class="navbar col-md-12 col-xs-12 col-sm-12  fixed-top">
    <h1>
        DEVELOPEUR INTEGRATEUR WEB JUNIOR
    </h1>

</nav>
<nav id="navbar" class="navbar col-md-12 col-xs-12 col-sm-12 ">
    <h1>
        DEVELOPEUR INTEGRATEUR WEB JUNIOR
    </h1>

</nav>

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
    <div class="row">
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
            <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="fr_FR"
                 data-type="horizontal" data-theme="light" data-vanity="deobarto"><a class="LI-simple-link"
                                                                                     href='https://fr.linkedin.com/in/deobarto?trk=profile-badge'>Florian Laude</a></div>


            <div>
                <a href="https://github.com/Deobarto/cvonline"><img src="img/github.png" alt="github" /></a>
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
    <div class="row footer">
        <div class="col-md-12 col-xs-12 col-sm-12 certificats textCenter ">
            <h4>
                CERTIFICATIONS
            </h4>
            <div class="row col-md-6 col-md-offset-3 col-xs-12 col-sm-12 positionnement ">


                <a href="../public/certificat_florian-laude_decouper-et-integrer-une-maquette.pdf">
                    Découper
                    et integrer un maquette
                </a>
                <i class="fas fa-minus"></i>
                <a
                        href="../public/certificat_florian-laude_apprenez-a-creer-votre-site-web-avec-html5-et-css3.pdf">

                    HTML ET CSS3
                </a>
                <i class="fas fa-minus"></i>
                <a href="../public/certificat_florian-laude_apprenez-a-coder-avec-javascript.pdf">
                    Apprenez à coder avec Javascript
                </a>
                <i class="fas fa-minus"></i>
                <a href="../public/certificat_florian-laude_comprendre-le-web.pdf">
                    Comprendre le Web
                </a>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12  contact textCenter">
            <h4> CONTACTS</h4>
            <div class="row col-md-8 col-md-offset-2 col-xs-12 col-sm-12 positionnement ">
                <a href="https://goo.gl/maps/EKNw8MDwwpK2"><span class="glyphicon glyphicon-map-marker"></span>55
                    rue Marc Sangnier </a>

                <i class="fas fa-minus"></i>
                <a
                        href="tel:+33617509651"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>06
                    17 50
                    96 51</a>

                <i class="fas fa-minus"></i>

                <a href="mailto:deorune@outlook.fr?subject=Compl&eacute;ment d&apos;informations&body=Bonjour,%0D%0A%0D%0AVotre CV à attir&eacute; mon attention et je souhaiterai avoir plus d&apos;informations."><span
                            class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Je
                    souhaite plus d'informations</a>

                <i class="fas fa-minus"></i>

                <a href="mailto:deorune@outlook.fr?subject=Offre de poste en contrat de professionnalisation&body=Bonjour jeune padawan !%0D%0A%0D%0ATon utilisation de la force à attir&eacute; mon attention et je souhaite te proposer un poste de &ldquo;Developpeur Int&eacute;grateur Web Junior&rdquo; en contrat de professionnalisation.%0D%0A%0D%0A[D&eacute;crire ici plus d&apos;informations sur les missions propos&eacute;s dans le poste]">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Proposer
                    un contrat de professionnalisation</a>

            </div>
        </div>
    </div>
</div>
</body>
</html>

