const dpi = document.getElementById("dpi").offsetHeight;
const deepEl = document.getElementById("deep")
document.addEventListener("scroll", function(){
    let deep = roundUp(px2m(window.scrollY, dpi), 1)
    if(deep <= 0){
        deepEl.innerText = ""
    }else{
        deepEl.innerText = deep + "M"
    }

})

function px2m(px, dpi) {
    return px * 0.0254 / dpi 
}

function roundUp(num, precision) {
    precision = Math.pow(10, precision)
    return Math.ceil(num * precision) / precision
}