<?php
if (isset($_POST['submit'])) {
    
    // set cookie for gender
    // setcookie( name , value , time )
    setcookie('gender',$_POST['gender'], time() + 300);
    
    // Remove all session values
    // session_destroy();
    session_start();

    // give session a name = value
    $_SESSION['name'] = $_POST['name'];

    // echo $_SESSION['name'];

    header('Location: arr.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Sessions</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <select name="gender" id="">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="text" name="name">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>