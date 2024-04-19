<html>
    <body>
        <form method="POST" action="S24q1.php">
            enter course
            <input type="text" name="t1"><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $c=$_POST['t1'];
    $xml=simplexml_load_file("S24q1.xml");
    echo("<table>");
    foreach($xml->student as $x)
    {
	if($x->course==$c)
	{
            echo("<tr><td>$x->no<td>");
            echo("<td>$x->name<td>");
            echo("<td>$x->addr<td>");
            echo("<td>$x->college<td>");
            echo("$xml->course<td><tr>");
	}
    }
    echo("</table>");

?>
