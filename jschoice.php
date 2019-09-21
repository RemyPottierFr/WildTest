<?php 
session_start(); 
include "header.php"; 

if(isset($_SESSION['html'])){
    echo '<style>.check--logo--html{display:block;}</style>';
}
if(isset($_SESSION['css'])){
    echo '<style>.check--logo--css{display:block;}</style>';
}
if(isset($_SESSION['js'])){
    echo '<style>.check--logo--js{display:block;}</style>';
}

?>
<body>
    <h1 class="index--title">Wild Test</h1> 
    <section class="panels">
        <div class="panel--languages">
            <a class="html--icon" href="html.php">
                <i class="fab fa-html5 panel--languages--icon"></i>
            </a>
            <i class="fas fa-check-circle check--logo check--logo--html"></i>
        </div>
        <div class="panel--languages">
            <a class="css--icon" href="css.php">
                <i class="fab fa-css3-alt panel--languages--icon"></i>
            </a>
            <i class="fas fa-check-circle check--logo check--css"></i>
        </div>
        <div class="panel--languages">
            <a class="js--icon" href="js.php">
                <i class="fab fa-js panel--languages--icon"></i>
            </a>
            <i class="fas fa-check-circle check--logo check--logo--js"></i>
        </div>
    </section>
</body>
</html>