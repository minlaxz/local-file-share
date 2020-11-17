<?php
$target_dir = "uploads/uploadFile/";

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    //$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    //$target_file = "uploads/".$_POST['timeid'].".jpg" ;

    $time = time();

    $target_file = $target_dir.$time.".jpg";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if ($_FILES["fileToUpload"]["tmp_name"] ==NULL){
    echo "NULL";
    header("Refresh:1; url=index.html");
}else{
    echo "Not Null";
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //print_r($check);
    $check = true;
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        } else {
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            } else {
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
                } else {
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            echo "The file ".$time.".jpg has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }
            }
        }

    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    echo" Refreshing in 3 seconds.";
    header("Refresh: 3; url=index.php");
}
}
?>