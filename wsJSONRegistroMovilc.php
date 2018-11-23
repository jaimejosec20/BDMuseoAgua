<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	//@mysqli_query("SET NAMES 'utf8'",$conexion);

	$fechareg=$_POST['fechareg'];
	$intvercli=$_POST['intvercli'];
	$intvercal=$_POST['intvercal'];
	$intvercox=$_POST['intvercox'];
	$intverfun=$_POST['intverfun'];
	$strobs=html_entity_decode($_POST['strobs'], ENT_QUOTES | ENT_HTML401, "UTF-8");
	$strdis=html_entity_decode($_POST['strdis'], ENT_QUOTES | ENT_HTML401, "UTF-8");
	$estatus='2';

	$insert="INSERT INTO cicloagua(fechareg, intvercli, intvercal, intvercox, intverfun, strobs, strdis, est_cicloagua) VALUES ('{$fechareg}', '{$intvercli}', '{$intvercal}', '{$intvercox}', '{$intverfun}', '{$strobs}', '{$strdis}', '{$estatus}')";

	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";

?>
