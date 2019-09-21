<?php session_start(); include "header.php"; ?>
<body>
    <section class="results">
        <div class="results--part">
            <div class="result--part--graph"><div class="pourcentage html--pourcentage">zefzgre</div><div class="results--column html--col"></div></div>
            <i class="fab fa-html5 panel--languages--icon html--icon"></i>
        </div>
        <div class="results--part">
            <div class="result--part--graph"><div class="pourcentage css--pourcentage"></div><div class="results--column css--col"></div></div>
                <i class="fab fa-css3-alt panel--languages--icon css--icon"></i>
        </div>
        <?php
            if (isset($_SESSION['js'])){
                echo '  <div class="results--part">
                            <div class="result--part--graph"><div class="pourcentage js--pourcentage"></div><div class="results--column js--col"></div></div>
                            <i class="fab fa-js panel--languages--icon js--icon"></i>
                        </div>';
            }
        ?>
        <?php
            if (isset($_SESSION['php'])){
                echo '  <div class="results--part">
                            <div class="result--part--graph"><div class="pourcentage php--pourcentage"></div><div class="results--column php--col"></div></div>
                            <i class="fab fa-php panel--languages--icon php--icon"></i>
                        </div>';
            }
        ?>
    </section>
    <script>
    var html = <?php echo $_SESSION['html']; ?>;
    var css = <?php echo $_SESSION['css']; ?>;
    <?php if (isset($_SESSION['js'])){?>
        var js = <?php echo $_SESSION['js']; ?>;
    <?php } ?>
    <?php if (isset($_SESSION['php'])){?>
        var php = <?php echo $_SESSION['php']; ?>;
    <?php } ?>
    document.querySelector('.html--col').style.height=html*2+"px";
    document.querySelector('.css--col').style.height=css*2+"px";
    document.querySelector('.js--col').style.height=js*2+"px";
    document.querySelector('.php--col').style.height=php*2+"px";

    document.querySelector('.html--pourcentage').innerHTML = html + " %";
    document.querySelector('.css--pourcentage').innerHTML = css + " %";
    document.querySelector('.js--pourcentage').innerHTML = js + " %";
    document.querySelector('.php--pourcentage').innerHTML = php + " %";
</script>
</body>