<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $length = 10;
    $width = 5;

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Area: $area, Perimeter: $perimeter";
    ?>
    </br>
    <?php
    $amount = 1000;
    $vat = $amount * 0.15;

    echo "VAT: $vat";
    ?>
    </br>
    <?php
    $number = 7;

    if ($number % 2 == 0) {
        echo "$number is Even";
    } else {
        echo "$number is Odd";
    }
    ?>
    </br>
    <?php
    $a = 10; $b = 25; $c = 15;

    if ($a >= $b && $a >= $c) {
        echo "Largest is $a";
    } elseif ($b >= $a && $b >= $c) {
        echo "Largest is $b";
    } else {
        echo "Largest is $c";
    }
    ?>
    </br>
    <?php
    for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
    }
    ?>
    </br>
    <?php
    $items = [10, 20, 30, 40, 50];
    $search = 30;
    $found = false;

    foreach ($items as $item) {
        if ($item == $search) {
            $found = true;
            break;
        }
    }

    echo $found ? "Found it!" : "Not found.";
    ?>
    </br>
    <?php
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>
    </br>
    <?php
    for ($i = 3; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
    echo "<br>";
    }
    ?>
    </br>
    <?php
    $char = 'A';
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $char . " ";
            $char++; // Moves to next letter
        }
        echo "<br>";
    }
    ?>
    
</body>
</html>