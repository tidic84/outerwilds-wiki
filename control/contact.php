<?php
    $racine_path = '../';
    $titre = "Contact";
    
    if (!empty($_POST)) {
        $nom = $_POST['nom'] ?? '';
        $email = $_POST['email'] ?? '';
        $message = $_POST['message'] ?? '';
        
        // Validation des données
        if (empty($nom) || empty($email) || empty($message)) {
            $error = "Tous les champs sont obligatoires.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "L'adresse email n'est pas valide.";
        } else {
            
            $to = "contact@tidic.fr";
            
            $subject = "Nouveau message de contact - OuterWilds Wiki";
            
            $message_body = "Nom: " . $nom . "\n";
            $message_body .= "Email: " . $email . "\n\n";
            $message_body .= "Message:\n" . $message;
            
            $headers = "From: " . $email . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            
            if(mail($to, $subject, $message_body, $headers)) {
                $success = "Votre message a été envoyé avec succès !";
            } else {
                $error = "Une erreur est survenue lors de l'envoi du message.";
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
