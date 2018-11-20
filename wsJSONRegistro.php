<?PHP
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="";

$json=array();

if(isset($_GET["fechareg"])){
	$fechareg=$_GET['fechareg'];

	$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	
	$insert="INSERT INTO cicloagua(fechareg) VALUES ('{$fechareg}')";
	$resultado_insert=mysqli_query($conexion,$insert);
	
	if($resultado_insert){
		$consulta="SELECT * FROM cicloagua WHERE fechareg = '{$fechareg}'";
		$resultado=mysqli_query($conexion,$consulta);
		
		if ($registro=mysqli_fetch_array($resultado)){
			$json['cicloagua'][]=$registro;
		}
		mysqli_close($conexion);
		echo json_encode($json);
		
	}else{
		$resulta["fechareg"]='1990-01-01';
		$json['cicloagua'][]=$resulta;
		echo json_encode($json);
	}
	
}else{
		$resulta["fechareg"]='1990-01-01';
		$json['cicloagua'][]=$resulta;
		echo json_encode($json);
	
}

?>
