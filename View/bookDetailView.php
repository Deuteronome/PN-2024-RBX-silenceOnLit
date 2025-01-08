<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once('../_partials/_head.php') ?>
    <script type="module" src="../script/home.js" defer></script>
</head>
<body>
    <?php
        include_once('../_partials/_header.php');
        include_once('../_partials/_nav.php');
    ?>
    <div id="central">
        <main>
            <div class="book-Zone">
                <div class="book-title">
                    <a href="../Controller/library.php?siteId=<?= isset($_GET['siteId'])?$_GET['siteId']: 4?>">
                    <button>Retour</button>
                    </a>
                    <h2><?= $book['title']?></h2>
                    
                </div>
                <div class="book-main">
                    <div class="book-cover">
                        <img src="../assets/couvertures/<?= $book['picture']?>" alt="">
                    </div>
                    <div class="book-info">
                        <div class="book-author"><?= $book['author']?></div>
                        <div class="book-genre"><?= $book['genre']?></div>
                        <div class="book-edition"><?= $book['edition']?></div>
                        <div class="book-format"><?= $book['format']?></div>
                        <div class="book-pages"><?= $book['pages']?></div>
                        <div class="book-date"><?= $book['date']?></div>
                        <div class="book-synopsis"><?= $book['synopsis']?></div>
                        <div class="book-is-available">
                            <?= ($book['loan']!==null)?'emprunté':'Disponible'?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php
        include_once('../_partials/_footer.php');
       
    ?>
    
</body>
</html>