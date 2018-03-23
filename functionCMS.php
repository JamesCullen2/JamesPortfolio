<?php
/**to get subtitle column data from the about_me table in the database
 *
 * @param $db array data to be selected from
 *
 * @return array of subtitle column values
 */
function getAboutMeSubtitleFromDatabase($db) {
    $query = $db->prepare("SELECT `id`,`subtitle` FROM `about_me` WHERE `deleted` = 0;");
    $query->execute();
    return $query->fetchAll();
}

/**to return the values of each subtitle in about_me section into a drop-down form
 *
 * @param $subtitleArray array of all values in subtitle field from about_me table
 *
 * @return string of  subtitles
 */
function listingSubtitles($subtitleArray) {
    $results = " ";
    foreach ($subtitleArray as $value) {
        $results .=  "<option value='" . $value['id'] . "'>" . $value['subtitle'] . "</option>";
    }
    return $results;
}

/**to get text column from about_me table in db
 *
 * @param $db array data to be selected from
 * @param $id int data to be selected from
 *
 * @return string text field from about_me table
 */
function getAboutMeDescriptionFromDatabase($db, $id) {
    $query = $db->prepare("SELECT `id`, `text`,`subtitle` 
                            FROM `about_me` 
                            WHERE `id` =" . $id . " 
                            GROUP BY `text`;");
    $query->execute();
    return $query->fetch();
}

/**to return text field value of about_me section
 *
 * @param $textArray array of text field from about me table
 *
 * @return array text field from about me table
 */
function populateDescriptionForm($textArray) {
    return $textArray['text'];
}

/**to edit current data with new data
 *
 * @param $db array data to be selected from
 * @param $oldText array current data
 * @param $newText array edited data
 *
 * @return array of new text to about_me table
 */
function updateDescription($db, $oldText, $newText) {
    $query = $db->prepare("UPDATE `about_me` SET `text` = :newText WHERE `text` = :oldText;");
    $query->bindParam(':oldText', $oldText);
    $query->bindParam(':newText', $newText);
    $query->execute();
}

/**to insert new data into about_me table in db
 *
 * @param $db array of subtitles and text to be sent to db
 * @param $newSubtitle array subtitle to be sent to db
 * @param $newDescription array text description to be sent to db
 *
 * @return  array of subtitle and text values to populate new row of about_me table
 */
function addAboutMe($db, $newSubtitle, $newDescription) {
    $query = $db->prepare("INSERT INTO `about_me` (`subtitle`,`text`)
                            VALUES (:newSubtitle,:newDescription);");
    $query->bindParam(':newSubtitle', $newSubtitle);
    $query->bindParam(':newDescription', $newDescription);
    $query->execute();
}

/**to delete data from about_me table
 *
 * @param $db array of subtitle and text from db
 *
 * @param $id mixed data to be selected from
 *
 * @return mixed old text deleted from db
 *
 */
function deleteAboutMeSection($db, $id) {
    $query = $db->prepare("UPDATE `about_me`
                            SET `deleted` = 1 WHERE `id` = :id");
    $query->bindParam(':id', $id);
    $query->execute();
}
?>