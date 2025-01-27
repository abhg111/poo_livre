<h1>POO Livre</h1>

<?php
 
 spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$stephenKing = new Auteur("King", "Stephen");
$ca = new Livre("Ca", "1138", "1986", "20", $stephenKing); 
$simetierre = new Livre("Simetierre", "347", "1983", "15", $stephenKing); 
$leFleau = new Livre("Le Fléau", "823", "1978", "14", $stephenKing); 
$shining = new Livre("Shining", "477", "1977", "16", $stephenKing); 



echo $stephenKing->afficherBibliographie();

