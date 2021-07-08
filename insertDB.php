<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tasks';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// عند الضغط على زر حفظ سيتم حفظ مقياس محركات الذراع في الداتابيس  
@$a=$_POST['one'];
@$b=$_POST['two'];
@$c=$_POST['three'];
@$d=$_POST['four'];
@$e=$_POST['five'];
@$f=$_POST['six'];
if(@$_POST['submit'])  
{  
echo $s="insert into arm (m1,m2,m3,m4,m5,m6) values('$a','$b','$c','$d','$e','$f')";  
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con,$s);  
}
?>

<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tasks';
$con1 = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(@$_POST['run'])  // عند الضغط على زر التشغيل سيتم وضع قيمة 1 في الداتابيس بدلا من 0
{  
 $s1="update arm set run = '1' order by id desc limit 1";  

mysqli_query($con1,$s1);  
}

?>

<?php // لحفظ اتجاهات تحريك القاعدة في الداتابيس
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tasks';
$con1 = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(@$_POST['u'])  
{  
 $s1="INSERT INTO base1 (forward)
VALUES ('forward')";
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con1,$s1);  
}

?>

<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tasks';
$con1 = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(@$_POST['r']) 
{  
 $s1="INSERT INTO base1 (right1)
VALUES ('right')";
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con1,$s1);  
}

?>

<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tasks';
$con1 = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(@$_POST['l'])  
{  
 $s1="INSERT INTO base1 (left1)
VALUES ('left')";
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con1,$s1);  
}

?>

<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tasks';
$con1 = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(@$_POST['s'])  
{  
 $s1="INSERT INTO base1 (stop)
VALUES ('stop')";
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con1,$s1);  
}

?>

<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tasks';
$con1 = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(@$_POST['d']) 
{  
 $s1="INSERT INTO base1 (backward)
VALUES ('backward')";
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con1,$s1);  
}

?>