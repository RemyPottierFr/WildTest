<?php session_start(); include "header.php"; ?>

<body>
    <h1 class="index--title">Wild Test</h1>
    <section id="questions">
        <div class="form">
            <label for="select" class="form--label">Que signifie CSS ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="5">Croute Sédimentaire Stylée</option>
                <option value="10">Cascading Style Sheets</option>
                <option value="5">Casque adding Style Shits</option>
            </select>
            <label for="select" class="form--label">Quand a été crée le language préferé de Tanguy ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="5">Bien trop tôt pour le rencontrer</option>
                <option value="1">A Matusalem</option>
                <option value="-1">A la dernière pluie</option>
                <option value="10">En 1996</option>
            </select>
            <label for="select" class="form--label">Quel est l'objectif de ce fameux language ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="5">Torturer les esprits</option>
                <option value="20">Faire une dépression nerveuse à Tanguy</option>
                <option value="10">A styliser les pages HTML</option>
                <option value="-10">A trier la nourriture avarié</option>
            </select>
            <label for="select" class="form--label">Dans quel cas utilise t-on "@media" ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Quand on cherche informations sur l'actualité</option>
                <option value="10">Quand on fait un site responsive</option>
                <option value="-10">Lorsque l'on découvre un trésor</option>
            </select>
            <label for="select" class="form--label">A quoi sert cette règle : "display:flex;" ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-5">A rester flexible en toute circonstance face à GIT</option>
                <option value="10">A faire du responsive simple et efficace</option>
                <option value="5">A réaliser une figure d'accrogym</option>
            </select>
            <label for="select" class="form--label">Quel règle n'exite pas ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-5">Display</option>
                <option value="10">Front-family</option>
                <option value="-5">Background-color</option>
            </select>
            <label for="select" class="form--label">Quel unité n'exite pas ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Pt</option>
                <option value="1">Cm</option>
                <option value="10">inch</option>
                <option value="-10">%</option>
            </select>
            <label for="select" class="form--label">Quelle méthode utilisent Andréa et Romain Sombre ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="5">BIM</option>
                <option value="10">BEM</option>
                <option value="1">BOUM</option>
                <option value="-10">BMW</option>
            </select>
            <label for="select" class="form--label">Quelle est la liste des écrans correcte ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-5">Screen, phaune, maux bile</option>
                <option value="10">Screen, phone, mobile</option>
                <option value="-10">Scine, phone, moubile</option>
            </select>
            <label for="select" class="form--label">Quelle classe à été utilisé pour les select ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-10">select</option>
                <option value="1">faurmsailect</option>
                <option value="10">form--select</option>
                <option value="5">C'est pas mon code, donc je sais pas !</option>
            </select>
            <button onclick="formsubmit()" class="button--form">Terminer le test HTML<i
                    class="fas fa-location-arrow"></i></button>
        </div>
    </section>
</body>