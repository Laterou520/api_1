<?php
$arr=file('photos_1.txt');
$n=count($arr)-1;
for ($i=1;$i<=1;$i++){
$x=rand(0,$n);header("Location:".$arr[$x],"\n");}
?> 

//唯美图片接口