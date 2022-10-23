    <nav id="nav_activite" class="nav" style="justify-content: space-around; width: 100%">
        <div class="hamburger" style="max-width:6%; min-width: 6%; margin-right: 4rem">
            <i style="font-size: 6rem;" class="material-icons">menu</i>
        </div>
        <ul class="nav-links" style="display: flex; justify-content: space-around; width: 100%">
        <li id="li_img_icone"><a href="../index.php"><img id="img_icone" src="../img/titre_website_nom_sans_background.PNG"></a></li>
        <div id="pages_site">
            <a class="nav-link" href="../Activite/formulaire.php">Activités</a>
            <a class="nav-link" href="../CV/cv.php">C.V.</a>
            <a class="nav-link" href="../Jeux/jeux.php">Jeux</a>
        </div>
            <?php
            if (isset($_SESSION["useruid"])){
                echo '
                <div class="dropdown connexion-profile">
                    <a class="dropbtn" onclick="Dropdown()">Profile</a>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="../Profile/profile.php">Profile</a>
                        <a href="../Parametre/parametre.php">Paramètre</a>
                        
                        <a href="../Authentification/logout.inc.php">Log out</a>
                    </div>
                </div>           
                ';
            }

            else{
                echo '<li class="connexion-profile" style="margin: 0 auto"><a class="nav-link" href="../Authentification/connexion.php">Connexion/Sign up</a></li>';
            }
            ?>
            <label class="switch">
                <input type="checkbox" id="switch" onchange="Switch()">
                <span class="slider round"></span>
            </label>
        </ul>
    </nav>