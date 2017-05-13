@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


<form 
action="" method ="POST" enctype="multipart/form-data") >
{{ csrf_field() }}

File:
<input type ="file" name="image"> <input type="submit" value="Upload">
</form>
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


</div>
        </div>
    </div>
</div>
@endsection