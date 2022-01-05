<?php 

if(isset($_FILES['documento']) && $_FILES['documento']['type']=='application/pdf'){
	move_uploaded_file ($_FILES['documento']['tmp_name'] , '../../datosPizzaNet'.$_FILES['documento']['name']);
	header("location: ../../index.php");
}
else{
	echo "no se ha subido el archivo";
}

?>