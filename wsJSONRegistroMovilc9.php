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
	$estatus='2';

	$insert="INSERT INTO objsumer(fechareg9, intverini9, intvercal9, intreapru9, strobs9, strdis9, est_objsumer) VALUES ('{$fechareg}', '{$intverini}', '{$intvercal}', '{$intreapru}', '{$strobs}', '{$strdis}', '{$estatus}')";
	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";

?>
