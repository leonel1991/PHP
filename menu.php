<?php

include("bd.php");

$ced = $_GET['ced'];

$sql="SELECT * FROM usuario WHERE ced='$ced'";
$res=conetar()->query($sql);
foreach($res as $row){
   $valor=$row['ced'];
}
$media="Media/".$row['audio']."";

if ($ced == $valor) { ?>

    <audio autoplay>
        <source src="<?php echo $media; ?>" type="audio/mp3">
        Tu navegador no soporta HTML5 audio.
    </audio>

<?php } ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
         #menu {
        background-color:#999;
        float:left;
        height:480px;
        padding:20px;
        width:180px;
      }
    </style>
</head>

<body>
   
            <div class="menu">
                <table width="100%">
                    <tr>
                        <td align="right"><img src="Media/img1.png" width="500px" onclick="miAlerta()"/></td>
                        <td align="center"><img src="Media/img2.png"  width="500px" onclick="miAlerta1()"/></td>
                        <td align="left"><img src="Media/OFERTA.png" width="500px" onclick="miAlerta2()"/></td>
                        <td align="left"><img src="Media/atras.png" width="500px" onclick="miAlerta4()"/></td>
                    </tr>
                </table>
                
            </div>
            
    
    <div >
    <table width="100%">
                    <tr>
                        <td align="center" id="video"></td>
                        
                    </tr>
                </table>
            </div>    
</body>

</html>

<script>
  function miAlerta(evento) {
    event.preventDefault();
    document.getElementById("video").innerHTML = "<video autoplay controls src='Media/Videoinscripcion.mp4' height='1050PX'></video>";
  }
  function miAlerta1(evento) {
    event.preventDefault();
    document.getElementById("video").innerHTML = "<video autoplay controls src='Media/videoesferamodelo.mp4' height='1050PX'></video>";
  }
  function miAlerta2(evento) {
    event.preventDefault();
    document.getElementById("video").innerHTML = "<video autoplay controls src='Media/videopixelcarreras.mp4' height='1050PX'></video>";
  }
  function miAlerta4(evento) {
    window.location="qr.php";
  }
</script>