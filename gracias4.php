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
                  <td>
                    <a href="index.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c5','img/index_r2_c5_f3.jpg',1);" onMouseOver="MM_nbGroup('over','index_r2_c5','img/index_r2_c5_f2.jpg','img/index_r2_c5_f4.jpg',1);" onMouseOut="MM_nbGroup('out');">
                      <img name="index_r2_c5" src="img/index_r2_c5.jpg" width="100" height="51" border="0" id="index_r2_c5" alt="inicio" />
                    </a>
                  </td>
                  <td>
                    <a href="bienvenida.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c6','img/index_r2_c6_f3.jpg',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0312205212_0', 'MMMenu0312205212_0',0,50,'index_r2_c6');MM_nbGroup('over','index_r2_c6','img/index_r2_c6_f2.jpg','img/index_r2_c6_f4.jpg',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(1000);">
                      <img name="index_r2_c6" src="img/index_r2_c6.jpg" width="100" height="51" border="0" id="index_r2_c6" alt="El Club" />
                    </a>
                  </td>
                  <td>
                    <a href="sala_infantil_juvenil.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c7','img/index_r2_c7_f3.jpg',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0312205212_1', 'MMMenu0312205212_1',0,50,'index_r2_c7');MM_nbGroup('over','index_r2_c7','img/index_r2_c7_f2.jpg','img/index_r2_c7_f4.jpg',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(1000);">
                      <img name="index_r2_c7" src="img/index_r2_c7.jpg" width="100" height="51" border="0" id="index_r2_c7" alt="Instalaciones" />
                    </a>
                  </td>
                  <td>
                    <a href="reserva_socios.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c8','img/index_r2_c8_f3.jpg',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0312205212_2', 'MMMenu0312205212_2',0,50,'index_r2_c8');MM_nbGroup('over','index_r2_c8','img/index_r2_c8_f2.jpg','img/index_r2_c8_f4.jpg',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(1000);"><img name="index_r2_c8" src="img/index_r2_c8.jpg" width="100" height="51" border="0" id="index_r2_c8" alt="Reservas" /></a></td>
                  <td colspan="2"><a href="ingreso.html" target="_top" onClick="MM_nbGroup('down','navbar1','index_r2_c9','img/index_r2_c9_f3.jpg',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0312205212_3', 'MMMenu0312205212_3',0,50,'index_r2_c9');MM_nbGroup('over','index_r2_c9','img/index_r2_c9_f2.jpg','img/index_r2_c9_f4.jpg',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(1000);"><img name="index_r2_c9" src="img/index_r2_c9.jpg" width="100" height="51" border="0" id="index_r2_c9" alt="Solicitudes" /></a></td>

                  <td>
                    <a href="galeria/galeria.html" target="_top" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','index_r2_c12','img/index_r2_c12_f2.jpg','img/index_r2_c12_f4.jpg',1);" onClick="MM_nbGroup('down','navbar1','index_r2_c12','img/index_r2_c12_f3.jpg',1);"><img name="index_r2_c12" src="img/index_r2_c12.jpg" width="100" height="51" border="0" id="index_r2_c12" alt="Galeria" />
                    </a>
                </td>
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

                      $che = false;
                      $che1 = false;
                      $che2 = false;
                      $che3 = false;
                      $che4 = false;
                      $che5 = false;
                      $che6 = false;
                      $che7 = false;          

                      if (isset($_POST['primerplan'])){
                        $che = true;
                      }
                      if (isset($_POST['bodeguita'])){
                        $che1 = true;
                      }
                      if (isset($_POST['corredor'])){
                        $che2 = true;
                      }
                      if (isset($_POST['jardines3'])){
                        $che3 = true;
                      }
                      if (isset($_POST['salontv'])){
                        $che4 = true;
                      }                     
                      if (isset($_POST['sjuventud'])){
                        $che5 = true;
                      }
                      if (isset($_POST['salonacto'])){
                        $che6 = true;
                      }
                      if (isset($_POST['otras'])){
                        $che7 = true;
                      }

                      $mailTo = "rafaproyecto123@gmail.com"; // Direcci&#65533;n de Email a donde se enviara el correo              
                      $nom = $_POST['nombre'];
                      $dni = $_POST['dni'];
                      $cal = $_POST['calle'];
                      $num = $_POST['numero'];
                      $ciu = $_POST['ciudad'];
                      $pro = $_POST['provincia'];
                      $tel1 = $_POST['telefono'];
                      $email = $_POST['email'];
                      $soc = $_POST['nsocio'];
                      $obser = $_POST['otrasobser'];
                      $cele = $_POST['celebrar'];

                      $diac = $_POST['diacelebrar'];
                      $horae = $_POST['horaempie'];
                      $dura = $_POST['duraccion'];
                      $dia = $_POST['dia22'];
                      $mes = $_POST['mes22'];
                      $ano = $_POST['ano2'];
                      $fir = $_POST['firma'];
                      $obse = $_POST['obser'];
                      $rec = $_POST['aviso_legal'];
                      $mailFrom = $_POST['email'];
                      $mailSubject = "Contacto desde Web";




                      //CHECKBOX
                      
                      
                      
                      if (isset($_POST['SI'])){
                        $valor1 = 'si';
                      }elseif (isset($_POST['NO'])){
                        $valor1 = 'no';
                      }
                 
                     
                    
                      $recinf = $_POST['recibirinf'];
                      $aviso = $_POST['aviso_legal'];


                     
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