<?php
session_start();

if(isset($_SESSION['yetki']) && isset($_SESSION['isim']) && isset($_SESSION['soyisim']) )
{
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Home Page</title>
        </head>
        <body>
            <h1> Hello, <?php echo $_SESSION['isim'];?> your role status is: <?php $_SESSION['yetki'];?>
            <a href="logout.php"> Logout </a>
        </body>
    </html>
<?php
}

else{
    header("Location: login.php");

}

?>

