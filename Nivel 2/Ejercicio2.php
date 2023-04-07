<?php
function string_to_array($string) {
    return explode("\n", $string);
  }
  
  // Test
  $string = "1\n3\n5\n7\n9";
  print_r(string_to_array($string));
?>