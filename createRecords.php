<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","","deo");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 100; $i++){   
$sql = "INSERT INTO deo.person(lname, fname, address, logdt) values('".$faker->lastName."','".$faker->firstName."', '".$faker->address."', '".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."')";     

mysqli_query($conn, $sql);}

?>