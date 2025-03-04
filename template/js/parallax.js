const elem = document.querySelector("#astre");
const images =document.getElementsByClassName("parallax");

document.addEventListener("mousemove", (e) => {
    for(var i = 0;i < images.length; i++) {
        console.log("coucou");
        let _w = window.innerWidth/2;
        let _h = window.innerHeight/2;
        let _mouseX = e.clientX;
        let _mouseY = e.clientY;
        
        let _depth1 = `${(_mouseX - _w) *0.005}%,${-50+(_mouseY - _h) * 0.005}%`;
        images[i].style.transform = `translate(${_depth1})`;
    }
});