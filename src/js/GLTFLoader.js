import *as THREE from '../three/three.module.js'
import {GLTFLoader} from '../three/GLTFLoader.js'
import {OrbitControls} from '../three/OrbitControls.js';
import {GUI} from '../three/dat.gui.module.js';

var camera, scene, renderer;
var mixer, clock;
var  actions;

let ambientLight, dirLight;

let effectController;

let wireMaterial, flatMaterial, gouraudMaterial;

const diffuseColor = new THREE.Color();
const specularColor = new THREE.Color();

let check1 = false;

const API = {
    color: 0xffffff, // sRGB
    exposure: 1.0
};


function init() {
    scene = new THREE.Scene();
    scene.background = new THREE.Color('white');
    
    camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
    camera.position.set(0, 0.5, 1);
    
    renderer = new THREE.WebGLRenderer();
    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );
    renderer.shadowMap.enabled = true;
    renderer.shadowMap.type = THREE.PCFSoftShadowMap;

    ambientLight = new THREE.AmbientLight( 0x333333 );
    // ambientLight.position.set( 1, 1, 1 ).normalize();
    scene.add(ambientLight)

    dirLight = new THREE.DirectionalLight( 0xFFFFFF, 1.0 );
    dirLight.position.set( 0, 3, 0 ).normalize();
    dirLight.castShadow = true;
    scene.add(dirLight);

    var controls = new OrbitControls( camera, renderer.domElement);

    clock = new THREE.Clock();

    const planeGeo = new THREE.PlaneBufferGeometry(100, 100);
    const planeMat = new THREE.MeshPhongMaterial( { color: 0x999999, depthWrite: false } );
    const plane = new THREE.Mesh(planeGeo, planeMat);
    plane.rotation.x = - Math.PI / 2;
    // plane.position.z = 10
    plane.receiveShadow = true;
    scene.add(plane);

    const grid = new THREE.GridHelper( 100, 20, 0x000000, 0x000000 );
    grid.material.opacity = 0.2;
    grid.material.transparent = true;
    scene.add( grid );


    const materialColor = new THREE.Color();
    materialColor.setRGB( 1.0, 1.0, 1.0 );
    
    wireMaterial = new THREE.MeshBasicMaterial( { color: 0xFFFFFF, wireframe: true } );

    flatMaterial = new THREE.MeshPhongMaterial( { color: materialColor, specular: 0x000000, flatShading: true, side: THREE.DoubleSide } );

    gouraudMaterial = new THREE.MeshLambertMaterial( { color: materialColor, side: THREE.DoubleSide } );

    var textureLoader = new THREE.TextureLoader();
    var text = textureLoader.load('../../data/12.jpg');
    // map.encoding = THREE.sRGBEncoding;
    text.flipY = false;

    var loader = new GLTFLoader();
    loader.load('../../data/Flamingo.glb', (gltf) => {
        var obj = gltf.scene;
        centralize(obj);

        obj.traverse((o) => {
            if(o.isMesh) {
                o.material.map = text;
                o.castShadow = true;
            }
        })

        setupGui();
        // createPanel();

        mixer = new THREE.AnimationMixer( obj );
        // mixer.clipAction( gltf.animations[ 0 ] ).play();
        actions = mixer.clipAction( gltf.animations[ 0 ] );
        actions.play();

        scene.add(obj);
        }
        // , 
        // onProgress(), 
        // onError()
    );

    window.addEventListener( 'resize', onWindowResize, false );
}

function centralize (object) {
    let boundingBox = new THREE.Box3().setFromObject(object);

    let size = new THREE.Vector3();
    boundingBox.getSize(size);

    let scale = Math.max(size.x, size.y, size.z);
    object.scale.set(1/scale, 1/scale, 1/scale);

    let centerbox = new THREE.Vector3();
    boundingBox.setFromObject(object);

    let _centerbox = boundingBox.getCenter(centerbox);
    object.position.sub(_centerbox);
}

function setupGui() {

    effectController = {

        ka: 0.17,
        kd: 0.51,
        ks: 0.2,

        hue:	0.121,
        saturation: 0.73,
        lightness: 0.66,

        lhue:	0.04,
        lsaturation: 0.01,
        llightness: 1.0,

        lx: 0.5,
        ly: 0.39,
        lz: 0.7,

        'pause/continue': pauseContinue,
    };

    let h;

    const gui = new GUI();

    // material (color)

    h = gui.addFolder( "Material color" );

    h.add( effectController, "hue", 0.0, 1.0, 0.025 ).name( "hue" ).onChange( render );
    h.add( effectController, "saturation", 0.0, 1.0, 0.025 ).name( "saturation" ).onChange( render );
    h.add( effectController, "lightness", 0.0, 1.0, 0.025 ).name( "lightness" ).onChange( render );

    // light (point)

    h = gui.addFolder( "Lighting" );

    h.add( effectController, "lhue", 0.0, 1.0, 0.025 ).name( "hue" ).onChange( render );
    h.add( effectController, "lsaturation", 0.0, 1.0, 0.025 ).name( "saturation" ).onChange( render );
    h.add( effectController, "llightness", 0.0, 1.0, 0.025 ).name( "lightness" ).onChange( render );
    h.add( effectController, "ka", 0.0, 1.0, 0.025 ).name( "ambient" ).onChange( render );

    // light (directional)

    h = gui.addFolder( "Light direction" );

    h.add( effectController, "lx", - 1.0, 1.0, 0.025 ).name( "x" ).onChange( render );
    h.add( effectController, "ly", - 1.0, 1.0, 0.025 ).name( "y" ).onChange( render );
    h.add( effectController, "lz", - 1.0, 1.0, 0.025 ).name( "z" ).onChange( render );

    h = gui.addFolder('Pausing/Continue');
    
    h.add(effectController, ('pause/continue'));

}

function pauseContinue() {

    if (check1) {
        check1 = false;
        actions.enabled = true;
        unPauseAllActions();
    }
    else {
        check1 = true;
        pauseAllActions();
    }

    console.log(check1)
}

function pauseAllActions() {

    actions.paused = true;

}

function unPauseAllActions() {

    actions.paused = false;
   
}

function onProgress( xhr ) {

    if ( xhr.lengthComputable ) {

        updateProgressBar( xhr.loaded / xhr.total );

        console.log( Math.round( xhr.loaded / xhr.total * 100, 2 ) + '% downloaded' );

    }

}

function onError() {

    const message = "Error loading model";
    progressBarDiv.innerText = message;
    console.log( message );

}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    renderer.setSize( window.innerWidth, window.innerHeight );

    animate();
}

function render() {
    
    // Ambient's actually controlled by the light for this demo
    diffuseColor.setHSL( effectController.hue, effectController.saturation, effectController.lightness );

    diffuseColor.multiplyScalar( effectController.kd );
    specularColor.multiplyScalar( effectController.ks );
    ambientLight.color.setHSL( effectController.hue, effectController.saturation, effectController.lightness * effectController.ka );

    dirLight.position.set( effectController.lx, effectController.ly, effectController.lz );
    dirLight.color.setHSL( effectController.lhue, effectController.lsaturation, effectController.llightness );
}

function animate() {
    requestAnimationFrame( animate );

    if ( mixer ) {
        mixer.update( clock.getDelta() );
    }
    
    renderer.render(scene, camera);
}

init()
animate();