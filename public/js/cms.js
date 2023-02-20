let showQrButton = document.getElementById("showQr");
let qrImage = document.getElementById("qr");
let width = window.innerWidth;
console.log(width)
if (width < 1195) {
    qrImage.style.display = "none";
    showQrButton.style.display = "block";
    
} else {
    qrImage.style.display = "block";
    showQrButton.style.display = "none";
    
}
function updateSize() {
    width = window.innerWidth;
    console.log(width)
    if (width < 1195) {
        qrImage.style.display = "none";
        showQrButton.style.display = "block";
        
    } else {
        qrImage.style.display = "block";
        showQrButton.style.display = "none";
        
    }
}

window.addEventListener("resize", function () {
    updateSize();
});
showQrButton.addEventListener("click", function () {
    //show qr
    if (qrImage.style.display === "none") {
        qrImage.style.display = "block";
    } else {
        qrImage.style.display = "none";
    }
});
