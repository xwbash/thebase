<?php
session_start();
include 'db_conn.php';

$query="SELECT devamsizlik.AbsenceDate, devamsizlik.SchoolNum, users.SchoolNum FROM devamsizlik INNER JOIN users ON devamsizlik.SchoolNum = users.SchoolNum where devamsizlik.SchoolNum='".$_SESSION['SchoolNum']."';";
$result = mysqli_query($conn,$query);
?>

<html>

<head>
    <title>Kontrol</title>
    <link rel="stylesheet" href="../css/anasayfa.css">
</head>
<center>
<body bgcolor="black">
    <table align="center" border="1px" style="width:1000px; line-height:40px">
        <tr>
            <center><th colspon="4"><h2 class="textHeader">Records</h2></th> </center>

        </tr>

        <t>
            <th style="color: white;">The Dates That Absence</th>
        </t>
        <?php

            while($rows=mysqli_fetch_assoc($result))
            {
                 ?>
                <tr> 
                    <td style="color: white; text-align:center; font-weight: bold; font-size: 20px;"> <?php echo $rows['AbsenceDate']; ?> </td> 
                </tr>
                
                <?php
            }
            ?>
    </table>
        

    <center><a href="home.php" style="color: silver;"> Go Back I Want To Be Monke </a></center>
</body>
</html>