<?php
// $sport = ['Footboll ','Basketboll','Volejboll'];
// echo $sport[2];

// "<br>";

// echo end($sport)

// "<br>";

// echo count ($sport);

// "<br>";

// $sport = array('Footboll','Basketboll','Volejboll');
// for($i  = 0; $i < 3; $i++){
//     echo $sport[$i], "\n";
// }

// $sport = array('Footboll','Basketboll','Volejboll');
// array_push($sport, "Golf");
// var_dump($sport);

// $sport = array('Footboll','Basketboll','Volejboll','Golf');
// array_pop($sport);
// var_dump($sport);

// $sport = array('Footboll','Basketboll','Volejboll','Golf');
// array_unshift($sport, 'Tenis');
// var_dump($sport);

$sport = array('Footboll','Basketboll','Volejboll','Golf');
array_shift($sport);
var_dump($sport);
?>