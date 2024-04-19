<html>
    <body>
        <form method="post" action="S4q1_3.php">
            basic
            <input type="text" name="t1"><br>
            hra
            <input type="text" name="t2"><br>
            da
            <input type="text" name="t3"><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    session_start();
    $_SESSION["eno"]=$_POST['t1'];
    $_SESSION["ename"]=$_POST['t2'];
    $_SESSION["addr"]=$_POST['t3'];
?>
