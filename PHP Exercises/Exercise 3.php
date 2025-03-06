<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo "$i\n";
    }
}
?>

<?php
$a = 0;
$b = 1;
$count = 0;

while ($count < 10) {
    $next = $a + $b;
    $a = $b;
    $b = $next;

    if ($a % 2 == 0) {
        echo $a . "\n";
    }
    
    $count++;
}
?>
