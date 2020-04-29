<?php
include 'config.php';

if(isset($_POST['add'])){
//$tracknum=$_POST['tracknum'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$position=$_POST['position'];
$facility=$_POST['facility'];
$demandcode=$_POST['demandcode'];
$demandnum=$_POST['demandnum'];
$catnum=$_POST['catnum'];
$orderqty=$_POST['orderqty'];
$photo=$_FILES['photo']['name'];
$upload="uploads/".$photo;

$query="INSERT INTO requisitions(name,surname,position,facility,demandnum,demandcode,catnum,orderqty,photo)VALUES(?,?,?,?,?,?,?,?,?,)";
$stmt=$conn->prepare($query);
$stmt->bind_param("ssssssssss",$name,$surname,$position,$facility,$demandcode,$demandnum,$catnum,$orderqty,$upload);
$stmt->execute();
move_uploaded_file($_FILES['photo']['tmp_name'], $uploads);
header('location:requisitions.php');
}
?>