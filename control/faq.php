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
        $titre = "FAQ";
        include($racine_path."templates/front/header.php");        
    ?>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Foire Aux Questions</h1>

    <?php
    $faq_items = [
        [
            'question' => "Qu'est-ce que Outer Wilds ?",
            'reponse' => "Outer Wilds est un jeu d'exploration spatiale en monde ouvert où vous incarnez un astronaute qui explore un système solaire piégé dans une boucle temporelle de 22 minutes."
        ],
        [
            'question' => "Comment débloquer de nouveaux vaisseaux ?",
            'reponse' => "Il n'y a qu'un seul vaisseau dans le jeu. Vous pouvez cependant le réparer et l'améliorer au fur et à mesure de vos explorations."
        ],
        [
            'question' => "Que faire si je suis bloqué dans le jeu ?",
            'reponse' => "Explorez d'autres planètes, lisez attentivement les textes Nomaï et utilisez votre ordinateur de bord pour suivre les pistes. Chaque information peut être cruciale."
        ],
        [
            'question' => "Qui sont les Nomaï ?",
            'reponse' => "Les Nomaï sont une ancienne espèce extraterrestre très avancée technologiquement qui a habité le système solaire bien avant les événements du jeu. Leurs écrits et technologies sont essentiels pour comprendre les mystères du jeu."
        ]
    ];
    ?>

    <div class="max-w-3xl mx-auto space-y-6">
        <?php foreach($faq_items as $item): ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-4 bg-gray-500">
                    <h2 class="text-xl font-semibold text-white"><?php echo htmlspecialchars($item['question']); ?></h2>
                </div>
                <div class="p-4 bg-gray-50">
                    <p class="text-gray-700"><?php echo htmlspecialchars($item['reponse']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
    
</body>
</html>