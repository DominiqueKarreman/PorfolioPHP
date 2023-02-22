

function scrollTo(sectionName){
  console.log(sectionName)
    switch(sectionName){
        case 'Home':
            fullPage.moveTo(1);
            break;
        case 'Work':
            fullPage.moveTo(2);
            break;
        case 'About':
            fullPage.moveTo(3);
            break;
        case 'Timeline':
            fullPage.moveTo(4);
            break;
        case 'Gear':
            fullPage.moveTo(5);
            break;
        case 'Hire':
            fullPage.moveTo(6);
            break;
        default:
            fullPage.moveTo(1);
            break;
    }

}
var fullPage = new fullpage('#fullpage', {
    // fullpage options go here
    licenseKey: 'asdaasdasdasdsd',
    sectionsColor: ['#1C1C1C', '#1C1C1C', '#1C1C1C', '#1C1C1C', '#1C1C1C', '#1C1C1C'],
    scrollingSpeed: 700,
    // autoScrolling: true,
    // menu: '#menu',
    // parallax: true,
    navigation: false,
    

    afterLoad: function(origin, destination, direction) {
      // Store the active section in a variable
      var activeSection = {
        index: destination.index,
        element: destination.item
      };
      if(activeSection.index !== 0){
        document.getElementById('top').style.opacity = '100%';
      } else {
        document.getElementById('top').style.opacity = '0%';
      }
      // Do something with the active section variable
      console.log(activeSection);
    }
    // navigationTooltips: ['Home', 'About', 'Skills'],
    // showActiveTooltip: true,
  });
  
  let hamburger = document.getElementById('hamburger');
  let navMD = document.getElementById('navbar-cta');
  hamburger.addEventListener('click', function() {
    // hamburger.style.height = '100%';
    if (navMD.style.height == '100vh') {
      navMD.style.height = '0';
      navMD.style.opacity = '0%';
    } else {
    navMD.style.height = '100vh';
    navMD.style.opacity = '100%';
    }
  });

  let menu = document.querySelectorAll('.menuButton');

  let menuIndex = 0;
for(const menuItem of menu) {
  
  menuItem.addEventListener('click', () => {scrollTo(menuItem.innerHTML)})

}
let topButton = document.getElementById('top');
topButton.addEventListener('click', () => {scrollTo('Home')})

const track = document.querySelector('.image-track');

window.onmousedown = e => {
  track.dataset.mouseDownAt = e.clientX;
}
window.onmousemove = e => {
  if(track.dataset.mouseDownAt === "0") return;
  const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX, maxDelta = window.innerWidth * 0.5;
  const percentage = (mouseDelta / maxDelta) * -280, nextPercentage = percentage + parseFloat(track.dataset.prevPercentage),
  limitedNext = Math.max(Math.min(nextPercentage, 0), -960);
  
  const percentageSlow = (mouseDelta / maxDelta) * -50, nextPercentageSlow = percentageSlow + parseFloat(track.dataset.prevPercentageSlow),
  limitedNextSlow = Math.max(Math.min(nextPercentageSlow, 0), -100);

  track.dataset.percentage = nextPercentage;
  track.dataset.percentageSlow = nextPercentageSlow;
  track.animate({
    transform: `translate(${limitedNext}%, -50%)`
  }, { duration: 1200, fill: "forwards" });


  for(const image of track.getElementsByClassName("image")) {
    image.animate({
      objectPosition: `${100 + limitedNextSlow}% center`
    }, { duration: 1200, fill: "forwards" });
  }
}
window.onmouseup = e => {
  track.dataset.mouseDownAt = 0;
  track.dataset.prevPercentage = track.dataset.percentage;
  track.dataset.prevPercentageSlow = track.dataset.percentageSlow;
}

console.log(('ontouchstart' in document.documentElement))
var touchDevice = ('ontouchstart' in document.documentElement);

