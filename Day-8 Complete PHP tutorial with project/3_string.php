<?php
  //string functions
  //strlen();

  $language="Hypertext Preprocessor";
  $len = strlen($language);
  echo $len;

  //string word counting
  $language="Hypertext Preprocessor";
  $len = str_word_count($language);
  echo $len;

  //string reverse
  $language="Hypertext Preprocessor";
  $reverse = strrev($language);
  echo $reverse;
?>