<?php
session_start();
include "db_conn.php";

if(isset($_POST["email"]) && isset($_POST["sifre"]))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$mail = validate($_POST["email"]);
$sifre = validate($_POST["sifre"]);


$sql = "SELECT * FROM users WHERE mail='".$mail."' AND şifre='".$sifre."'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1)
{
    $row = mysqli_fetch_assoc($result);
    if($row['mail'] === $mail && $row['şifre']===$sifre)
    {
        
        $_SESSION['yetki'] = $row['yetki'];
        $_SESSION['isim']= $row['isim'];
        $_SESSION['soyisim'] = $row['soyisim'];
        $_SESSION['numara'] = $row['SchoolNum'];
        echo("success!");

        $sql1 = "SELECT * FROM roller WHERE Isim='Admn'";
        $result1 = mysqli_query($conn, $sql1);
        if(mysqli_num_rows($result1)==1)
        {
            $row1=mysqli_fetch_assoc($result1);
        
            if($row['yetki']==$row1['ID'])
            {
                
                header("Location: adminpanel.php?".$row1['ID']."".$row1['Isim']);   
            }
            else
            {
                header("Location: home.php?".$row1['ID']."");
            }
        }
        
    }
    else
    {
        echo("Please try again.");
    }
}

else
{
    header("Location: login.php?error=Passaword or Email address isnt correct.");
}
?>