<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$fechareg=$_POST['fechareg'];
	$intverini=$_POST['intverini'];
	$intvercal=$_POST['intvercal'];
	$intprufun=$_POST['intprufun'];
	$strobs=$_POST['strobs'];
	$strdis=$_POST['strdis'];
	$estatus='2';

	$insert="INSERT INTO cambclim(fechareg12, intverini12, intvercal12, intprufun12, strobs12, strdis12, est_cambclim) VALUES ('{$fechareg}', '{$intverini}', '{$intvercal}', '{$intprufun}', '{$strobs}', '{$strdis}', '{$estatus}')";
	$resultado_insert=mysqli_query($conexion,$insert);


		echo "registra";

?>
