<?php

session_start();
require 'db/database.php';
require 'functions/user.php';

if(logged_in() === true){
    $session_id = $_SESSION['id'];
    $user_data = user_data($con,$session_id,'id','first_name','last_name','email');



}

