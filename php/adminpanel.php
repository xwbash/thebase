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
            <script> alert("Merhaba"); </script>
            <a href="logout.php"> Logout </a>
            <hr>
            <form action="lookup.php" method="post">
                <?php $_POST['yetki'] = $_SESSION['yetki']; ?>
                <a href="lookup.php"> <br><button style="padding: 8px 32px;" type="submit" >  Check Up Registration </button> </br> </a>
            </form>
            <form action="register.php" method="post">
             
               <?php $_POST['yetki'] = $_SESSION['yetki']; ?>
                <a href="register.php"> <br><button style="padding: 8px 32px;" type="submit" >  Register An User </button> </br> </a>
            </form>
        </body>
    </html>
    <?php
?>


        