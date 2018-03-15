<?php include '../header.html'; ?>

		<!--MAIN CONTENT-->
		<main class="container">
			<section id="annonce">
				<h2>Remplissez ici votre date de naissance pour connaître votre signe solaire</h2>
				<form class="form-horizontal" action="traitementsigne.php" method="post" id="mon-form">
				    <label class="control-label col-sm-2">Jour</label>
				    <select name="jour" >
				    	<?php for($i = 1; $i < 32; $i++): ?>
					 	<option value=<?php echo $i ?>><?php echo $i ?></option>
					 	<?php endfor; ?>
					</select>

					<label class="control-label col-sm-2">Mois</label>
				    <select name="mois" >
				    	<?php for($i = 1; $i < 13; $i++): ?>
					 	<option value=<?php echo $i ?>><?php echo $i ?></option>
					 	<?php endfor; ?>
					</select>
					<div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Submit</button>
				    </div>
				</form>
			</section>
			<div id="dialog" title="Votre signe">
			  <p id="rep"></p>
			</div>
 
		</main>
		<!--FOOTER-->
		<footer>
		</footer>
	</body>
</html>

<script type="text/javascript">

$('#mon-form').submit(function(e){
    $.ajax({
     url: $(this).attr('action'),
     method: $(this).attr('method'),
     data :  $(this).serialize(),
     success : function (data){
     	$("#rep").html(data);
     	$("#dialog").dialog({
		  width: 500
		});
      }
   });
    e.preventDefault();
});
</script>
