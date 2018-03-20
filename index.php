<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>James Cullen Portfolio CMS</title>
</head>

<body>
    <h1>Portfolio Edit Page</h1>
    <div>
        <h2>Header Nav Bar Links</h2>
        <br><br>
    <form method="post" action="admin.php">
        <label for="type">Type</label>
        <select name="type">
            <option value="home">Home</option>
            <option value="about me">About Me</option>
            <option value="portfolio">Portfolio</option>
            <option value="home">Contact</option>
        </select>
        <label for="link">Link URL</label>
        <input type="url" name="link url">
        </form>
        <input type="submit">
    </form>
    </div>

    <div>
    <h2>About Me</h2>
    <br><br>
        <form method="post" action="admin.php">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle">
            <label for="description">Description</label>
            <input type="text" name="description">
        </form>
        <input type="submit">
    </form>
    </div>

    <div>
    <h2>Portfolio</h2>
    <br><br>
    <form method="post" action="admin.php">
        <label for="subtitle">Subtitle</label>
        <input type="text" name="subtitle">
        <label for="description">Description</label>
        <input type="text" name="description">
    </form>
    <input type="submit">
    </div>

    <div>
    <h2>Contact</h2>
    <br><br>
    <form method="post" action="admin.php">
        <label for="type">Type</label>
        <select name="type">
            <option value="email">Email</option>
            <option value="tel">Tel</option>
            <option value="social">Social</option>
        </select>
        <label for="description">Description</label>
        <input type="text" name="description">
    </form>
    <input type="submit">
    </div>

    <div>
    <h2>Images</h2>
    <br><br>
    <form method="post" action="admin.php">
        <label for="subtitle">Subtitle</label>
        <input type="text" name="subtitle">
        <label for="description">Description</label>
        <input type="text" name="description">
    </form>
    <input type="submit">
    </div>
</body>
</html>