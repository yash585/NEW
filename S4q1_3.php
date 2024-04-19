<?php
    session_start();
    $basic=$_POST['t1'];
    $hra=$_POST['t2'];
    $da=$_POST['t3'];
    $eno=$_SESSION["eno"];
    $ename=$_SESSION["ename"];
    $addr=$_SESSION["addr"];

    echo("eno:$eno<br>");
    echo("ename:$ename<br>");
    echo("addr:$addr<br>");
    echo("basic:$basic<br>");
    echo("hra:$hra<br>");
    echo("da:$da<br>");
?>
