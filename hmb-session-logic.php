<?php 
session_start();

if(isset($_SESSION['hits'])) {

    $_SESSION['hits']++;
    echo "Hello, " . $_SESSION['name'] . "." . " You have visited this page " . $_SESSION['hits'] . " times"; ?>

        <form action="hmb-reset-visit-counter.php" method="post">
            <p>If you would like to reset your visit counter please click below</p>
            <input type="submit" name="submit" value="Reset Visit Counter">
        </form>

        <form action="hmb-name-change.php" method="post" >
            <p>If you would like to change your name please click below</p>
            <input type="submit" name="submit" value="Change Name">
            <input type="text" name="newname" placeholder="Enter New Name">
        </form>

    <?php
} else {
    $_SESSION['hits'] = 1;
    echo "This is your first visit to this page. Please enter your name here
    for a personalized experience"; ?> 
    <form action="hmb-form-processor.php" method="post">
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form><?php 
} 



?>








<!-- //ADDITIONAL CHALLENGE!!!
// 1. First visit present a form that collects the users name 
and stores it in the session. Then uses the name to say hello you have so and so
you have visited this many times. 

 2. provide an option to reset their counter and edit their name.  -->