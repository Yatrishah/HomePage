var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}

// $(window).scroll(function(){
// 	$('navbar').toggleClass('scrolled', $(this).scrollTop() > 50);
// });




$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 300) {
	    $("#navbar").css("background" , ".navbar-default .scrolled");
	  }

	  else{
		  $("#navbar").css("background" , ".navbar-default");  	
	  }
  })
})