<?php


/**this function is to get subtitle data for the about_me section from the database
 *
 * @param $db array of subtitle field from about me table from db
 *
 * @return array of subtitle field
 */
function getAboutMeSubtitleFromDatabase($db) {
    $query = $db->prepare("SELECT `id`,`subtitle` FROM `about_me`;");
    $query->execute();
    return $query->fetchAll();
}


/**this function is to return the names of each subtitle in about_me section into a drop-down list
 *
 * @param $subtitleArray array of values in subtitle field from about me table
 *
 * @return string the name of each subtitle
 */
function listingSubtitles($subtitleArray) {
    $results = " ";
    foreach ($subtitleArray as $value) {
        $results .=  "<option value='" . $value['id'] . "'>" . $value['subtitle'] . "</option>";
    }
    return $results;
}


/**this function is to get text field from about_me table in db
 *
 * @param $db array about me table from portfolio database
 *
 * @return mixed array of text field from about me table
 */
function getAboutMeDescriptionFromDatabase($db, $id) {
    $query = $db->prepare("SELECT `id`, `text`,`subtitle` 
                            FROM `about_me` 
                            WHERE `id` =" . $id . " 
                            GROUP BY `text`;");
    $query->execute();
    return $query->fetch();
}


/**this function is to return text field value of about_me section
 *
 * @param $textArray array of text field from about me table
 *
 * @return string text field from about me table
 */
function populateDescriptionForm($textArray) {
    return $textArray['text'];
}

/**this function is to edit current data with new data
 *
 * @param $db array of current data in db
 *
 * @param $oldText current data
 *
 * @param $newText edited data
 *
 * @return string of new text to about_me table
 */
function updateDescription($db, $oldText, $newText) {
    $query = $db->prepare("UPDATE `about_me` SET `text` = :newText WHERE `text` = :oldText;");
    $query->bindParam(':oldText', $oldText);
    $query->bindParam(':newText', $newText);
    $query->execute();
}

/**this function is to insert new data into about_me table in db
 *
 * @param $db array of subtitle and text to be sent to db
 *
 * @param $newSubtitle subtitle to be sent to db
 *
 * @param $newDescription text description to be sent to db
 *
 * @return  string of subtitle and text values to populate new row of about_me table
 */

function addAboutMe($db, $newSubtitle, $newDescription) {
    $query = $db->prepare("INSERT INTO `about_me` (`subtitle`,`text`)
                            VALUES (:newSubtitle,:newDescription);");
    $query->bindParam(':newSubtitle', $newSubtitle);
    $query->bindParam(':newDescription', $newDescription);
    $query->execute();
}


//function addAboutMeInfoToDatabase($db) {
//    $query = $db->prepare("INSERT INTO `about_me` (`subtitle`, `text`)
//                            VALUES ('hello', 'world');");
//    $query->execute();
//    return $query->fetchAll();
//}
//
//function addAboutMeInfoToDatabase($db, $_POST) {
//    $query = $db->prepare("INSERT INTO `about_me` (`subtitle`, `text`)
//                            VALUES (:subtitle, :text);");
//    $subtitle = '?';
//    $text = '?';
//    $query->bindParam($_POST ['subtitle']);
//    $query->bindParam($_POST ['text']);
//    $query->execute([$subtitle, $text]);
//}
//


/**this function
 *
 * @param $aboutMeArray
 * @return string
 */
//function postAboutMeInfoToDatabase($aboutMeArray) {
//    $results = " ";
//    foreach ($aboutMeArray as $value) {
//        $results = $value['subtitle']['text'];
//    }
//    return $results;
//}



//function addAboutMeInfoToDatabase($_POST, $db) {
//    $query = $db->prepare("INSERT INTO `about_me` (`subtitle`, `text`)
//                            VALUES (:subtitle, :text);");
//    $query->bindValue(':subtitle', $_POST['subtitle']);
//    $query->bindValue(':text', $_POST['text']);
//    $query->execute();
//}

//function postAboutMeInfoToDatabase($aboutMeArray) {
//    $results = " ";
//    foreach ($aboutMeArray as $value) {
//        $results = $value['subtitle']['text'];
//    }
//    return $results;
//}




/**this function is to make sure the relevant text is populated according to subtitle selected in listingSubtitles
 *
 * @param
 *
 * @return string text in same row of chosen subtitle
 */

//function subtitleToTextLink($db, $_POST) {
//    $results = " ";
//    if($subtitleArray = "my background") {
//        return
//    }
//}


?>






















