<html><head><title>Appending</title></head>
<body bgcolor="lightgreen">
<font face="verdana" size="+1">
<?php

  $name="John Doe";
  $address="1001 Logic Dr.";
  $email="johndoe@place.gov";
  $title="VP";
  $outputstring="$name\t$address\t$email\t$title\n";
  $filename="testing.txt";
  if( is_writable($filename)){
     $filehandle=fopen($filename, "wb");
     fwrite($filehandle, $outputstring, strlen($outputstring));
  }
  else{
     echo "Can't write to <em>$filename.</em><br>";
     exit();
  }
  fclose($filehandle);

?>
</font>
</body>
</html>
