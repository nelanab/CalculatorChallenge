<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "calculator";
    $con = new mysqli($host, $user, $pass, $db_name);
    $sql = "SELECT result FROM results ORDER BY calculated DESC LIMIT 10";

    $run = mysqli_query($con, $sql);

    echo "<table class='table'>
        <thead>
            <tr>
                <th>Calculations:</th>
            </tr>
        </thead>";
    while ($row=mysqli_fetch_assoc($run)){
        extract($row);
        echo "<tbody>
            <td>{$result}</td>
            </tbody>";
    }

?>