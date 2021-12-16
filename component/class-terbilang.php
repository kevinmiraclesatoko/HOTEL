<?php

function terbilang($satuan){
   $huruf = array ("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh","sebelas");
   if ($satuan < 12)
      return " ".$huruf[$satuan];
   elseif ($satuan < 20)
      return terbilang($satuan - 10)." belas";
   elseif ($satuan < 100)
      return terbilang($satuan / 10)." puluh".terbilang($satuan % 10);
   elseif ($satuan < 200)
      return "seratus".terbilang($satuan - 100);
   elseif ($satuan < 1000)
      return terbilang($satuan / 100)." ratus".terbilang($satuan % 100);
   elseif ($satuan < 2000)
      return "seribu".terbilang($satuan - 1000); 
   elseif ($satuan < 1000000)
      return terbilang($satuan / 1000)." ribu".terbilang($satuan % 1000); 
   elseif ($satuan < 1000000000)
      return terbilang($satuan / 1000000)." juta".terbilang($satuan % 1000000); 
   elseif ($satuan >= 1000000000)
      echo "Angka yang Anda masukkan terlalu besar";
}

?>