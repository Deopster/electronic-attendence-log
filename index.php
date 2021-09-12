<?php
include "connect.php";
session_start();
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");
function tabl($table){
	$query = "SELECT * FROM $table WHERE id > 0";
	$result = mysqli_query($GLOBALS['link'], $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
	$result .= '<tr>'; 
	$result .= '<td id="trig">' . $elem['id'] . '</td>';
	$result .= '<td id="trig">' . $elem['name'] . '</td>';
	for ($x=1; $x<37; $x++){
	 $result .= '<td id=$table>' . $elem[$x.'A'] . '</td>'; 
 }
} 
echo $result; 
}
?>
<!DOCTYPE html>
<head>
<html lang="en" class="no-js">
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IKBO-12-19</title>
	<link rel="stylesheet" type="text/css" href="css/dopblock.css" />
	<link rel="stylesheet" type="text/css" href="css/mainblock.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/tables.css" />
	<link rel="stylesheet" type="text/css" href="css/reg.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<!--костыль-->
	<script src="js/kost.js"></script>
	<!--каледарная подсказка-->
	<script src="js/showme.js"></script>
	<!--онлайн редакция  -->
	<script src="js/editthis.js"></script>
	</head>

<body >
	<div id="st-container" class="st-container">
		<!--ВЫдвижная панель-->
		<nav class="st-menu st-effect-11" id="menu-11">
			<a href="./index.html"><img src="img/fin.png"  width="280" alt="Logo"></a>
			<!--кнопка выдвижной панели-->
			<div id="st-trigger-effects" class="news">
				<button data-effect="st-effect-11">
				</button>
			</div>
			<div id="st-menu" class="news1">
				<button st-menu="close">
				</button>
			</div>
			

			<ul id "menu">
				<li><a href="#AOSMD"onClick="change(1)">Архитектура оперционных систем мобильных устройств</a></li>
				<li><a href="#Matan"onClick="change(2)">Математический анализ</a></li>
				<li><a href="#Konf"onClick="change(3)">Конфигурационное управление</a></li>
				<li><a href="#CalcMat"onClick="change(4)">Вычислительная математика</a></li>
				<li><a href="#filosof"onClick="change(5)">Философия</a></li>
				<li><a href="#ACM&S"onClick="change(6)">Архитектура вычислительных машин и систем</a></li>
				<li><a href="#SIAOD"onClick="change(7)">Структуры и алгоритмы обработки данных</a></li>
				<li><a href="#Eng"onClick="change(8)">Иностранный язык</a></li>
				<li><a href="#Java"onClick="change(9)">Программирование на яп Java</a></li>
			</ul>
			<div class="">
			</div>
		</nav>
		
		<div class="st-pusher">
			<div class="st-content">
				<!--эффект форточки-->
				<div class="st-content-inner">
					<!--тута основная часть-->
					    <!---вызов сиаод-->
						<div class="table-block1"id="AOSMD" >
						<div class="intable-block"align="center"><h3 >Архитектура операционных систем мобильных устройств</h3></div>
						<table > <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
						<?php
						echo tabl("aosmd");			
						?>
						</table>
						</div>
				
						<!---вызов матана-->
						<div class="table-block"id="Matan" >
						<div class="intable-block"align="center"><h3 >Математический анализ</h3></div>
						<table > <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
						<?php
						echo tabl("matanaliz");			
						?>
						</table>
						</div>
						<!---вызов конфигурационки-->
						<div class="table-block"id="Konf">
						<div class="intable-block"align="center"><h3 >Конфигурационное управление</h3></div>
					    <table > <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
						<?php
						echo tabl("konf");			
						?>
						</table>
						</div>
						<!---вызов выч матана-->
						<div class="table-block"id="CalcMat">
						<div class="intable-block"align="center"><h3 >Вычислительная математика</h3></div>
						<table > <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
						<?php
						echo tabl("calcmat");			
						?>
						</table>
						</div>
						 <!---вызов философия-->
						<div class="table-block"id="filosof">
						<div class="intable-block"align="center"><h3 >Философия</h3></div>
						<table > <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
						<?php
						echo tabl("filosof");			
						?>
						</table>
						</div>
					     <!---вызов Архитектуры вычислительных машин и систем-->
						<div class="table-block"id="ACM&S">
						<div class="intable-block"align="center"><h3 >Архитектура вычислительных машин и систем</h3></div>
						<table > <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
						<?php
						echo tabl("acmas");			
						?>
						</table>
						</div>
						 <!---вызов СИАОД-->
						<div class="table-block"id="SIAOD">
						<div class="intable-block"align="center"><h3 >Структуры и алгоритмы обработки данных</h3></div>
						<table > <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
						<?php
						echo tabl("siaod");			
						?>
						</table>
						</div>
						 <!---вызов Инглиша-->
						<div class="table-block"id="Eng">
						<div class="intable-block"align="center"><h3 >Иностранный язык</h3></div>
						<table > <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
						<?php
						echo tabl("eng");			
						?>
						</div>
						 <!---вызов Java-->
						<div class="table-block"id="Java">
						<div class="intable-block"align="center"><h3 >Программирование на яп Java</h3></div>
						<table > <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
						<?php
						echo tabl("javalang");			
						?>
						</div>
					     <!--доп блок-->
					    <div class="dop-block">
						<div class="reg-block">
						<div class="inreg-block"align="center"><h3 >Авторизация</h3></div>
						
						<!--пошла жара-->
						<?php
						require_once("reg.php");
						?>	
						<!--финишная прямая-->
						</div>
						<div class="about-block"> <h2>Сайт создан Ефимовым Андреем в качестве курсовой работы.<h2>
						<div class="inblock"align="center"><h3 >©2020</h3></div>
						</div>
						</div>
						  <!--доп блок конец-->
						<button data-effect="st-effect-11">
						</button>
						
				</div>
			</div>
		</div>
	<script src="js/classie.js"></script>
	<script src="js/sidebarEffects.js"></script>

	<!--библиотеки-->

</body>
</html>