<?php
session_start();
?>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (isset($_GET["is_exit"])) { 
    if ($_GET["is_exit"] == 1) {
        $_SESSION = array(); 
        session_destroy(); 
    }
}

//это начало проверки на auth
if(empty($_SESSION['is_auth'])){;
?>
     <script>
	function style(){
	(document.getElementById("inv").style.display = "none");
	(document.getElementById("loginy").style.display = "none");
    (document.getElementById("reg").style.display = "none");
	(document.getElementById("log").style.display = "none");
	(document.getElementById("pas1").style.display = "none");
	(document.getElementById("pas").style.display = "none");
	(document.getElementById("mu").style.display = "none");
	}
	</script>
<?php

$link = mysqli_connect($hostname, $username, $pass, $dbname) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");
mysqli_select_db($link, $dbname) or die (mysqli_error($link)); 

$query = "SELECT password FROM auth WHERE login>=1";
$result = mysqli_query ($link , $query);
$a=1;
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
 $fin[$a] =  $elem['password'] ; 
 $a=$a+1;
} 
?>
<body onLoad="style()">
<form  method="GET" > 
<select onchange="f()" type = "login" name="login" id="he" width="15vw" position="center" class="bl">
                        <option hidden value="0">Выбрать пользователя</option>
						<optgroup label="Свои данные">
						<option value="66">Вход</option>
						<option value="67">Регистрация</option>
					    </optgroup>
						<optgroup label="Пользователь из Б/Д">
						<option value="1">Аглямов Аскар</option>
						<option value="2">Акимов Алексей</option>
						<option value="3">Баннов Максим</option>
						<option value="4">Баракатзода Абубакр</option>
						<option value="5">Вахненко Федор</option>
						<option value="6">Винников Виталий</option>
						<option value="7">Дерягин Алексей</option>
						<option value="8">Ефимов Андрей</option>
						<option value="9">Закарян Вараздат</option>
						<option value="10">Ильин Денис</option>
						<option value="11">Каюмов Тимур</option>
						<option value="12">Кириллов Кирилл</option>
						<option value="13">Кочетков Андрей</option>
						<option value="14">Курбатов Георгий</option>
						<option value="15">Малик Михаил</option>
						<option value="16">Марков Николай</option>
						<option value="17">Надеев Иван</option>
						<option value="18">Новичков Дмитрий </option>
						<option value="19">Павлов Савелий</option>
						<option value="20">Першин Егор</option>
						<option value="21">Петренко Антон</option>
						<option value="22">Сиденко Елизавета</option>
						<option value="23">Стеблецкий Артём</option>
						<option value="24">Степанов Дмитрий</option>
						<option value="25">Тен Артём</option>
						<option value="26">Хуссейн Ильяс</option>
						<option value="27">Шахазад Фатин</option>
						<option value="28">Шелли Амир</option>
						<option value="29">Шошин Родион</option>
						<option value="30">Ясенко Дмитрий</option>
						<option value="31">Яфизов Ринат</option>
						</optgroup>
						</select>
