<?php 
/*The counter shouldn't go up 1 on the redirect to the main page. Just
the name  */

if(isset($_POST['submit'])) {
    session_start();
    $newName = $_POST['newname'];
    $_SESSION['name'] = $newName;
    $_SESSION['hits']--;

    echo "Your name has been changed to $newName";

    header("Location: hmb-session-logic.php");
    die();
    
}





