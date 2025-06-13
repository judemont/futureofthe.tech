var defaultHeight = 2000


window.addEventListener("scroll", function() {
    let body = document.getElementById("body");
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    let heightToAdd = defaultHeight + scrollTop + 300
    body.style.height = heightToAdd + "px";
});