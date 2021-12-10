<?php
session_start();
include_once('db_conn.php');
$query="SELECT dersler.DersID, dersler.DersAdi, notlar.Puan FROM dersler INNER JOIN notlar ON dersler.DersID = notlar.DersKodu where notlar.SchoolNum='".$_SESSION['SchoolNum']."';";
$result = mysqli_query($conn,$query);

?>

<html>

<head>
    <title>Kontrol</title>
    <link rel="stylesheet" href="../css/anasayfa.css">
</head>
<body bgcolor="black">
    <table align="center" border="1px" style="width:1000px; line-height:40px">
        <tr>
            <center><th colspon="4"><h2 class="textHeader">Records</h2></th> </center>

        </tr>

        <t>
            <th style="color: silver;">Name of Lecture</th>
            <th style="color: silver;">Point of Lecture</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
                 ?>
                <tr> 
                    <td style="color: white; text-align:center; font-weight: bold; font-size: 20px;"> <?php echo $rows['DersAdi']; ?> </td>
                    <td style="color: white; text-align:center; font-weight: bold; font-size: 20px;"> <?php echo $rows['Puan']; ?> </td>

                </tr>
                
                <?php
            }
            ?>
    </table>
    <center><a href="home.php" style="color: silver;"> Go Back I Want To Be Monke </a></center>
</body>
</html>