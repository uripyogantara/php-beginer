<?php
// Aritmatika
$angka1=12;
$angka2=4+1;

$angka3=$angka1%$angka2;

// echo $angka3;


// Increment

$a=10;
$b=$a++;
$b=$a;

// echo $b;
// echo "<br>";
// echo $a;




// PERBANDINGAN
$usename="stikom";
$password="123456789";

if ($usename=="stiki" && $password=="12345678") {
    echo "statement 'dan' benar";
}else{
    echo "statement 'dan' salah";
}

echo "<br>";

if ($usename=="stiki" || $password=="12345678") {
    echo "statement 'atau'  benar";
}else{
    echo "statement 'atau' salah";
}