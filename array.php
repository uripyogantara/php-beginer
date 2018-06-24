<?php

$mahasiswa = array(
    'nama' => "Urip", 
    'alamat' => "Denpasar",
    "umur" => 20,
    "telepon" => "082237137611",
    "email" => "uripyogantara@gmail.com"
);

$mahasiswa2 = array(
    "Urip", 
    "Denpasar",
    20,
    "082237137611",
    "uripyogantara@gmail.com"
);

echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

echo $mahasiswa["nama"];

echo "<br>";
echo "No telepon = $mahasiswa[telepon]";

