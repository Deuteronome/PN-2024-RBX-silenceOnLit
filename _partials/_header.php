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
                <form action="../Controller/login.php" method="post">
                    <label for="identifiant">Identifiant</label>
                    
                    <input type="text" id="identifiant" name="identifiant" placeholder="Mettez votre pseudo">
                    
                    <label for="password">Mot de passe</label>
                    
                    <input type="password" id="password" name="password">

                    <input type="submit" value="Se Connecter">
                    
                </form>
            </div>
        </div>
        <div id="header-bas">
            <div id="burger-button"></div>
        </div>
    </header>