<?php
	require 'database.php';

	if ( !empty($_POST)) {

		$subm = $_POST['subm'];
		$marc = $_POST['marc'];
		$ac   = $_POST['ac'];

		// insert data
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO auto (idauto,nombrec,idmarca, ac) values(null, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			($ac=="S")?$acq=1:$acq=0;
			$q->execute(array($subm,$marc,$acq));
			Database::disconnect();
			header("Location: index.php");
	}
?>
