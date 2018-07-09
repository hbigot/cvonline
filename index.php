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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


</head>
<body class="navbar">

<nav id="navbar" class="navbar  fixed-top">
    <h1 class="bigWhite col-md-12 col-xs-12 col-sm-12">
        DEVELOPEUR INTEGRATEUR WEB JUNIOR
    </h1>

</nav>
<nav id="navbar" class="navbar ">
    <h1 class="bigWhite col-md-12 col-xs-12 col-sm-12">
        DEVELOPEUR INTEGRATEUR WEB JUNIOR
    </h1>

</nav>

<div class="container col-md-12 col-xs-12 col-sm-12">

    <div class="row bgimg">
        <div class="col-md-2 col-md-offset-1 col-xs-12 percent col-sm-4 ">
            <a href="img/lf1.jpg" target="_blank">
                <img class="carreau" src="img/lf1.jpg"/>
            </a>
        </div>
        <div class="col-md-9 col-xs-12 clror col-sm-8 ">
            <ul class="justify col-md-6">
                <li>
                    <i class="fas fa-male"></i>
                    Laude Florian
                </li>
                <li>
                    <i class="fas fa-birthday-cake"></i>
                    Née le 1er Novembre 1988
                </li>
                <li>
                    <i class="fas fa-wheelchair"></i>
                    Reconnaissance MDPH (Autisme - asperger)
                </li>
            </ul>

            <p class="justify col-md-6 col-xs-12" style="margin-left: 0;margin-right: 0;padding-left: 0;padding-right: 0;">Ayant un handicap que j'ai découvert assez tard, je n'ai pas eu la possibilité d'avoir
                une environnement professionnel me permettant de découvrir les joies de la pause café ou des after-work,
                avec en passant le mérite du travail bien accompli. J'ai du apprendre à apprivoiser mon handicap et mon
                environnement avant de me lancer dans l'apprentissage d'un métier qui me plait et dont je me découvre
                une passion.
            </p>
            <p class="justify col-md-6 col-xs-12" style="margin-left: 0;margin-right: 0;padding-left: 0;padding-right: 0;"> Je suis aujourd'hui à la recherche de l'entreprise (peut-être toi qui me lis) qui me
                permettra de devenir le développeur que j'ai commencé à construire seul, mais qui s'accomplira au sein
                du service informatique ou développement dans un parcours en contrat de professionnalisation sur 12 ou
                24 mois.</p>


        </div>
    </div>
   <div class="row bcgreen" >
       <div class="col-md-12 col-xs-12 col-sm-12 reference">
           <!-- Button trigger modal -->
           <button type="button" class=" btn btn-primary col-md-12 col-xs-12 col-sm-12 " data-toggle="modal" data-target="#exampleModalCenter">
               <img src="img/apprendre.png">
           </button>

           <!-- Modal -->
           <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
           <p class="LI-profile-badge col-md-12 col-xs-12 col-sm-12 "  data-version="v1" data-size="medium" data-locale="fr_FR" data-type="horizontal" data-theme="light" data-vanity="deobarto">
               <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
               <a class="LI-simple-link" href="https://fr.linkedin.com/in/deobarto?trk=profile-badge%27%3EFlorian Laude"> </a>
           </p>
       </div>
   </div>
    <div class="row bcgreen">
        <div class="col-md-2 col-md-offset-1 col-xs-12 col-sm-4 percent  taille">
            <h2 class="clror"> Competences</h2>
            <ul>
            <?php foreach($mes_competences as $nb_etoiles => $listeCompetences):?>
                <?php
                $etoiles = afficher_etoiles($nb_etoiles,$max_etoiles);
                ?>
                <?php foreach ($listeCompetences as $competence): ?>

                    <li>
                        <?php echo $etoiles. $competence ?>
                    </li>
                <?php endforeach; ?>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-9 col-xs-12 col-sm-8">
            <h2 class="clror max bold">
                Experiences
            </h2>
            <p class="colorWhite">
                Juin 2018 - Création d'un CV en ligne
            </p>
            <ul class="margeUl">
                <li class="colorWhite"> Définition du besoin</li>
                <li class="colorWhite"> Analyse des outils utilisés</li>
                <li class="colorWhite"> Intérgation d'une maquette, inpirée de mes cours en HTML5 et CSS3</li>
                <li class="colorWhite"> Utilisation de Bootstrap pour le système de grilles et les icones</li>
                <li class="colorWhite"> Déploiement du site web sur un serveur gratuit</li>
            </ul>


            <p class="colorWhite">
                Sep. 2011 - Déc. 2012 Agent de sous traitance - Le Centre La Gabrielle - 77
                Claye-Souilly
            </p>
            <p class="colorWhite">
                Fév. 2011 Magasinier (intérim) – Sté. 1 2 3 - 77 Compans
            </p>
            <p class="colorWhite ">
                Déc. 2010 Préparateur de commandes (intérim) – Savoy Technologie – 77 Quincy
                Voisin
            </p>
        </div>
    </div>
    <div class="row bgbfd">
        <div class="col-md-2 col-md-offset-1 col-xs-12 col-sm-4 percent min quatre">
            <h2 class="clror max bold ">
                Outils
            </h2>
            <ul>
                <?php foreach($mes_outils as $nb_etoiles => $liste_outils):?>
                    <?php
                    $etoiles = afficher_etoiles($nb_etoiles,$max_etoiles);
                    ?>
                    <?php foreach ($liste_outils as $outils): ?>

                        <li class="typeBlack">
                            <?php echo $etoiles. $outils ?>
                        </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
            <h2 class="clror max bold  ">Languages</h2>
            <ul>
                <?php foreach($mes_langages as $nb_etoiles => $liste_langages):?>
                    <?php
                    $etoiles = afficher_etoiles($nb_etoiles,$max_etoiles);

                    ?>
                    <?php foreach ($liste_langages as $langages): ?>

                        <li class="typeBlack">
                            <?php echo $etoiles. $langages ?>
                        </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
            <div class="botomFive">
                <ul class="margeTop">
                    <p class="mini">Légende</p>
                    <?php foreach($la_legende as $nb_etoiles => $listeLegende):?>
                        <?php
                        $etoiles = afficher_etoiles($nb_etoiles,$max_etoiles);
                        ?>
                        <?php foreach ($listeLegende as $legende): ?>

                            <li class="mini">
                                <?php echo $etoiles. $legende ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
        <div class="col-md-9 col-xs-12 col-sm-8 sept  right">
            <h2 class="max bold">
                Formations
            </h2>
            <p class="colorWhite">
                Mars 2018 - Certification "Comprendre le Web" - Formation suivie en autodidacte - openclassrooms.com
            </p>
            <p class="colorWhite">
                Avril 2018 - Certification "Apprenez a créer votre site web avec HTML5 et CSS3" - Formation suivie en
                autodidacte - openclassrooms.com
            </p>
            <p class="colorWhite">
                Mai 2018 - Certification "Découpage et intégration d'une maquette" en HTML et CSS - Formation suivie en
                autodidacte - openclassrooms.com
            </p>
            <p class="colorWhite">
                Mai 2018 - Certification "Apprenez a coder avec JavaScript" - Formation suivie en autodidacte -
                openclassrooms.com
            </p>
            <p class="colorWhite">
                2006 Brevet des Collèges
            </p>
            <p class="colorWhite">
                2005 – 2006 1ère année de BEP Comptabilité - Lycée Jacques Amiot – 77 -
                Neufmoutier
            </p>
            <p class="colorWhite">
                2004 – 2005 1ère année de BEP Secrétariat - L.P. '' Le champ de Claye '' - 77
                Claye-Souilly
            </p>
            <p class="colorWhite">
                2004 Attestation de Sécurité Routière (ASSR) niveau 1 et 2
            </p>
            <p class="colorWhite">
                2004 Brevet d'informatique et d'Internet (B2I) niveau 1 et 2 Collège des Tourelles –
                77 - Claye Souilly
            </p>
        </div>
    </div>
    <div class="row footer">
        <div class="col-md-12 col-xs-12 col-sm-12 logo textCenter ">
            <h4>
                CERTIFICATIONS
            </h4>
            <div class="row col-md-12 col-xs-12 col-sm-12 padding ">


                <a class=" puce " href="../public/certificat_florian-laude_decouper-et-integrer-une-maquette.pdf">
                    Découper
                    et integrer un maquette
                </a>
                <span> &nbsp;|&nbsp; </span>
                <a class=" puce "
                   href="../public/certificat_florian-laude_apprenez-a-creer-votre-site-web-avec-html5-et-css3.pdf">

                    HTML ET CSS3
                </a>
                <span>&nbsp; |&nbsp; </span>

                <a class=" puce" href="../public/certificat_florian-laude_apprenez-a-coder-avec-javascript.pdf">
                    Apprenez à coder avec Javascript
                </a>
                <span>&nbsp; |&nbsp; </span>
                <a class=" puce" href="../public/certificat_florian-laude_comprendre-le-web.pdf">
                    Comprendre le Web
                </a>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12  contact li Back textCenter">
            <h4> CONTACTS</h4>
            <div class="row col-md-12 col-xs-12 col-sm-12 padding ">
                <p class="puce "><span class="glyphicon glyphicon-map-marker"></span>
                    <a href="https://goo.gl/maps/EKNw8MDwwpK2">55
                        rue Marc Sangnier </a>
                </p>
                <span>&nbsp; |&nbsp; </span>

                <p class="puce "><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a
                        href="tel:+33617509651">06 17 50
                        96 51</a>
                </p>
                <span>&nbsp; |&nbsp; </span>

                <p class="puce "><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <a href="mailto:deorune@outlook.fr?subject=Compl&eacute;ment d&apos;informations&body=Bonjour,%0D%0A%0D%0AVotre CV à attir&eacute; mon attention et je souhaiterai avoir plus d&apos;informations.">Je
                        souhaite plus d'informations</a>
                </p>
                <span>&nbsp; |&nbsp; </span>

                <p class="puce "><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <a href="mailto:deorune@outlook.fr?subject=Offre de poste en contrat de professionnalisation&body=Bonjour jeune padawan !%0D%0A%0D%0ATon utilisation de la force à attir&eacute; mon attention et je souhaite te proposer un poste de &ldquo;Developpeur Int&eacute;grateur Web Junior&rdquo; en contrat de professionnalisation.%0D%0A%0D%0A[D&eacute;crire ici plus d&apos;informations sur les missions propos&eacute;s dans le poste]">Proposer
                        un contrat de professionnalisation</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

