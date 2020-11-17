<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <title>Min's Local</title>
   <link rel="icon" href="images/logo.png" type="image/png" sizes="24x24" class="img-thumbnail">
   <style>
      body {
         background-image: url("images/back.gif");
         background-size: cover;
         height: 100vh;
         padding: 0;
         margin: 0;
      }
   </style>
   <script>
      function initApp() {
         document.getElementById("multiFile").hidden = true;

         var switcher = document.getElementById("switch");
         switcher.addEventListener('click', hidden_handler, false);
      }

      function hidden_handler() {

         document.getElementById("singleImg").hidden = document.getElementById("multiFile").hidden;
         document.getElementById("multiFile").hidden = !document.getElementById("singleImg").hidden;

      }


      window.onload = function () {
         initApp();
      };
   </script>
</head>

<body>
   <nav class="navbar fixed-top navbar-light bg-dark">
      <a class="navbar-brand shadow_laxz text-gray" href="#">let's SHARE_it here.</a>
      <img src="images/logo.png" width="32" height="32" class="d-inline-block align-top" alt="">
   </nav>
   <br><br><br><br>

   <div id='singleImg' class="container text-center">
      <form action="single.php" method="post" enctype="multipart/form-data" id="a">
         <label for="a" class="text-white">One-File Sharing</label>
         <input name="fileToUpload" type="file" multiple="multiple" class="btn btn-dark filepond" id="fileToUpload"
            accept="image/jpg">
         <br><br><br>
         <input type="submit" class="btn btn-success" value="Upload Image" name="submit" id="submitBtn" hidden>
      </form>
   </div>

   <div id='multiFile' class="container text-center">
      <form action="multi.php" method="post" enctype="multipart/form-data">
         <label for="filesToUpload" class="text-white">Multifile Sharing</label>
         <input name="upload[]" type="file" multiple="multiple" class="btn btn-dark filepond" id="filesToUpload"
            accept="image/jpg">
         <br><br><br>
         <input type="submit" class="btn btn-success" value="Upload Image" name="submit" id="submitBtna" hidden>
      </form>
   </div>

   <nav class="navbar fixed-bottom navbar-light bg-light">
      <a class="navbar-brand shadow_laxz" href="#">Min's local</a>
      <button id="switch" class="btn btn-outline-primary btn-small">Switch</button>
   </nav>
   <script>
      var singleCup = document.getElementById('fileToUpload');
      var multiCup = document.getElementById('filesToUpload');
      singleCup.onchange = function () {
         if (singleCup.value == "") {
            document.getElementById("submitBtn").hidden = true;
         } else {
            document.getElementById("submitBtn").hidden = false;
         }
      }
      multiCup.onchange = function () {
         if (multiCup.value == "") {
            document.getElementById("submitBtna").hidden = true;
         } else {
            document.getElementById("submitBtna").hidden = false;
         }
      }

   </script>
</body>

</html>