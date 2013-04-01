<?php
// Mengambil waktu awal proses
$mtime = microtime();
$mtime = explode (" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
?>

<?php

$baris=100; $kolom=100;
for($r=1;$r<=$baris;$r++) {
   for($c=1;$c<=$kolom;$c++) {
       $matrik[$r][$c] = mt_rand(1,10);
   }
}
for($r=1; $r<=$baris; $r++) {
   for($c=1; $c<=$kolom;$c++) {
       echo 'matrik [baris '.$r.'][kolom '.$c.'] : '.$matrik[$r][$c].'<br />';
   }
}
$hasiltambah[$r]=0;
for($r=1;$r<=$baris;$r++) {
    for($c=1;$c<=$kolom;$c++) {
    $hasiltambah[$r][$c] = $matrik[$r][$c] + $matrik[$r][$c];    
    }
}
echo "<br />";
for($r=1; $r<=$baris; $r++) {
   for($c=1; $c<=$kolom;$c++) {
      echo 'hasil tambah [baris '.$r.'][kolom '.$c.'] : '.$hasiltambah[$r][$c].'<br />';
   }
}
$hasilkurang[$r]=0;
for($r=1;$r<=$baris;$r++) {
   for($c=1;$c<=$kolom;$c++) {
       $hasilkurang[$r][$c] = $matrik[$r][$c] - $matrik[$r][$c];
   }
}
echo "<br />";
for($r=1; $r<=$baris; $r++) {
   for($c=1; $c<=$kolom;$c++) {
      echo 'hasil kurang [baris '.$r.'][kolom '.$c.'] : '.$hasilkurang[$r][$c].'<br />';
   }
}
for($r=1;$r<=$baris;$r++) {
    for($c=1;$c<=$kolom;$c++) {
        $hasilkali[$r][$c]=0;
        for($i=1;$i<=$baris;$i++) {
           $hasilkali[$r][$c] = $hasilkali[$r][$c]+$matrik[$r][$i]*$matrik[$i][$c];
        }
    }
}
echo "<br />";
for($r=1; $r<=$baris; $r++) {
    for($c=1; $c<=$kolom;$c++) {
        echo 'hasil kali [baris '.$r.'][kolom '.$c.'] : '.$hasilkali[$r][$c].'<br />';
    }
  
} ?>

<?php
// mengambil waktu selesai
$mtime = microtime();
$mtime = explode (" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
// Store end time in a variable
$tend = $mtime;
// Calculate Difference
$totaltime = ($tend - $tstart);
// Output the result
printf ("Waktu menampilkan halaman %f detik.", $totaltime);
?>
