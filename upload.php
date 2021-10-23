<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo '<span style="color: black; font-size: 30px;">The file you are trying to upload is not a file. Wtf?</span>';
    echo ' 
<!DOCTYPE html>
<html>
<br></br><img src="https://i.pinimg.com/originals/94/7a/7e/947a7e6047418c2ef1b7f5b187dd012e.jpg" title="Cursed Ganyu" alt="Cursed Ganyu" />

</html>
';
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo '<span style="color: black; font-size: 30px;">File already exists. L.</span>';
  echo ' 
<!DOCTYPE html>
<html>
<br></br><img src="https://i.pinimg.com/originals/94/7a/7e/947a7e6047418c2ef1b7f5b187dd012e.jpg" title="Cursed Ganyu" alt="Cursed Ganyu" />

</html>
';
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 50000000) {
  echo '<span style="color: black; font-size: 30px;">File is too large. Big L.</span>';
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo '<span style="color: black; font-size: 30px;">Only JPEG, PNG, and GIF files can be uploaded lmao sorry</span>';
  echo ' 
<!DOCTYPE html>
<html>
<br></br><img src="https://i.pinimg.com/originals/94/7a/7e/947a7e6047418c2ef1b7f5b187dd012e.jpg" title="Cursed Ganyu" alt="Cursed Ganyu" />

</html>
';
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo '<span style="color: black; font-size: 30px;">Apologies, my liege. Your image could not be uploaded.</span>';
  echo ' 
<!DOCTYPE html>
<html>
<br></br><img src="https://i.pinimg.com/originals/94/7a/7e/947a7e6047418c2ef1b7f5b187dd012e.jpg" title="Cursed Ganyu" alt="Cursed Ganyu" />

</html>
';
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo '<span style="color: black; font-size: 30px;">Your image has been uploaded!</span>';
    echo ' 
<!DOCTYPE html>
<html>
<br></br><img src="https://i.pinimg.com/originals/94/7a/7e/947a7e6047418c2ef1b7f5b187dd012e.jpg" title="Cursed Ganyu" alt="Cursed Ganyu" />

</html>
';
  } else {
    echo '<span style="color: black; font-size: 30px;">Image could not be uploaded. Have you tried, um, retrying? </span>';
    echo ' 
<!DOCTYPE html>
<html>
<br></br><img src="https://i.pinimg.com/originals/94/7a/7e/947a7e6047418c2ef1b7f5b187dd012e.jpg" title="Cursed Ganyu" alt="Cursed Ganyu" />

</html>
';
  }
}
?>