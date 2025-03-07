<?php
$faq = [
    ['id' => 1, 'question' => "Qu'est-ce que Outer Wilds ?", 'reponse' => "Outer Wilds est un jeu d'exploration spatiale en monde ouvert où vous incarnez un astronaute qui explore un système solaire piégé dans une boucle temporelle de 22 minutes."],
    ['id' => 2, 'question' => "Comment débloquer de nouveaux vaisseaux ?", 'reponse' => "Il n'y a qu'un seul vaisseau dans le jeu. Vous pouvez cependant le réparer et l'améliorer au fur et à mesure de vos explorations."],
    ['id' => 3, 'question' => "Que faire si je suis bloqué dans le jeu ?", 'reponse' => "Explorez d'autres planètes, lisez attentivement les textes Nomaï et utilisez votre ordinateur de bord pour suivre les pistes. Chaque information peut être cruciale."],
    ['id' => 4, 'question' => "Qui sont les Nomaï ?", 'reponse' => "Les Nomaï sont une ancienne espèce extraterrestre très avancée technologiquement qui a habité le système solaire bien avant les événements du jeu. Leurs écrits et technologies sont essentiels pour comprendre les mystères du jeu."]
];
?>

<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-900">Liste des questions/reponses</h2>
                    <button class="bg-orange-600 text-white px-4 py-2 rounded-md hover:bg-orange-500">
                        Ajouter une question/reponse
                    </button>
                </div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Question</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reponse</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php foreach($faq as $faq): ?>
                            <tr class="">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 "><?php echo $faq['id']; ?></td>
                                <td class="px-6 py-4 text-sm text-gray-900 "><?php echo $faq['question']; ?></td>
                                <td class="px-6 py-4 text-sm text-gray-900  flex-1"><?php echo $faq['reponse']; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">
                                    <a href="#" class="text-orange-600 hover:text-orange-900 mr-3">Modifier</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 