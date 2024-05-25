<?php
// Set the time zone to your desired time zone
date_default_timezone_set('America/Halifax');

// Get the current date and time
$current_date = date('l, F jS');
$current_time = date('h:i A');

// Output the formatted time
echo "it's $current_date.<br> Our time is $current_time.";
?>