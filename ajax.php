<?php
$host = 'localhost'; //��� �����, �� ��������� ���������� ���localhost
$user = 'root'; //��� ������������, �� ��������� ��� root
$password = ''; //������, �� ��������� ������
$db_name = 'attendance'; //��� ���� ������
$hostname = "localhost";
$username = "root";
$pass = "";
$dbname = "attendance";
$table = "auth";
$field_login="login";
$field_password="password";
$val = $_POST['fn'];
$id = $_POST['fr'];
$num = $_POST['fp'];
$tab = $_POST['tp'];
$finr=$num.'A';
if(empty($val)){
$val=" ";
}
else if($val=='1'){
$val="+";
}
else if($val=='0'){
$val='-';
}
$link = mysqli_connect($hostname, $username, $pass, $dbname) or die(mysqli_error($link));
mysqli_select_db($link, $dbname) or die (mysqli_error($link)); 
mysqli_query($link, "UPDATE $tab SET $finr=('$val') WHERE id=$id") or die(mysqli_error($link)); 
?>