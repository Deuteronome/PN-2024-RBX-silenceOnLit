<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../_partials/_head.php') ?>
    <script type="module" src="../script/home.js" defer></script>
</head>
<body>
    <?php
        include_once('../_partials/_header.php');
        include_once('../_partials/_nav.php');
    ?>
    <div id="central">
        <main>
            <div class="books-table">
                <div class="title-row">
                    <div class="book-title">Titre</div>
                    <div class="book-author">Auteur</div>
                    <div class="book-genre">Genre</div>
                    <div class="book-year">Année</div>
                </div>
               <?php
               foreach($bookList as $book) {
                ?>
                    <div class="book-row">
                        <div class="book-title"><?= $book['Titre'] ?></div>
                        <div class="book-author"><?= $book['Auteur'] ?></div>
                        <div class="book-genre"><?= $book['Genre'] ?></div>
                        <div class="book-year"><?= $book['Date'] ?></div>
                    </div>
                <?php
                }
               ?>
            </div>
        </main>
    </div>
    <?php include('../_partials/_footer.php'); ?>
</body>
</html>