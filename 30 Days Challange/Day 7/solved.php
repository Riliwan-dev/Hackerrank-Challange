<?php
$_fp = fopen("php://stdin", "r");

// Read the number of test cases
$t = intval(fgets($_fp));

// Iterate through each test case
for ($i = 0; $i < $t; $i++) {
    // Read the input string
    $s = trim(fgets($_fp));

    // Initialize even and odd strings
    $even = $odd = '';

    // Iterate through each character in the string
    for ($j = 0; $j < strlen($s); $j++) {
        // Check if the index is even or odd and append to the corresponding string
        if ($j % 2 == 0) {
            $even .= $s[$j];
        } else {
            $odd .= $s[$j];
        }
    }

    // Print the result for the current test case
    echo $even . ' ' . $odd . PHP_EOL;
}

fclose($_fp);
?>
