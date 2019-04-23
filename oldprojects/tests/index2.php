<?php

require 'personnage.php';

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
$arnaud = new Personnage('Arnaud');

$merlin->attaque($harry);

if($harry->mort()){
	echo 'Harry est mort :(.';
} 
else {
	echo 'Harry est vivant. Il lui reste ' . $harry->getVie() . ' points de vie';
}
echo '</br>' . $arnaud->getVie();
$merlin->attaque($arnaud);
echo '</br>' . $arnaud->getVie();

$arnaud->regenerer(6);
echo '</br>' . $arnaud->getVie();
$arnaud->regenerer();
echo '</br>' . $arnaud->getVie();

?>
