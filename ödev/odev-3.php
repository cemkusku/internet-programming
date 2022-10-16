<?php 
$sehirListesi=[
    "İstanbul",
    "Kütahya",
    "Bursa",
    "Mersin",
    "Sakarya",
    "Antalya",
    "Artvin",
    "Muğla",
    "Eskişehir",
    "Ankara",
];
    
    $uzunluk= Count($sehirListesi);

    $i=0;
    while ($i < $uzunluk) 
    {
       echo $sehirListesi[$i];
       $i=$i+1;
       echo "<br/>";
    }
?>