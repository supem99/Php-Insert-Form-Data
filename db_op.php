
<?php

include("db_conn.php");

    // get values form input text and number

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    // mysql query to insert data

    $query = "INSERT INTO `peoples`(`f_name`, `l_name`, `age`) VALUES ('$fname','$lname','$age')";

    $result = mysqli_query($conn,$query);

    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }

    else{
        echo 'Data Not Inserted';
    }


    mysqli_close($conn);


