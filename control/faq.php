   
   

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
     <?php
        $racine_path = '../';
        $titre = "FAQ";
        include($racine_path."templates/front/header.php");        
        include($racine_path."templates/front/faq.php");
    ?>
