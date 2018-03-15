<?php include '../header.html'; ?>
		<!--MAIN CONTENT-->
		<main class="container">

			<section id="annonce">
				<h2>Ajouter de prédictions</h2>
				<form class="form-horizontal" action="traitementpredictions.php" method="post">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Relationnel:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="rel">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Travail:</label>
				    <div class="col-sm-10"> 
				      <input type="text" class="form-control" name="job" >
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Submit</button>
				    </div>
				  </div>
				</form>
			</section>
			
		</main>
		<!--FOOTER-->
		<footer>
		</footer>
	</body>
</html>