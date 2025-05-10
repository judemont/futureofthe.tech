let actualRotation = 0;
let oldScrollY = window.scrollY;

function handleScroll() {
    const back = document.getElementById("background");
    const scrollY = window.scrollY;

    actualRotation += scrollY - oldScrollY;
    back.style.transform = `rotate(${actualRotation}deg)`;

    oldScrollY = scrollY;
}

window.addEventListener("scroll", handleScroll);
