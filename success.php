<?php

$name = $_POST["name"];
$organization = $_POST["organization"];
$code = $_POST["code"];
$reestr = $_POST["reestr"];
$resname = $_POST["resname"];
$phonenum = $_POST["phonenum"];
$eco = $_POST["eco"];
$noneco = $_POST["noneco"];
$munic = $_POST["munic"];
$qalaqi = $_POST["qalaqi"];
$sop = $_POST["sop"];
$qucha = $_POST["qucha"];
$fmunic = $_POST["fmunic"];
$fqalaqi = $_POST["fqalaqi"];
$fsop = $_POST["fsop"];
$fqucha = $_POST["fqucha"];

// var_dump($name, $organization, $code, $reestr, $resname, $phonenum, $eco, $noneco);


$host = "localhost";
$dbname = "identification_db";
$username = "root";
$password = "";




$conn = mysqli_connect($host,
                       $username,
                       $password,
                       $dbname);




if (mysqli_connect_errno()) {
    die("conection error: " . mysqli_connect_errno());
}



$sql = "INSERT INTO identification (name, organization, code, reestr, resname, phonenum, eco, noneco)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


$sql2 = "INSERT INTO addresss (munic, qalaqi, sop, qucha, fmunic, fqalaqi, fsop, fqucha)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);


// if ( ! mysqli_stmt_prepare($stmt, $sql)) {
//     die(mysqli_error($conn));
// }

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

if ( ! mysqli_stmt_prepare($stmt, $sql2)) {
    die(mysqli_error($conn));
}



mysqli_stmt_bind_param($stmt, "ssiissss",
                       $name,
                       $organization,
                       $code,
                       $reestr,
                       $resname,
                       $phonenum,
                       $eco,
                       $noneco);

mysqli_stmt_execute($stmt);


mysqli_stmt_bind_param($stmt, "ssssssss",
                       $munic,
                       $qalaqi,
                       $sop,
                       $qucha,
                       $fmunic,
                       $fqalaqi,
                       $fsop,
                       $fqucha);

mysqli_stmt_execute($stmt);

echo "record has been saved.";