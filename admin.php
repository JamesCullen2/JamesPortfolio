<?php

function getAboutMeSubtitleFromDatabase($db) {
    $query = $db->prepare("SELECT `subtitle` FROM `about_me`;");
    $query->execute();
    return $query->fetchAll();
}

function listingSubtitles($subtitleArray) {
    $results = " ";
    foreach ($subtitleArray as $value) {
        $results .=  "<option value='" . $value['subtitle'] . "'>" . $value['subtitle'] . "</option>";
    }
    return $results;
}



?>


