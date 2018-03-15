<?php include '../header.html'; ?>

		<!--MAIN CONTENT-->
		<main class="container">
			<section id="annonce">
				<h2>Regarde ta compatiblité avec une autre personne du CDL !</h2>
				<form class="form-horizontal" action="compatibilite.php" method="post">
				  <div class="form-group">
				    <label class="control-label " >Entre ton prénom</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control sqd" name="firstname">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label ">Entre le prénom de la personne qui t'intéresse</label>
				    <div class="col-sm-10"> 
				      <input type="text" class="form-control aze" name="secondname" >
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default" id="submit">Submit</button>
				    </div>
				  </div>
				</form>
			</section>
			<section id="annonce">
				<p id="rep"></p>
			</section>
		</main>
		<!--FOOTER-->
		<footer>
			
		</footer>
	</body>
</html>


<script type="text/javascript">

$('.form-horizontal').submit(function(e){
    $.ajax({
     url: $(this).attr('action'),
     method: $(this).attr('method'),
     data :  $(this).serialize(),
     success : function (data){
         $('#rep').html(data);
         $('#annonce').hide();
      }
   });
    e.preventDefault();
});
</script>
