<script type="text/JavaScript">
 
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
</script>
<style type="text/css">
  
  body {
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    background-image: url(img/index_r1_c1.jpg);
    background-repeat: repeat-x;
  }
  
</style>

<body onLoad="MM_preloadImages('img/index_r2_c5_f3.jpg','img/index_r2_c5_f2.jpg','img/index_r2_c5_f4.jpg','img/index_r2_c6_f3.jpg','img/index_r2_c6_f2.jpg','img/index_r2_c6_f4.jpg','img/index_r2_c7_f3.jpg','img/index_r2_c7_f2.jpg','img/index_r2_c7_f4.jpg','img/index_r2_c8_f3.jpg','img/index_r2_c8_f2.jpg','img/index_r2_c8_f4.jpg','img/index_r2_c9_f3.jpg','img/index_r2_c9_f2.jpg','img/index_r2_c9_f4.jpg','img/index_r2_c11_f3.jpg','img/index_r2_c11_f2.jpg','img/index_r2_c11_f4.jpg','img/index_r2_c12_f3.jpg','img/index_r2_c12_f2.jpg','img/index_r2_c12_f4.jpg','img/index_r2_c13_f3.jpg','img/index_r2_c13_f2.jpg','img/index_r2_c13_f4.jpg','img/index_r2_c15_f3.jpg','img/index_r2_c15_f2.jpg','img/index_r2_c15_f4.jpg')">
  <div align="center">
    <table width="80%" border="0">
      <tr>
        <td>
          <div align="center">
            <div id="FWTableContainer1752007515">
              <table border="0" cellpadding="0" cellspacing="0" width="80%%">
                <!-- fwtable fwsrc="index.png" fwbase="index.jpg" fwstyle="Dreamweaver" fwdocid = "1752007515" fwnested="0" -->
                <tr>
                  <td><img src="img/spacer.gif" width="36" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="20" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="100" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="100" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="100" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="100" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="54" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="46" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="100" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="100" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="41" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="59" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="100" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="22" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="36" height="1" border="0" alt="spacer" /></td>
                  <td><img src="img/spacer.gif" width="1" height="1" border="0" alt="spacer" /></td>
                </tr>
                <tr>
                  <td colspan="11" background="img/index_r1_c10.jpg"><a name="SUBIR" id="SUBIR"></a><img name="index_r1_c3" src="img/index_r1_c3.jpg" width="510" height="88" border="0" id="index_r1_c3" alt="1" /></td>
                  <td colspan="4"><img src="img/index_r1_c14.jpg" alt="1" name="index_r1_c14" width="217" height="88" border="0" usemap="#index_r1_c14MapMapMap" id="index_r1_c14" />
                    <map name="index_r1_c14MapMapMap" id="index_r1_c14MapMapMap">
                      <area shape="rect" coords="91,12,134,54" href="https://www.facebook.com/profile.php?id=100008533568674&amp;fref=ts" target="_blank" alt="Tenis Club &Eacute;cija" />
                    </map></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" background="img/index_r2_c3.jpg">&nbsp;</td>
                  <td><a href="index.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c5','img/index_r2_c5_f3.jpg',1);" onMouseOver="MM_nbGroup('over','index_r2_c5','img/index_r2_c5_f2.jpg','img/index_r2_c5_f4.jpg',1);" onMouseOut="MM_nbGroup('out');"><img name="index_r2_c5" src="img/index_r2_c5.jpg" width="100" height="51" border="0" id="index_r2_c5" alt="inicio" /></a></td>
                  <td><a href="bienvenida.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c6','img/index_r2_c6_f3.jpg',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0312205212_0', 'MMMenu0312205212_0',0,50,'index_r2_c6');MM_nbGroup('over','index_r2_c6','img/index_r2_c6_f2.jpg','img/index_r2_c6_f4.jpg',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(1000);"><img name="index_r2_c6" src="img/index_r2_c6.jpg" width="100" height="51" border="0" id="index_r2_c6" alt="El Club" /></a></td>
                  <td><a href="sala_infantil_juvenil.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c7','img/index_r2_c7_f3.jpg',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0312205212_1', 'MMMenu0312205212_1',0,50,'index_r2_c7');MM_nbGroup('over','index_r2_c7','img/index_r2_c7_f2.jpg','img/index_r2_c7_f4.jpg',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(1000);"><img name="index_r2_c7" src="img/index_r2_c7.jpg" width="100" height="51" border="0" id="index_r2_c7" alt="Instalaciones" /></a></td>
                  <td><a href="reserva_socios.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c8','img/index_r2_c8_f3.jpg',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0312205212_2', 'MMMenu0312205212_2',0,50,'index_r2_c8');MM_nbGroup('over','index_r2_c8','img/index_r2_c8_f2.jpg','img/index_r2_c8_f4.jpg',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(1000);"><img name="index_r2_c8" src="img/index_r2_c8.jpg" width="100" height="51" border="0" id="index_r2_c8" alt="Reservas" /></a></td>
                  <td colspan="2"><a href="ingreso.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c9','img/index_r2_c9_f3.jpg',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0312205212_3', 'MMMenu0312205212_3',0,50,'index_r2_c9');MM_nbGroup('over','index_r2_c9','img/index_r2_c9_f2.jpg','img/index_r2_c9_f4.jpg',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(1000);"><img name="index_r2_c9" src="img/index_r2_c9.jpg" width="100" height="51" border="0" id="index_r2_c9" alt="Solicitudes" /></a></td>
                 
                  <td><a href="galeria/galeria.html" target="_top" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','index_r2_c12','img/index_r2_c12_f2.jpg','img/index_r2_c12_f4.jpg',1);" onClick="MM_nbGroup('down','navbar1','index_r2_c12','img/index_r2_c12_f3.jpg',1);"><img name="index_r2_c12" src="img/index_r2_c12.jpg" width="100" height="51" border="0" id="index_r2_c12" alt="Galeria" /></a></td>
                  <td colspan="2"><a href="contacto.html" target="_top" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','index_r2_c13','img/index_r2_c13_f2.jpg','img/index_r2_c13_f4.jpg',1);" onClick="MM_nbGroup('down','navbar1','index_r2_c13','img/index_r2_c13_f3.jpg',1);"><img name="index_r2_c13" src="img/index_r2_c13_f3.jpg" width="100" height="51" border="0" id="index_r2_c13" alt="Contactos" /></a></td>
                  <td><a href="noticias.html" target="_top" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','index_r2_c15','img/index_r2_c15_f2.jpg','img/index_r2_c15_f4.jpg',1);" onClick="MM_nbGroup('down','navbar1','index_r2_c15','img/index_r2_c15_f3.jpg',1);"><img name="index_r2_c15" src="img/index_r2_c15.jpg" width="100" height="51" border="0" id="index_r2_c15" alt="Actualidad" /></a></td>
                  <td colspan="2"><img name="index_r2_c16" src="img/index_r2_c16.jpg" width="58" height="51" border="0" id="index_r2_c16" alt="1" /></td>
                  <td><img src="img/spacer.gif" width="1" height="51" border="0" alt="spacer" /></td>
                </tr>
                <tr>
                  <td rowspan="2" background="img/index_r4_c3.jpg">&nbsp;</td>
                  <td colspan="13" rowspan="2" align="center" valign="top">
                    <p>&nbsp;
                    </p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>
                      <?php
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
 
