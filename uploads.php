<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile",value="">
<input type="submit",value="upload file">
</form> 
</body>
</html>

<img src="" alt="">
<?php
 $uploaded_file = $_FILES['uploadfile']['name'];
 $temoname_file = $_FILES['uploadfile']['tep-name'];
 $folder="uploads/".$uploaded_file;
 move_uploaded_file($uploaded_file,$folder);
 echo "<img src='$folder'>";
 ?>