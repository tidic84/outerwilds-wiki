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
<body class="bg-gray-100">
    
    <?php
        $racine_path = '../';
        $titre = "Login";
        include($racine_path."templates/front/header.php");
        echo "<main>";
        include($racine_path."templates/front/form_register.php");
        echo "</main>";
        
    ?>

</body>
</html>