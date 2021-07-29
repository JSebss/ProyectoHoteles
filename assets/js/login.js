var $loginMsg = $('.loginMsg'),
  $login = $('.login'),
  $signupMsg = $('.signupMsg'),
  $signup = $('.signup'),
  $frontbox = $('.frontbox');

$('#switch1').on('click', function() {
  $loginMsg.toggleClass("visibility");
  $frontbox.addClass("moving");
  $signupMsg.toggleClass("visibility");

  $signup.toggleClass('hide');
  $login.toggleClass('hide');
})

$('#switch2').on('click', function() {
  $loginMsg.toggleClass("visibility");
  $frontbox.removeClass("moving");
  $signupMsg.toggleClass("visibility");

  $signup.toggleClass('hide');
  $login.toggleClass('hide');
})

var passwordLogin = document.querySelector('.lpassword');
var passwordSignup = document.querySelector('.password');
var passwordConfirm = document.querySelector('.confirmpassword');
var show = document.querySelector('.show');
var hide = document.querySelector('.hide');
var show1 = document.querySelector('.show1');
var hide1 = document.querySelector('.hide1');
var show2 = document.querySelector('.show2');
var hide2 = document.querySelector('.hide2');

show.onclick = function(){
  passwordLogin.setAttribute("type","text");
  show.style.display = "none";
  hide.style.display = "block";
}

hide.onclick = function(){
  passwordLogin.setAttribute("type","password");
  hide.style.display = "none";
  show.style.display = "block";
}

show1.onclick = function(){
  passwordSignup.setAttribute("type","text");
  show1.style.display = "none";
  hide1.style.display = "block";
}

hide1.onclick = function(){
  passwordSignup.setAttribute("type","password");
  hide1.style.display = "none";
  show1.style.display = "block";
}

show2.onclick = function(){
  passwordConfirm.setAttribute("type","text");
  show2.style.display = "none";
  hide2.style.display = "block";
}

hide2.onclick = function(){
  passwordConfirm.setAttribute("type","password");
  hide2.style.display = "none";
  show2.style.display = "block";
}
