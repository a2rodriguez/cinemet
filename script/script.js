
/*************************** --- DEBUT --- NEW CARROUSEL *********************/
//Allows bootstrap carousels to display 3 items per page rather than just one
$('.carousel.carousel-multi .item').each(function () {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));

	if (next.next().length > 0) {
		next.next().children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));
	}
	else {
		$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	}
});
/*************************** --- FIN -- NEW CARROUSEL *********************/

/******* (DEBUT) POUR MENU RESPONSIVE *************/

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
	  x.className += " responsive";
	} else {
	  x.className = "topnav";
	}
  }

/******* (FIN) POUR MENU RESPONSIVE *************/