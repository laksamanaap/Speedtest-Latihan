const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

canvas.style.background = "green";

// Define the properties of the circular figure
const circle = {
    x: 50, // Initial X position
    y: canvas.height / 2, // Y position (centered vertically)
    radius: 20, // Radius of the circle
    speed: 2, // Speed of movement
};



function drawCircle() {
    // Clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw circular figure
    ctx.beginPath();
    ctx.arc(circle.x, circle.y, circle.radius, 0, Math.PI * 2);
    ctx.fillStyle = 'white'; 
    ctx.fill();
    ctx.closePath();

    // Update the X position for the next frame
    circle.x += circle.speed;

    // Check if the circle has moved out of the canvas
    if (circle.x > canvas.width + circle.radius) {
        circle.x = -circle.radius; 
    }

    requestAnimationFrame(drawCircle);
}

// Start the animation loop
drawCircle();