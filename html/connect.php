<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $Id=$_POST['Id'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $travelfrom=$_POST['travelfrom'];
    $travelto=$_POST['travelto'];
    $traveldate=$_POST['traveldate'];
    $traveltime=$_POST['traveltime'];

$con=new mysqli('localhost','root','','bookiing');
if($con){
  // echo"connection successfull";
$sql="insert into 'njogu'(Id,name,mobile,travelfrom,travelto,traveldate,traveltime)values('$Id','$name','$mobile','$travelfrom','$travelto','$traveldate','$traveltime')";
$result=mysqli_query($con,$sql);

if($result){
    echo"booking succesful";
}else{
    die(mysqli_error($con));

}


}
else{
    die(mysqli_error($con));
}
}
?>