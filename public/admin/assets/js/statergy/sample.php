<!DOCTYPE html>
<html>
<body>

<?php
///9.45-14

$real=array(341.45,341.15,340.75,341.00,340.65,339.25,339.75,338.80,339.20,339.45,338,338.25,338.75,339.30,339.05,339.05,339.25,338.55);

//$real = array(339.05,339.3,338.75,338.25,338,339.45,339.2,338.8,339.75,339.25,340.65);
print_r( exponentialMovingAverage($real,5));
function exponentialMovingAverage(array $src, int $length): array
{
     $m   = count($src);
     $α   = 2 / ($length + 1);
     $EMA = [];

     // Start off by seeding with the first data point
     $EMA[] = $src[0];

     // Each day after: EMAtoday = α⋅xtoday + (1-α)EMAyesterday
     for ($i = 1; $i < $m; $i++) {
        $EMA[] = round($α * $src[$i] + (1 - $α) * $EMA[$i - 1],3);
     }

     return $EMA;
}
?>

</body>
</html>
