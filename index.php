<?php
require 'header.php';
echo "<div class='index'>";

if(isset ($_GET['success'])) {
    if($_GET['success'] == 'register') {
        echo "<p class='message' style='color: green;'>Succesvol geregistreerd!</p>";
    }
    if($_GET['success'] == 'login') {
        echo "<p class='message' style='color: green;'>Succesvol ingelogd!</p>";
    }
    if($_GET['success'] == 'logout') {
        echo "<p class='message' style='color: green;'>Succesvol uitgelogd! </p>";
    }
}
if(isset($_SESSION['id'])){
    echo "<form action='loginController.php' method='post'>
    <input type='hidden' name='type' value='logout'>
    <input type='submit' value='afmelden'>";
}
else{
    echo "Je bent niet ingelogd <a href='login.php'>Login</a> of <a href='register.php'>Register</a>";
}
?>

<h1>Dit is een index</h1>
<p>als je een admin ben mag je naar deze pagina<a href='admin.php'>admin pagina!</a></p>

<?php
echo '</div>';
require 'footer.php';
?>
