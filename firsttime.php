<?php

//Setting up connection
$servername="localhost";
$username ="root";
$password = "";

$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}else{
    echo "Conection was esatablished succesfully. <br>";
}

//Creating database bank
$sql= "CREATE DATABASE Bank";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create database. <br>";
}else{
    echo "DATABASE Created Successfully.<br>";
}

//Creating table customers
 $sql = "CREATE TABLE `bank`.`customers` ( `Cust_ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(20) NOT NULL , `Amount` FLOAT(30) NOT NULL , PRIMARY KEY (`Cust_ID`)) ";

 $result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create table.<br>";
}else{
    echo "Customer Table Created Successfully.<br>";
}

//Adding 10 dummey data into table customers
$sql ="INSERT INTO `bank`.`customers` (`Cust_ID`, `Name`, `Email`, `Amount`) VALUES ('1', 'Karan', 'karan@yahoo.com', '9000.00'), ('2', 'ram', 'ram@orkut.com', '1000.00'), ('3', 'raju', 'raju@outlook.com', '7000.00'), ('4', 'albert', 'albert@gmail.com', '900.00'), ('5', 'siva', 'siva@rediff.com', '2000.00'), ('6', 'sundar', 'sundar@xyz.com', '5500.00'), ('7', 'pichai', 'pichai@abc.com', '15000.00'), ('8', 'rahit', 'rahit@123.com', '3800.00'), ('9', 'sharma', 'sharma@gmail.com', '50000.00'), ('10', 'karthi', 'karthi@def.com', '10000.00')";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to add entries to table. <br>";
}else{
    echo "Entries added to table Successfully.<br>";
}

//Creating transaction table customers
$sql = "CREATE TABLE `bank`.`transaction` ( `Tran_ID` INT NOT NULL AUTO_INCREMENT , `From` VARCHAR(11) NOT NULL , `To` VARCHAR(11) NOT NULL , `Amount` DECIMAL NOT NULL , PRIMARY KEY (`Tran_ID`))";

$result = mysqli_query($conn,$sql);

if(!$result){
   echo "Sorry we failed to create table.<br>";
}else{
   echo "Transaction Table Created Successfully.<br>";
}

?>