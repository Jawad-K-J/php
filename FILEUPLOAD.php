
<html >
<head>
<title>FILE UPLOAD</title>
</head>
<body>
<form enctype="multipart/form-data"  method="POST"  style="background-color:#a4a9a5; height: 160px; width: 500px;" >
<H1 style="text-align: center;">FILE UPLOAD</H1>
Choose a file to upload: <input type="file" name="uploadedfile" /><br />
<input type="submit" value="UPLOAD" name="upload" />
<?php
if(isset($_POST['upload']))
{
$target_path =basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
 echo "The file ".  basename( $_FILES['uploadedfile']['name'])." has been uploaded";
} 
else
{
echo "There was an error uploading the file, please try again!";
}
}
?>
</form>
</body>
</html>
