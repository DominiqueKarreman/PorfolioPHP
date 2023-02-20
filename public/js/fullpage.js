

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
