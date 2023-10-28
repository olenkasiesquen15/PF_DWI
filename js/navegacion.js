window.addEventListener("scroll", function() {
    const nav = document.querySelector(".nav");
    if (window.scrollY > 0) {
        nav.classList.add("fixed-nav");
    } else {
        nav.classList.remove("fixed-nav");
    }
});
