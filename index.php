<?php
$voting_age = 18;
$pvc = TRUE;
$ward = 002;

if ($voting_age > 18 && $pvc && $ward) {

     echo ("Voter eligible to vote");

}

elseif($voting_age > 18 && $pvc ) {

    echo ("Voter not eligible Look for your ward");
}

elseif($voting_age > 18 && $ward ) {

echo ("Voter not eligible dont have pvc");
}

else {

  echo ("Voter not eligible below voting age");

 }

?>