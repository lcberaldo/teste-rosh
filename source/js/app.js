$(function () {
  $(".hamburger").on("click", function () {
    console.log("click");
    $(this).toggleClass("is-active");
    $(".menu").toggleClass("opened");
  });
});

$(".link").on("click", function (e) {
  e.preventDefault();

  if (window.innerWidth <= 800) {
    $(".menu").toggleClass("opened");
    $(".hamburger").toggleClass("is-active");
  }

  $("html,body").animate(
    {
      scrollTop: eval($("#" + $(this).attr("target")).offset().top - 90),
    },
    100
  );
});

AOS.init({ disable: "mobile" });
