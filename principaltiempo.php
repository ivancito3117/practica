<?php
require_once('vehiculo.php');
require_once('collection.php');
require_once('parqueadero.php');

$objeto1 = new Tiempo (10,10,10);

$obj=new parqueadero('loka',1000,500);
$parqueadero = $obj->salida('NHT45F',$objeto1);
   if ($parqueadero <> null);
     {
	    $pago = $parqueadero->cobro($tiempo);
	    echo 'usted debe pagar'.$pago;
	}
      #usted debe pagar $pgo
  #else
   	 #echo 'no se encuentra registrado';
         #echo usted de pagar pgo;
   	




$vehiculo = new vehiculo('SYY07C',$objeto1);

$objeto2=new Tiempo(13,20,15);
$vehiculo->set_tiempofinal($objeto2);

$objeto3 = $vehiculo->calcularvalor();


echo 'hora :' . $objeto3->get_hora()."</br>";
echo 'Minutos :' . $objeto3->get_minutos()."</br>";
echo 'segundos :' . $objeto3->get_segundos()."</br>";


if ($objeto3->get_hora()>=1 and $objeto3->get_minutos()<=30){
echo 'Valor a pagar :'.(($objeto3->get_hora() * 1000)+500).'<br>';
echo 'vehiculo placas  :  '.($vehiculo->get_placa()).'<br>';
}
else if ($objeto3->get_minutos()>=31 and $objeto3->get_hora()>=1){ 
echo 'Valor a pagar :'.(($objeto3->get_hora() * 1000)+1000).'<br>';
echo 'vehiculo placas  :  '.($vehiculo->get_placa()).'<br>';
} 
else if ($objeto3->get_hora()<1 and $objeto3->get_minutos()>1){ 
echo 'Valor a pagar :'.($objeto3->get_hora() + 1000).'<br>';
echo 'vehiculo placas  :  '.($vehiculo->get_placa()).'<br>';
} 
else { 

echo 'Valor a pagar :'.($objeto3->get_hora() * 1000).'<br>';
echo 'vehiculo placas  :  '.($vehiculo->get_placa()).'<br>';
} 


?>


