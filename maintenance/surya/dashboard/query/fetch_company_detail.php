<?php 

include '../include/connection.php';

$checkCompany = "SELECT * FROM company_detail";
$resultCompany = mysqli_query($conn, $checkCompany);

$row = $resultCompany -> fetch_assoc();

$company_name = $row['name'];
$street = $row['street'];
$city_name = $row['city']; 
$state_name = $row['state'];
$country_name = $row['country'];
$zip_code = $row['zip_code'];
$cpan = $row['cpan'];

?>