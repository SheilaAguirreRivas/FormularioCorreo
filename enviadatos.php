<?php
include "libmail.php";
$m= new Mail;
$m->From( "sheyba0803@gmail.com" );
$m->To( "sheyba0803@gmail.com" );
$m->Subject( "Correo Enviado desde la Web" );
$m->Body( "Nombre del autor:
$nom
Su email:
$email
Mensaje:
$mensaje" );
$m->Send();
?>