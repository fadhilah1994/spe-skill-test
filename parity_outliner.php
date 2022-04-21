<?php
  $dataset = array(20.50, 80.30, 70.95, 15.25, 99.97, 85.56, 69.77);
  $magnitude = 1;

  $count = count($dataset);
  $mean = array_sum($dataset) / $count;
  $deviation = sqrt(array_sum(array_map("sd_square", $dataset, array_fill(0, $count, $mean))) / $count) * $magnitude;

  return array_filter($dataset, function($x) use ($mean, $deviation) { return ($x <= $mean + $deviation && $x >= $mean - $deviation); }); 

function sd_square($x, $mean) {
  return pow($x - $mean, 2);
} 

?>
