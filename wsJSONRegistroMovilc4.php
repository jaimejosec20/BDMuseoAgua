<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$fechareg=$_POST['fechareg'];
	$intverini=$_POST['intverini'];
	$intvercal=$_POST['intvercal'];
	$intverpru=$_POST['intverpru'];
	$strobs=$_POST['strobs'];
	$strdis=$_POST['strdis'];
	$estatus='2';

	$insert="INSERT INTO vertederos(fechareg4, intverini4, intreacal4, intreapru4, strobs4, strdis4, est_vertederos) VALUES ('{$fechareg}', '{$intverini}', '{$intvercal}', '{$intverpru}', '{$strobs}', '{$strdis}', '{$estatus}')";
	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";
		
?>
