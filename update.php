<?php
    if(isset($_POST['action'])){
        $calcString = $_POST['calcString'];
        $link = mysqli_connect("localhost", "root", "", "calculator");

        date_default_timezone_set('America/Chicago');
        $calculated = date('y-m-d H:i:s');

        $sql = "INSERT INTO results (result, calculated) VALUES ('$calcString', '$calculated')";

        if(mysqli_query($link, $sql)){
            ;
        }
        else{
            echo "error";
        }

        mysqli_close($link);
    }
?>