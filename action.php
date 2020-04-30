<?php
session_start()
include 'config.php';

if(isset($_POST['add'])){
//$tracknum=$_POST['tracknum'];
$name=$_POST['names'];
$surname=$_POST['surname'];
$position=$_POST['position'];
$facility=$_POST['facility'];
$demandcode=$_POST['demandcode'];
$demandnum=$_POST['demandnum'];
$catnum=$_POST['catnum'];
$orderqty=$_POST['orderqty'];
$photo=$_FILES['image']['name'];
$upload="uploads/".$photo;

$query="INSERT INTO requisitions(,names,surname,position,facility,demandnum,demandcode,catnum,orderqty,photo)VALUES(?,?,?,?,?,?,?,?,?,?,)";
$stmt=$conn->prepare($query);
$stmt->bind_param("ssssssssss",,$name,$surname,$position,$facility,$demandcode,$demandnum,$catnum,$orderqty,$upload);
$stmt->execute();
move_uploaded_file($_FILES['photo']['tmp_name'], $uploads);

header('location:requisitions.php');
$_SESSION['response']="successfully inserted to the database!";
$SESSION['res_type']= "success";
}
if(isset($_GET['delete'])){
$tracnum=?$_GET['delete'];
$query="DELETE FROM requisitions WHERE requisitions=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("i",$tracknum);
$stmt->execute();
    
header('location:requisitions.php');
$_SESSION['response']="successfully deleted!";
$SESSION['res_type']= "danger";

}
?>