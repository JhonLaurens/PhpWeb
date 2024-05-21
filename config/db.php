<?php class Database{ 
  public static function connect(){ 
    $conexion=new mysqli("localhost","root","","hotel"); 
    //Permite que la BD venga codificada en UTF8 $conexion->query("SET NAMES 'utf8'"); 
    return $conexion; 

  }

}

// probamos la conexion a la base de datos

$db = Database::connect();
if($db->connect_error){
  die("La conexión ha fallado: " . $db->connect_error);
}
echo "Conexión exitosa";
$db->close();
?>

    



