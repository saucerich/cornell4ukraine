<h3> Countdown! </h3>

<?php $date = strtotime("October 1, 2022 12:00 PM");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
echo "Next festival in $days_remaining days and $hours_remaining hours"?>
