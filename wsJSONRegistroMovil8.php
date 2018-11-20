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

	$insert="INSERT INTO bioesfera(fechareg8, intverini8, intvercal8, intreapru8, strobs8, strdis8) VALUES ('{$fechareg}', '{$intverini}', '{$intvercal}', '{$intreapru}', '{$strobs}', '{$strdis}')";
	$resultado_insert=mysqli_query($conexion,$insert);
	
		echo "registra";

?>
