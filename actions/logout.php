<?php

include "../classes/User.php";

// Create an obj
$user = new User;

// Call the method
$user->logout();

//process
//views(Log out)->actions(logout.php)->classes(logout())