<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","jeweler") or die(mysqli_error($conn));

$name=$_POST['name']; 
$adm=$_POST['adm'];
$radio=$_POST['radio'];
$age=$_POST['age'];
$class=$_POST['class'];
echo $name;
echo $adm;
echo $radio;
echo $age;
echo $class;

$insert=mysqli_query($conn,"INSERT INTO jewel(name,adm,gender,age,class)
VALUES('".$name."','".$adm."','".$radio."','".$age."','".$class."')")
or die(mysqli_error($conn));

if($insert){
    echo "successful";
}else{
    echo "failed";
}


}

?>