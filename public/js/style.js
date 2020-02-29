// Confirm before delete a post
function deleteDialog() {
  return confirm("Voulez-vous vraiment supprimer ce billet?");
}

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    $(".fixed-top").css("background-color", "#2c5a63");
    $(".fixed-top").css("transition", "background-color 1s ease 0s;");
  } else {
    $(".fixed-top").css("background-color", "transparent");
  }
}

// bootstrap-pop-up
$(".toggle").click(function () {
  // Switches the Icon
  $(this).children("i").toggleClass("fa-pencil");
  // Switches the forms
  $(".form").animate({
    height: "toggle",
    "padding-top": "toggle",
    "padding-bottom": "toggle",
    opacity: "toggle"
  }, "slow");
});
// bootstrap-pop-up

// Top button
var mybutton = document.getElementById("btnTop");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}