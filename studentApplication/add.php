<?php
    $conncection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($conncection,"dbcrud");

    if(isset($_POST['submit'])){
        $Name = $_POST['sname'];
        $Address = $_POST['saddress'];
        $Mobile = $_POST['smobile'];

        $sql ="insert into student(Name,Address,Mobile)values('$Name','$Address','$Mobile')";
        if(mysqli_query($conncection,$sql)){
            echo '<script> location.replace("index.php") </script>';
        }else{
            echo "Something Error" . $conncection->error ;
        }

    }




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Applications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h1>Student Crud Application</h1>
                        <form action="add.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="sname" class="form-control" placeholder="Enter Name"> 
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="saddress" class="form-control" placeholder="Enter Address"> 
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="smobile" class="form-control" placeholder="Enter Mobile"> 
                            </div>
                            <br/>
                            <input type="submit" class="btn btn-primary" name="submit" value="Register">
                        </form>
                        

                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>