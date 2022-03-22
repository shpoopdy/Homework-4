<?php
  $states = "California Georgia Indiana Louisiana Minnesota Texas Virginia";
  $statesArray1 = array();

  $regex = "/\w*nia/";
  $regex2 = "/G\w*a/";
  $regex3 = "/^N|nia$/";

  preg_match($regex, $states, $matches);
  $statesArray1[] = $matches[0];

  echo "$statesArray1[0]";
  echo "<br>";

  preg_match($regex2, $states, $matches);
  $statesArray1[] = $matches[0];

  echo "<br>";
  echo "$statesArray1[1]";
  echo "<br>";

  $statesArray2 = $statesArray1;
  array_push(statesArray2, "West Virginia", "North Carolina", "South Carolina", "New York", "New Mexico", "New Jersey");

  echo "<br>";
  echo "The number of items in this array is: " . count(statesArray2);

  echo "<br>";
  echo "statesArray2 contents. <br>";
  for ($x = 0; $x < sizeof($statesArray2); $x++) {
    echo "$statesArray2[$x] <br>";
  }

  echo "<br>";

  foreach ($statesArray2 as $stateArray2) {
    if(preg_match($regex3, $stateArray2)) {
      $statesArrayNia[] = $stateArray2;
    }
  };

  for ($x = 0; $x < sizeof($statesArrayNia); $x++) {
    echo "$statesArrayNia[$x] <br>";
  }
?>
