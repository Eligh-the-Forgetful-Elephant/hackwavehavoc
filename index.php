<?php
/* Template Name: Custom Page Template */
get_header(); // Include the theme's header
?>

<!-- Top Navigation -->
<!-- Optional navigation bar, can be skipped -->
<!--<div class="top-nav">
    <div class="nav-item">PELICCESOFT</div>
    <div class="nav-item">MIOCE</div>
    <div class="nav-item">ANNUCES</div>
    <div class="nav-item">DOCUMENT</div>
</div>-->

<!-- Main Page Layout (Left Column, Center Section, Right Column) -->
<div class="page-grid-container">

    <!-- Left Column -->
    <div class="left-column">
        <div class="left-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hackwave-havoc.png" alt="Hackwave Havoc">
        </div>
        <div class="left-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image4.png" alt="Character Icon">
        </div>
    </div>

    <!-- Center Section -->
    <div class="center-section">
        <video class="glitch-video" id="background-video" autoplay loop muted playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/your-video.mp4" type="video/mp4">
        </video>
    </div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('background-video');
    if (video) {
        video.play().catch(error => {
            console.log('Autoplay failed:', error);
        });
    }
});
</script>

    <!-- Right Column -->
    <div class="right-column">
        <div class="right-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/equalizer-icon.png" alt="Equalizer Icon">
        </div>
        <div class="right-item">
            <canvas id="equalizer-canvas"></canvas> <!-- Equalizer Placeholder -->
        </div>
    </div>
    
    <!-- Bottom Section (Below the Glitch Video) -->
    <div class="bottom-section">
        <div class="button-frame">
            <div class="thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events.png" alt="Thumbnail 1">
            </div>
            <button class="neon-button green">EVENTS</button>
        </div>

        <div class="button-frame">
            <div class="thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/community.png" alt="Thumbnail 2">
            </div>
            <button class="neon-button pink">ABOUT US</button>
        </div>

        <div class="button-frame">
            <div class="thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus.png" alt="Thumbnail 3">
            </div>
            <button class="neon-button green">COMMUNITY</button>
        </div>

        <div class="button-frame">
            <div class="thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flyer.png" alt="Thumbnail 4">
            </div>
            <button class="neon-button pink">BLOG</button>
        </div>
    </div> <!-- End of Bottom Section -->

</div> <!-- End of Page Grid Layout -->

<?php get_footer(); // Include the theme's footer ?>

