<?php
session_start();

if(isset($_SESSION['numara']) && isset($_SESSION['isim']) && isset($_SESSION['soyisim']) )
{
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Home Page</title>
        </head>
        <body bgcolor="black">
            <center>
            <?php echo $_SESSION['SchoolNum'] = $_SESSION['numara'];?>
            <h1 style="color:white;"> STUDENT PANEL </h1>
            <hr style="width: 300px">
            <a href="userDevamsizlik.php"> <br><button style="padding: 8px 32px;" type="submit" >  Check Up Absence </button> </br> </a>
            <a href="usersDersProgrami.php"> <br><button style="padding: 8px 32px;" type="submit" >  Check Up Lecture Program </button> </br> </a>
            <a href="userNotlari.php"> <br><button style="padding: 8px 32px;" type="submit" >  Check Up Points </button> </br> </a>
            </br>
            </br>
            </br>
            <a href="logout.php" style="color:white;"> Logout </a>
            </center>
        </body>
    </html>
<?php
}

else{
    header("Location: login.php");

}

?>

