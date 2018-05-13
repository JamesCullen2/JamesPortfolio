<?php
session_start();

require('functionCMS.php');

$db = new PDO('mysql:host = 127.0.0.1; dbname=portfolio', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


if($_POST['subtitleId'] != NULL) {
    $id = $_POST['subtitleId'];
    $textArray = getAboutMeDescriptionFromDatabase($db, $id);
    $_SESSION['oldText'] = populateDescriptionForm($textArray);
}

if($_POST['newText'] != NULL && $_SESSION['oldText'] != NULL) {
    $newText = $_POST['newText'];
    $oldText = $_SESSION['oldText'];
    updateDescription($db, $oldText, $newText);
}

if($_POST['newSubtitle'] != NULL && $_POST['newDescription'] != NULL) {
    $newSubtitle = $_POST['newSubtitle'];
    $newDescription = $_POST['newDescription'];
    addAboutMe($db, $newSubtitle, $newDescription);
}

if($_POST['deleteSection'] != NULL) {
    $id = $_POST['deleteSection'];
    deleteAboutMeSection($db, $id);
}

$subtitleArray = getAboutMeSubtitleFromDatabase($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>James Cullen Portfolio CMS</title>
</head>
<body>
    <div>
        <h1>James Cullen: Portfolio Content Management System</h1>
        <h2>About Me Section</h2>
        <h2>Edit</h2>
        <form id="editAboutMe" action="admin.php" method="post">
            <select name="subtitleId">
                <?php echo listingSubtitles($subtitleArray) ?>
            </select>
            <input type='submit' value='Get'>
        </form>
        <br><br>
        <form method="post" action="admin.php">
            <textarea rows="25" cols="50" name="newText">
                <?php echo populateDescriptionForm($textArray) ?>
            </textarea>
            <input type="submit" value="Apply">
        </form>
    </div>
    <div>
        <h2>Add</h2>
        <form id="addAboutMe" method="post" action="admin.php">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="newSubtitle">
            <br><br>
            <textarea rows="25" cols="50" name="newDescription">
            </textarea>
            <input type="submit" value="Add">
        </form>
    </div>
    <div>
        <h2>Delete</h2>
        <form id="deleteAboutMe" method="post" action="admin.php">
            <select name="deleteSection">
                <?php echo listingSubtitles($subtitleArray) ?>
            </select>
            <input type='submit' value='Delete'>
        </form>
        <br><br>
    </div>
</body>
</html>