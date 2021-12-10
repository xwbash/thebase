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
        <p class="textConcept"> Absence System.
        <hr style="width:200px;">
        <br> <p class="textConcept"> Input Student School Number:  
        <input type="text" name="number">
        <br> <p class="textConcept"> Input Student Absence Date:  
        <input type="DATE" name="datet">
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
    $sql="insert into devamsizlik(SchoolNum,AbsenceDate) values('".$_POST["number"]."','".$_POST["datet"]."')";
    if (!mysqli_query($conn,$sql))
    {
    die('Error: ');
    }
    echo "1 record added to users";
?>