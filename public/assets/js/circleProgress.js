const pi = Math.PI
var cnv = document.getElementById('question-canvas')
var cnvTime = document.getElementById('canvas-time')
var c = cnv.getContext('2d')
var posX = cnv.width/2
var posY = cnv.height/2
var time = 20
var degPerSec = 360/20
var fps = 10 // Set FPS disini, default = 10
var intervalTime = 1000/fps

c.lineCap = "round"
arcMove()

function arcMove(){
    var deg = 360
    var arcInterval = setInterval(function(){

        deg -= degPerSec/fps
        c.clearRect(0,0,cnv.width,cnv.height)
        time = deg/degPerSec
        cnvTime.innerHTML = time.toFixed()

        // Draw Progress
        c.beginPath()
        c.arc(posX,posY,27,(pi/180)*270,(pi/180)*(270+deg))
        c.strokeStyle = '#479FD7'
        c.lineWidth = '4'
        c.stroke()

        if( deg <= 0){
            clearInterval(arcInterval)
        }
    },intervalTime)
}