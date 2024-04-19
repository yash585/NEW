<?php

 
  
  $font_style=$_POST["t1"];
  $font_size=$_POST["t2"];
  $font_color=$_POST["t3"];
  $bg_color=$_POST["t4"];
 
  setcookie("font_style",$font_style,time()+(86400*30),"/");
  setcookie("font_size",$font_size,time()+(86400*30),"/");
  setcookie("font_color",$font_color,time()+(86400*30),"/");
  setcookie("bg_color",$bg_color,time()+(86400*30),"/");	 	
  
  echo("<h2>Font Style=".$font_style);
  echo("<h2><br><br>Font Size=".$font_size);
  echo("<h2><br><br>Font Color=".$font_color);
  echo("<h2><br><br>Background Color=".$bg_color);
  
  echo("<html><body><form method='post' action='Slip2_1_3.php'>");
  echo("<input type='submit' value='next'>");
  echo("</form></body></html>");
?>
