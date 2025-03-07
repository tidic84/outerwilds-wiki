<header class="bg-white shadow-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                Admin - <?php echo $titre ?>
            </h1>
        </div>
        <div class="hidden lg:flex lg:gap-x-12 lg:flex-1 lg:justify-end">
            <a href="<?php echo $racine_path."index.php" ?>"
                class="text-sm/6 font-semibold text-gray-900 hover:text-orange-600">Dashboard</a>
            <a href="<?php echo $racine_path."control/users.php" ?>"
                class="text-sm/6 font-semibold text-gray-900 hover:text-orange-600">Utilisateurs</a>
            <a href="<?php echo $racine_path."control/articles.php" ?>"
                class="text-sm/6 font-semibold text-gray-900 hover:text-orange-600">Articles</a>
            <a href="<?php echo $racine_path."control/faq.php" ?>"
                class="text-sm/6 font-semibold text-gray-900 hover:text-orange-600">FAQ</a>
            <a href="<?php echo "../".$racine_path ?>"
                class="text-sm/6 font-semibold text-gray-900 hover:text-orange-600">Retour au site</a>
        </div>
    </nav>
</header> 