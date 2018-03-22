<?php

function getTextFromDB($db, $id) {
    $query = $db->prepare("SELECT `text` 
                            FROM `about_me`
                            WHERE `id` =" . $id . "
                            GROUP BY `text`;");
    $query->execute();
    return $query->fetchAll();
}

function displayText($getTextFromDB) {
    return $getTextFromDB['text'];
}



