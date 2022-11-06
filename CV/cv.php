<?php include_once '../PHP_Include/dbh.inc.php';?>
<?php include '../PHP_Include/head.php';?>
    <title>C.V.</title>

    <link href="../css/cv.css" rel="stylesheet" type="text/css">
    <script src="darkmode_cv.js" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php include '../PHP_Include/nav.php';?>
        <div id="titre_du_site"><img id="img_titre_du_site" src="../img/titre_site.png"  alt="titre du site" title="Titre du site" style="min-width: 23%; border-radius: 0; margin-top: 0"> <!-- Logo Claude Dupont -->
           <aside style="text-align:end" id="citation" class="col-lg-3"><!--Ici qu'est ajouté la quote du jour-->
               <?php
               $result = mysqli_query($conn, "SELECT * FROM citations;");

               $startday = new DateTime('2021-01-14');
               $today = new DateTime();
               $days = $today->diff($startday)->format('%a');

               $index_citation = $days%mysqli_num_rows($result);

               $citation_array = mysqli_query($conn, "SELECT * FROM citations WHERE id= ".$index_citation." ;");

               $citation = mysqli_fetch_array($citation_array);

               echo "<blockquote style=\"margin-bottom: 3.5rem;\">";
               echo "<p id='today_day' style='font-weight: bold;'>Citation du jour (".$today->format('D, d M Y').")</p>";
               echo "<p> <span>&laquo; </span>". $citation['Citation']."<span><a href=\"../Citations/citations.php\" style=\"color: #1b203d; text-decoration: none; cursor: auto\"> &raquo;</a></span></p>";
               echo "<hr id=\"hr_citation\">";
               echo "<cite>&#8212; ". $citation['Auteur']."</cite> </blockquote>";
               ?>
           </aside>
        </div>
    </header>
    <main>
        <article style="margin-top: 24rem; display: block"> <!-- Formation scolaire -->
            <h2 class="grandir" style="margin: 2rem">Profil</h2>
            <blockquote>
                <div class="row" style="margin: 1rem;">
                    <div class="col-lg-2 div_img" style="min-width: 260px; margin-right: 2rem"><img style="min-width: 260px" src="../img/profil.jpg" alt="Formation Scolaire" title="Formation Scolaire"></div> <!-- C'est le div qui contient l'image de moi finissant -->
                    <section class="jumbotron col-lg-8 " style="width: 100%;margin: 3rem 1rem ;padding: 2rem;"> <!-- Jumbotron qui contient les informations de ma scolarité -->
                        <p>Aylmer, Gatineau</p><!-- Information sur le Cégep part 2 -->
                        <p>Langue maternelle : Français</p>
                        <p>Langues secondaires : Anglais et Espagnol</p>
                        <p>Courriel: <span class="bold">c.r.dupont@hotmail.com</span></p><!-- Information sur le Cégep part 1 -->
                    </section>
                </div>

            </blockquote>
        </article>
        <article style="margin-top: 13rem; display: block"> <!-- Expérience de travail -->
            <h2 class="grandir" style="margin: 2rem;">Expérience de travail – Référence sur demande</h2> <!-- Expérience de travail -->
            <h4 class="grandir" style="margin: 2rem;<!-- border-bottom: solid black 2px --> ">QA Analyst</h4> <!-- Titre QA Analyst -->
            <blockquote>
                <div class="row flex" style="margin: 1rem">
                    <section id="text_gouv" class="jumbotron col-lg-8 " style="width: 100%;margin: 3rem 1rem ;padding: 2rem;"> <!-- Jumbotron qui contient les informations de ma job au gouvernement -->
                        <p><span class="bold">Équipe finale d’inspection pour l’assurance de la qualité au ESDC</span><span style="float: right" >2019</span></p><!-- Information sur la job du gouvernement -->
                        <ul>                                                                                                                                     <!-- Liste des informations sur ma job au gouvernement -->
                            <li>Expérience avec les outils gouvernementaux (matériaux informatiques et logiciels)</li>
                            <li>Migration de Windows Server 2008 à Windows Server 2016 (Configuration de IIS,
                                troubleshooting, testage des fonctionnalités et vérification des configurations)</li>
                            <li>Utiliser l’étiquette professionnelle dans un environnement de travail et aussi via la communication numérique.</li>
                        </ul>
                    </section>
                    <div id="img_gouv" class="col-lg-2 div_img" style="min-width: 260px; margin-right: 2rem"><img src="../img/gouvernement.jpg" style="min-width: 260px" alt="Formation Scolaire" title="Formation Scolaire"></div> <!-- C'est le div qui contient l'image de moi gouvernement -->
                </div>

            </blockquote>
            <h4 class="grandir" style="margin: 2rem; margin-top: 6rem;">Service à la clientèle</h4> <!-- Titre Service à la clientèle -->
            <blockquote>
                <div class="row" style="margin: 1rem">
                <div class="col-lg-2 div_img" style="min-width: 260px; margin-right: 2rem"><img src="../img/mcdo.jpg" style="min-width: 260px" alt="Formation Scolaire" title="Formation Scolaire"></div> <!-- C'est le div qui contient l'image de moi gouvernement -->
                <section  class="jumbotron col-lg-8 " style="width: 100%;margin: 3rem 1rem ;padding: 2rem;"> <!-- Jumbotron qui contient les informations de ma job au gouvernement -->
                        <ul>                                                                                                                                     <!-- Liste des informations sur ma job au gouvernement -->
                            <li style="margin: 0 0 1.8rem 0"><span class="bold">Caissier, commis d'épicerie et commis de service au Super C</span><span style="float: right" >2018-2020</span></li>
                            <li style="margin: 1.8rem 0"><span class="bold">Commis au Pharmaprix</span><span style="float: right" >2018</span></li>
                            <li style="margin: 1.8rem 0 0 0"><span class="bold">Caissier, cuisinier et laveur de vaisselle au Mcdonald’s</span><span style="float: right" >2016-2018</span></li>
                        </ul>
                    </section>
                </div>
            </blockquote>
        </article>
        <article style="margin-top: 13rem; display: block"> <!-- Compétences -->
            <h2 class="grandir" style="margin: 2rem;<!-- border-bottom: solid black 2px --> ">Compétences</h2> <!-- Compétences -->
            <blockquote>
                <div class="row" style="margin: 1rem">
                    <section id="text_comp" class="jumbotron col-lg-8 " style="width: 100%;margin: 3rem 1rem ;padding: 2rem;"> <!-- Jumbotron qui contient les informations de ma job au gouvernement -->
                        <ul>                                                                                                                                     <!-- Liste des informations sur ma job au gouvernement -->
                            <li>HTML, CSS, Javascript, Python, C#, PHP, Java</li>
                            <li>Base de données SQL</li>
                            <li>Montage vidéo (Camtasia Studio 9)</li>
                            <li>Assemblage d’ordinateur</li>
                            <li>Windows Serveur (DNS, autonome, serveurs de fichiers) Serveur Linux</li>
                            <li>Configuration de machines virtuelles (VirtualBox et VMWare)</li>
                            <li>Cisco (adresse IP, configuration de routeurs, Packet Tracer)</li>
                            <li>Configuration et déploiement de sites web (HTML, CSS, JavaScript, PHP)</li>
                        </ul>
                    </section>
                    <div id="img_comp" class="col-lg-2 div_img" style="min-width: 260px; margin-right: 2rem"><img src="../img/compétences.jpg" style="min-width: 260px" alt="Formation Scolaire" title="Formation Scolaire"></div> <!-- C'est le div qui contient l'image de moi gouvernement -->
                </div>

            </blockquote>
        </article>
        <article style="margin-top: 13rem; display: block"> <!-- Formation scolaire -->
            <h2 class="grandir" style="margin: 2rem">Formation Scolaire</h2>
            <blockquote>
                <div class="row" style="margin: 1rem;">
                    <div class="col-lg-2 div_img" style="min-width: 260px; margin-right: 2rem"><img style="min-width: 260px" src="../img/finissant.jpg" alt="Formation Scolaire" title="Formation Scolaire"></div> <!-- C'est le div qui contient l'image de moi finissant -->
                    <section class="jumbotron col-lg-8 " style="width: 100%;margin: 3rem 1rem ;padding: 2rem;"> <!-- Jumbotron qui contient les informations de ma scolarité -->
                        <p><span class="bold">Étudiant au Cégep de l'Outaouais Campus Gabrielle-Roy</span><span style="float: right" >2018 - en cours</span></p><!-- Information sur le Cégep part 1 -->
                        <p>Technique informatique en programmation et sécurité</p><br><!-- Information sur le Cégep part 2 -->
                        <p><span class="bold">Diplômé du secondaire</span>  <span style="float: right" >2013-2018</span></p><!-- Information sur le secondaire part 1 -->
                        <p>Collège Saint-Alexandre de la Gatineau (Québec)</p><!-- Information sur le secondaire part 2 -->
                    </section>
                </div>

            </blockquote>
        </article>
    </main>
