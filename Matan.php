<?php
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");
?>
<table> <tr > <th>№</th><th width="100%">Ф.И.О. </th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th> <th data-tooltip=«дата»>🗓</th><th data-tooltip=«дата»>🗓</th>
<?php $query = "SELECT * FROM matanaliz WHERE id > 0"; 
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$a=1;
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); $result = ''; foreach ($data as $elem) { 
$result .= '<tr>'; 
$result .= '<td id="trig">' . $elem['id'] . '</td>';
$result .= '<td id="trig">' . $elem['name'] . '</td>';
for ($x=1; $x<37; $x++){
 $result .= '<td id="matanaliz">' . $elem[$x.'A'] . '</td>'; 
 }
} 
echo $result; ?>
</table>