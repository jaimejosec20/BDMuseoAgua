<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$fechareg=$_POST['fechareg'];
	$intverini=$_POST['intverini'];
	$intverpro=$_POST['intverpro'];
	$intreapru=$_POST['intreapru'];
	$strobs=$_POST['strobs'];
	$strdis=$_POST['strdis'];
	$estatus='1';

	$insert="INSERT INTO pisoagua(fechareg6, intverini6, intverpro6, intreapru6, strobs6, strdis6, est_pisoagua) VALUES ('{$fechareg}', '{$intverini}', '{$intverpro}', '{$intreapru}', '{$strobs}', '{$strdis}', '{$estatus}')";
	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";

?>
