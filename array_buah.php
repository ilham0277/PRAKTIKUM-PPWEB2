<?php
  $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu" ];
  // cetaaak buah ke index 2
  echo $ar_buah[2];
  //cetak jumlah buah
  echo "<br/>Jumlah buah " . count($ar_buah);
  // cetak seluruh buah 
  echo "<ol>";
  foreach($ar_buah as $buah) {
         echo "<li>" .$buah. "</li>";
  }
  echo "</ol>";
  // tambahkan buah
  $ar_buah[]=" Apel";
  //hapus nuah index 1
  unset ($ar_buah[1]);
  // ubah ubah index
  $ar_buah[2]=" Manggis";
  // cetak selruh buah
  echo "<ul>";
  foreach($ar_buah as $k => $v){
        echo "<li> buah index - " .$k. "adalah" .$v. "</li>";
  }
  echo "</ul>";
?>