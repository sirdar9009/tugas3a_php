<?php
$jarak=360;
$kecepatan=90;
$waktu = $jarak/$kecepatan;
$menit=$waktu*60;

echo "Jarak antara kota A – Z 360 km. Jika ditempuh dengan sepeda motor berkecepatan 90 km/jam maka lama perjalanan…? <br/>";
echo "t = v/s<br/>";
echo "v = ",$jarak ,"/",$kecepatan," = ", $waktu," Jam = ", $menit," menit";
?>