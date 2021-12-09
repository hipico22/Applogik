<?php

include('valida.php');
include("ligacaobd.php");
$data = json_decode(stripslashes($_POST['data']));
    $i=0;
    while($i<sizeof($data)){
        $query = "UPDATE servicos SET estado = 4 WHERE id_servicos = ".$data[$i].""; 
		
        $result = mysqli_query($ligaBD,$query);
        $i++;
    }
    if($i==sizeof($data)){
        echo $query;
    }
?>