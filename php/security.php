<?php
session_start();
include "db_conn.php";
if(isset($_SESSION['yetki']))
{
    
    $sql1 = "SELECT * FROM roller WHERE Isim='Admn'";
    $result1 = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result1)==1)
    {
        $row1=mysqli_fetch_assoc($result1);
        
    
        if($_SESSION['yetki']==$row1['ID'])
        {
            echo "hello";
        }
        else
        {
            header("Location: login.php");
        }
    }


}
else
{
    header("Location: login.php");
}

?>