<?php
include 'security.php';
include 'db_conn.php';
?>
<html>

<head>
<link rel="stylesheet" href="../css/anasayfa.css">
<title>Register User</title>

</head>

<body bgcolor="black">
    

</body>
</html>
<center>
<button><a href="logout.php" > Logout </a> </button>
<form method="post">
    <p class="textConcept"> Register System.
    <hr>
    <br> <p class="textConcept"> Input Student Mail Adress:  
    <input type="text" name="email">
    </br>
    <br> <p class="textConcept"> Input Student Name:  
    <input type="text" name="isim">
    </br>
    <br> <p class="textConcept"> Input Student Surname:  
    <input type="text" name="soyisim">
    </br>
    <br> <p class="textConcept"> Input Student Phone Number:  
    <input type="text" name="phone">
    </br>
    <br> <p class="textConcept"> Input Student Birthday:  
    <input type="DATE" name="datet">
    </br>
    </p>
    <hr>
    <p class="textConcept"> Register Address.
    <hr>
    <br> <p class="textConcept"> Input Student City:  
    <input type="text" name="il">
    <br> <p class="textConcept"> Input Student State:  
    <input type="text" name="ilce">
    <br> <p class="textConcept"> Input Student Address:  
    <input type="text" name="adres" style="width: 180px; height: 80px;">
    <br>
    <br>
    <br>
    <br>
    <button style="padding: 8px 32px;" type="submit" name="kaydet"> Sign It </button> </br></center>
</form>
<center><a href="adminpanel.php" style="color: silver;"> Go Back I Want To Be Monke </a></center>
<?php
    $telefonno =intval($_POST['phone']);
    $sql="insert into users(isim,soyisim,mail,telefonumarasi,DogumGunu) values('".$_POST["isim"]."','".$_POST["soyisim"]."','".$_POST["email"]."','".$telefonno."','".$_POST["datet"]."')";
    if (!mysqli_query($conn,$sql))
    {
    die('Error: ');
    }
    echo "1 record added to users";

    $sql="insert into adres(Il,Ilce,AcikAdres) values('".$_POST["il"]."','".$_POST["ilce"]."','".$_POST["adres"]."')";
    if (!mysqli_query($conn,$sql))
    {
    die('Error: ');
    }
    echo "1 record added";

?>