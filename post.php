<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post/Get</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="userName">User Name</label>
        <input type="text" name="userName" placeholder="Enter Your Name" required><br>
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Enter Your Email" required><br>
        <button type="submit">Submit</button><br>
    </form>

    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $username = $_POST['userName']; // Corrected key
    //     $email = $_POST['email'];
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $username = $_GET['userName']; // Corrected key
        $email = $_GET['email'];
        
        if (!empty($username)) {
            echo "Username: ". $username."<br>";
            echo "Email: ". $email;
        } else {
            echo "You have to fill up the field.";
        }
    }
    ?>
</body>
</html>
