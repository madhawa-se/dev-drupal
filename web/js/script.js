
function initAnimation(){
    var canvasDiv = document.getElementById('particle-canvas');
    var options = {
        particleColor: '#fff',
        background: 'transparent',
        interactive: true,
        speed: 'medium',
        density: 'low'
    };
    var particleCanvas = new ParticleNetwork(canvasDiv, options);
}