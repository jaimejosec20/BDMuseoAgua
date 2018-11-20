<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="";

$json=array();

if(isset($_GET["fechareg"]) && isset($_GET["intvercli"]) && isset($_GET["intvercal"]) && isset($_GET["intvercox"]) && isset($_GET["intverfun"]) && isset($_GET["strobs"]) && isset($_GET["strdis"])){
	$fechareg=$_GET['fechareg'];
	$intvercli=$_GET['intvercli'];
	$intvercal=$_GET['intvercal'];
	$intvercox=$_GET['intvercox'];
	$intverfun=$_GET['intverfun'];
	$strobs=$_GET['strobs'];
	$strdis=$_GET['strdis'];

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$insert="INSERT INTO cicloagua(fechareg, intvercli, intvercal, intvercox, intverfun, strobs, strdis) VALUES ('{$fechareg}', '{$intvercli}', '{$intvercal}', '{$intvercox}', '{$intverfun}', '{$strobs}', '{$strdis}')";
	$resultado_insert=mysqli_query($conexion,$insert);
	
	if($resultado_insert){
		$consulta="SELECT * FROM cicloagua WHERE strobs = '{$strobs}'";
		$resultado=mysqli_query($conexion,$consulta);
		
		if ($registro=mysqli_fetch_array($resultado)){
			$json['cicloagua'][]=$registro;
		}
		mysqli_close($conexion);
		echo json_encode($json);
		
	}else{
		$resulta["fechareg"]='1990-01-01';
		$resulta["intvercli"]='No Resgistra';
		$resulta["intvercal"]='No Resgistra';
		$resulta["intvercox"]='No Resgistra';
		$resulta["intverfun"]='No Resgistra';
		$resulta["strobs"]='No Resgistra';
		$resulta["strdis"]='No Resgistra';
		$json['cicloagua'][]=$resulta;
		echo json_encode($json);
	}
	
}else{
		$resulta["fechareg"]='1990-01-01';
		$resulta["intvercli"]='WS No Retorna';
		$resulta["intvercal"]='WS No Retorna';
		$resulta["intvercox"]='WS No Retorna';
		$resulta["intverfun"]='WS No Retorna';
		$resulta["strobs"]='WS No Retorna';
		$resulta["strdis"]='WS No Retorna';
		$json['cicloagua'][]=$resulta;
		echo json_encode($json);
	
}

?>
