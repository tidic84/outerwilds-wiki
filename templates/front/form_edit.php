<form class="w-xl p-5 m-auto mt-50" method="post" action="">
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Editeur d'article</h2>
            <p class="mt-1 text-sm/6 text-gray-600">Modifier les informations de cet article via ce formulaire.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-6">
                    <label for="nom" class="block text-sm/6 font-medium text-gray-900">Titre</label>
                    <div class="mt-2">
                        <input type="text" placeholder="Titre" name="titre" id="titre" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-orange-600 sm:text-sm/6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Url bannière</label>
                    <div class="mt-2">
                        <input id="url" placeholder="https://example.ex/~~~" name="url" type="url" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-orange-600 sm:text-sm/6">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="message" class="block text-sm/6 font-medium text-gray-900">Résumé</label>
                    <div class="mt-2">
                        <textarea placeholder="Écrivez le résumé de l'article ici." name="resume" id="resume" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-orange-600 sm:text-sm/6"></textarea>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="message" class="block text-sm/6 font-medium text-gray-900">Contenu</label>
                    <div class="mt-2">
                        <textarea placeholder="Écrivez le contenu de l'article ici." name="contenu" id="contenu" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-orange-600 sm:text-sm/6"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="submit" class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-orange-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Envoyer</button>
    </div>
</form>