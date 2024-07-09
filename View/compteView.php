<!DOCTYPE html>
<html lang="en">
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
        

    </div>
<?php
        include_once('../_partials/_footer.php');
       
    ?>
    <p><?= $_GET['nom'] ?></p>
</body>
</html>