<?php 
    session_start();
    include "header.php"; 
    if (isset($_GET['html'])){
        $_SESSION['html'] = $_GET['html'];
    }
    if (isset($_GET['css'])){
        $_SESSION['css'] = $_GET['css'];
    }
    if (isset($_GET['js'])){
        $_SESSION['js'] = $_GET['js'];
    }
    if (isset($_GET['php'])){
        $_SESSION['php'] = $_GET['php'];
    }
    echo $_SESSION['html'],$_SESSION['css'],$_SESSION['js'],$_SESSION['php'];
?>

<body>
    <h1 class="index--title">Wild Test</h1> 
    <section class="choice">
        <a class="choice--link" href="jschoice.php">Choisir la spécialité : HTML, CSS, JS</a>
        <a class="choice--link" href="phpchoice.php">Choisir la spécialité : HTML, CSS, PHP</a>
    </section>
</body>
</html>