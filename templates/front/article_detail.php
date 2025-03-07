<div class="w-full max-w-7xl mx-auto">

    <div class="w-full h-[400px] relative mt-6">
        <!-- Bouton retour -->
        <div class="p-4">
            <a href="<?php echo $racine_path."templates/front/articles.php" ?>" class="inline-flex items-center text-orange-600 hover:text-orange-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Retour aux articles
            </a>
            <h2 class="inline-flex items-center text-orange-600 hover:text-orange-700"> / </h2>
            <a href="<?php echo $racine_path."control/edit.php" ?>" class="inline-flex items-center text-orange-600 hover:text-orange-700">Modifier</a>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
            <!-- titre -->
            <div class="flex">
                <h1 class="text-4xl font-bold text-gray-900 mb-6 object-left pl-20"><?= $article['title'] ?></h1>
            </div>
            <!-- Image bannière -->
            <div class="flex">
                <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" class="w-full h-full object-contain object-right shadow-xl rounded-2xl">
            </div>
        </div>

    </div>
    
    <!-- Resume de l'article -->
        
        <div class="max-w-5xl mx-auto px-10 py-14 border-2 border-solid rounded-xl border-4 border-orange-500 bg-gray-500/100 shadow-2xl">
            <div class="prose prose-lg max-w-none text-white">
                <h2><?= $article['content'] ?></h2>
            </div>
        </div>
        
    
    <!-- Contenu de l'article -->
    <div class="max-w-3xl mx-auto px-4 py-8">
        
        <div class="prose prose-lg max-w-none">
            <?= $article['content'] ?>
        </div>
    </div>
        
</div> 


