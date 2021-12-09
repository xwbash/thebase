<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="../css/anasayfa.css">
</head>
<body bgcolor="black">
    <center> <p class="textHeader"> LOGIN PAGE</p> 
    <hr width="500"> </hr>
    <?php
	$baglan = mysqli_connect("localhost","root","","dershane");
	if(!$baglan)
	{
		die("connection losted: ".mysqli_connect_error());
	}
	else
	{
		echo "Connected to Database";
	}
    
	?>
    
    <form method="post" action="log.php">
        <br> <p class="textConcept"> Input your mail adress: 
        <input type="text" name="email">
        </br>

        <br> Input your passaword: 
        <input type="password" name="sifre">
        </br>
        </p>
        <br><button style="padding: 8px 32px;" type="submit" name="kaydet"> Login </button> </br>
    </form>
    </center>
</body>
</html>