/* Global Styling */
body {
    background-color: #000000; /* True black */
    color: #00ff00;
    font-family: 'VT323', monospace;
    height: 100%;
    margin: 0;
    text-align: center;
}

/* Layout of the Page */
.page-container {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

.left-column, .right-column {
    width: 20%;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 600px; /* Extend columns down */
}

/* Hackwave Havoc Icon Styling */
.left-item img {
    width: 100%; /* Allow responsive scaling */
    max-width: 200px; /* Set a max width to prevent it from being too large */
    height: auto; /* Maintain aspect ratio */
    margin-bottom: 20px; /* Add spacing between the image and text */
}

/* Center Section */
.center-section {
    width: 60%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Glitch Video */
.glitch-video {
    width: 100%;
    max-width: 600px;
    height: auto;
}

/* Bottom Section Styling */
.bottom-section {
    display: flex;
    justify-content: space-around;
    padding: 20px;
    margin-top: 40px; /* Add spacing to push down */
}

.button-frame {
    text-align: center;
}

.thumbnail {
    margin-bottom: 10px; /* Space between thumbnail and button */
    width: 160px;
    height: 90px;
    border: 2px solid #00ff00;
}

.thumbnail img, .thumbnail video {
    width: 100%;
    height: 100%;
}

/* Neon Button Styling */
.neon-button {
    padding: 15px 30px;
    font-size: 16px;
    color: #00ff00;
    background-color: transparent;
    border: 2px solid #00ff00;
    text-transform: uppercase;
    text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00;
    cursor: pointer;
    transition: all 0.3s ease;
}

.neon-button:hover {
    background-color: #00ff00;
    color: #111;
    box-shadow: 0 0 20px #00ff00;
}

/* Equalizer Canvas Styling */
#equalizer-canvas {
    width: 100px;
    height: 100px;
    background-color: #111;
    border: 2px solid #00ff00;
}

/* Mobile Styles for screens up to 768px */
@media (max-width: 768px) {
    .page-container {
        flex-direction: column;
        align-items: center;
    }

    .left-column, .right-column, .center-section {
        width: 100%;
        margin-bottom: 20px;
    }

    .bottom-section {
        flex-direction: column;
        align-items: center;
    }

    .neon-button {
        width: 80%;
    }

    .thumbnail {
        width: 100%;
        max-width: 300px;
    }

    .left-item img {
        max-width: 150px; /* Smaller max-width on mobile */
    }
}
});
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('background-video');
    if (video) {
        video.play().catch(error => {
            console.log('Autoplay failed:', error);
        });
    }
});

