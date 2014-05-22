<?php

  # /^([A-Z][a-z]+)\s([A-Z][a-zA-Z]+)\s(\d{3})/
  $regex =
  "/
  ^ # At the beginning of the line
  ( # start a new subpattern $1
  [A-Z] # Find an uppercase letter
  [A-Za-z] # find an upper or lower case letter
  * # match it zero or more times
  ) # close first subpattern
  \s # find a white space character
  ( # start another subpattern $2
  [A-Z] # match an uppercase letter
  [a-zA-Z] # match an upper or lowercase letter
  + # match for one or more of them
  ) # close the subpattern
  \s # match a whitespace character
  ( # start subpattern $3
  \d # match a digit
  {3} # match it three times
  ) # close the subpattern
  $ # end of line
 /x";

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
     $text = fgets($fh);
     $new_text=preg_replace("$regex",'$2, $1 $3', $text);
     echo "$new_text";
  }

?>
