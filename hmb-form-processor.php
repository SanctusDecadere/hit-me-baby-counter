<?php 

if(isset($_POST['submit'])) {

    $name = $_POST['name'];

    session_start();

    $_SESSION['name'] = $name;

    echo "Hello, " . $_SESSION['name'] . "." . " Thank you for visiting!";
    // header("Location: hmb-session-logic.php");
}
