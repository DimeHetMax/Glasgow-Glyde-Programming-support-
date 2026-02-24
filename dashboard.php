<?php
$title = 'Dashboard';
include 'partials/header.php';
include 'partials/scripts/scores.php';

$total_students_tested = count($students);
// echo $total_students_tested;
$average_student_score = array_sum(array_column($students, 'score')) / count($students);
// echo $average_student_score;
$index;
$max_score = max(array_column($students, 'score', $index));
// echo $max_score;
$min_score = min(array_column($students, 'score'));
// $top_class = max(array_column($students, 'score'));

$name_top;
for ($i=0; $i < count($students); $i++) { 
  
   if($i === $index){
       $name_top = $students[$i]["name"];
   }
}

?>

<?php 
include 'partials/scripts/scores.php';

$index;
$min_score = min(array_column($students, 'score', $index));

$name_faild;
for ($i=0; $i < count($students); $i++) { 
  
   if($i === $index){
       $name_faild = $students[$i]["name"];
   }
}

?>
<section class="bg-gray-100 py-12">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">title</h2>
    
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      
      <!-- Card 1 -->
      <div class="bg-white p-6 rounded-2xl shadow-md transform hover:scale-105 transition duration-300 animate-fade-in">
        <h3 class="text-xl font-semibold text-blue-600 mb-2"><?=  $total_students_tested?></h3>
        <p class="text-gray-600">Total Students tested</p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-6 rounded-2xl shadow-md transform hover:scale-105 transition duration-300 animate-fade-in delay-100">
        <h3 class="text-xl font-semibold text-green-600 mb-2"><?= round($average_student_score) ?>%</h3>
        <p class="text-gray-600">Average student Score</p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-6 rounded-2xl shadow-md transform hover:scale-105 transition duration-300 animate-fade-in delay-200">
        <h3 class="text-xl font-semibold text-yellow-600 mb-2"><?= $max_score ?>%</h3>
        <p class="text-gray-600">Highest student score</p>
      </div>

      <!-- Card 4 -->
      <div class="bg-white p-6 rounded-2xl shadow-md transform hover:scale-105 transition duration-300 animate-fade-in delay-300">
        <h3 class="text-xl font-semibold text-pink-600 mb-2"><?= $min_score ?>%</h3>
        <p class="text-gray-600">Lowest Student Score</p>
      </div>

      <!-- Card 5 -->
      <div class="bg-white p-6 rounded-2xl shadow-md transform hover:scale-105 transition duration-300 animate-fade-in delay-400">
        <h3 class="text-xl font-semibold text-purple-600 mb-2"><?= $name_top ?></h3>
        <p class="text-gray-600">Top of the Class</p>
      </div>

      <!-- Card 6 -->
      <div class="bg-white p-6 rounded-2xl shadow-md transform hover:scale-105 transition duration-300 animate-fade-in delay-500">
        <h3 class="text-xl font-semibold text-red-500 mb-2"><?= $name_faild ?></h3>
        <p class="text-gray-600">Student that failed</p>
      </div>
      
    </div>
  </div>
</section>

<style>
  @keyframes fade-in {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in {
    animation: fade-in 0.6s ease-out both;
  }

  .delay-100 { animation-delay: 0.1s; }
  .delay-200 { animation-delay: 0.2s; }
  .delay-300 { animation-delay: 0.3s; }
  .delay-400 { animation-delay: 0.4s; }
  .delay-500 { animation-delay: 0.5s; }
</style>

<?php 
 include 'partials/footer.php'
?>