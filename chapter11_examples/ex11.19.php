<head><title>Is Readable?</title></head>
<body bgcolor="lightgreen">
<font face="verdana" size="+1">
<?php

  $filename="testing.txt";
  if( is_readable($filename)){
     echo "<em>$filename</em> is readable<br>";
  }
  else{
     echo "Can't read from <em>$filename.</em><br>";
     exit();
  }

?>
</body>
</font>
</html>
