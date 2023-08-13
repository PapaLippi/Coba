<?php

// $umur = 17;
// $Batas = 17;
// if($umur >= $Batas)
// {
//     echo "Umurmu saat ini" . " " .$umur. " " . "bisa membuat KTP, karna batas membuat KTP" . " " . $Batas;
// }else
// {   
//     echo "Umurmu saat ini" . " " .$umur. " " . "tidak bisa membuat KTP, karna batas membuat KTP" . " "  . $Batas;
// }

// $username = "adrian";
// $password = "12345678";

// if($username == "adrian" && $username == "Dhika")
// {
//     echo "Username $username terdaftar pada sistem";
    
// }else
// {
//     echo "Username tidak ada";
// }

// Membuat Nilai Akhir jika Nilainya >= 80 A jika Nilainya >= 70 B 

// $nilaiAkhir = 80;

$Nilai = 50;
$nilaiA = 80;
$NilaiAangka = "A";
$nilaiB = 70;
$NilaiBangka = "B";
$nilaiC = 50;
$NilaiCangka = "C";

if($Nilai >= $nilaiA)
{
     echo "Nilai Akhir" . " " . $Nilai ." " . "Akreditasi" . " " . $NilaiAangka;
    
 }else if($Nilai >= $nilaiB)
 {
     echo "Nilai Akhir" . " " . $Nilai ." " . "Akreditasi" . " " . $NilaiBangka;
 }
 else if($Nilai >= $nilaiC)
 {
     echo "Nilai Akhir" . " " . $Nilai . " " .  "Akreditasi" . " " . $NilaiCangka;
 }else
 {
     echo "Raimu Goblok";
 }

?>