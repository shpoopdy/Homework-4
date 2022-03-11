<?p
  $states = "California Georgia Indiana Louisiana Minnesota Texas Virginia";
  $statesArray1 = array();

  $regex = "/[nia]*/";
  if(preg_match($regex, $states, $statesArray1)) {
    echo "<p>$statesArray1[0]</p>";
  }
?>
