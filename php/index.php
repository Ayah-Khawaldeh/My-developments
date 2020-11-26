<?php

$marks = 68; 
if ($marks == 100) {
  echo 'you have passed and got A+ grade';
}
elseif ($marks > 90) {
  echo 'you have passed and got A grade';
}
elseif ($marks > 80) {
    echo 'you have passed and got B grade';
  }
  elseif ($marks >70) {
    echo 'you have passed and got C grade';
  }
  elseif ($marks > 60) {
    echo 'you have passed and got D grade';
  
else {
  echo 'you have failed';
}

?>