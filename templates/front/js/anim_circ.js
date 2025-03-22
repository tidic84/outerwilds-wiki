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

async function reverseTransition() {
    console.log("reverse");
    const images = document.getElementsByClassName("parallax");
    for (var i = 0; i < images.length; i++) {
        
        images[i].classList.remove("anim");
        images[i].classList.add("hidden");
    };  
}


window.addEventListener("scroll", async () => {
    console.log(window.scrollY, window.innerHeight);
    if(window.scrollY > window.innerHeight /2) {
        startTransition();
    }
    if (window.scrollY < window.innerHeight/2.5) {
        reverseTransition();
    }
})
