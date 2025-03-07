<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    <div class="flex items-center mx-40 mt-20 ">
        <img src="<?php echo $racine_path."res/pp.jpg"?>" alt="Photo de profil" class="w-48 h-48 rounded-full">
        <div class="ml-6">
            <h2 class="text-4xl font-semibold text-gray-900">Nizyi</h2>
        </div>
        <a href="<?php echo $racine_path."control/edit_user.php" ?>" class="ml-3 mt-2 rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-orange-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Modifier</a>
    </div>

    <div class="max-w-4xl mx-auto mt-2 p-6 ">
        <div class="mt-10 justify-center grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-gray-200 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-800">Box 1</h3>
                <p class="mt-2 text-gray-600">Contenu de la première box.</p>
            </div>
            <div class="p-6 bg-gray-200 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-800">Box 2</h3>
                <p class="mt-2 text-gray-600">Contenu de la deuxième box.</p>
            </div>
            <div class="p-6 bg-gray-200 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-800">Box 3</h3>
                <p class="mt-2 text-gray-600">Contenu de la troisième box.</p>
            </div>
        </div>
    </div>
</body>
</html>