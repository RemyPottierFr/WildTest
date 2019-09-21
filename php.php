<?php session_start(); include "header.php"; ?>

<body>
    <h1 class="index--title">Wild Test</h1> 
    <section id="questions">
        <div class="form">
            <label for="select" class="form--label">Que signifie PHP ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Punaise c'est Hyper Productif</option>
                <option value="10">PHP: Hypertext Preprocessor</option>
                <option value="5">Proto Hypertext Processor</option>
            </select>
            <label for="select" class="form--label">Il date de quand celui la ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">C'est le frère du COBOL</option>
                <option value="10">1994</option>
                <option value="5">Bien avant la naissance du créateur de ce test</option>
                <option value="5">La même année que Rodolphe</option>
            </select>
            <label for="select" class="form--label">Vous vous rapellez des ses paradigmes ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Can u spik ine inegliche pliz</option>
                <option value="-5">Y en a pleins (réponse bateau)</option>
                <option value="10">Impératif, orienté objet ...</option>
                <option value="1">Je ne connais pas sa famille</option>
            </select>
            <label for="select" class="form--label">Quel partie est destiné au PHP ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-10">Le BlackEnd</option>
                <option value="1">La Bac End</option>
                <option value="10">Le BackEnd</option>
                <option value="5">Je suis apolitique</option>
            </select>
            <label for="select" class="form--label">Combien de place il prend sur le web ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">1,2 % comme Linux</option>
                <option value="5">70% comme Windows</option>
                <option value="10">Environ 80% comme 100% - 20%</option>
                <option value="20">Beaucoup de place car c'est un éléphant</option>
            </select>
            <label for="select" class="form--label">Comment s'apelle le créateur de ce language ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Razmuss Leredorfe</option>
                <option value="10">Rasmus Lerdorf</option>
                <option value="-10">Par son prénom</option>
            </select>
            <label for="select" class="form--label">Quelle est la dernière version de PHP ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Le 7</option>
                <option value="10">Celle après celle d'avant</option>
                <option value="-10">La 5</option>
            </select>
            <label for="select" class="form--label">Comment afficher le fameux "Hello World !" ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Avec un markeur indélébile</option>
                <option value="10">echo "Hello World !";</option>
                <option value="-10">Avec un panneau à Haute visibilité</option>
            </select>
            <label for="select" class="form--label">Quelle balise sont correctes ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="10">< ?php ... ?></option>
                <option value="10">< ?= ... ?></option>
                <option value="5">Sûrement pas celle qui sotn sonores</option>
            </select>
            <label for="select" class="form--label">Quelle déclaration de variable est bonne ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="10">var variable</option>
                <option value="10">$variable</option>
                <option value="5">class variable</option>
            </select>
            <button onclick="formsubmit()" class="button--form">Terminer le test HTML<i class="fas fa-location-arrow"></i></button>
        </div>
    </section>
</body>