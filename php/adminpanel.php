<?php
session_start();
include 'security.php'
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="../css/anasayfa.css">
            <title>Home Page</title>
        </head>
        <body bgcolor="black">
            <center> <h1 class="textConcept"> Hello, <?php echo $_SESSION['isim'];?> welcome to the adminside.
            <a href="logout.php"> Logout </a>
            <hr>
            <a href="lookup.php"> <br><button style="padding: 8px 32px;" type="submit" >  Check Up Registration </button> </br> </a>
            <a href="register.php"> <br><button style="padding: 8px 32px;" type="submit" >  Register An User </button> </br> </a>
            <a href="devamsizlik.php"> <br><button style="padding: 8px 32px;" type="submit" >  Absence Processing </button> </br> </a>
            <a href="dersEkle.php"> <br><button style="padding: 8px 32px;" type="submit" >  Add an Lecture </button> </br> </a>
            <a href="dersProgrami.php"> <br><button style="padding: 8px 32px;" type="submit" >  Lectures Assignment </button> </br> </a>
            <a href="examPoints.php"> <br><button style="padding: 8px 32px;" type="submit" >  Point of Exams </button> </br> </a>
        </body>
    </html>
    <?php
?>


        