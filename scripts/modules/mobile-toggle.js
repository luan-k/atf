import $ from "jquery";
$(".nav-open").on("click", function (e) {
  e.preventDefault();

  $(this).toggleClass("nav-close");
  $(".li-wrapper").toggleClass("li-wrapper-open");
});
