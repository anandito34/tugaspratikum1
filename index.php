<?php
$hargabuah = '{"mangga":966,"apel":900,"pisang":500}';

$buah = json_decode($hargabuah);

// mengakses nilai object
echo $buah->mangga;
echo $buah->apel;
echo $buah->pisang;
?>