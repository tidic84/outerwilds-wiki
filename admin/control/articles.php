<?php
    $articles = [
        [
            'id' => 1,
            'titre' => 'Le Système Solaire d\'Outer Wilds',
            'contenu' => 'Explorez les mystères fascinants du système solaire unique d\'Outer Wilds. De la paisible Timber Hearth aux dangers de Giant\'s Deep, chaque planète raconte sa propre histoire. Découvrez les secrets des Nomai et leur ancienne civilisation qui a laissé des traces à travers tout le système.',
            'date_creation' => '2024-01-15',
            'image' => 'https://preview.redd.it/a-wallpaper-i-made-v0-9ttzede3066c1.png?width=1920&format=png&auto=webp&s=0c31e52f4fb01219e7ae5b1b391c5d8f628a4716'
        ],
        [
            'id' => 2, 
            'titre' => 'Les Voyageurs et Leurs Instruments',
            'contenu' => 'Rencontrez les intrépides voyageurs dispersés à travers le système solaire. Chacun joue un instrument unique qui contribue à la bande sonore mémorable du jeu. De la flûte de Riebeck au banjo de Feldspar, découvrez comment la musique relie tous les explorateurs.',
            'date_creation' => '2024-02-01',
            'image' => 'https://i.ytimg.com/vi/mDZf-fjBxz4/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLAfAWC5F5ZdW8-Fos_NYmqcGi_6Dw'
        ],
        [
            'id' => 3,
            'titre' => 'Les Technologies Nomai',
            'contenu' => 'Plongez dans l\'héritage technologique des Nomai. De leurs écrits sur les murs aux avancées scientifiques complexes comme le Projet Œil, découvrez comment cette ancienne espèce a façonné le monde d\'Outer Wilds et les mystères qui persistent encore aujourd\'hui.',
            'date_creation' => '2024-02-20',
            'image' => 'https://payload.cargocollective.com/1/8/263533/13488403/AdvanceWarpCore_1200.jpg'
        ],
        [
            'id' => 4,
            'titre' => 'La Boucle Temporelle : Un Mystère Quantique',
            'contenu' => 'Explorez le phénomène fascinant de la boucle temporelle de 22 minutes dans Outer Wilds. Découvrez comment ce mécanisme unique s\'intègre à l\'histoire, et comment il est lié à l\'explosion du soleil. Une plongée dans la physique quantique et les paradoxes temporels qui définissent l\'univers du jeu.',
            'date_creation' => '2024-03-01',
            'image' => 'https://miro.medium.com/v2/resize:fit:3200/1*gJbbkWwoL3Dzqor4PGkUxA.jpeg'
        ],
        [
            'id' => 5,
            'titre' => 'Sombronce : Le Cauchemar Spatial',
            'contenu' => 'Osez vous aventurer dans les profondeurs terrifiantes de Dark Bramble, la planète la plus énigmatique et dangereuse du système. Entre les anglerfish qui rodent dans le brouillard et les distorsions spatiales qui défient toute logique, découvrez les secrets qui se cachent dans ce labyrinthe cosmique.',
            'date_creation' => '2024-03-15',
            'image' => 'https://assetsio.gnwcdn.com/Outer-Wilds-Angler-Fish.jpg?width=1200&height=900&fit=crop&quality=100&format=png&enable=upscale&auto=webp'
        ],
    ];

    $racine_path = '../';
    $titre = "Gestion des articles";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Admin - Articles</title>
    <link rel="stylesheet" href="<?php echo $racine_path."templates/front/css/style.css" ?>">

</head>
<body class="bg-gray-100">
    <?php
        include($racine_path."templates/front/header.php");
        include($racine_path."templates/front/articles_list.php");
    ?>
</body>
</html> 