<script>
function f(){
var result =0;
var a=document.getElementById('he').value;
if(a==1)
	result = '<?php echo $fin[1];?>';
if(a==2)
	result = '<?php echo $fin[2];?>';
if(a==3)
	result = '<?php echo $fin[3];?>';
if(a==4)
	result = '<?php echo $fin[4];?>';
if(a==5)
	result = '<?php echo $fin[5];?>';
if(a==6)
	result = '<?php echo $fin[6];?>';
if(a==7)
	result = '<?php echo $fin[7];?>';
if(a==8)
	result = '<?php echo $fin[8];?>';
if(a==9)
	result = '<?php echo $fin[9];?>';
if(a==10)
	result = '<?php echo $fin[10];?>';
if(a==11)
	result = '<?php echo $fin[11];?>';
if(a==12)
	result = '<?php echo $fin[12];?>';
if(a==13)
	result = '<?php echo $fin[13];?>';
if(a==14)
	result = '<?php echo $fin[14];?>';
if(a==15)
	result = '<?php echo $fin[15];?>';
if(a==16)
	result = '<?php echo $fin[16];?>';
if(a==17)
	result = '<?php echo $fin[17];?>';
if(a==18)
	result = '<?php echo $fin[18];?>';
if(a==19)
	result = '<?php echo $fin[19];?>';
if(a==20)
	result = '<?php echo $fin[20];?>';
if(a==21)
	result = '<?php echo $fin[21];?>';
if(a==22)
	result = '<?php echo $fin[22];?>';
if(a==23)
	result = '<?php echo $fin[23];?>';
if(a==24)
	result = '<?php echo $fin[24];?>';
if(a==25)
	result = '<?php echo $fin[25];?>';
if(a==26)
	result = '<?php echo $fin[26];?>';
if(a==27)
	result = '<?php echo $fin[27];?>';
if(a==28)
	result = '<?php echo $fin[28];?>';
if(a==29)
	result = '<?php echo $fin[29];?>';
if(a==30)
	result = '<?php echo $fin[30];?>';
if(a==31)
	result = '<?php echo $fin[31];?>';
if(a==66)
	result = 4;
if(a==67)
	result = 5;
if((result!=4)&&(result!=5)){
if(result==0){
(document.getElementById("loginy").style.display = "none");
(document.getElementById("reg").style.display = "none");
(document.getElementById("log").style.display = "none");
(document.getElementById("pas1").style.display = "none");
(document.getElementById("pas").style.display = "none");
(document.getElementById("mu").style.display = "none");
}
if(result==1){
(document.getElementById("loginy").style.display = "none");
(document.getElementById("log").style.display = "none");
(document.getElementById("reg").style.display = "inline-block");
(document.getElementById("pas1").style.display = "inline-block");
(document.getElementById("pas").style.display = "inline-block");
(document.getElementById("mu").style.display = "none");
}
if((result!=1)&&(result!=0)) {
(document.getElementById("loginy").style.display = "none");
(document.getElementById("reg").style.display = "none");
(document.getElementById("log").style.display = "inline-block");
(document.getElementById("pas1").style.display = "none");
(document.getElementById("pas").style.display = "inline-block");
(document.getElementById("mu").style.display = "none");
}
}
else{
if(result==4){
(document.getElementById("loginy").style.display = "inline-block");
(document.getElementById("reg").style.display = "none");
(document.getElementById("log").style.display = "inline-block");
(document.getElementById("pas1").style.display = "none");
(document.getElementById("pas").style.display = "inline-block");
 document.getElementById('inv').value = result;
}
if(result==5){
(document.getElementById("loginy").style.display = "inline-block");
(document.getElementById("reg").style.display = "inline-block");
(document.getElementById("log").style.display = "none");
(document.getElementById("pas1").style.display = "inline-block");
(document.getElementById("pas").style.display = "inline-block");
 document.getElementById('inv').value = result;
}
}
}
</script>
<input type="text" id="inv"  name = "inv"  maxlength = "15" value=''>
<input type="text" id="loginy"  name = "loginy" size = "34%" maxlength = "15" placeholder="Логин">
<input type="password" id="pas1"  name = "passwordt" size = "34%" maxlength = "15" placeholder="Пароль">
<input type="password" id="pas"  name = "password" size = "25" maxlength = "15"  placeholder="Повтор пароля">
<div class="but">
<input id="reg" class="buti" type="submit"  name="Reg" value="зарегистрироваться" display="none"> 
<input id="log" class="buti" type="submit"  name="log"  value="Войти" display="none"> 
<div class="empt"></div>
</div>
</form>


<?php
if (isset($_GET['login'])) { $login = $_GET['login']; if ($login == '') { unset($login);} }
if (isset($_GET['inv'])) { $tryt = $_GET['inv']; if ($tryt == '') { $tryt = 'ThisIsImposibleToDothisByRand';} }
if (isset($_GET['loginy'])) {
if($tryt != 'ThisIsImposibleToDothisByRand')
$login = $_GET['loginy']; 
if ($login == '') { unset($login);} }
if(isset($_GET['passwordt'])) { $password1=$_GET['passwordt']; if ($password1 =='') { unset($password1);} }

