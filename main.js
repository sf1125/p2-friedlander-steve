var nav = document.querySelector("nav ul"),
    navToggle = document.querySelector("nav .skip");
if (navToggle) {
  navToggle.addEventListener("click",
  function(e) {
  if (nav.className == "open") {
    nav.className = "";
  } else {
    nav.className = "open";
  }
  e.preventDefault();
  }, false);
}

/* Any click outside of the nav element will close the menu if it's open */
var specifiedElement = document.querySelector('nav');
document.addEventListener('click', function(event) {
  var isClickInside = specifiedElement.contains(event.target);
  if (!isClickInside && nav.className == "open") {
    nav.className = "";
  } 
});

//Shows hidden paragraph when the link is clicked
var yquotes = document.getElementById('quotes');
    squotes = document.getElementById('showquotes');
yquotes.addEventListener('click', function(event) {
  event.preventDefault();
  squotes.style.display = 'block';
}, false);


//Popup button
$ = function(id) {
    return document.getElementById(id);
  }
  
  var show = function(id) {
      $(id).style.display ='block';
  }
  var hide = function(id) {
      $(id).style.display ='none';
  }

  //Map API
  // Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: 27.806330, lng: -82.658540 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }

  //Contact

  