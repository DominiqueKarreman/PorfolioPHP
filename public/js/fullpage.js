
new fullpage('#fullpage', {
    // fullpage options go here
    licenseKey: 'asdaasdasdasdsd',
    sectionsColor: ['#f2f2f2', '#1C1C1C', '#7BAABE'],
    scrollingSpeed: 500,
    autoScrolling: true,
    // parallax: true,
    navigation: false,
    anchors: ['Home', 'About', 'Skills'],

    afterLoad: function(origin, destination, direction) {
      // Store the active section in a variable
      var activeSection = {
        index: destination.index,
        element: destination.item
      };
  
      // Do something with the active section variable
      console.log(activeSection);
    }
    // navigationTooltips: ['Home', 'About', 'Skills'],
    // showActiveTooltip: true,
  });
  