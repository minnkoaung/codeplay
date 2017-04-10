<?php
//This is sample code to get the century of input Years.
function centuryFromYear($year) {
  $divsum = $year / 100;
  echo "This is the divided value of input number= " . $divsum . " <br/>";

  //floor = Returns the next lowest integer value (as float) by rounding down value if necessary.
  $lowsum = floor($divsum);
  echo "This is the lowest integer value of input number= " . $lowsum . "<br/>";

  //ceil() = Returns the next highest integer value by rounding up value if necessary.
  $highsum = ceil($divsum);
   echo "This is the higest integer value of input number= " . $highsum . "<br/>";

  if($divsum <=$lowsum){
    return $lowsum;
  }else{
    return $highsum;
  }
}
echo centuryFromYear(1920);
?>