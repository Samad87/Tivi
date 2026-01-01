<?php
header("Content-Type: audio/x-mpegurl");

// Nama file utama
$file = "free.php";

// Semak file wujud
if(!file_exists($file)){
    echo "#EXTM3U\n";
    echo "#EXTINF:-1, File ID.bin tidak dijumpai\n";
    echo "http://0.0.0.0/\n";
    exit;
}

// Baca isi fail
$content = file_get_contents($file);

// Jika bukan format M3U, auto tambah header
if(stripos($content, "#EXTM3U") === false){
    echo "#EXTM3U\n";
}

echo $content;
?>
