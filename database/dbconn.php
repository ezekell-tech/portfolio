<?php

define("server", "localhost");
define("username", "root");
define("serverkey", "");
define("database", "portfolio_db");

$dbconn = mysqli_connect(server, username, serverkey, database);

if($dbconn){
    // echo"<script>";
    // echo"alert('DB connected!!') ";
    // echo"</script>";
}
else{
       echo"<script>";
       echo"alert('DB Error!!')";
       echo"</script>";
}