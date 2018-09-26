<?php
//genrre film
$genre = $_POST["genre"];
echo "<p>Genre pilihan anda:</p>";
foreach ($genre as $nilai) {
echo "- $nilai <br />";
}

//wisata 
$wisata = $_POST["wisata"];
echo "<p>Wisata pilihan anda</p>";
foreach ($wisata as $nilai) {
echo "- $nilai <br />";
}
?>