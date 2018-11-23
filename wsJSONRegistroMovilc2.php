<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$fechareg=$_POST['fechareg'];
	$intverini=$_POST['intverini'];
	$intvercon=$_POST['intvercon'];
	$intvercal=$_POST['intvercal'];
	$intverpru=$_POST['intverpru'];
	$strobs=htmlentities($_POST['strobs']);
	$strdis=htmlentities($_POST['strdis']);
	$estatus='2';

	$insert="INSERT INTO cicloherr(fechareg2, intverini2, intvercox2, intvercal2, intverpru2, strobs2, strdis2, est_cicloherr) VALUES ('{$fechareg}', '{$intverini}', '{$intvercon}', '{$intvercal}', '{$intverpru}', '{$strobs}', '{$strdis}', '{$estatus}')";
	$resultado_insert=mysqli_query($conexion,$insert);

		echo "registra";

?>
