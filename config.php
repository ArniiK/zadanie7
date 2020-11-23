<?php

$servername = "ryfqldzbliwmq6g5.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/bi4q48xs3mm529iz?useSSL=false";
$password = "ehbk4uocd1tr30d6";
$username = "u1vz959p1b6x2weu";


$mysqli = new mysqli($servername,$username,$password);
$mysqli->set_charset("utf8");
if($mysqli -> connect_errno){
    echo "Chyba v konekcii k databaze " . $mysqli->connect_error;

    exit();

}
?>
