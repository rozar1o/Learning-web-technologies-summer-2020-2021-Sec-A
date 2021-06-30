<?php
$target_dir = "../Uploads/";
$error= "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $error= "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $error= "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $error= "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
  $error= "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $args = array(
   'error' => $error,
);
     header("location:../View/changePictureView.php?" . http_build_query($args));
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $args = array(
     'name' => htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])),
  );
       header("location:../View/changePictureView.php?" . http_build_query($args));
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    $error= "Sorry, there was an error uploading your file.";
    $args = array(
     'error' => $error,
  );
       header("location:../View/changePictureView.php?" . http_build_query($args));
  }
}
?>
