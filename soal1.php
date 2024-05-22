<?php
function checkAnagram($str1, $str2) {
    // menghilangkan spasi dan ubah menjadi huruf kecil
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));
    
    // Cek panjang string
    if (strlen($str1) != strlen($str2)) {
        return false;
    }
    
    // Ubah string menjadi array karakter
    $array1 = str_split($str1);
    $array2 = str_split($str2);
    
    // Urutkan array
    sort($array1);
    sort($array2);
    
    // Bandingkan array
    if ($array1 == $array2) {
        return true;
    } else {
        return false;
    }
}

// Contoh penggunaan
$kalimat1 = "Race";
$kalimat2 = "Care";
$result = checkAnagram($kalimat1, $kalimat2);
echo "Input: Kalimat 1 = \"$kalimat1\", Kalimat 2 = \"$kalimat2\"\n";
echo "Output: " . ($result ? "True" : "False") . "\n";

$kalimat1 = "Robert";
$kalimat2 = "Terobs";
$result = checkAnagram($kalimat1, $kalimat2);
echo "Input: Kalimat 1 = \"$kalimat1\", Kalimat 2 = \"$kalimat2\"\n";
echo "Output: " . ($result ? "True" : "False") . "\n";
?>
