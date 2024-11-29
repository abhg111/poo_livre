<h1>POO Livre</h1>

<?php
 
 spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$stephenKing = new Auteur("King", "Stephen");
$ca = new Livre("Ca", "1138", "1986", "20", $stephenKing); 



//echo $stephenKing->getnom();

//var_dump($stephenKing);
 //echo $stephenKing;
 echo $stephenKing->afficherBibliographie();
 echo $ca;
