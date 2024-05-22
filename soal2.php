<?php
function findMostFrequentChar($str, $excludeChar = '') {
    // menghilangkan spasi dan ubah menjadi huruf kecil
    $str = strtolower(str_replace(' ', '', $str));

    // Array untuk menyimpan jumlah kemunculan setiap huruf
    $charCount = array();
    
    // Hitung jumlah kemunculan setiap huruf
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        // Tambah kondisi untuk memeriksa huruf yang tidak perlu dihitung
        if ($char == $excludeChar) {
            continue;
        }
        if (isset($charCount[$char])) {
            $charCount[$char]++;
        } else {
            $charCount[$char] = 1;
        }
    }
    
    // Cari huruf dengan kemunculan terbanyak
    $maxChar = '';
    $maxCount = 0;
    foreach ($charCount as $char => $count) {
        if ($count > $maxCount) {
            $maxChar = $char;
            $maxCount = $count;
        }
    }
    
    // Kembalikan hasil dalam format yang diinginkan
    return "huruf '$maxChar' muncul sebanyak $maxCount kali";
}

// Contoh penggunaan
$kalimat = "giffari";
echo "Input: \"$kalimat\"\n";
// Panggil fungsi dengan argumen kedua yang berisi huruf yang ingin dikecualikan
echo "Output: " . findMostFrequentChar($kalimat, 'i') . "\n";

$kalimat = "gunung arjuno";
echo "Input: \"$kalimat\"\n";
echo "Output: " . findMostFrequentChar($kalimat) . "\n";
?>
