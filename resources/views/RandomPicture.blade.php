@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Random picture</title>
</head>
<style type="text/css">
	{margin-top: 30px;}
</style>
<body>

</style> 
</head>
<body>
<div>
<button id="jsstyle" 
onclick="display_random_image();">Show Image</button> 

<script type="text/javascript">
	function display_random_image() 
{
     var theImages = [{
        src: "https://s3-us-west-1.amazonaws.com/powr/defaults/image-slider1.jpg",
        width: "1000",
        height: "500"
    }, {
        src: "http://the7io.dreamthemecom.netdna-cdn.com/main/wp-content/uploads/sites/39/2014/10/10-037-1000x500.jpg",
        width: "1000",
        height: "500"
    }, {
        src: "https://s3-us-west-1.amazonaws.com/powr/defaults/image-slider2.jpg",
        width: "1000",
        height: "500"
    },
     {
        src: "https://static1.squarespace.com/static/514dc233e4b0d4d5c3e061e6/56a13ae3c21b8616b74a8c93/56a13c62be7b9646c1dea805/1453407475301/image-fracking-water-resuse-site-green376.jpg",
        width: "1000",
        height: "500"
    },
     {
        src: "http://www.joshuajacobs.org/wp-content/uploads/2014/04/121.jpg",
        width: "1000",
        height: "500"
    },
     {
        src: "https://www.wired.com/images_blogs/wiredscience/2011/04/Panorama.jpg",
        width: "1000",
        height: "500"
    },
     {
        src: "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRrrgCMIXcxMXp0KJW_AYQBvKFSL77dcXbHlIuqUpI7_OzzWkZg",
        width: "1000",
        height: "500"
    },
     {
        src: "https://static1.squarespace.com/static/52d2f585e4b03405bcb6b077/t/53f3e004e4b095c9ee7c32b3/1408491537386/",
        width: "1000",
        height: "500"
    },]
    ;
    
    var preBuffer = [];
    for (var i = 0, j = theImages.length; i < j; i++) {
        preBuffer[i] = new Image();
        preBuffer[i].src = theImages[i].src;
        preBuffer[i].width = theImages[i].width;
        preBuffer[i].height = theImages[i].height;
    }
   
  function getRandomInt(min,max) 
    {
    
imn = Math.floor(Math.random() * (max - min + 1)) + min;
    return preBuffer[imn];
    }  

  
var newImage = getRandomInt(0, preBuffer.length - 1);
 
var images = document.getElementsByTagName('img');
var l = images.length;
for (var p = 0; p < l; p++) {
    images[0].parentNode.removeChild(images[0]);
}
document.body.appendChild(newImage);
}
</script>
</div>
</body>
</html>
@endsection
