<!-- Header pris de tailwindui -->
<header id="header" class="backdrop-blur shadow-md z-15 <?php if ($titre == "Accueil") echo "duration-300 ease bg-black/50 w-full accueil fixed header opacity-0 hover:opacity-100"; else echo "bg-white" ?>">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <h1 class="text-3xl font-bold tracking-tight <?php if ($titre == "Accueil") echo "text-white" ?> <?php if ($titre != "Accueil") echo "text-white-900" ?>">
                <?php if ($titre != "Accueil") echo "Outer Wilds Wiki - "; echo $titre ?>
            </h1>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 <?php if ($titre == "Accueil") echo "text-white" ?> <?php if ($titre != "Accueil") echo "text-gray-700" ?>">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12 lg:flex-1 lg:justify-end">
            <a href="<?php echo $racine_path ?>"
                class="text-sm/6 font-semibold <?php if ($titre == "Accueil") echo "text-white hover:text-orange-400" ?> <?php if ($titre != "Accueil") echo "text-white-900 hover:text-orange-600" ?>">Accueil</a>
            <a href="<?php echo $racine_path."control/articles.php" ?>"
                class="text-sm/6 font-semibold <?php if ($titre == "Accueil") echo "text-white hover:text-orange-400" ?> <?php if ($titre != "Accueil") echo "text-white-900 hover:text-orange-600" ?>">Articles</a>
            <a href="<?php echo $racine_path."control/contact.php" ?>"
                class="text-sm/6 font-semibold <?php if ($titre == "Accueil") echo "text-white hover:text-orange-400" ?> <?php if ($titre != "Accueil") echo "text-white-900 hover:text-orange-600" ?>">Contact</a>
            <a href="<?php echo $racine_path."control/faq.php" ?>"
                class="text-sm/6 font-semibold <?php if ($titre == "Accueil") echo "text-white hover:text-orange-400" ?> <?php if ($titre != "Accueil") echo "text-white-900 hover:text-orange-600" ?>">FAQ</a>
            <a href="<?php echo $racine_path."control/login.php" ?>"
                class="text-sm/6 font-semibold <?php if ($titre == "Accueil") echo "text-white hover:text-orange-400" ?> <?php if ($titre != "Accueil") echo "text-white-900 hover:text-orange-600" ?>">Login</a>
        </div>
    </nav>

    <div class="lg:hidden hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">

                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="<?php echo $racine_path ?>"
                            class="block rounded-lg px-3 py-2 text-base/7 font-semibold text-white-900 hover:bg-orange-50">Accueil</a>
                        <a href="<?php echo $racine_path."control/articles.php" ?>"
                            class="block rounded-lg px-3 py-2 text-base/7 font-semibold text-white-900 hover:bg-orange-50">Articles</a>
                        <a href="<?php echo $racine_path."control/contact.php" ?>"
                            class="block rounded-lg px-3 py-2 text-base/7 font-semibold text-white-900 hover:bg-orange-50">Contact</a>
                        <a href="<?php echo $racine_path."control/faq.php" ?>"
                            class="block rounded-lg px-3 py-2 text-base/7 font-semibold text-white-900 hover:bg-orange-50">FAQ</a>
                        <a href="<?php echo $racine_path."control/login.php" ?>"
                            class="block rounded-lg px-3 py-2 text-base/7 font-semibold text-white-900 hover:bg-orange-50">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php 
    if ($titre == "Accueil") {
        echo "<script src='".$racine_path."templates/front/js/header.js'></script>";
    }
?>
