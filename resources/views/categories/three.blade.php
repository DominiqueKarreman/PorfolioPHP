@extends('layouts.app')

@section('content')
    <div id="canvas-container"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script>
        // Set up the scene, camera, and renderer
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 5;

        const renderer = new THREE.WebGLRenderer({ antialias: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.getElementById('canvas-container').appendChild(renderer.domElement);

        // Create the shape and add it to the scene
        const geometry = new THREE.TorusKnotGeometry(1, 0.5, 100, 16);
        const material = new THREE.MeshStandardMaterial({ color: 0xffffff });
        const shape = new THREE.Mesh(geometry, material);
        scene.add(shape);

        // Add ambient and point lighting
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
        scene.add(ambientLight);

        const pointLight = new THREE.PointLight(0xffffff, 1);
        pointLight.position.set(5, 5, 5);
        scene.add(pointLight);

        // Add orbit controls to the camera
 

        // Animate the shape
        const animate = function () {
            requestAnimationFrame(animate);

            shape.rotation.x += 0.001;
            shape.rotation.y += 0.001;

            renderer.render(scene, camera);
        };

        animate();
    </script>
@endsection