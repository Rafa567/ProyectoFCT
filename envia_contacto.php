echo <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-MX" lang="es-MX">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Ag666" />
    <meta name="keywords" content="" />
    <title>Gracias por contactarnos</title>
</head>
<body>
 
<p style="font:700 15px 'trebuchet MS';color:#333;text-align:center;">Gracias por escribirnos, muy pronto uno de nuestros representantes se pondrá en contacto con usted</p>
 
</body>
<?php
function MandaEmail($mailTo,$mailFrom,$mailSubject,$mailBody,$mailFormat) {
    if($mailFormat == 0) {
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    } else {
        $headers = "";
    }
 
    $headers .= "From: ". $mailFrom . "\r\n";
    $headers .= "Reply-To: " . $mailFrom . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
 
    mail($mailTo,$mailSubject,$mailBody,$headers);
}
;
    $mailTo = "alpecha@telefonica.net";// Dirección de Email a donde se enviara el correo
    $name = $_POST['Nombre'];
    $tel = $_POST['Telefono'];
    $mailFrom = $_POST['Email'];
    $mailSubject = "Información y precios";
 
$mailFormat = 0;
$mailBody = <<<EOT
<div style="width:380px; border:1px #999 solid; font-family:verdana; font-size:12px; color:#333; padding:10px;">
<h1 style="font-size:14px; font-family:comic sans;">Datos de Contacto</h1>
<strong>Nombre:</strong> $name\r\n <br />
<strong>Tel&eacute;fono:</strong> $tel\r\n <br />
<strong>Email:</strong> $mailFrom\r\n <br />
</div>
EOT;
    MandaEmail($mailTo,$mailFrom,$mailSubject,$mailBody,$mailFormat);
?>
<?php
</html>
EOT;
?>