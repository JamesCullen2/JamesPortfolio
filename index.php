<?php

require ('admin.php');

$db = new PDO('mysql:host = 127.0.0.1; dbname=portfolio', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$subtitleArray = getAboutMeSubtitleFromDatabase($db);
$textArray = getAboutMeDescriptionFromDatabase($db);
//$aboutMeArray = postAboutMeInfoToDatabase($db);

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
            <select name="selectSubtitle">
                <?php echo listingSubtitles($subtitleArray) ?>
            </select>
            <input type='submit' value='Get'>
        </form>
        <br><br>
        <textarea rows="25" cols="50" name="description" form="editAboutMe">
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