import *as THREE from '../three/three.module.js'
import {GLTFLoader} from '../three/GLTFLoader.js'
import {OrbitControls} from '../three/OrbitControls.js'

var camera, scene, renderer;
var mixer, clock;

function init() {
    scene = new THREE.Scene();
    scene.background = new THREE.Color('white');
    
    camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
    camera.position.set(5, 5, 5);

    renderer = new THREE.WebGLRenderer();
    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );

    var light = new THREE.AmbientLight( 0x404040 ); // soft white light
    scene.add( light );

    var controls = new OrbitControls( camera, renderer.domElement);

    clock = new THREE.Clock();

    var textureLoader = new THREE.TextureLoader();
    var text = textureLoader.load('../../data/12.jpg');
    // map.encoding = THREE.sRGBEncoding;
    text.flipY = false;

    var loader = new GLTFLoader();
    loader.load('../../data/test1.1.glb', (gltf) => {
        var obj = gltf.scene;
        // obj.scale.set(0.02, 0.02, 0.02);
        obj.scale.set(0.5, 0.5, 0.5)

        obj.traverse((o) => {
            if(o.isMesh) {
                o.material.map = text;
            }
        })

        console.log(gltf)
        console.log(obj)

        mixer = new THREE.AnimationMixer( obj );
        mixer.clipAction( gltf.animations[ 0 ] ).play();

        scene.add(obj);
    })

    window.addEventListener( 'resize', onWindowResize, false );
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    renderer.setSize( window.innerWidth, window.innerHeight );

    animate();
}

function animate() {
    requestAnimationFrame( animate );

    if ( mixer ) {
        mixer.update( clock.getDelta() );
    }

    renderer.render( scene, camera );
}

init()
animate();