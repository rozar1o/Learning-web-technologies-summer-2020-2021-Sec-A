<?php
include("../Model/head.php")
 ?>

<!DOCTYPE html>
<html>
<style >
  .error {color: #FF0000;}
</style>
<body>
  <img src="../Uploads/<?php if(isset($_GET['name'])) {echo $_GET['name'];}
  else {
    echo "avater.png";
  } ?>" alt="Profile Picture" width="200" height="250">
<form action="../Controller/changePictureController.php" method="post" enctype="multipart/form-data">
  Select image to upload: <br><br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <span class="error">* <?php if(!empty($_GET['error'])){echo $_GET['error'];} ?></span> <br><br>

  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php
include("../Model/foot.php")
 ?>
