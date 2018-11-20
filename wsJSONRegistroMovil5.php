<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$fechareg=$_POST['fechareg'];
	$intverini=$_POST['intverini'];
	$intverfun=$_POST['intverfun'];
	$intfunfon=$_POST['intfunfon'];
	$strobs=$_POST['strobs'];
	$strdis=$_POST['strdis'];

	$insert="INSERT INTO setnoticias(fechareg5, intverini5, intverfun5, intfunfon5, strobs5, strdis5) VALUES ('{$fechareg}', '{$intverini}', '{$intverfun}', '{$intfunfon}', '{$strobs}', '{$strdis}')";
	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";
		
?>
