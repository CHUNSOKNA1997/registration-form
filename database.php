<?php
    $db_sever = 'localhost:3307';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'db_regform';
    $conn = '';

    try{
        $conn = mysqli_connect($db_sever, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Couldn't connect to Database.";
    }
?>