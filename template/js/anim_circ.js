function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function startTransition() {
    const images = document.getElementsByClassName("parallax");
    console.log(images);
    for (var i = 0; i < images.length; i++) {
        
        images[i].classList.add("test");
        images[i].classList.remove("hidden");
        await sleep(100);
    };

    
}
setTimeout(startTransition, 10);

