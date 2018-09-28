/*function displayUpload(){
var x = document.getElementById("uploadPhoto");
    if(x.style.display ==="none"){
         x.style.display = "block";
    } else {
    x.style.display ="none";
    }
}
function displayPicture(){
var x = document.getElementById("takePhoto");
if(x.style.display ==="none"){
     x.style.display = "block";
    } else {
        x.style.display ="none";
    }
}*/

var video = document.querySelector("#videoElement");
 
if (navigator.mediaDevices.getUserMedia) {       
    navigator.mediaDevices.getUserMedia({video: true})
  .then(function(stream) {
    video.srcObject = stream;
  })
  .catch(function(err0r) {
    console.log("Something went wrong!");
  });
}
 
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');

document.getElementById('snap').addEventListener('click',function(){
context.drawImage(video,0,0,500,375)
});
