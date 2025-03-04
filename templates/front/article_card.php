<main>
    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-manrope text-4xl font-bold text-gray-900 text-center mb-16">Articles</h2>
            <div class="flex flex-col gap-8">
                <?php
                if (isset($articles) && !empty($articles)) {
                    $chunks = array_chunk($articles, 3); // Divise le tableau en groupes de 3
                    foreach($chunks as $row) {
                        ?>
                        <div class="flex flex-wrap justify-center gap-8 lg:flex-nowrap">
                            <?php foreach($row as $article) { ?>
                                <div class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl">
                                    <div class="flex items-center">
                                        <img src="<?php echo $article['image']; ?>" 
                                             alt="<?php echo htmlspecialchars($article['titre']); ?>" 
                                             class="rounded-t-2xl w-full object-cover h-48">
                                    </div>
                                    <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                                        <span class="text-orange-600 font-medium mb-3 block">
                                            <?php echo date('d M Y', strtotime($article['date_creation'])); ?>
                                        </span>
                                        <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">
                                            <?php echo htmlspecialchars($article['titre']); ?>
                                        </h4>
                                        <p class="text-gray-500 leading-6 mb-10">
                                            <?php echo htmlspecialchars(substr($article['contenu'], 0, 150)) . '...'; ?>
                                        </p>
                                        <a href="articles.php?id=<?php echo $article['id']; ?>" 
                                           class="cursor-pointer text-lg text-orange-600 font-semibold">
                                            Lire plus...
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p class="text-center w-full">Aucun article disponible pour le moment.</p>';
                }
                ?>
            </div>
        </div>
    </section>
</main>