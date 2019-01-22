<?php

$telefone = $_POST['telefone'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$email3 = $_POST['email3'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];
$linkedin = $_POST['linkedin'];
$googleplus = $_POST['googleplus'];
$youtube = $_POST['youtube'];

$array = $query->pegaId();
$id = $array[0]['id'];

$query->updateTela6("conteudo","$telefone","$email","$whatsapp","$email1","$email2","$email3","$facebook","$instagram","$twitter","$linkedin","$googleplus","$youtube","$id");

?>