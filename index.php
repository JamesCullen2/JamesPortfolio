<?php

?>

<h1>Portfolio Edit Page</h1>
    <br><br>
    <h2>Header Nav Bar Links</h2>
    <br><br>
<form method="post" action="admin.php">
    Type: <select name="type">
        <option value="home">Home</option>
        <option value="about me">About Me</option>
        <option value="portfolio">Portfolio</option>
        <option value="home">Contact</option>
    </select>
    Link url: <input type="url" name="link url">
    </form>
    <input type="submit">
</form>

<h2>About Me</h2>
<br><br>
    <form method="post" action="admin.php">
    Subtitle: <input type="text" name="subtitle">
    Description: <input type="text" name="description">
    </form>
    <input type="submit">
</form>

<h2>Portfolio</h2>
<br><br>
<form method="post" action="admin.php">
    Subtitle: <input type="text" name="subtitle">
    Description: <input type="text" name="description">
</form>
<input type="submit">

<h2>Contact</h2>
<br><br>
<form method="post" action="admin.php">
    Type: <select name="type">
        <option value="email">Email</option>
        <option value="tel">Tel</option>
        <option value="social">Social</option>
    </select>
    Description: <input type="text" name="description">
</form>
<input type="submit">

<h2>Images</h2>
<br><br>
<form method="post" action="admin.php">
    Subtitle: <input type="text" name="subtitle">
    Description: <input type="text" name="description">
</form>
<input type="submit">

