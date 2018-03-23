<?php

session_start();

require ('webToDatabaseFunctions.php');

$db = new PDO('mysql:host = 127.0.0.1; dbname=portfolio', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$getSubtitleFromDB = getSubtitleFromDB($db, 1);
$getTextFromDB = getTextFromDB($db, 1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>James Cullen Portfolio</title>
    <link rel="stylesheet" type="text/css" href= "styles.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
                <ul class="container nav-main">
                    <li class="nav-buttons">
                        <a href="#contact">
                            <img src="nav-bar-icon-contact.png" alt="James Cullen Contact">
                        </a>
                    </li>
                    <li class="nav-buttons">
                        <a href="#portfolio">
                            <img src="nav-bar-icon-portfolio.png" alt="James Cullen Portfolio">
                        </a>
                    </li>
                    <li class="nav-buttons">
                        <a href="#about">
                            <img src="nav-bar-icon-about-me-link.png" alt="James Cullen About Me">
                        </a>
                    </li>
                </ul>
    </header>
    <main class="container">
        <section id="about">
                <h1> <?php echo displaySubtitle($getSubtitleFromDB) ?></h1>
                <p> <?php echo displayTextFromDB($getTextFromDB) ?>
                </p>
                <h1>my skills</h1>
                <p>I enrolled on the Mayden Academy software development programme in February 2018.
                    This began a four month intensive course of advanced software development, including: HTML, CSS,
                    CSM, SQL, JS, MVC & PHP, Node.js and Zend.
                </p>
                <h1>my interests</h1>
                <p>I am a very proud husband and father of a one year-old baby boy, Joshua! We live in Keynsham
                    in the first house we have ever owned. My wife, Hannah, and I met in Mexico in 2003 while we were
                    volunteering for a charity organisation. My wife is originally from Bristol area whereas I was
                    born and raised on the Merseyside. I enjoy keeping myself fit and active; I currently train at
                    CrossFit and play for Keynsham Hockey Club.
We are blessed with many great friends and family whom we share time with regularly.
                </p>
        </section>
        <section>
                <h1 id="portfolio">websites</h1>
                <a class="image-icons" target="_blank" href="http://oratemate.com/">
                    <img src="oratemate-website-image-1.png" alt="OrateMate Limited">
                </a>
                    <p>Here's a website that I built for my training / coaching company, OrateMate.
                    </p>
                <h1>web apps</h1>
                <a class="image-icons" target="_blank" href="#">
                    <img src="web-app-image-2.png" alt="Unity-Hub">
                </a>
                    <p>Here's an example of UI for Unity-Hub, a digital tech start-up I founded.
                    </p>
        </section>
    </main>
    <footer id="contact" class="footer-links container">
        <div>
            <ul class="footer-nav-bar">
                <li class="footer-nav-buttons">
                    <a href="mailto:jamesnac@aol.com">
                        <img src="email_icon.png" alt="James Cullen Email">
                    </a>
                </li>
                <li class="footer-nav-buttons">
                    <a href="https://twitter.com/James_Cullen1?lang=en">
                        <img src="contact-icon-twitter.png" alt="James Cullen Twitter">
                    </a>
                </li>
                <li class="footer-nav-buttons">
                    <a href="https://www.linkedin.com/in/jamescullen1/">
                        <img src="contact-icon-linkedin.png" alt="James Cullen Twitter">
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>

/**
 * Created by PhpStorm.
 * User: James
 * Date: 22/03/2018
 * Time: 14:13
 */