<?php if (!isset($_SESSION)) session_start();

if(!$_POST) exit();

$verify  = trim($_POST['verify']);
$verify  = md5($verify);
$session = $_SESSION['jigowatt']['html5-contact-form']['verify'];

if($session != $verify) exit();

echo 'success';
exit();
