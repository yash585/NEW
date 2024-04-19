<html>
    <body>
        <form method="post" "S3q1.php">
            UserName:
            <input type="text" name="t1"><br>
            Password:
            <input type="text" name="t2"><br>
            <input type="submit">
        </form>
    </body>
</html>
<?php
        session_start();

        if(isset($_SESSION["count"]))
        {
                $_SESSION["count"]+=1;
        }
        else
        {
                $_SESSION["count"]=1;
        }

	if($_SESSION["count"]<4)
	{
		$uname=$_POST['t1'];
		$pass=$_POST['t2'];
		if($uname=="yash" && $pass=="yash")
		{
			header("Location: logged.html");
		}
		else
		{
			echo("Error");
		}
	}
	else
	{
		echo("SESSION expired 10vya la ya ata");
	}
?>
