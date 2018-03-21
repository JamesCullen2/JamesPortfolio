<?php


/**this function is to get subtitle data for the about me section from the database
 *
 * @param $db array of subtitle field from about me table from db
 *
 * @return array of subtitle field
 */
function getAboutMeSubtitleFromDatabase($db) {
    $query = $db->prepare("SELECT `subtitle` FROM `about_me`;");
    $query->execute();
    return $query->fetchAll();
}


/**this function is to return the names of each subtitle in about me section into a drop-down list
 *
 * @param $subtitleArray array of values in subtitle field from about me table
 *
 * @return string the name of each subtitle
 */
function listingSubtitles($subtitleArray) {
    $results = " ";
    foreach ($subtitleArray as $value) {
        $results .=  "<option value='" . $value['subtitle'] . "'>" . $value['subtitle'] . "</option>";
    }
    return $results;
}



?>


