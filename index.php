<?php
    $racine_path = './';
    $titre = "Accueil";
    include($racine_path."templates/front/header.php");
    
    echo "<main class='bg-black text-white font-montserrat overflow-x-hidden'>";
    include($racine_path."templates/front/home.php");
    include($racine_path."templates/front/solar_system.php");
    echo "</main>";
    include($racine_path."templates/front/footer.php");
?>