<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){  
    if(empty($_GET['request'])){
        
    }
    else if($_GET['request'] == 'matches'){        
            require 'config.php';
            header('Content-Type: application/json');           
                $sql = "SELECT * FROM teams";
                $prepare = $db->prepare($sql);
                $prepare->execute([]);
                $teams = $prepare->fetchAll(2);
                echo json_encode($teams);
                exit;                    
    } 
}
require 'header.php';

echo "<div class='index'>";
echo "<div class='indextext'>";

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
    echo "<form action='loginController.php' method='post'>,
    <input type='hidden' name='type' value='logout'>
    <input type='submit' value='afmelden'>
    <a href='create.php'>Team aanmaken</a>";
    
}
else{
    echo "Je bent niet ingelogd <a href='login.php'>Login</a> of <a href='register.php'>Register</a>";
}
?>

<h1>Dit is een index</h1>
<p>als je een admin ben mag je naar deze pagina <a href='admin.php'>admin pagina!</a></p>

<?php
if (isset($_SESSION)){
    echo "je kan <a href='create.php'>hier</a> een team aanmaken";
}
echo '</div>';
echo '</div>';
require 'footer.php';
?>
