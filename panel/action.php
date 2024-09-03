<?php
    include "../import/db_connection.php";
    if($_GET["username"] && $_GET["user_password"])
    {
        $user=$_GET["username"];
        $pass=$_GET["user_password"];
        $sql="select * FROM users";
        if($result=mysqli_query($conn,$sql))
        {
            $row=mysqli_fetch_row($result);
            $u=$row[1];
            $p=$row[2];
            $user_name=$row[3];
            if($user==$u)
            {
                if($pass==$p)
                {
                    session_start();
                    $_SESSION["name"]=$user_name;
                    header("Location: dashboard");
                }
                else
                {
                    header("Location: index?error=3");
                }
            }
            else
            {
                header("Location: index?error=2");
            }
        }
        else
        {
            header("Location: index?error=1");
        }
    }
?>