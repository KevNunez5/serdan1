<?php
	require 'database.php';
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta 	charset="utf-8">
	    <link   href=	"css/bootstrap.min.css" rel="stylesheet">
	    <script src=	"js/bootstrap.min.js"></script>
	</head>

	<body>
	    <div class="container">
	    	<div class="span10 offset1">
	    		<div class="row">
		   			<h3>Agregar un auto nuevo</h3>
		   		</div>

					<form class="form-horizontal" action="create2.php" method="post">

						<div class="control-group">
							<label class="control-label">submarca</label>
					    	<div class="controls">
					      	<input name="subm" type="text"  placeholder="submarca" value="">
									<span class="help-inline"></span>
					    	</div>
						</div>

						<div class="control-group ">
				    	<label class="control-label">marca</label>
				    	<div class="controls">
	            		<select name ="marc">
		              		<option value="">Selecciona una marca</option>
		                  	<?php
							   					$pdo = Database::connect();
							   					$query = 'SELECT * FROM marca';
			 				   					foreach ($pdo->query($query) as $row) {
		                      	if ($row['idmarca']==$marc)
		                        	echo "<option selected value='" . $row['idmarca'] . "'>" . $row['nombrem'] . "</option>";
		                        else
		                        	echo "<option value='" . $row['idmarca'] . "'>" . $row['nombrem'] . "</option>";
			   									}
			   									Database::disconnect();
			  								?>
              	</select>

					      <span class="help-inline"></span>
							</div>
						</div>

						<div class="control-group ">
					    <label class="control-label">Aire Acondicionado ?</label>
						    <div class="controls">
	              		<input name="ac" type="radio" value="S">Si</input> &nbsp;&nbsp;
	                  <input name="ac" type="radio" value="N">No</input>
						       	<span class="help-inline"></span>
						    </div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-success">Agregar</button>
							<a class="btn" href="index.php">Regresar</a>
						</div>

					</form>
				</div>
	    </div> <!-- /container -->
	</body>
</html>
