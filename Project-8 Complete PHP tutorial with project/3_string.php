<?php
  //string functions
  //strlen();

  $language="Hypertext Preprocessor";
  $len = strlen($language);
  echo $len;
  echo "<br>";

  //string word counting
  $language="Hypertext Preprocessor";
  $len = str_word_count($language);
  echo $len;
  echo "<br>";

  //string reverse
  $language="Hypertext Preprocessor";
  $reverse = strrev($language);
  echo $reverse;
  echo "<br>";

  //strpos
  $language="Hypertext Preprocessor";
  $len = strpos($language,"Preprocessor");
  echo $len;
  echo "<br>";

?>