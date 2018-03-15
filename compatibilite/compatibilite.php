<?php 

$premierNom = $_POST['firstname'];
$secondNom = $_POST['secondname'];

$compatibilite = array(
	"Vous êtes très compatible... humm calor !",
	"Compatibilité zéro, évitez de travailler avec lui/elle !",
	"Quelques frictions entre vous sur le plan intellectuel, l'un est plus intelligent que l'autre",
	"Une compatibilité idéale sur le plan de la vision de la vie",
	"Quel dommage... ce ne sera pas votre ami... il/elle vous trouve trop ennuyant",
	"Encéphalogramme plat. Rien d'excitant entre vous",
	"Voilà un match parfait !",
	"Vous êtes fait pour vous entendre... en dehors du travail",
	"Quand vous voudrez faire des bêtises, il/elle saura vous suivre!"
	);

echo "Voici ton taux de compatibilité avec " . $premierNom . " : " . $compatibilite[array_rand($compatibilite)];



