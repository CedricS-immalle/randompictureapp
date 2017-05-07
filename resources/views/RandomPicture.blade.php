<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="RandomPicture" method ="GET" enctype="multipart/form-data" > 
File:
<input type ="file" name="image"> <input type="submit" value="Upload">

<?php


//file properties

if(isset($_FILES['image'])){
    echo $_FILES['image']['tmp_name'];
}
if(!isset($_FILES['image'])){
	echo "Please select an image.";
}
else {
	echo $image = file_get_contents($_FILES['image'] ['tmp_name']);
}




?>

</body>
</html>