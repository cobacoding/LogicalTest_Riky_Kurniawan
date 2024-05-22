<?php
function createDiagonalArray($n) {
    // Buat array 2 dimensi
    $array = array();
    
    // Isi array dengan nilai yang sesuai
    for ($i = 0; $i < $n; $i++) {
        $array[$i] = array();
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j) {
                $array[$i][$j] = $n;
            } else {
                $array[$i][$j] = 0;
            }
        }
    }
    
    // Cetak array
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "\n";
    }
}

// Contoh penggunaan
$input = 4;
echo "Input: $input\nOutput:\n";
createDiagonalArray($input);

$input = 9;
echo "Input: $input\nOutput:\n";
createDiagonalArray($input);
?>
