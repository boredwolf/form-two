<?php

?>


<form action="/thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name" required>
    </div>
    <div>
        <label for="prénom">Prénom :</label>
        <input type="text" id="prénom" name="user_firstname" required>
    </div>
    <div>
        <label for="choix">Choisissez un objet :</label>
        <select id="choix" name="user_choice" required>
            <option value="option1">Dire coucou</option>
            <option value="option2">Faire de l'argent</option>
            <option value="option3">Juste comme ça</option>
        </select>
    </div>
    <div>
        <label for="phoneNumber">Numéro de téléphone :</label>
        <input type="number" id="phoneNumber" name="user_phone" required>
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email" required>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message" required></textarea>
    </div>
    <div class="button">
        <a href="https://localhost:8000/thanks.php">
            <button type="submit">Envoyer votre message</button>
        </a>

    </div>
</form>

