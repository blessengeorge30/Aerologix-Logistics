<?php
     session_start();
     if(isset($_SESSION["name"]))
     {
         $user_name= $_SESSION["name"];
     }
     else
     {
         header("Location: index");
     }
?>