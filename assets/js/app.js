$(function () {
  // alert("Hello");
  if (screen.width <= 768) {
    document.querySelector("body").style.display = "none";
    document.querySelector("body").innerHTML = "Cannot open in mobile devices";
  }

  $(".kt-logo").click(() => {
    location.href = "index.php";
  });
});
