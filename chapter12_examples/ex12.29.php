<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
    $text = fgets($fh);
    if(preg_match("/^[A-Z][a-z]*\s[A-Z][a-zA-Z]*\s/",$text)){
       echo "$text";
    }
  }

?>
