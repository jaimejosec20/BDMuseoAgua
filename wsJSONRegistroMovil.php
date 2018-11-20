<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$fechareg=$_POST['fechareg'];
	$intvercli=$_POST['intvercli'];
	$intvercal=$_POST['intvercal'];
	$intvercox=$_POST['intvercox'];
	$intverfun=$_POST['intverfun'];
	$strobs=$_POST['strobs'];
	$strdis=$_POST['strdis'];

	$insert="INSERT INTO cicloagua(fechareg, intvercli, intvercal, intvercox, intverfun, strobs, strdis) VALUES ('{$fechareg}', '{$intvercli}', '{$intvercal}', '{$intvercox}', '{$intverfun}', '{$strobs}', '{$strdis}')";

	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";

?>
