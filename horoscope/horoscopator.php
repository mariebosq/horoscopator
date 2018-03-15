<?php include '../header.html'; ?>
		<!--MAIN CONTENT-->
		<main class="container">

			<section id="annonce" class="datedujour">
				<p>Découvrez ce que vous réserve votre journée au CDL !</p>
				<p>Date du jour : <?php echo date("d/m/Y"); ?></p>
			</section>
			
			<section class="row">
					<?php for($i = 0; $i < count($astro); $i++): ?>
						<div class="col-md-3">
							<h2><?= $astro[$i] ?></h2>
							<p><em>Relationnel :</em></p>
							<p><?= $signes[array_rand($signes)][$i] ?></p>
							<p><em>Travail :</em></p>
							<p><?= $jobRandom[array_rand($jobRandom)][$i] ?></p>
						</div>
					<?php endfor; ?>
			</section>
		</main>
		<!--FOOTER-->
		<footer>
		</footer>
	</body>
</html>
