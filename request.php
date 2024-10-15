<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Register</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="username" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>

    <?php
    
    IF($_SERVER['REQUEST_METHOD']=="POST"){
     $username=$_REQUEST['username'];
    //  if (empty($username)){
    //     echo "Please fillup the field";
    //  }else{
    //     echo $username;
    //  }
    if (!empty($username)){
        echo $username;
    }else{
        echo "Please fillup the field";
    }    

    }
    ?>
</body>
</html>