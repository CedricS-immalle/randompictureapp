<!DOCTYPE html>
<html>
<head>
	<title></title>
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
    }];
    
    var preBuffer = [];
    for (var i = 0, j = theImages.length; i < j; i++) {
        preBuffer[i] = new Image();
        preBuffer[i].src = theImages[i].src;
        preBuffer[i].width = theImages[i].width;
        preBuffer[i].height = theImages[i].height;
    }
   
// create random image number
  function getRandomInt(min,max) 
    {
      //  return Math.floor(Math.random() * (max - min + 1)) + min;
    
imn = Math.floor(Math.random() * (max - min + 1)) + min;
    return preBuffer[imn];
    }  

// 0 is first image,   preBuffer.length - 1) is  last image
  
var newImage = getRandomInt(0, preBuffer.length - 1);
 
// remove the previous images
var images = document.getElementsByTagName('img');
var l = images.length;
for (var p = 0; p < l; p++) {
    images[0].parentNode.removeChild(images[0]);
}
// display the image  
document.body.appendChild(newImage);
}
</script>
</div>
</body>
</html>
