<?php
	$xml=new DOMDocument();
	$xml->load("S7q1.xml");

	foreach($xml->movieinfo as $x)
	{
		echo("$x->no<br>");
		echo("$x->title<br>");
		echo("$x->name<br>");
		echo("$x->year<br>");
	}
?>
