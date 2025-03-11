<main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Foire Aux Questions</h1>

    <div class="max-w-3xl mx-auto space-y-6 mb-10">
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