<footer>
    <nav>
        <div style="float: right">
            <span class="footer" style="color: white">Téléchargement du CV en format Word:</span>
            <a href="../docs/C.V.%20de%20Claude.docx" style="display: inline-block;padding-top:3.5%; margin-top: 0%; ">
                <i style="font-size: 2rem; margin: auto"class="material-icons">insert_drive_file</i>
            </a>
        </div>
        <div style="padding-left: 4rem">
            <span class="footer" style="color: white">Email Professionel: </span>
            <a href="mailto:c.r.dupont@hotmail.com" style="display: inline-block;padding-top: 1.5%; text-align: center">
                <i style="font-size: 2rem" class="material-icons">email</i>
            </a>
        </div>
        <div style="text-align: right; background-color: rgb(21, 47, 100); color: white; width: 100%; padding-right: 3rem; padding-bottom: 1rem"><?php echo '<span> &copy; Claude Dupont ' .date("Y/m/d").'</span>'?>
        </div>
    </nav>
</footer>
</body>
<?php
$theme = $_COOKIE['theme'];
if ($theme == "dark"){
    echo "<script> document.getElementById('switch').checked = true;</script>";
} elseif($theme == "light"){
    echo "<script> document.getElementById('switch').checked = false;</script>";
}
?>
</html>