<?php

return $scr = array(
     "time" => "Asia/Jakarta",
     "salt" => "AB87@#5edV!3s)98s^7_9*6HNM%$))$%Has34bk98s*9)&S$@sdaaawO099"
 );
function sp($par){
     return addslashes(htmlspecialchars(trim(strtolower($_POST[$par]))));
 }
 
 function enk($par,$scr = array(
     "time" => "Asia/Jakarta",
     "salt" => "AB87@#5edV!3s)98s^7_9*6HNM%$))$%Has34bk98s*9)&S$@sdaaawO099"
 )){
	return sha1($scr["salt"].md5($par.sha1($scr["salt"].md5($par))));
 }
 
 function alert($kata,$hal){
	echo "<script language='javascript'>alert('".$kata."');document.location='".$hal."';</script>";
 }

