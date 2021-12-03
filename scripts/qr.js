const video = document.createElement("video");
const canvasElement = document.querySelector("#canvas");
const canvas = canvasElement.getContext("2d");

function drawLine(begin, end, color) {
    canvas.beginPath();
    canvas.moveTo(begin.x, begin.y);
    canvas.lineTo(end.x, end.y);
    canvas.lineWidth = 4;
    canvas.strokeStyle = color;
    canvas.stroke();
}

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
    navigator.mediaDevices.getUserMedia({ audio: false, video: {facingMode: {exact: "environment"}}}).then(function(stream) {
        video.srcObject = stream;
        video.setAttribute("playsinline", true);
        video.play();
        requestAnimationFrame(tick);
    });
} else {
    navigator.mediaDevices.getUserMedia({ audio: false, video}).then(function(stream) {
        video.srcObject = stream;
        video.setAttribute("playsinline", true);
        video.play();
        requestAnimationFrame(tick);
    });
}


let i = 0;

function tick() {
  if (video.readyState === video.HAVE_ENOUGH_DATA) {
    canvasElement.hidden = false;
    canvasElement.height = video.videoHeight;
    canvasElement.width = video.videoWidth;
    canvasElement.style.margin = '0 auto';
    canvasElement.style.width = '100%';
    canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);
    var imageData = canvas.getImageData(0, 0, canvasElement.width, canvasElement.height);
    var code = jsQR(imageData.data, imageData.width, imageData.height, {
      inversionAttempts: "dontInvert",
    });
    if (i == 0) {
      if (code) {
        drawLine(code.location.topLeftCorner, code.location.topRightCorner, "#FF3B58");
        drawLine(code.location.topRightCorner, code.location.bottomRightCorner, "#FF3B58");
        drawLine(code.location.bottomRightCorner, code.location.bottomLeftCorner, "#FF3B58");
        drawLine(code.location.bottomLeftCorner, code.location.topLeftCorner, "#FF3B58");
        let codeData = code.data;
        if (codeData.length > 'A000AA'.length || codeData.length < 'A000AA'.length) {
          //QR-код нам не подходит
        } else {
          i++;
          console.log(codeData);
          document.location.href = "/driver_info/?number=" + codeData;
        }
      } else {
      }
    }
  }
  requestAnimationFrame(tick);
}
