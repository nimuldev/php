<?php
include 'connect.php';

if(isset($_POST['submit_btn']))
{
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email, password)
            VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>


<html>
<head>

</head>

<body>
    <form method="post">
        <input type="text" name="fname" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="submit_btn">Insert</button>
    </form>
</body>
</html>