if (isset($_GET['Reg'])){ 
$ch=false;
 $password = $_GET['password'];
  if (isset($_GET['passwordt'])){
  $password1 = $_GET['passwordt'];
  }
  $ch=false;
 if (empty($login) or empty($password)) {
    echo"Введите пароль для авторизации"; 
	$ch=true;
	}
	if($ch==false)
if (empty($password) or empty($password1) ){
    echo"введите пароль дважды"; 
	$ch=true;
	}

	if($ch==false)
 if(strlen($password) > 18 or strlen($password) <4){
    echo "Пароль должен содеражить от 4 до 18 символов"; 
	$ch=true;
	}
	if($ch==false)
if(strlen($password1) > 18 or strlen($password) <4){
    echo "Пароль должен содеражить от 4 до 18 символов"; 
	$ch=true;
	}
 $password = htmlspecialchars($password);
 $password1 = htmlspecialchars($password1);
if($ch==false)
if($password != $password1){
    echo "Пароли не совпадают"; 
	$ch=true;
}
else{
if($ch==false){
if($tryt == 'ThisIsImposibleToDothisByRand'){
mysqli_query($link, "UPDATE auth SET password=('$password') WHERE login=$login") or die(mysqli_error($link)); 
echo "<script>alert(\"Отлично,пароль сохранён.\",$password);</script>"; 
}
else {
mysqli_query($link, "INSERT INTO auth SET login='$login', password='$password', level='0'") or die(mysqli_error($link)); 
echo "<script>alert(\"Регистрация прошла успешно.\",$password);</script>"; 
}
 echo "<script>window.location.href='./index.php'</script>";
}
}
if($ch==true){
	echo "(Нет) ";
}
}



