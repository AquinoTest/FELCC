<?php
$mail = "Probando Correo y Mensaje";
//Titulo
$titulo = "PRUEBA DE CORREO";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//direcci�n del remitente 
$headers .= "From: Ramiro Aquino < ramiroaquinoromero@gmail.com >\r\n";
//Enviamos el mensaje a tu_direcci�n_email 
$bool = mail("ramiroaquinoromero@gmail.com",$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
?>