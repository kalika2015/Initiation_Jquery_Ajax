const parallax = document.getElementById("parallax");

window.addEventListener("scroll", function (ev) {
    var offset = window.pageYOffset;
    parallax.style.backgroundPositionY = offset * 0.5 + "px";
});