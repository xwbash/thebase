<?php
include 'security.php';
include_once('db_conn.php');
$query="select * from users";
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
            <center><th colspon="4"><h2 class="textHeader">User Records</h2></th> </center>

        </tr>

        <t>
            <th style="color: silver;">ID</th>
            <th style="color: silver;">SchoolNumber</th>
            <th style="color: silver;">Name</th>
            <th style="color: silver;">Surname</th>
            <th style="color: silver;">Email</th>
            <th style="color: silver;">Phone</th>
            <th style="color: silver;">Birthday</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
                 ?>
                <tr> 
                    <td style="color: silver;"> <?php echo $rows['ID']; ?> </td>
                    <td style="color: silver;"> <?php echo $rows['SchoolNum']; ?> </td>
                    <td style="color: silver;"> <?php echo $rows['isim']; ?> </td>
                    <td style="color: silver;"> <?php echo $rows['soyisim']; ?> </td>
                    <td style="color: silver;"> <?php echo $rows['mail']; ?> </td>
                    <td style="color: silver;"> <?php echo $rows['telefonumarasi']; ?> </td>
                    <td style="color: silver;"> <?php echo $rows['DogumGunu']; ?> </td>
                </tr>
                
                <?php
            }
            ?>
    </table>
    <center><a href="adminpanel.php" style="color: silver;"> Go Back I Want To Be Monke </a></center>
</body>
</html>