const imageTrackBackground = document.querySelector('#trackBackground');
const imageTrack = document.querySelector('#image-track');
const overlay = document.querySelector('#overlay-hero');
const recentTitle = document.querySelector('#recentTitle');

const backgroundDiv = document.querySelector('#herooDiv');
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
        console.log('Image track is visible!');
        backgroundDiv.style.backgroundSize = '100%';
        imageTrack.style.transform = "translate(0%, 0)";
        backgroundDiv.style.backgroundPosition = "center 5vh";
        overlay.style.opacity = 0.45;
        recentTitle.style.opacity = 1;
        recentTitle.style.transform = "translate(0, 0)";
      } else {
        backgroundDiv.style.backgroundSize = '140%';
        imageTrack.style.transform = "translate(50%, 0)";
        overlay.style.opacity = 0;
        backgroundDiv.style.backgroundPosition = "center -10vh";
        recentTitle.style.opacity = 0;
        recentTitle.style.transform = "translateY(10vh)";

      }
  });
});

observer.observe(recentTitle);


const track = document.getElementById("image-track");

const handleOnDown = e => track.dataset.mouseDownAt = e.clientX;

const handleOnUp = () => {
    track.dataset.mouseDownAt = "0";
    track.dataset.prevPercentage = track.dataset.percentage;
}

const handleOnMove = e => {
    if (track.dataset.mouseDownAt === "0") return;

    const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
        maxDelta = window.innerWidth / 2;

    const percentage = (mouseDelta / maxDelta) * -100,
        nextPercentageUnconstrained = parseFloat(track.dataset.prevPercentage) + percentage,
        nextPercentage = Math.max(Math.min(nextPercentageUnconstrained, 0), -100);

    track.dataset.percentage = nextPercentage;

    track.animate({
        transform: `translate(${nextPercentage}%)`
    }, {
        duration: 1200,
        fill: "forwards"
    });

    for (const image of track.getElementsByClassName("image")) {
        image.animate({
            objectPosition: `${100 + nextPercentage}% `
        }, {
            duration: 1200,
            fill: "forwards"
        });
    }
}

/* -- Had to add extra lines for touch events -- */

window.onmousedown = e => handleOnDown(e);

window.ontouchstart = e => handleOnDown(e.touches[0]);

window.onmouseup = e => handleOnUp(e);

window.ontouchend = e => handleOnUp(e.touches[0]);

window.onmousemove = e => handleOnMove(e);

window.ontouchmove = e => handleOnMove(e.touches[0]);

window.onload = () => {
    const body = document.querySelector('body');
    const name = document.querySelector('#nameTekening');
    name.style.opacity = '1';
    name.style.transform = 'translate(0, 0)';
    body.style.opacity = '1';
  };
