<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /accounts/login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapselordnung</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon">
    <link rel="stylesheet" href="styles.css">
    <script src="cookie.js"></script>
</head>
<body>

    <header>
        <h1>Hiya! <?php echo htmlspecialchars($_SESSION["username"]); ?>
    </header>

    <!-- Show the Cookie Popup -->
    <div id="cookieConsent" style="display: none; background-color: rgba(0, 0, 0, 0.8); color: #fff; position: fixed; bottom: 0; left: 0; width: 100%; padding: 20px; text-align: center; z-index: 9999;">
        This website uses cookies to ensure you get the best experience on our website.
        <button style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-left: 20px;" onclick="acceptCookies()">Accept</button>
    </div>

<main>

    <section id="section1">
        <h2>Oh Nein, Der Tower Brennt!</h2>
        <p>WENN DER DIE SIRENE HÖRT, FÜHLT ER SICH SEHR GESTÖRT!</p>
        <button onclick="window.location.href='video/tower-fire.html'">Anzeigen</button>
    </section>

    <section id="section2">
        <h2>VIDEO2</h2>
        <p>WENN DER DIE SIRENE HÖRT, FÜHLT ER SICH SEHR GESTÖRT!</p>
        <button onclick="window.location.href='video/tower-fire.html'">Anzeigen</button>
    </section>

</main>

<footer>
<p>&copy; WWAGO Studios</p>
<p>&copy; Jakobsoft Inc.</p>
</footer>

</body>
</html>