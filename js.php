<?php session_start(); include "header.php"; ?>

<body>
    <h1 class="index--title">Wild Test</h1> 
    <section id="questions">
        <div class="form">
            <label for="select" class="form--label">Que signifie JS ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-5">J'ai Sué</option>
                <option value="10">Javascript</option>
                <option value="5">Jiraya Sénateur</option>
            </select>
            <label for="select" class="form--label">Ca date de quand le JS ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="10">1995</option>
                <option value="1">Il était une fois, il y a bien longtemps ...</option>
                <option value="5">Avant la naissance de Brigitte Bardot</option>
            </select>
            <label for="select" class="form--label">Quel est le nom standardisée de JS ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-5">Javascript</option>
                <option value="10">ECMAScript</option>
                <option value="-5">CoffeeScript</option>
                <option value="-10">COBOL</option>
            </select>
            <label for="select" class="form--label">Quel est le paradigme de JS ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="10">Multi-Paradigme</option>
                <option value="5">Je ne parle toujours pas cette langue</option>
                <option value="-5">Scie circulaire</option>
            </select>
            <label for="select" class="form--label">Quelle balise est utilisée pour faire appel à du JS ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="10">< script> < /script></option>
                <option value="1">< javascript> < /javascript></option>
                <option value="-5">< h1> < /h1></option>
            </select>
            <label for="select" class="form--label">En combien de temps a été crée le JS ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Moins de temps qu'il ne faut pour le dire</option>
                <option value="10">10 jours</option>
                <option value="5">6 mois</option>
            </select>
            <label for="select" class="form--label">Et c'est qui le créateur de tout ce bazard ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Romain Sombre</option>
                <option value="10">Brendan Eich</option>
                <option value="5">Andréa Maugars</option>
            </select>
            <label for="select" class="form--label">Quelle commandes est utilisé pour afficher le fameux "Hello World !" ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">La réponse D</option>
                <option value="10">console.log()</option>
                <option value="5">echo()</option>
            </select>
            <label for="select" class="form--label">Quelle est la dernière version de Javascript ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="1">Celle qui viens de sortir</option>
                <option value="10">La 8</option>
                <option value="5">La 7</option>
                <option value="5">J'ai pas Internet</option>
            </select>
            <label for="select" class="form--label">A quoi sert le JS sur ce test ?</label>
            <select name="select" class="form--select">
                <option value="0" disabled>Séléctionner un réponse ------</option>
                <option value="-10">Ca sert à rien de toute façon</option>
                <option value="1">A faire joli</option>
                <option value="10">La collecte des points</option>
            </select>
            <button onclick="formsubmit()" class="button--form">Terminer le test HTML<i class="fas fa-location-arrow"></i></button>
        </div>
    </section>
</body>