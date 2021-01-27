function getVisitors() {
    return Math.floor(Math.random() * 40) + 10;
}

setInterval(() => {
    console.log("Visitors:", getVisitors());
}, 5000);

window.addEventListener("scroll", () => {
    let scroll = (window.scrollY / document.body.scrollHeight) * 100;
    console.log("Scroll Depth:", scroll);
});

document.addEventListener("click", function(e) {
    console.log("Heatmap click at:", e.pageX, e.pageY);
});