<form class="w-xl p-5 m-auto mt-50" method="post" action="">
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Editeur d'article</h2>
            <p class="mt-1 text-sm/6 text-gray-600">Modifier les informations de cet article via ce formulaire.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-6">
                    <label for="nom" class="block text-sm/6 font-medium text-gray-900">Nom</label>
                    <div class="mt-2">
                        <input type="text" placeholder="sen" name="nom" id="nom" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-orange-600 sm:text-sm/6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Prénom</label>
                    <div class="mt-2">
                        <input id="prenom" placeholder="tom" name="prenom" type="prenom" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-orange-600 sm:text-sm/6">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="message" class="block text-sm/6 font-medium text-gray-900">Email</label>
                    <div class="mt-2">
                        <textarea placeholder="ex@~~~~~.~~~~" name="email" id="email" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-orange-600 sm:text-sm/6"></textarea>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="message" class="block text-sm/6 font-medium text-gray-900">Role</label>
                    <div class="mt-2">
                        <textarea placeholder="admin/utilisateur/editeur" name="role" id="role" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-orange-600 sm:text-sm/6"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="submit" class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-orange-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Envoyer</button>
    </div>
</form>
