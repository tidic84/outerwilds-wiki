function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function startTransition() {
    const images = document.getElementsByClassName("parallax");
    for (var i = 0; i < images.length; i++) {
        
        images[i].classList.add("anim");
        images[i].classList.remove("hidden");
        await sleep(100);
    };

    
}
window.addEventListener("scroll", async () => {
    if(window.scrollY <= window.innerHeight) {
        startTransition();
    }
})
