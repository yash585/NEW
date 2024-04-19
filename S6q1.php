<?php
	$xml=simplexml_load_file("S5q1.xml");

	foreach($xml->item as $x)
	{
		echo("$x->item_name<br>");
		echo("$x->rate<br>");
		echo("$x->qty<br>");
	}
?>
