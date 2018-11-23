<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$fechareg=$_POST['fechareg'];
	$intverini=$_POST['intverini'];
	$intvercal=$_POST['intvercal'];
	$intreapru=$_POST['intreapru'];
	$strobs=$_POST['strobs'];
	$strdis=$_POST['strdis'];
	$estatus='1';

	$insert="INSERT INTO bioesfera(fechareg8, intverini8, intvercal8, intreapru8, strobs8, strdis8, est_bioesfera) VALUES ('{$fechareg}', '{$intverini}', '{$intvercal}', '{$intreapru}', '{$strobs}', '{$strdis}', '{$estatus}')";
	$resultado_insert=mysqli_query($conexion,$insert);
	
		echo "registra";

?>
