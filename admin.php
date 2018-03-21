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


/**this function is to get text field from about me table in db
 *
 * @param $db array about me table from portfolio database
 *
 * @return mixed array of text field from about me table
 */
function getAboutMeDescriptionFromDatabase($db) {
    $query = $db->prepare("SELECT `text`,`subtitle` FROM `about_me` WHERE `subtitle` = 'my background' GROUP BY `text`;");
    $query->execute();
    return $query->fetchAll();
}


/**this function is to populate description of each about me section in an editable form
 *
 * @param $textArray array text field from about me table
 *
 * @return string text field from about me table
 */
function populateDescriptionForm($textArray) {
    $results = " ";
    foreach ($textArray as $value) {
        $results = $value['text'];
    }
    return $results;
}

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
//
//
//
//
//$email = $_POST['email'];
//$password = $_POST['password'];
//$correctEmail = 'gmail';
//$correctPassword = 'hello';
//
//function checkCredentials($email, $password, $correctEmail, $correctPassword) {
//if($email==$correctEmail&&$password==$correctPassword || $_SESSION['loggedIn']==TRUE) {
//$_SESSION['loggedIn'] = TRUE;
//return "Logged in!";
//} else {
//$_SESSION['loggedIn'] = FALSE;
//header('Location: index.php');
//exit;
//}
//}
//
//echo checkCredentials($email, $password, $correctEmail, $correctPassword);
//

?>






















