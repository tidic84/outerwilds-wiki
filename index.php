<?php
    $racine_path = './';
    $titre = "Accueil";
    echo "<main class='bg-black text-white font-montserrat overflow-x-hidden'>";
    echo "<link rel='stylesheet' href='<?php echo $racine_path?>templates/front/css/style.css'>";
    include($racine_path."templates/front/header.php");
    include($racine_path."templates/front/home.php");
    include($racine_path."templates/front/solar_system.php");
    echo "</main>";
    include($racine_path."templates/front/footer.php");
    // include($racine_path."templates/front/footer.php")
?>