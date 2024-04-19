<?php

$font_style=$_COOKIE["font_style"];
$font_size=$_COOKIE["font_size"];
$font_color=$_COOKIE["font_color"];
$bg_color=$_COOKIE["bg_color"];

echo("<html><body bgcolor=$bg_color>");
echo("<h1><font face=$font_style size=$font_size color=$font_color> Welcome </font> </h1>");
?>
