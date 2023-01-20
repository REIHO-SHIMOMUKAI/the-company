<?php

include "../classes/User.php";

// instantiate / create obj
$user = new User;

// call the method store
$user->update($_POST,$_FILES);