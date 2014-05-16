<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Devolviendo y recorriendo arrays json con php</title>	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/json_codeigniter/js/funciones.js"></script>
</head>

<body>
<?php //header('Content-type: application/json'); ?> 
<?php
// decodificamos la cadena
$ObjDatos = json_decode($some_data);
$json2 = json_clean_decode($some_data);

function json_clean_decode($json, $assoc = false, $depth = 512, $options = 0) {
    // search and remove comments like /* */ and //
    $json = preg_replace("#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t]//.*)|(^//.*)#", '', $json);
   
    if(version_compare(phpversion(), '5.4.0', '>=')) {
        $json = json_decode($json, $assoc, $depth, $options);
    }
    elseif(version_compare(phpversion(), '5.3.0', '>=')) {
        $json = json_decode($json, $assoc, $depth);
    }
    else {
        $json = json_decode($json, $assoc);
    }

    return $json;

    
}

foreach ($json2 as $item ) {
	
print_r($item);
print $item->{provincia};
	//echo $item["provincia"];
}

// imprimimos un determinado dato
//echo 'Elemento idprovincia valor ',$ObjDatos; // devuelve: Elemento "F" valor 6

?>



   <script type="text/javascript">
     var jsonData = <?php echo json_encode($some_data); ?>
   </script>
	<input type="button" class="cargar_json" value="Cargar json" />

	<ul class="contenedor_json"></ul>

</body>
</html>