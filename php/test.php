<?php

$to = "7578512@students.uu.nl";
$msg = "First line of text\nSecond line of text";
$headers = "From: 7578512@students.uu.nl";

// Use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// Send email
if (mail($to, "My subject", $msg, $headers)) {
    echo "success";
} else {
    echo "fail";
}

?>