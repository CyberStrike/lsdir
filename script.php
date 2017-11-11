<?php
  $dir   = './sample';
  $files = scandir($dir);
  print_r($files);

  // Make Test Files
  // mkdir sample && cd sample
  // for i in {1..1000}; do touch ./sample/$i.txt; done
