<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing</title>
</head>

<body>
  <?php
  $files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

  if (isset($_POST["submit"])) {

    $total = count($_FILES['upload']['name']);

    for ($i = 0; $i < $total; $i++) {

      $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

      if ($tmpFilePath != "") {

        $newFilePath = "./uploads/uploadFiles/" . $_FILES['upload']['name'][$i];

        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
          echo "Uploaded your files to server successfully.\n";
        }
      }
    }
    echo " Refreshing in 3 seconds.";
  }
  ?>
  <script>
    setTimeout(() => {
      window.location.replace('/');
    }, 3000);
  </script>
</body>

</html>