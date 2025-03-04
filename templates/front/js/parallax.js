setTimeout(()=> {
    const elem = document.querySelector("#astre");
    const images =document.getElementsByClassName("parallax");

    document.addEventListener("mousemove", (e) => {
        for(var i = 0;i < images.length; i++) {

            let _w = window.innerWidth/2;
            let _h = window.innerHeight/2;
            let _mouseX = e.clientX;
            let _mouseY = e.clientY;
            
            let rect = images[i].getBoundingClientRect();
            let imageX = rect.left + rect.width / 2;
            let imageY = rect.top + rect.height / 2;
            let distance = Math.sqrt(Math.pow(_mouseX - imageX, 2) + Math.pow(_mouseY - imageY, 2));

            let _proximity;
            if (distance <= 500 && distance >= 0) {
                _proximity = 0.02 - 0.02/500 * distance;
            }
            else {
                _proximity = 0;
            }
            let image_w;
            if(distance<=200 && distance >=0){
                image_w=0.2 - 0.2/200 * distance;
            }
            else{
                image_w=0;
            }

            let _depth1 = `${(_mouseX - _w) *_proximity}%,${-50+(_mouseY - _h) * _proximity}%`;
            let scale = 1 + image_w;
            images[i].style.transform = `translate(${_depth1}) scale(${scale})`;
        }
    });
} ,0)