if (isset($_GET['log'])){ 
$ch=false;
$password = $_GET['password'];
$query = "SELECT password FROM auth WHERE login='$login'";
echo $login." ";
$result = mysqli_query ($link , $query);
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
 $try =  $elem['password'] ; 
} 
$query = "SELECT level FROM auth WHERE login='$login'";
$result = mysqli_query ($link , $query);
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
 $level =  $elem['level'] ; 
} 
if(empty($try)){
 echo "<script>alert(\"Не найдено пользователя с заданным логином.\");</script>"; 
 echo "<script>window.location.href='./index.php'</script>";
}
if($try != $password){
echo "Неверный пароль";
$ch=true;
}
if($ch==false){
  $_SESSION['user_id'] = "some id";
 $_SESSION["is_auth"] = "yep"; //Делаем пользователя авторизованным
 $_SESSION["login"] = $login; //Записываем в сессию логин пользователя
 $_SESSION["level"] = $level; //Записываем в сессию логин пользователя
 echo "<script>alert(\"авторизация выполнена успешно.\");</script>"; 
 echo "<script>window.location.href='./index.php'</script>";
}
}
} 
//если не аторизован
else {
     $user= $_SESSION["login"];
	 $dostup=$_SESSION["level"];
	?>
	<div class="lkblock">
	<input disabled id="usname" class="infoout" value="Вы авторизованы."></input>
	<div class="uppart">
	<div class="progress">
    <progress id="prog" max="5" value="0"></progress>
   <input disabled id="allvl" class="progress-value" value="Уровень доступа: 0"></input>
   <div class="progress-bar"></div>
   <a class="bt1" href=index.php?is_exit=1> Выйти</a> 
	</div>
	<img class="profilepc" src="./img/profile.jpg" alt="Логотип" >
    </div>
	<div class="downpart">
	<?php
	$query = "SELECT name FROM matanaliz WHERE id='$user'"; 
	$result = mysqli_query ($link , $query);
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
    $kiberbulling =  $elem['name'] ; 
   } 
   if(empty($kiberbulling)){
	?>
	<input disabled class="infoout" value="Вы не являетесь студентом"></input>
	<?php
   }
   else {
   ?>
	<input disabled class="infoout" id="aosmde" value="N/A"></input>
	<input disabled class="infoout" id="ma" value="N/A"></input>
	<input disabled class="infoout" id="konfigaru" value="N/A"></input>
	<input disabled class="infoout" id="vach" value="N/A"></input>
	<input disabled class="infoout" id="filosofa" value="N/A"></input>
	<input disabled class="infoout" id="arvmsisi" value="N/A"></input>
	<input disabled class="infoout" id="siaod1" value="N/A"></input>
	<input disabled class="infoout" id="engiz" value="N/A"></input>
	<input disabled class="infoout" id="javaprog" value="N/A"></input>
	</div>
	<div class="statpart">
	<input disabled class="infoout" id="visitstat" textAlign="center"  value="Ваша посещаемость: N/A"></input>
	</div>
   <?php
	//начало вывода статистики
	//матан
	$matanB=0;
	$matanS=0;
	$query = "SELECT * FROM matanaliz WHERE id='$user'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	for ($x=1; $x<37; $x++){
	if($elem[$x.'A']=="+"){
	$matanB=$matanB+1;
	$matanS=$matanS+1;	
	}
	if($elem[$x.'A']=='-')
	$matanS=$matanS+1;	
	}
	} 
	$matanO=($matanB." / ".$matanS);
	//Архитектура О.С. Моб устройств.
	$arkB=0;
	$arkS=0;
	$query = "SELECT * FROM aosmd WHERE id='$user'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	for ($x=1; $x<37; $x++){
	if($elem[$x.'A']=='+'){
	$arkB=$arkB+1;
	$arkS=$arkS+1;	
	}
	if($elem[$x.'A']=='-')
	$arkS=$arkS+1;	
	}
	} 
	$arkO=($arkB." / ".$arkS);
	//Конфигурационное управление .
	$konfB=0;
	$konfS=0;
	$query = "SELECT * FROM konf WHERE id='$user'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	for ($x=1; $x<37; $x++){
	if($elem[$x.'A']=='+'){
	$konfB=$konfB+1;
	$konfS=$konfS+1;	
	}
	if($elem[$x.'A']=='-')
	$konfS=$konfS+1;	
	}
	} 
	$konfO=($konfB." / ".$konfS);
	//Выч мат.
	$calcB=0;
	$calcS=0;
	$query = "SELECT * FROM calcmat WHERE id='$user'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	for ($x=1; $x<37; $x++){
	if($elem[$x.'A']=='+'){
	$calcB=$calcB+1;
	$calcS=$calcS+1;	
	}
	if($elem[$x.'A']=='-')
	$calcS=$calcS+1;	
	}
	} 
	$calcO=($calcB." / ".$calcS);

	//Философия.
	$filosB=0;
	$filosS=0;
	$query = "SELECT * FROM filosof WHERE id='$user'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	for ($x=1; $x<37; $x++){
	if($elem[$x.'A']=='+'){
	$filosB=$filosB+1;
	$filosS=$filosS+1;	
	}
	if($elem[$x.'A']=='-')
	$filosS=$filosS+1;	
	}
	} 
	$filosO=($filosB." / ".$filosS);


	//Архитектура вычислительных машин и систем.
	$archB=0;
	$archS=0;
	$query = "SELECT * FROM acmas WHERE id='$user'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	for ($x=1; $x<37; $x++){
	if($elem[$x.'A']=='+'){
	$archB=$archB+1;
	$archS=$archS+1;	
	}
	if($elem[$x.'A']=='-')
	$archS=$archS+1;	
	}
	} 
	$archO=($archB." / ".$archS);

	//Структуры и алгоритмы обработки данных.
	$siaodB=0;
	$siaodS=0;
	$query = "SELECT * FROM siaod WHERE id='$user'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	for ($x=1; $x<37; $x++){
	if($elem[$x.'A']=='+'){
	$siaodB=$siaodB+1;
	$siaodS=$siaodS+1;	
	}
	if($elem[$x.'A']=='-')
	$siaodS=$siaodS+1;	
	}
	} 
	$siaodO=($siaodB." / ".$siaodS);

	//иностранный язык .
	$engB=0;
	$engS=0;
	$query = "SELECT * FROM eng WHERE id='$user'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	for ($x=1; $x<37; $x++){
	if($elem[$x.'A']=='+'){
	$engB=$engB+1;
	$engS=$engS+1;	
	}
	if($elem[$x.'A']=='-')
	$engS=$engS+1;	
	}
	} 
	$engO=($engB." / ".$engS);

	//JAVA .
	$javaB=0;
	$javaS=0;
	$query = "SELECT * FROM javalang WHERE id='$user'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	for ($x=1; $x<37; $x++){
	if($elem[$x.'A']=='+'){
	$javaB=$javaB+1;
	$javaS=$javaS+1;	
	}
	if($elem[$x.'A']=='-')
	$javaS=$javaS+1;	
	}
	} 
	$javaO=($javaB." / ".$javaS);

	//процент посещаемости.
	$statsrez=(($javaB+$engB+$siaodB+$archB+$filosB+$calcB+$konfB+$arkB+$matanB)/($javaS+$engS+$siaodS+$archS+$filosS+$calcS+$konfS+$arkS+$matanS))*100; 
	$statsrez=floor($statsrez);
	//Конец .
	?>
	<script type="text/javascript">
	//тут начинаетс кусок для статы

	var mat = '<?php echo $arkO;?>';
	document.getElementById('aosmde').value = "Архитектура О.С. Моб устр: "+mat;

	var mat = '<?php echo $matanO;?>';
	document.getElementById('ma').value = "Математический анализ: "+mat;

	var mat = '<?php echo $konfO;?>';
	document.getElementById('konfigaru').value = "Конфигурационное упр.: "+mat;

	var mat = '<?php echo $calcO;?>';
	document.getElementById('vach').value = "Вычислительная математика: "+mat;

	var mat = '<?php echo $filosO;?>';
	document.getElementById('filosofa').value = "Философия: "+mat;

	var mat = '<?php echo $archO;?>';
	document.getElementById('arvmsisi').value = "Архитектура выч.машин: "+mat;

	var mat = '<?php echo $siaodO;?>';
	document.getElementById('siaod1').value = "Алгоритмы обработки данных: "+mat;

	var mat = '<?php echo $engO;?>';
	document.getElementById('engiz').value = "Иностранный язык: "+mat;

	var mat = '<?php echo $javaO;?>';
	document.getElementById('javaprog').value = "Программирование на JAVA: "+mat;

	var rezultat = '<?php echo $statsrez;?>';
	document.getElementById('visitstat').value = "Ваша посещаемость: "+rezultat+ "%";
	</script>
	</div>
	<?php
	}
}
?>


