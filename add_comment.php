<meta charset = "UTF-8">
<?php
//Этот блок кода нужен для корректной работы Ajax скрипта
sleep(1); 

// Преобразуем полученые данные в нужную кодировку 
while(list ($key, $val) = each ($_POST)){$_POST[$key] = iconv("UTF-8","CP1251", $_POST[$key]);}

$date_add = date('d.m.Y â H:i');

$nl = strlen($_POST['name']);
$ml = strlen($_POST['mail']);
$tl = strlen($_POST['text']);
$id_article = $_GET['id_article'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$text = $_POST['text'];
if($nl<0 or $nl>60 or $ml<0 or $ml>60 or $tl<0 or $tl>500 or $_POST['nr']!='nerobot')
{$validate = false;}

if($validate)
{

include("config.php");
mysql_query("insert into comments (id_article, name, mail, text, date_add, public) values ('{$id_article}', '{$name}', '{$mail}', '{$text}', '{$date_add}', '0')") or die ("Error! query - add_comment");
echo '<font color="green">Комментарий добавлен и ожидает проверки!</font>';
}
else
{
echo '<font color="red">Заполните правильно поля ввода!</font>';
}
?>