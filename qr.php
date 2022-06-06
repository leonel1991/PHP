<!DOCTYPE html>
<html>

<head>
  <title>Instascan &ndash; Demo</title>
  <link rel="icon" type="image/png" href="favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
  <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--
  <style>
    body {
  
        background-size: initial;
        background-image: url("Media/FondoRaco.png");
        background-position:center center; /*respecto a body*/
        background-repeat: no-repeat;
        height: 100%;
    }
  </style>
  -->
</head>

<body background="Media/FondoRaco.png" background-repeat="no-repeat"  background-size="cover">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>  <br>
  <br>
  <br>
  <br>
 /////
  <center>
    <div id="app">
      <div class="preview-container">
        <video id="preview"></video>
      </div>
      <div class="sidebar">
        <!--
        adad
        <br>
        <br>
        <label v-for="scan in scans" :key="scan.date" :title="scan.content" name="edad" id="valorqr" >{{ scan.content }}</label>
        <input type="submit" onclick="hola()" onload="hola()" value="Ingresar" v-for="scan in scans" class="btn btn-info" />
  -->
      </div>
    </div>
  </center>
  <script type="text/javascript" src="app.js"></script>
</body>

</html>

