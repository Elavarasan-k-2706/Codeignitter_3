<?php
    $conncection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($conncection,"dbcrud");
    $delete=$_GET['del'];


    $sql ="delete from student where id = '$delete'";

    if(mysqli_query($conncection,$sql))
        {
            echo '<script> location.replace("index.php") </script>';
        }else{
            echo "Something Error" . $conncection->error ;
        }
   