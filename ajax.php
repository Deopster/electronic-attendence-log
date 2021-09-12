<?php
$host = 'localhost'; //имя хоста, на локальном компьютере этоlocalhost
$user = 'c926642o_1'; //имя пользователя, по умолчанию это root
$password = 'herosima'; //пароль, по умолчанию пустой
$db_name = 'c926642o_1'; //имя базы данных
$hostname = "localhost";
$username = "c926642o_1";
$pass = "herosima";
$dbname = "c926642o_1";
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