let show = document.getElementById("showQr");
let qr = document.getElementById("qr");
let width = window.innerWidth;
console.log(width)
if (width < 1195) {
    qr.style.display = "none";
    show.style.display = "block";
    
} else {
    qr.style.display = "block";
    show.style.display = "none";
    
}
function updateSize() {
    width = window.innerWidth;
    console.log(width)
    if (width < 1195) {
        qr.style.display = "none";
        show.style.display = "block";
        
    } else {
        qr.style.display = "block";
        show.style.display = "none";
        
    }
}

window.addEventListener("resize", function () {
    updateSize();
});
show.addEventListener("click", function () {
    //show qr
    if (qr.style.display === "none") {
        qr.style.display = "block";
    } else {
        qr.style.display = "none";
    }
});
