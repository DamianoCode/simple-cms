<?php session_start(); ?>
<div>
<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
 include('menu.php');
} 
else { echo "<h2>Nie jestes zalogowany</h2><br><a href='../login.php'>Zaloguj się!</a>"; }
?>
</div>