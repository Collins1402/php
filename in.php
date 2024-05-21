<?php
echo "this is my first php code";
print '<br>'; // using html break line

print "45644";

print 4 + 8;

print "8+6";

print '<br>';

print date ('d');
print '<br>';

print date('Y');

date_default_timezone_set("Africa/Nairobi");

print date('H:i:s:u');

// Create (Declare) a PHP Variable
$fname = "Callisto";
print $fname;

$yob = 2000; // declaration of an integer
print $yob;

print '<br>';//HTML break line tag

$current_year = date('Y'); //declaring the current year
print $current_year;

print '<br>';

//Using subtraction operator to find user's age
$age = $current_year - $yob;


print '<br>';

$user_dob = "$yob-05-24";
print $user_dob;

$birthday = new DateTime($user_dob);
$today = new DateTime('today');

$interval = $birthday->diff($today);

print '<br>';

print '<pre>';
print_r($interval);
print '</pre>';

print $fname . "is" . $interval->y . "years,".


print '<br>';

// The if/else statement
$adult_age = 18;

if($interval->y >=$adult_age){
    print $fname . "is an Adult"; //{} event in block will be executed if the condition is true
}
else{
    print $fname . "is NOT an Adult."; //{} event in block will be executed if the condition is false
}

print '<br>';

//Variable characteristics
$lname = "Gyavira";
echo "My last name is $lname";

print '<br>';


print '<br>';

$call["lname"] = "Gyavira";
print $call["lname"];

define('Lname', 'Gyavira');
print Lname;

?>
