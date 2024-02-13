<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
        $errors[] = 'Le prénom est obligatoire';
    if (!isset($_POST['user_name']) || trim($_POST['user_name']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '')
        $errors[] = "L'adresse email est obligatoire";
    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
        $errors[] = "Veuillez entrer un email au bon format";
    if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";
    if (!isset($_POST['user_choice']) || trim($_POST['user_choice']) === '')
        $errors[] = "Le choix de l'objet est obligatoire";
    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
        $errors[] = "Le message est obligatoire";

}


$firstname = $_POST['user_firstname'];
$name = $_POST['user_name'];
$choice = $_POST['user_choice'];
$phoneNumber = $_POST['user_phone'];
$email = $_POST['user_email'];
$message = $_POST['user_message']
?>

<?php if (!$errors): ?>
    <p>
        Merci <?php echo $firstname . " " . $name ?> de nous avoir contactés à propos de <?php echo $message ?>.

        Un de nos conseillers vous contactera soit à l’adresse <?php echo $email ?> ou par téléphone
        au <?php echo $phoneNumber ?> dans les plus brefs délais pour traiter votre demande :

        <?php echo $message ?>
    </p>
<?php endif; ?>

<?php // Affichage des éventuelles erreurs

if (count($errors) > 0) : ?>

    <div>

        <ul>

            <?php foreach ($errors as $error) : ?>

                <li><?= $error ?></li>

            <?php endforeach; ?>

        </ul>

    </div>

<?php endif; ?>
