<?php
session_start();
include_once('db_conn.php');
$query="SELECT dersler.DersAdi FROM dersler INNER JOIN dersprogrami ON dersler.DersID = dersprogrami.DersKodu where dersprogrami.SchoolNum='".$_SESSION['SchoolNum']."';";

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
            <th style="color: silver;">NameS Of Lectures</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
                 ?>
                <tr> 
                    <td style="color: white; text-align:center; font-weight: bold; font-size: 20px;"> <?php echo $rows['DersAdi']; ?> </td>
                </tr>
                
                <?php
            }
            ?>
    </table>
    <center><a href="home.php" style="color: silver;"> Go Back I Want To Be Monke </a></center>
</body>
</html>