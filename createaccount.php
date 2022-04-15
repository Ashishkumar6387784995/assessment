

<?php

$Name= $_REQUEST["Name"];
$Add= $_REQUEST["Add"];
$State= $_REQUEST["State"];
$City= $_REQUEST["City"];
$Pincode= $_REQUEST["Pincode"];
$mobile= $_REQUEST["mobile"];
$Id= $_REQUEST["Id"];
$IdNumber= $_REQUEST["IdNumber"];



$msg="";

$con=mysqli_connect("localhost","root","","WFD") or die (" Error in connection ");
$q=mysqli_query($con, " INSERT INTO `donation` (`Name`, `Address`, `State`, `City`, `PinCode`, `Mobile`, `ID`, `IdNumber`)
 VALUES  ('$Name', '$Add', '$State', '$City', '$Pincode', '$mobile', '$Id',  '$IdNumber' )");

if($q==true)
 {
     $msg= " Account has been created succesfully! ";
 }
 else
 {
     $msg= " error while creating account";
 }
 echo  $msg;
?>
