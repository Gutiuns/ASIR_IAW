<?php

// Inicializamos variables
function conecta_bd(&$bd, $servidor, $baseDatos, $usuario, $clave){
	

//Realizamos la conexión a la base de datos
	try{
	$bd =  new PDO('mysql:host=' . $servidor . ';dbname=' . $baseDatos,   
						$usuario, $clave,   
						array(PDO::ATTR_PERSISTENT => true,     
							  PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8') ); 
	} catch (PDOException $e) {   
		die ("ERROR: <br />".$e->getMessage()."<br />");
	}
}


function cierra_bd (&$bd){ 
	$bd = null;
}

//saca la lista de tipos de comida del primer ejercicio
function muestra_tipos($bd){
	$i=0;
	$sql= "SELECT DISTINCT Tipo  FROM comida ";
	$sentencia=$bd->prepare($sql);
	$sentencia->execute();
	while($fila=$sentencia->fetch() ){
		echo "<option value='";
		echo $fila['Tipo'];
		if ($i==0){
			echo "' checked >";
		}	else {
			echo "'>";
		}

		echo $fila['Tipo'];
		echo "</option>";		
	}
$sentencia->closeCursor();
}

//saca la lista de comidas disponibles del tipo de comida elegida
function muestra_comida($bd,$tipe){
	$sql= "SELECT *  FROM comida WHERE Tipo=:t ";
	$sentencia=$bd->prepare($sql);
	$sentencia->bindValue("t",$tipe);
	$sentencia->execute();
	while($fila=$sentencia->fetch() ){
		echo "<tr>
				<td>
					<input type='checkbox' value='" .$fila['idComida'] ."' name='menu[]' >" .$fila['Descripcion'] .". Precio: " .$fila['Precio']
				." €</td>
			</tr>";		
	}
$sentencia->closeCursor();
}


function inserta_factura(&$bd,$nombre,$direccion,$tipo,$loqueheelegido){
		//COMO NO PUEDE HABER INSERCIÓN SIN MOSTRAR LOS DATOS LO HE HECHO TODO EN UNA FUNCIÓN
		//esta parte muestra por pantalla la elecciónd el usuario
			$total=0;
			foreach ($loqueheelegido as $c){
				$sql= "SELECT *  FROM comida WHERE idComida=:food";
				$sentencia=$bd->prepare($sql);
				$sentencia->bindValue("food",$c);
				$sentencia->execute();
				while($fila=$sentencia->fetch() ){
					echo "<p class='parrafo'>La comida es ".$fila['Descripcion'] ." y el precio es " .$fila['Precio'] ."€</p>";		
					$total+=$fila['Precio'];
				}	
			}	
			echo "<p>El total es " .$total ."€</p>";

		//esta parte hace la inserción en la tabla de facturas
			try{   $sql= "insert into facturascomida (NombreCliente, DireccionCli, TipoComida, Total) values ( :nom, :dir, :tpo, :tot)";
				$otra=$bd->prepare($sql);
				$otra->bindValue("nom", $nombre);
				$otra->bindValue("dir", $direccion);
				$otra->bindValue("tpo", $tipo);
				$otra->bindValue("tot", $total);
				$otra->execute();
			} catch (PDOException $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
}


?>