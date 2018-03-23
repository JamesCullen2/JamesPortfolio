<?php

/**to pull subtitles from about_me table in db
 *
 * @param $db array subtitle column from about_me table
 * @param $id int id column from about_me table
 *
 * @return mixed subtitle info from db
 */
function getSubtitleFromDB($db, $id) {
    $query = $db->prepare("SELECT `subtitle` 
                            FROM `about_me`
                            WHERE `id` = " . $id . ";");
    $query->execute();
    return $query->fetchAll();
}

/**to display each subtitle values as a string
 *
 * @param $getSubtitleFromDB array of id and subtitles
 *
 * @return string of selected subtitle
 */
function displaySubtitle($getSubtitleFromDB) {
    $results = " ";
    foreach ($getSubtitleFromDB as $value) {
        $results =  "<p" . $value['id'] . ">" . $value['subtitle'] . "</p>";
    }
    return $results;
}

/**to pull text from about_me table in db
 *
 * @param $db array text column from about_me table
 * @param $id int id column from about_me table
 *
 * @return mixed text info from db
 */
function getTextFromDB($db, $id) {
    $query = $db->prepare("SELECT `text` 
                            FROM `about_me`
                            WHERE `id` = " . $id . ";");
    $query->execute();
    return $query->fetchAll();
}

/**to display each text description from about_me table
 *
 * @param $getTextFromDB array of id and text
 *
 * @return string of selected text
 */
function displayTextFromDB($getTextFromDB) {
    $results = " ";
    foreach ($getTextFromDB as $value) {
        $results =  "<p" . $value['id'] . ">" . $value['text'] . "</p>";
    }
    return $results;
}
