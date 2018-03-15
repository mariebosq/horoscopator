<?php 

		$jour = intval($_POST['jour']);
		$mois = intval($_POST['mois']);

		
		if ($mois == 1 && $jour <= 21 || $mois == 12 && $jour > 21) {
			echo "Vous êtes Capricorne";
		} elseif ($mois == 2 && $jour <= 21 || $mois == 1 && $jour > 21) {
			echo "Vous êtes Verseau"; 
		} elseif ($mois == 3 && $jour <= 21 || $mois == 2 && $jour > 21) {
			echo "Vous êtes Poisson";
		} elseif ($mois == 4 && $jour <= 21 || $mois == 3 && $jour > 21) {
			echo "Vous êtes Bélier";
		} elseif ($mois == 5 && $jour <= 21 || $mois == 4 && $jour > 21) {
			echo "Vous êtes Taureau";
		} elseif ($mois == 6 && $jour <= 21 || $mois == 5 && $jour > 21) {
			echo "Vous êtes Gémeaux";
		} elseif ($mois == 7 && $jour <= 21 || $mois == 6 && $jour > 21) {
			echo "Vous êtes Cancer";
		} elseif ($mois == 8 && $jour <= 21 || $mois == 7 && $jour > 21) {
			echo "Vous êtes Lion";
		} elseif ($mois == 9 && $jour <= 21 || $mois == 8 && $jour > 21) {
			echo "Vous êtes Vierge";
		} elseif ($mois == 10 && $jour <= 21 || $mois == 9 && $jour > 21) {
			echo "Vous êtes Balance";
		} elseif ($mois == 11 && $jour <= 21 || $mois == 10 && $jour > 21) {
			echo "Vous êtes Scorpion";
		} else {
			echo "Vous êtes Sagittaire";
		}

 ?>