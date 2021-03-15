<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Выход...</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />

</head>
<body style="background-color:#000000">
<script type='text/javascript'>
var date = new Date;
date.setDate( date.getDate() - 30 );
document.cookie='admin=; expires='+date.toUTCString();
document.cookie='code=; expires='+date.toUTCString();
var relogin=confirm("Вы успешно вышли из предыдущей учетной записи. Войдете в другую?");
if (relogin==true) {
<!--
window.location='../admin/'
//-->
}
else {
<!--
window.location='/'
//-->
};
</script>


</body>
</html> <?php } ?>