<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>OuterWilds Wiki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        $racine_path = '../';
        $titre = "Contact";
        
        if (!empty($_POST)) {
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            // Débogage - afficher les données reçues
            error_log("Données POST reçues : " . print_r($_POST, true));
            
            $nom = $_POST['nom'] ?? '';
            $email = $_POST['email'] ?? '';
            $message = $_POST['message'] ?? '';
            
            // Validation des données
            if (empty($nom) || empty($email) || empty($message)) {
                $error = "Tous les champs sont obligatoires.";
                error_log("Erreur validation : champs manquants");
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = "L'adresse email n'est pas valide.";
                error_log("Erreur validation : email invalide");
            } else {
                $to = "contact@tidic.fr";
                $subject = "Nouveau message de contact - OuterWilds Wiki";
                $message_body = "Nom: " . $nom . "\n";
                $message_body .= "Email: " . $email . "\n\n";
                $message_body .= "Message:\n" . $message;
                
                // Ajout d'en-têtes supplémentaires pour améliorer la livraison
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
                $headers .= "From: " . $email . "\r\n";
                $headers .= "Reply-To: " . $email . "\r\n";
                $headers .= "X-Mailer: PHP/" . phpversion();
                
                // Tentative d'envoi avec plus de détails sur l'erreur
                error_log("Tentative d'envoi de mail à : " . $to);
                
                try {
                    $result = mail($to, $subject, $message_body, $headers);
                    error_log("Résultat de mail() : " . ($result ? "succès" : "échec"));
                    
                    if($result) {
                        $success = "Votre message a été envoyé avec succès !";
                    } else {
                        $error = "Une erreur est survenue lors de l'envoi du message.";
                        error_log("Erreur mail() : " . error_get_last()['message'] ?? 'Erreur inconnue');
                    }
                } catch (Exception $e) {
                    $error = "Une erreur est survenue lors de l'envoi du message.";
                    error_log("Exception lors de l'envoi : " . $e->getMessage());
                }
            }
        }

        include($racine_path."templates/front/header.php");
        echo "<main>";
        
        if (isset($error)) {
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo $error;
            echo '</div>';
        }
        if (isset($success)) {
            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">';
            echo $success;
            echo '</div>';
        }
        
        include($racine_path."templates/front/form_contact.php");
        echo "</main>";
    ?>

</body>
</html>