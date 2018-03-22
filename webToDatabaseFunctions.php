<?php

function getTextFromDB($db) {
    $query = $db->prepare("SELECT `subtitle`,`text` FROM `about_me`;");
    $query->execute();
    return $query->fetchAll();
}

function displayText($getTextFromDB) {
    return $getTextFromDB ['subtitle']; 
}
/**
 * Created by PhpStorm.
 * User: James
 * Date: 22/03/2018
 * Time: 15:28
 */