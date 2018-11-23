<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$fechareg=$_POST['fechareg'];
	$intverini=$_POST['intverini'];
	$intverpro=$_POST['intverpro'];
	$intconpro=$_POST['intconpro'];
	$intreapru=$_POST['intreapru'];
	$strobs=$_POST['strobs'];
	$strdis=$_POST['strdis'];
	$estatus='2';

	$insert="INSERT INTO accreacc(fechareg11, intverini11, intverpro11, intconpro11, intreapru11, strobs11, strdis11, est_accreacc) VALUES ('{$fechareg}', '{$intverini}', '{$intverpro}', '{$intconpro}', '{$intreapru}', '{$strobs}', '{$strdis}', '{$estatus}')";
	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";

?>
