<?php
$db = new PDO('mysql:host = 127.0.0.1; dbname=portfolio', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

function getTextFromDB($db, $id) {
    $query = $db->prepare("SELECT `text` 
                            FROM `about_me`
                            WHERE `id` = " . $id . "
                            GROUP BY `text`;");
    $query->execute();
    return $query->fetchAll();
}

function displayText($getTextFromDB) {
    $results = " ";
    foreach ($getTextFromDB as $value) {
        $results =  "<p" . $value['id'] . ">" . $value['text'] . "</p>";
    }
    return $results;
}



//function listingSubtitles($subtitleArray) {
//    $results = " ";
//    foreach ($subtitleArray as $value) {
//        $results .=  "<option value='" . $value['id'] . "'>" . $value['subtitle'] . "</option>";
//    }
//    return $results;

