<?php
include 'security.php';
include 'db_conn.php';


?>

<html>
    <head>
        <title>Absence</title>
        <link rel="stylesheet" href="../css/anasayfa.css">
    </head>
    <body bgcolor="black">
        <form action="" method="post">
        <center>
        <p class="textConcept"> Add Lecture System.
        <hr style="width:200px;">
        <br> <p class="textConcept"> Input Lecture Code:  
        <input type="text" name="Code">
        <br> <p class="textConcept"> Input Lecture Name:  
        <input type="text" name="Name">
        <br> <p class="textConcept"> Input AKTS:  
        <input type="text" name="AKTS">
        </br>
        </br>
        </br>
        <button style="padding: 8px 32px;" type="submit" name="kaydet"> Sign It </button> </br></center>
    </br>
        </form>
        <center><a href="adminpanel.php" style="color: silver;"> Go Back I Want To Be Monke </a></center>
    </body>
</html>
<?php
    $telefonno =intval($_POST['phone']);
    $sql="insert into dersler(DersID,DersAdi,AKTS) values('".$_POST["Code"]."','".$_POST["Name"]."','".$_POST["AKTS"]."')";
    if (!mysqli_query($conn,$sql))
    {
    die('Error: ');
    }
    echo "1 record added to users";
?>