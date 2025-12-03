<?php
$num = 10;
$count = 0;

for ($i = 1; $i <= $num; $i++) {
    if (($num % $i) == 0) {
        $count++;
    }
}

if ($count < 3) {
    echo "<h1 style='font-size:90px; color:green;'>$num is a prime number.</h1>";
} else {
    echo "<h1 style='font-size:90px; color:red;'>$num is not a prime number.</h1>";
}
?>
