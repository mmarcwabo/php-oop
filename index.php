<?php
require_once "Client.php";

//instanciation de l'objet cluent
$c = new Client("Guey Masango", "Av de l'Equateur, 33, Kinshasa-Gombe", "089652147");
//Invocation de la methode d'objet
echo $c->afficherClient();
