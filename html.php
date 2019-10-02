<?php session_start(); include "header.php"; ?>

<body>
    <h1 class="index--title">Wild Test</h1>
    <section id="questions">
        <div class="form">
            <label for="select" class="form--label">Que signifie HTML ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="0">Hyper Trop Méga Lourd</option>
                <option value="10">HyperText Markup Language</option>
                <option value="5">Hyper Text Mockup Language</option>
            </select>
            <label for="select" class="form--label">Quand est né l'HTML ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">C'est pas un organisme vivant</option>
                <option value="5">1993</option>
                <option value="-5">Bien avant moi</option>
                <option value="10">Appeler mamie</option>
            </select>
            <label for="select" class="form--label">Quel languages est son meilleur ami ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Le COBOL</option>
                <option value="10">Le CSS</option>
                <option value="5">Le Php</option>
                <option value="5">Le JS</option>
            </select>
            <label for="select" class="form--label">Quel site permet de valider son code ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Celui de la NSA</option>
                <option value="1">Php.org</option>
                <option value="-5">w4c.com</option>
                <option value="10">w3c.com</option>
                <option value="20">internet-signalement.gouv.fr</option>
            </select>
            <label for="select" class="form--label">Quel est l'ISO de l'HTML ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">C'est quoi un ISO ?</option>
                <option value="1">Je parle pas aux étrangers</option>
                <option value="10">15445</option>
                <option value="-5">Vade Retro Satanas</option>
                <option value="20">C3Po</option>
            </select>
            <label for="select" class="form--label">Quel balise existe ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="10">wbr</option>
                <option value="-10">Toutes évidement</option>
                <option value="10">pre</option>
                <option value="10">ruby</option>
            </select>
            <label for="select" class="form--label">Comment se nomme la balise que vous utiliser<br>pour répondre
                ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-5">Reponse</option>
                <option value="1">C'est Lect</option>
                <option value="10">Select</option>
                <option value="5">Input</option>
            </select>
            <label for="select" class="form--label">Que signifie "UTF-8" ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-5">UlTra Force 8</option>
                <option value="10">Universal Character Set Transformation Format-8 bits</option>
                <option value="5">Uppercut Transpercant Force 8</option>
            </select>
            <label for="select" class="form--label">Comment finir ce quiz ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-5">En le terminant</option>
                <option value="20">En envoyant 15€ sur le Paypal du créateur</option>
                <option value="-10">En rechargant la page</option>
                <option value="10">En appuyant sur le button envoyer</option>
                <option value="5">En mangeant une chips</option>
            </select>
            <button onclick="formsubmit()" class="button--form">Terminer le test HTML<i class="fas fa-location-arrow"></i></button>
        </div>
    </section>
</body>