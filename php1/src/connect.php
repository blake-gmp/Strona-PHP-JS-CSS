<?php

    $sql_host = "localhost";
    $sql_name = "root";
    $sql_pass = "";
    $sql_db = "testowo";

    try
    {
        $conn = new mysqli($sql_host, $sql_name, $sql_pass, $sql_db);
    }
    catch(Exception $error)
    {
        require "connect_exception";
    }
?>
