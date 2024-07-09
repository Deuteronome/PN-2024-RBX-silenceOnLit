<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once('../_partials/_head.php'); ?>
    <script type="module" src="../script/jeux.js"></script>
   
<body>
    <!-- L'en-tête du site -->
    <?php
        include_once('../_partials/_header.php');
        include_once('../_partials/_nav.php');
    ?>

    <div id="central">
        <!--Menu - il va pas rester-->
        
        <!-- Partie principale avec le texte de pserentation et les sites de l'e2c-->
        <main>

           <div class="select-zone apparence-zone">
                <label for="game-select">Choisissez votre jeu :</label>
                <select name="game-select" id="game-select">
                    <option value="1" selected>-----</option>
                    <option value="2">Le nombre de pages</option>
                    <option value="3">Tic Tac Doe</option>
                </select>
           </div>

           <div class="game-zone">
            
           </div>
        </main>
        <!-- la partie latérale (droite) -avec une séléction de livre-->

        <!-- On remettra cette partie quand on aura le temps
        <aside>
            <h2>Partie Latérale</h2>
        </aside>
        -->
    </div>

    <!-- Pied de page-->
    <?php include_once('../_partials/_footer.php')?>
</body>
</html>