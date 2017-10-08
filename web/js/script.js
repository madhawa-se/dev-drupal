
function initAnimation(){
    var canvasDiv = document.getElementById('particle-canvas');
    var options = {
        particleColor: '#fff',
        background: 'linear-gradient(45deg, #3c1942 15%, #5f4d93 85%)',
        interactive: true,
        speed: 'medium',
        density: 'low'
    };
    var particleCanvas = new ParticleNetwork(canvasDiv, options);
}