<p style="font:700 15px 'trebuchet MS';color:#333;text-align:center;">Su solicicitud ha sido enviados correctamente. 



Atenderemos su petici&oacute;n lo antes posible. </p>
 
</body>
</html>
EOT;
                      ?>
                      <?php
                      function MandaEmail($mailTo, $mailFrom, $mailSubject, $mailBody, $mailFormat)
                      {
                        if ($mailFormat == 0) {
                          $headers  = "MIME-Version: 1.0\r\n";
                          $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                        } else {
                          $headers = "";
                        }

                        $headers .= "From: " . $mailFrom . "\r\n";
                        $headers .= "Reply-To: " . $mailFrom . "\r\n";
                        $headers .= "X-Mailer: PHP/" . phpversion();

                        mail($mailTo, $mailSubject, $mailBody, $headers);
                      };
                      $mailTo = "rafaproyecto123@gmail.com"; // Direcci&#65533;n de Email a donde se enviara el correo

                      
                      $che8 = false;
                      $che9 = false;
                      $che10 = false;
                      $che11 = false;
                      $che12 = false;
                      $che13 = false;
                      $che14 = false;
                      $che15 = false;        

                      if (isset($_POST['primerplan2'])){
                        $che8 = true;
                      }
                      if (isset($_POST['bodeguita2'])){
                        $che9 = true;
                      }
                      if (isset($_POST['corredor2'])){
                        $che10 = true;
                      }
                      if (isset($_POST['jardines32'])){
                        $che11 = true;
                      }
                      if (isset($_POST['salontv2'])){
                        $che12 = true;
                      }                     
                      if (isset($_POST['sjuventud2'])){
                        $che13 = true;
                      }
                      if (isset($_POST['salonacto2'])){
                        $che14 = true;
                      }
                      if (isset($_POST['otras2'])){
                        $che15 = true;
                      }

                      $che7 = $_POST['primerplan2'];
                      $che8 = $_POST['bodeguita2'];
                      $che9 = $_POST['corredor2'];
                      $che10 = $_POST['jardines32'];
                      $che11 = $_POST['salontv2'];
                      $che12 = $_POST['sjuventud2'];
                      $che13 = $_POST['salonacto2'];
                      $che14 = $_POST['otras2'];

                      
                      $empresa = $_POST['empresa'];
                      $particular = $_POST['particular'];
                      $particularnom2 = $_POST['particularnom2'];

                      if (isset($_POST['particular'])){
                        $valor = 'particular';
                      }elseif (isset($_POST['particularnom2'])){
                        $valor = 'asociación';
                      }else{
                        $valor = 'No marcado';
                      }

                      $si = $_POST['SI2'];
                      $no = $_POST['NO2'];
                      
                      if (isset($_POST['SI2'])){
                        $valor2 = 'si';
                      }elseif (isset($_POST['NO2'])){
                        $valor2 = 'no';
                      }
                     


                      $nom1 = $_POST['nombre2'];
                      $dni = $_POST['nodni'];
                      $tel1 = $_POST['telefono2'];
                      $soc = $_POST['nsocio3'];
                      $kao = $_POST['particular'];
                      $kao1 = $_POST['particularnom'];
                      $kao2 = $_POST['empresa'];
                      $kao3 = $_POST['particularnom2'];
                      $cal = $_POST['calle3'];
                      $num = $_POST['numero3'];
                      $ciu = $_POST['ciudad3'];
                      $pro = $_POST['provincia3'];
                      $cif = $_POST['cif'];
                      $tel2 = $_POST['telefono3'];
                      $email = $_POST['Email3'];
                      $obser = $_POST['otrasobser2'];
                      $cele = $_POST['celebrar3'];
                      $diac = $_POST['diacelebrar2'];
                      $horae = $_POST['horaempie2'];
                      $dura = $_POST['duraccion2'];
                     
                      $dia = $_POST['dia222'];
                      $mes = $_POST['mes222'];
                      $ano = $_POST['ano22'];
                      $fir = $_POST['firma2'];
                      $obse = $_POST['obser2'];
                      $recinf = $_POST['recibirinf2'];
                      $rec = $_POST['aviso_legal2'];
                      $tel = $_POST['Tel&eacute;fono'];
                      $mail = $_POST['From Email'];
                      $inf = $_POST['radiobutton'];
                      $mailFrom = $_POST['Email'];
                      $mailSubject = "Contacto desde Web";

                      $mailFormat = 0;
                      $mailBody = <<<EOT
