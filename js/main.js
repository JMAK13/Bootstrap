var menu = document.querySelector('.navbar');
<<<<<<< HEAD
var wrapperMenu = document.querySelector('.wrapper-menu');
var navBar = document.querySelector('.navbar-collapse');
var menuBtn = document.querySelector('.navbar-toggler');

menuBtn.addEventListener('click', function(){
  if(navBar.className !== "navbar-collapse justify-content-center align-self-start collapsing"){
    wrapperMenu.classList.toggle('open');
    menu.classList.toggle('open2');
  }
})
=======
		var wrapperMenu = document.querySelector('.wrapper-menu');
		var navBar = document.querySelector('.navbar-collapse');
		var menuBtn = document.querySelector('.navbar-toggler');

		menuBtn.addEventListener('click', function(){
		  if(navBar.className !== "navbar-collapse justify-content-center align-self-start collapsing"){
		    wrapperMenu.classList.toggle('open');
		    menu.classList.toggle('open2');
		  }
		})
>>>>>>> 095573a0d65e8670e944cc90951cd64c8718edcf
