<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>loginform</title>
</head>
<body>

<?php
include_once "login.php";
session_start();
if (isset($_SESSION["username"])){
    ?>
    <p><a href="profile.php"></a>Profile</p>
    <p><a href="changepassword.php"></a>Change Password</p>
    <p><a href="logout.php"></a>Logout</p>
    <?php
} else{
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <p>Username <input type="text" name="username" required></p>
    <p>Password <input type="password" name="pwd" required></p>
    <p><input type="submit" value="login"></p>
</form>
<?php
}
?>

</body>
</html>