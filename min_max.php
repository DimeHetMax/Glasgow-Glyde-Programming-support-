<?php
$title = 'Min & Max values';
include 'partials/header.php';
include 'partials/scripts/scores.php';

$min_score = min(array_column($students, 'score'));
$max_score = max(array_column($students, 'score'));
$avr_scrore = array_sum(array_column($students, 'score')) / count($students);

$total_students = count($students);
$total_scores = array_sum(array_column($students, 'score'));
$total_max_score = $total_students * 100
?>
<h1><?= $title  ?></h1>

<h4>Minimum Score <?= $min_score ?></h4>
<h4>Maximum Score <?= $max_score ?></h4>
<h4>Average Score <?= round($avr_scrore) ?></h4>

<h2>Count and Total</h2>
<h4>Total Student: <?= $total_students ?></h4>
<h4>Total Score: <?= $total_scores ?> / <?= $total_max_score ?></h4>

<?php 
 include 'partials/footer.php'
?>