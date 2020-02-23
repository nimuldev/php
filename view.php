<?php
include 'connect.php';


$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {


    echo"<table border='1px'>";
    while($row = mysqli_fetch_assoc($result)) {
        echo"
        
        <tr>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['password']."</td>
        </tr>
        
        ";
    }
    echo"</table>";
} else {
    echo "0 results";
}


?>