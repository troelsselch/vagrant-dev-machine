<?php

print "<h1>Select project</h1>";

if ($handle = opendir('.')) {
  print "<ul>";
  while (FALSE !== ($entry = readdir($handle))) {
    if (is_dir($entry) && !in_array($entry, array('.', '..'))) {
      print "<li><a href=\"$entry\">$entry</a></li>";
    }
  }
  print "</ul>";
  closedir($handle);
}