<script type="text/javascript">
var m = '<?php echo $dostup;?>';
var n = '<?php echo $user;?>';
 var i;
 var j;
 var tb;

$(function () {
document.querySelector('table').onclick = (event) => {
if (m != 5) {
	alert('У вас нет прав на редактирование.',m);
	}
}

//тут остальное
//val содержит то,что хранится в ячейке
    document.getElementById('prog').value = m;
	document.getElementById('allvl').value = "Уровень доступа: "+m;
	document.getElementById('usname').value = "Вы авторизованы: "+n;
	$('td').click(function (e) {
		if (m == 5)
		var t = e.target || e.srcElement;
		let cell = e.target;
	    if (cell.tagName.toLowerCase() != 'td')
		return;
	    i = cell.parentNode.rowIndex;
	    j = cell.cellIndex-1;
	    console.log(i, j);
		var elm_name = t.tagName.toLowerCase();
		var elm_name_class = t.id;
        tb=elm_name_class;
		if ((elm_name == 'input') || (elm_name_class == 'trig')) { return false; }
		var val = $(this).html()	
		var code = '<input type="char" onfocus="this.setSelectionRange(this.value.length,this.value.length);" textAlign="right" class="editthis" id="edit" value="' + val + '" />';
		
		$(this).empty().append(code);
		$('#edit').focus();
		$('#edit').blur(function () {
		var val = $(this).val();
		$(this).parent().empty().html(val);
		send(val);
		});
	});
});
</script>
<script>
function send(val){
    var rno = i;
	var rnu= j;
	//alert(i+" "+ j+ " "+tb+ " "+ val);
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {fn:val, fr:rno, fp:rnu ,tp:tb}
    }).done(function( result )
        {
            $("#msg").html( " Address of Roll no " +rno +" is "+result );
        });
}
</script>
