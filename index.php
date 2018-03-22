<?php
session_start();

require ('admin.php');

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


$subtitleArray = getAboutMeSubtitleFromDatabase($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>James Cullen Portfolio CMS</title>
</head>

<body>
    <div>
    <h2>About Me</h2>
    <h2>Edit</h2>
        <form id="editAboutMe" action="index.php" method="post">
            <select name="subtitleId">
                <?php echo listingSubtitles($subtitleArray) ?>
            </select>
            <input type='submit' value='Get'>
        </form>
        <br><br>
        <form method="post" action="index.php">
            <textarea rows="25" cols="50" name="newText">
                <?php echo populateDescriptionForm($textArray) ?>
            </textarea>
            <input type="submit" value="Apply">
        </form>
    </div>

    <div>
        <h2>About Me</h2>
        <h2>Add</h2>
        <form id="addAboutMe" method="post" action="admin.php">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle">
            <br><br>
            <textarea rows="25" cols="50" name="text" form="addAboutMe">
            </textarea>
            <input type="submit" name="submitNew" value="Add">
        </form>
    </div>

    <div>
        <h2>About Me</h2>
        <h2>Delete</h2>
        <form id="addAboutMe" method="post" action="admin.php">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle">
            <br><br>
            <textarea rows="25" cols="50" name="text" form="addAboutMe">
            </textarea>
            <input type="submit" name="submitNew" value="Add">
        </form>
    </div>
</body>
</html>