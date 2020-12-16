import *as THREE from '../three/three.module.js'
import {GLTFLoader} from '../three/GLTFLoader.js'
import {OrbitControls} from '../three/OrbitControls.js';
import {GUI} from '../three/dat.gui.module.js';

var camera, scene, renderer;
var mixer, clock;

let ambientLight, light;

let effectController;

let wireMaterial, flatMaterial, gouraudMaterial;

const diffuseColor = new THREE.Color();
const specularColor = new THREE.Color();

function init() {
    scene = new THREE.Scene();
    scene.background = new THREE.Color('white');
    
    camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
    camera.position.set(5, 5, 5);

    renderer = new THREE.WebGLRenderer();
    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );

    ambientLight  = new THREE.DirectionalLight( 0xefefff, 1.5 );
    ambientLight.position.set( 1, 1, 1 ).normalize();
    scene.add(ambientLight)

    light = new THREE.DirectionalLight( 0xffefef, 1.5 );
    light.position.set( - 1, - 1, - 1 ).normalize();
    scene.add(light);

    var controls = new OrbitControls( camera, renderer.domElement);

    clock = new THREE.Clock();

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
    loader.load('../../data/Horse.glb', (gltf) => {
        var obj = gltf.scene;
        obj.scale.set(0.02, 0.02, 0.02);
        // obj.scale.set(0.5, 0.5, 0.5)

        obj.traverse((o) => {
            if(o.isMesh) {
                o.material.map = text;
            }
        })

        setupGui();


        mixer = new THREE.AnimationMixer( obj );
        mixer.clipAction( gltf.animations[ 0 ] ).play();

        scene.add(obj);
    })

    window.addEventListener( 'resize', onWindowResize, false );
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

        lx: 0.32,
        ly: 0.39,
        lz: 0.7,
        newTess: 15,
        bottom: true,
        lid: true,
        body: true,
        fitLid: false,
        nonblinn: false,
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

}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    renderer.setSize( window.innerWidth, window.innerHeight );

    animate();
}

function render() {
    
    // diffuseColor.multiplyScalar( effectController.kd );
    flatMaterial.color.copy( diffuseColor );
    gouraudMaterial.color.copy( diffuseColor );
    

    // specularColor.multiplyScalar( effectController.ks );

    // Ambient's actually controlled by the light for this demo
    ambientLight.color.setHSL( effectController.hue, effectController.saturation, effectController.lightness * effectController.ka );

    light.position.set( effectController.lx, effectController.ly, effectController.lz );
    light.color.setHSL( effectController.lhue, effectController.lsaturation, effectController.llightness );


    renderer.render(scene, camera);
}

function animate() {
    requestAnimationFrame( animate );

    if ( mixer ) {
        mixer.update( clock.getDelta() );
    }

    render();
}

init()
animate();