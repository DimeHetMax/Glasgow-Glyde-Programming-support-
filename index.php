<?php
include 'partials/header.php';
include 'scripts/featured_games.php';
?>
<section 
  class="relative bg-cover  bg-no-repeat h-[70vh] flex items-center justify-center" 
  style="background-image: url('https://plus.unsplash.com/premium_photo-1661277679965-9db1104e890f');"
>
  <div class="absolute inset-0 bg-black/50"></div>

  <div class="relative z-10 text-center text-white px-6">
    <h1 class="text-4xl md:text-6xl font-bold mb-6">
      Build Something Amazing
    </h1>

    <button 
      class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg transition"
    >
      Get Started
    </button>
  </div>
</section>
<!-- search -->
<section>
      <div class="flex flex-col w-full items-center pt-1 gap-4 ">
    <p class="text-4xl md:text-6xl font-bold text-black">Search</p>
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
<section class="py-16 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Section Heading -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Featured Games</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Explore some of the most exciting titles available right now. Each game offers a unique world, thrilling gameplay, and unforgettable experiences.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-8 md:grid-cols-4">
        <?php foreach ($featured_games as $game): ?>

      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img 
          src="assets/images/assassings.jpg" 
          alt="<?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?>" 
          class="w-full h-48 object-cover"
        >
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-3"><?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?> </h3>
          <p class="text-gray-600 mb-4">
            Dive into a futuristic world filled with neon lights, fast action, and mystery.
          </p>
          <button class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            More Info
          </button>
        </div>
      </div>
<?php endforeach ?>
     
    </div>
  </div>
</section>





<?php
include 'partials/footer.php';
?>