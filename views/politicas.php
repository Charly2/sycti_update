<form action="ac_guardar_poli.php" method="POST">
<div class="container">
	<h2>Politicas</h2>
	<div class="row">
		<div class="col-md-6 " style="text-align: center;" >
			<h5>Locales</h5>
			<textarea name="l" style="resize: none;width: 80%; margin: auto;" id="" cols="50" rows="20" value""><?php echo $img_data; ?></textarea>
			<button class="btn btn-success" style="display: block;margin:1em auto;"> Guardar</button>
		</div>
		<div class="col-md-6 " style="text-align: center;" >
			<h5>Empresariales</h5>
			<textarea name="e" style="resize: none;width: 80%; margin: auto;" id="" cols="50" rows="20"><?php echo $img_data2; ?></textarea>
			<button class="btn btn-success" style="display: block;margin:1em auto;"> Guardar</button>
		</div>
	</div>
</div>
</form>






