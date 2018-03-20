<?php

$db = new PDO('mysql:host = 127.0.0.1; dbname=portfolio', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



//$query = $db->prepare("INSERT INTO `adults` (`name`,`DOB`,`pet_name`,`gender`)
//VALUES (:name, :dob, :pet_name, :gender);");
//$email = 'charlie@charlie.com';
//$name = 'Charlie';
//$query->bindParam(':name', $name);
//$query->bindParam(':email', $email);
//
//$query->execute();

?>


