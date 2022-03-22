<?php
  $noun = array('boy', 'girl','cow', 'watermelon', 'Samsung Note', 'tree', 'tractor', 'iPhone', 'car', 'chicken', 'pen', 'chair', 'potato');
  $verb = array('kissed', 'fried', 'dropped', 'wrote with', 'called on', 'chopped', 'fed', 'sat on', 'skinned', 'exploded', 'drove', 'ruined');

  $nounSize = count($noun) - 1;
  $nounNumba = rand(0, $nounSize);
  $nounNumbaTwo = rand(0, $nounSize);
  $verbSize = count($verb) - 1;
  $verbNumba = rand(0, $verbSize);

  echo "The " . $noun[$nounNumba] . " " . $verb[$verbNumba] . " the " . $noun[$nounNumbaTwo] . ".";
?>
