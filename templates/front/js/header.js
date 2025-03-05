window.addEventListener("scroll", () => {
    const header = document.getElementById("header");
    if( window.scrollY > 200 ) {
        header.classList.remove("opacity-0");
    } else {
        header.classList.add("opacity-0")
    }
})