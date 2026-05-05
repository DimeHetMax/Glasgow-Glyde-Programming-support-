<?php
include 'partials/header.php';
include 'scripts/search_term.php';

?>

<div class="max-w-7xl mx-auto">
    <!-- search -->
<section>
      <div class="flex flex-col w-full items-center pt-1 gap-4 ">
    <form action="search_results.php" method="GET" class="max-w-[500px] w-full px-4">    <div class="relative">
        <input 
            type="text" 
            name="q" 
            value=""
            class="w-full border h-12 shadow p-4 rounded-full" 
            placeholder="Search games"
        >

        <button type="submit">
            <svg class="text-gray-400 h-5 w-5 absolute top-3.5 right-3 fill-current"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 56.966 56.966">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
    </div>
</form>
</div>
</section>
    <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">╭∩╮( •̀_•́ )╭∩╮( -_•)╦̵̵̿╤─"<?= htmlspecialchars($searchTerm, ENT_QUOTES, 'UTF-8') ?>"</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Games -->
        <?php if (count($games) > 0): ?>

            <?php foreach ($games as $game): ?>

                <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                    <div class="relative overflow-hidden h-80">
                        <img src="assets/images/assassings.jpg"
                            alt="Image of <?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?>"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 right-4">
                            <button class="bg-white/90 text-gray-800 p-2 rounded-full shadow-md transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 hover:bg-red-500 hover:text-white">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                        <span class="absolute top-4 left-4 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full animate-pulse-slow"><?= htmlspecialchars($game['game_price'], ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800"><?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?></h3>
                                <p class="text-gray-500 text-sm"><?= htmlspecialchars($game['genre_name'], ENT_QUOTES, 'UTF-8') ?></p>
                                <p class="text-gray-500 text-sm"><?= htmlspecialchars($game['console_name'], ENT_QUOTES, 'UTF-8') ?></p>

                            </div>
                        </div>
                        <button class="mt-4 bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-300">
                            More Details
                            <div class="mt-3 flex items-center">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <p>No results found.</p>
        <?php endif; ?>
    </div>
</div>
<?php
include 'partials/footer.php';
?>