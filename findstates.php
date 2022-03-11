<?php
  $states = "California Georgia Indiana Louisiana Minnesota Texas Virginia";
  $statesArray1 = array();

  $regex = "/(.+)nia /i";
  $regex2 = "/(^G) (*a)/"
  if(preg_match($regex2, $states, $statesArray1)) {
    echo "<p>$statesArray1[0]</p>";
  }
?>
