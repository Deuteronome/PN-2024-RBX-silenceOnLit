<header>
        <div id="header-haut">
            <div id="header-logo">
           ;     <img id="logo" src="../assets/logo.png" alt="Logo">
            </div>
            
            <div id="header-titre">
                <h1>Silence On lit!</h1>
                <h3><?= $title ?></h3>                
            </div>
            
            <!-- Formule de connexion -->
            <div id="header-login">
                <?php 
                    if(isset($_SESSION['userId'])) {
                        ?>
                            <h3>Bonjour <?= $_SESSION['identifier'] ?></h3>

                            <a href="../Controller/logout.php" class="bouton">Se déconnecter</a>
                        <?php
                    } else {
                        ?>
                            <form action="../Controller/login.php" method="post">
                                <label for="identifiant">Identifiant</label>
                                
                                <input type="text" id="identifiant" name="identifiant" placeholder="Mettez votre pseudo">
                                
                                <label for="password">Mot de passe</label>
                                
                                <input type="password" id="password" name="password">
                                
                                <?php
                                    if(isset($_GET['message'])) {
                                        ?>
                                            <p class='alert-message'><?= $_GET['message'] ?></p>
                                        <?php                            
                                    }
                                ?>                            


                                <input type="submit" value="Se Connecter">
                                
                            </form>
                        <?php
                    }
                ?>
                
            </div>
        </div>
        <div id="header-bas">
            <div id="burger-button"></div>
        </div>
    </header>