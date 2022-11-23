<!-- provide an option to reset their counter back to 1 making it their 
first visit  -->

<?php 

if(isset($_POST['submit'])) {

    session_start();

    // unset($_SESSION['hits']);
    $_SESSION['hits'] = 0;

    // echo "Your counter has been set to zero";

    header("Location: hmb-session-logic.php");
}




