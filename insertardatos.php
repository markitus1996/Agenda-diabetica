<?php 

        include 'conexion.php';
     
	
        $fecha = Date('yyyy/mm/aaaa');       
	$fecha = $_POST["fecha"];
        $manyana = $_POST["maniana"];
        $insulinam = $_POST ["insulinam"];
        $comida= $_POST["comida"];
        $insulinac = $_POST ["insulinac"];
        $merienda = $_POST ["merienda"];
        $insuliname = $_POST ["insuliname"];
        $cena= $_POST ["cena"];
        $insulinace = $_POST ["insulinace"];
        $insulinalenta = $_POST ["insulinalenta"];
        $dormir = $_POST ["dormir"];
        $observaciones = $_POST ["observaciones"];
 
        
        
    
        
    
        $query = "INSERT INTO glucosa(fecha,manyana,insulinam,comida ,insulinac,merienda,insuliname,cena,insulinace,insulinalenta,dormir,observaciones)VALUES (:fecha , :maniana ,:insulinam,:comida ,:insulinac,:merienda,:insuliname, :cena ,:insulinace,:insulinalenta,:dormir,:observaciones)" ;
        $conexion = conectar();
        $filas = execute($conexion, $query, [
  
            "fecha" =>$fecha,
            "maniana"=>$manyana,
            "insulinam" => $insulinam,
            "comida"=>$comida,
            "insulinac" => $insulinac,
            "merienda"=>$merienda,
            "insuliname" => $insuliname,
            "cena" =>$cena ,
             "insulinace" => $insulinace,
            "insulinalenta" => $insulinalenta,
            "dormir"=>$dormir,
            "observaciones" =>$observaciones,
            

            ]);

if($filas > 0) {
    header("location: vermiagenda.php");
}
else {
    
    echo 'no insertados';
}
       

        
        
        
        
        
        
        
        
        
        ?>