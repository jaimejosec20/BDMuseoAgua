<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$fechareg=$_POST['fechareg'];
	$intverini=$_POST['intverini'];
	$intvercon=$_POST['intvercon'];
	$intreapru=$_POST['intreapru'];
	$strobs=$_POST['strobs'];
	$strdis=$_POST['strdis'];

	$insert="INSERT INTO huellahid(fechareg7, intverini7, intvercon7, intreapru7, strobs7, strdis7) VALUES ('{$fechareg}', '{$intverini}', '{$intvercon}', '{$intreapru}', '{$strobs}', '{$strdis}')";
	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";

?>
