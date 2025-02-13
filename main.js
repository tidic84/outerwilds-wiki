// Initialisation de la scène, de la caméra et du rendu
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ antialias: true });

renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setPixelRatio(window.devicePixelRatio);
// renderer.shadowMap.enabled = true;
// renderer.shadowMap.type = THREE.PCFSoftShadowMap;
const canvas = renderer.domElement;
canvas.id = 'threejs-canvas';
document.body.appendChild(canvas);

// Scene
scene.background = new THREE.Color(0x000000);

// Ajouter une lumière ambiante pour un éclairage de base
const ambientLight = new THREE.AmbientLight(0x404040, 3); // lumière douce
scene.add(ambientLight);


// Helpers
// const gridHelper = new THREE.GridHelper(10, 10);
// scene.add(gridHelper);
// const axesHelper = new THREE.AxesHelper(5);
// scene.add(axesHelper);

// Chargement du modèle 3d
var clock, mixer;

clock = new THREE.Clock();

const loader = new THREE.GLTFLoader();
loader.load('./res/home.glb', function (gltf) {
    gltf.scene.traverse(function (node) {
        if (node.isMesh) {
            node.castShadow = true;
            node.receiveShadow = true;
        }
    });
    scene.add(gltf.scene);

    if (gltf.animations.length > 0) {
		mixer = new THREE.AnimationMixer( gltf.scene );
		gltf.animations.forEach( clip => { mixer.clipAction( clip ).loop = THREE.LoopRepeat; } );
		mixer.clipAction( gltf.animations[ 0 ] ).play();
	}

    animate();
}, undefined, function (error) {
    console.error('Erreur de chargement du modèle ' + error);
});

// Camera
camera.position.z = 3;
camera.position.y = 1;
camera.position.x = 2;
camera.lookAt(-6, 0, -1);

// Variables pour gérer l'inertie
let height = 0;
let scrollSpeed = 0;
let isScrolling = false;

// Fonction d'animation
function animate() {
    requestAnimationFrame(animate);
    if (isScrolling) {
        height -= scrollSpeed;
        if(height > 0) {
            camera.position.y += scrollSpeed;
            scrollSpeed *= 0.95; // scroll smooth
        }
        if (Math.abs(scrollSpeed) < 0.001 || height < 0) {
            isScrolling = false;
        }
    }
    if ( mixer ) mixer.update( clock.getDelta() );
    renderer.render(scene, camera);
}
animate();

// Gestion du défilement
window.onwheel = function (e) {
    const maxScrollSpeed = 5;
    scrollSpeed = -e.deltaY;
    if(scrollSpeed > maxScrollSpeed) scrollSpeed = maxScrollSpeed;
    if(scrollSpeed < -maxScrollSpeed) scrollSpeed = -maxScrollSpeed;
    scrollSpeed /= 150;
    if(height < 0) {
        height = 0;
        scrollSpeed = 0;
    } else {
        isScrolling = true;
    }
    
    console.log('height', height);
};

// Redimensionnement de la fenêtre
window.addEventListener('resize', function () {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
}, false);