<div style="width:380px; border:1px #999 solid; font-family:verdana; font-size:12px; color:#333; padding:10px;">
<h1 style="font-size:14px; font-family:comic sans;">SOLICITUD DE CELEBRACIÓN DE SOCIO PARA NO SOCIO.</h1>


<strong>Nombre:</strong> $nom1\r\n <br />
<strong>dni nº:</strong> $dni\r\n <br />
<strong>Telefono:</strong> $tel1\r\n <br />
<strong>Socio:</strong> $soc\r\n <br />
<strong>Particular:</strong> $kao\r\n <br />
<strong>Nombre Particular:</strong> $kao1\r\n <br />
<strong>Empresa:</strong> $kao2\r\n <br />
<strong>Nombre Empresa:</strong> $kao3\r\n <br />
<strong>Calle:</strong> $cal\r\n <br />
<strong>numero:</strong> $num\r\n <br />
<strong>Ciudad:</strong> $ciu\r\n <br />
<strong>Provincia:</strong> $pro\r\n <br />
<strong>CIF:</strong> $cif\r\n <br />
<strong>Telefono:</strong> $tel2\r\n <br />
<strong>E mail:</strong> $email\r\n <br />
<strong>Primera Planta:</strong> $che\r\n <br />
<strong>Bodeguita:</strong> $che1\r\n <br />
<strong>Corredor:</strong> $che2\r\n <br />
<strong>Jardines:</strong> $che3\r\n <br />
<strong>Salon TV:</strong> $che4\r\n <br />
<strong>Salon Juventud:</strong> $che5\r\n <br />
<strong>Salon de Acto:</strong> $che6\r\n <br />
<strong>Otras:</strong> $che7\r\n <br />
<strong>Otras Observaciones:</strong> $obser\r\n <br />
<strong>Celebracion:</strong> $cele\r\n <br />
<strong>Dia de celebracion:</strong> $diac\r\n <br />
<strong>Hora celebracion:</strong> $horae\r\n <br />
<strong>Duracion:</strong> $dura\r\n <br />
<strong>Musica SI:</strong> $si\r\n <br />
<strong>Musica NO:</strong> $no\r\n <br />
<strong>Dia:</strong> $dia\r\n <br />
<strong>Mes:</strong> $mes\r\n <br />
<strong>Año:</strong> $ano\r\n <br />
<strong>Firmado:</strong> $fir\r\n <br />
<strong>Observaciones:</strong> $obse\r\n <br />
<strong>Recibir informacion:</strong> $recinf\r\n <br />
<strong>Aviso Legal:</strong> $rec\r\n <br />
<strong>Tel&eacute;fono:</strong> $tel\r\n <br />
<strong>Email:</strong> $mailFrom\r\n <br />
<strong>radiobutton:</strong> $inf\r\n <br />

</div>
EOT;
                      MandaEmail($mailTo, $mailFrom, $mailSubject, $mailBody, $mailFormat);
                      ?>
                    </p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                  </td>
                  <td rowspan="2" background="img/index_r4_c17.jpg">&nbsp;</td>
                  <td><img src="img/spacer.gif" width="1" height="69" border="0" alt="spacer" /></td>
                </tr>
                <tr>
                  <td><img src="img/spacer.gif" width="1" height="300" border="0" alt="spacer" /></td>
                </tr>
                <tr>
                  <td height="45" colspan="15" align="center" valign="top">
                    <div align="center"><img src="img/index_r5_c2.jpg" alt="1" width="1014" height="27" /></div>
                  </td>
                  <td><img src="img/spacer.gif" width="1" height="27" border="0" alt="spacer" /></td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>&nbsp;</th>
      </tr>
    </table>
  </div>