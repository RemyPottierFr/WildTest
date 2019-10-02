<?php session_start();
include "header.php";

if (isset($_GET['html'])) {
    $_SESSION['html']=$_GET['html'];
}

if (isset($_GET['css'])) {
    $_SESSION['css']=$_GET['css'];
}

if (isset($_GET['js'])) {
    $_SESSION['js']=$_GET['js'];
}

if (isset($_GET['php'])) {
    $_SESSION['php']=$_GET['php'];
}

// echo $_SESSION['html'],$_SESSION['css'],$_SESSION['js'],$_SESSION['php'];
?>

<body>
    <h1 class="index--title">Wild Test</h1>
    <section class="choice"><a class="choice--link" href="jschoice.php">Choisir la spécialité : HTML,
            CSS,
            JS</a><a class="choice--link" href="phpchoice.php">Choisir la spécialité : HTML,
            CSS,
            PHP</a></section><?php if ((isset($_SESSION['html']) and isset($_SESSION['css']) and isset($_SESSION['js'])) or (isset($_SESSION['html']) and isset($_SESSION['css']) and isset($_SESSION['php']))) {
    echo '<div class="link--results"><a href="results.php" class="link--results--a">Voir les résultats</a></div>';
}

?><div class="github"><a href="https://github.com/RemyPottierFr/WildTest"><i class="fab fa-github"></i></a></div>
</body>

</html>