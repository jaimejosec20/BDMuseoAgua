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
	$strobs=htmlentities($_POST['strobs']);
	$strdis=htmlentities($_POST['strdis']);
	$estatus='1';

	$insert="INSERT INTO huellahid(fechareg7, intverini7, intvercon7, intreapru7, strobs7, strdis7, est_huellahid) VALUES ('{$fechareg}', '{$intverini}', '{$intvercon}', '{$intreapru}', '{$strobs}', '{$strdis}', '{$estatus}')";
	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";

?>
